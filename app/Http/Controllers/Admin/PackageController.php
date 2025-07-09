<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PackageController extends Controller
{
    // Show all packages (for admin backend)
    public function index()
    {
        $packages = Package::latest()->paginate(10);
        return view('backend.pages.packagedetails', compact('packages'));
    }

    // Store new package
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255|unique:packages,name',
                'investment_amount' => 'required|numeric|min:0',
                'roi_percent' => 'required|numeric|min:0|max:100',
                'validity_days' => 'required|integer|min:1',
                'referral_income' => 'required|numeric',
                'referral_show_income' => 'nullable|numeric',
                'type_of_investment_days' => 'required|in:daily,weekly,monthly',
                'is_active' => 'nullable|boolean',
                'daily_days' => 'nullable|array',
                'daily_days.*' => 'string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                'weekly_day' => 'nullable|string|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
                'monthly_date' => 'nullable|integer|min:1|max:31',
            ]);

            if ($validated['type_of_investment_days'] === 'daily' && empty($request->daily_days)) {
                return back()->withErrors(['daily_days' => 'Please select at least one day for daily investment.'])->withInput();
            }

            if ($validated['type_of_investment_days'] === 'weekly' && empty($request->weekly_day)) {
                return back()->withErrors(['weekly_day' => 'Please select a day for weekly investment.'])->withInput();
            }

            if ($validated['type_of_investment_days'] === 'monthly' && empty($request->monthly_date)) {
                return back()->withErrors(['monthly_date' => 'Please select a date for monthly investment.'])->withInput();
            }

            DB::beginTransaction();

            $packageData = [
                'name' => $validated['name'],
                'investment_amount' => $validated['investment_amount'],
                'roi_percent' => $validated['roi_percent'],
                'validity_days' => $validated['validity_days'],
                'referral_income' => $validated['referral_income'],
                'referral_show_income' => $request->referral_show_income ?? null,
                'type_of_investment_days' => $validated['type_of_investment_days'],
                'is_active' => $request->has('is_active') ? 1 : 0,
                'enableBreackDown' => $request->has('enableBreackDown') ? 1 : 0,
                'daily_days' => null,
                'weekly_day' => null,
                'monthly_date' => null,
            ];

            switch ($validated['type_of_investment_days']) {
                case 'daily':
                    $packageData['daily_days'] = $request->daily_days ?? [];
                    break;
                case 'weekly':
                    $packageData['weekly_day'] = $request->weekly_day;
                    break;
                case 'monthly':
                    $packageData['monthly_date'] = $request->monthly_date;
                    break;
            }

            Package::create($packageData);
            DB::commit();

            return redirect()->route('admin-package-details')->with('success', 'Package created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Failed to create package: ' . $e->getMessage())->withInput();
        }
    }

    // Edit a package
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('backend.pages.packageedit', compact('package'));
    }

    // Update existing package
    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:packages,name,' . $id,
            'investment_amount' => 'required|numeric|min:0',
            'roi_percent' => 'required|numeric|min:0|max:100',
            'validity_days' => 'required|integer|min:1',
            'referral_income' => 'required|numeric',
            'referral_show_income' => 'nullable|numeric',
            'type_of_investment_days' => 'required|in:daily,weekly,monthly',
            'is_active' => 'nullable|boolean',
            'daily_days' => 'nullable|array',
            'daily_days.*' => 'string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'weekly_day' => 'nullable|string|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
            'monthly_date' => 'nullable|integer|min:1|max:31',
        ]);

        if ($validated['type_of_investment_days'] === 'daily' && empty($request->daily_days)) {
            return back()->withErrors(['daily_days' => 'Please select at least one day for daily investment.'])->withInput();
        }

        if ($validated['type_of_investment_days'] === 'weekly' && empty($request->weekly_day)) {
            return back()->withErrors(['weekly_day' => 'Please select a day for weekly investment.'])->withInput();
        }

        if ($validated['type_of_investment_days'] === 'monthly' && empty($request->monthly_date)) {
            return back()->withErrors(['monthly_date' => 'Please select a date for monthly investment.'])->withInput();
        }

        $package->update([
            'name' => $validated['name'],
            'investment_amount' => $validated['investment_amount'],
            'roi_percent' => $validated['roi_percent'],
            'validity_days' => $validated['validity_days'],
            'referral_income' => $validated['referral_income'],
            'referral_show_income' => $request->referral_show_income ?? null,
            'type_of_investment_days' => $validated['type_of_investment_days'],
            'is_active' => $request->has('is_active') ? 1 : 0,
            'enableBreackDown' => $request->has('enableBreackDown') ? 1 : 0,
            'daily_days' => null,
            'weekly_day' => null,
            'monthly_date' => null,
        ]);

        switch ($validated['type_of_investment_days']) {
            case 'daily':
                $package->daily_days = $request->daily_days ?? [];
                break;
            case 'weekly':
                $package->weekly_day = $request->weekly_day;
                break;
            case 'monthly':
                $package->monthly_date = $request->monthly_date;
                break;
        }

        $package->save();

        return redirect()->route('admin-package-details')->with('success', 'Package updated successfully.');
    }

    // Delete a package
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('admin-package-details')->with('success', 'Package deleted successfully.');
    }

    // Show a single package (for frontend - user view)
   

    // Optional: All active packages for user listing
  // App\Http\Controllers\User\BreakdownController.php

 
  public function show($id)
{
    $package = Package::findOrFail($id);
    $user = auth()->user();

    // Get the user's package record
    $userPackage = $user->userPackages()->where('package_id', $id)->first();

    if (!$userPackage) {
        return back()->with('error', 'You have not purchased this package.');
    }

    // Mark breakdown as done if not already
    if (!$userPackage->is_breakdown_done) {
        $userPackage->is_breakdown_done = true;
        $userPackage->save();
    }

    // Pass all userPackages to the view for badge logic
    $userPackages = $user->userPackages->keyBy('package_id');

    // Pass all packages for the plans view
    $packages = Package::all();

    return view('user.pages.plans', compact('packages', 'userPackages'));
}


}
