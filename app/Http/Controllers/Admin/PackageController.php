<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::with('referral')->latest()->paginate(10);
        
        return view('backend.pages.packagedetails', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255|unique:packages,name',
                'investment_amount' => 'required|numeric|min:0',
                'roi_percent' => 'required|numeric|min:0|max:100',
                'validity_days' => 'required|integer|min:1',
                'direct_bonus_percent' => 'required|numeric|min:0|max:100',
                'referral_income' => 'required|numeric',
                'type_of_investment_days' => 'required|in:daily,weekly,monthly',
                'is_active' => 'nullable|boolean',
                'daily_days' => 'nullable|array|min:1',
                'daily_days.*' => 'string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                'weekly_day' => 'nullable|string|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
                'monthly_date' => 'nullable|integer|min:1|max:31',
            ]);

            // Custom validation based on investment type
            if ($validated['type_of_investment_days'] === 'daily' && empty($request->daily_days)) {
                return redirect()->back()->withErrors(['daily_days' => 'Please select at least one day for daily investment.'])->withInput();
            }

            if ($validated['type_of_investment_days'] === 'weekly' && empty($request->weekly_day)) {
                return redirect()->back()->withErrors(['weekly_day' => 'Please select a day for weekly investment.'])->withInput();
            }

            if ($validated['type_of_investment_days'] === 'monthly' && empty($request->monthly_date)) {
                return redirect()->back()->withErrors(['monthly_date' => 'Please select a date for monthly investment.'])->withInput();
            }

            DB::beginTransaction();

            $package = new Package();
            $package->name = $validated['name'];
            $package->investment_amount = $validated['investment_amount'];
            $package->roi_percent = $validated['roi_percent'];
            $package->validity_days = $validated['validity_days'];
            $package->direct_bonus_percent = $validated['direct_bonus_percent'];
            $package->referral_income = $validated['referral_income'];
            $package->type_of_investment_days = $validated['type_of_investment_days'];
            $package->is_active = $request->has('is_active') ? 1 : 0;

            // Set type-specific fields and clear others
            $package->daily_days = null;
            $package->weekly_day = null;
            $package->monthly_date = null;

            switch ($validated['type_of_investment_days']) {
                case 'daily':
                    $package->daily_days = $request->daily_days ?? [];
                    break;
                case 'weekly':
                    $package->weekly_day = $validated['weekly_day'];
                    break;
                case 'monthly':
                    $package->monthly_date = $validated['monthly_date'];
                    break;
            }

            $package->save();

            DB::commit();

            return redirect()->route('backend.pages.packagedetails')->with('success', 'Package created successfully.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Package creation failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create package. Please try again.')->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $package = Package::findOrFail($id);
            return view('backend.pages.package_edit', compact('package'));
        } catch (\Exception $e) {
            return redirect()->route('backend.pages.packagedetails')->with('error', 'Package not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $package = Package::findOrFail($id);

            $validated = $request->validate([
                'name' => 'required|string|max:255|unique:packages,name,' . $id,
                'investment_amount' => 'required|numeric|min:0',
                'roi_percent' => 'required|numeric|min:0|max:100',
                'validity_days' => 'required|integer|min:1',
                'direct_bonus_percent' => 'required|numeric|min:0|max:100',
                'referral_income' => 'required|numeric',
                'type_of_investment_days' => 'required|in:daily,weekly,monthly',
                'is_active' => 'nullable|boolean',
                'daily_days' => 'nullable|array|min:1',
                'daily_days.*' => 'string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                'weekly_day' => 'nullable|string|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
                'monthly_date' => 'nullable|integer|min:1|max:31',
            ]);

            // Custom validation based on investment type
            if ($validated['type_of_investment_days'] === 'daily' && empty($request->daily_days)) {
                return redirect()->back()->withErrors(['daily_days' => 'Please select at least one day for daily investment.'])->withInput();
            }

            DB::beginTransaction();

            $package->fill($validated);
            $package->is_active = $request->has('is_active') ? 1 : 0;

            // Reset all type-specific fields
            $package->daily_days = null;
            $package->weekly_day = null;
            $package->monthly_date = null;

            // Set the appropriate field based on type
            switch ($validated['type_of_investment_days']) {
                case 'daily':
                    $package->daily_days = $request->daily_days ?? [];
                    break;
                case 'weekly':
                    $package->weekly_day = $validated['weekly_day'];
                    break;
                case 'monthly':
                    $package->monthly_date = $validated['monthly_date'];
                    break;
            }

            $package->save();

            DB::commit();

            return redirect()->route('admin-package-details')->with('success', 'Package updated successfully.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Package update failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update package. Please try again.')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $package = Package::findOrFail($id);
            
            // Check if package is being used in any investments/transactions
            // Add your business logic here if needed
            
            $package->delete();
            return redirect()->back()->with('success', 'Package deleted successfully.');
            
        } catch (\Exception $e) {
            Log::error('Package deletion failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete package. It may be in use.');
        }
    }

    /**
     * Toggle package status
     */
    public function toggleStatus($id)
    {
        try {
            $package = Package::findOrFail($id);
            $package->is_active = !$package->is_active;
            $package->save();

            $status = $package->is_active ? 'activated' : 'deactivated';
            return redirect()->back()->with('success', "Package {$status} successfully.");
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update package status.');
        }
    }
}