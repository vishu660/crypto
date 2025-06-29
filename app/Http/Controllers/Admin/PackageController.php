<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;
use App\Models\UserPackage;
use App\Helpers\RoiHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::latest()->paginate(10);
        return view('backend.pages.packagedetails', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('Package Store Request Data:', $request->all());
    
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
                'daily_days' => 'nullable|array',
                'daily_days.*' => 'string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                'weekly_day' => 'nullable|string|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
                'monthly_date' => 'nullable|integer|min:1|max:31',
            ]);
    
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
    
            $packageData = [
                'name' => $validated['name'],
                'investment_amount' => $validated['investment_amount'],
                'roi_percent' => $validated['roi_percent'],
                'validity_days' => $validated['validity_days'],
                'direct_bonus_percent' => $validated['direct_bonus_percent'],
                'referral_income' => $validated['referral_income'],
                'type_of_investment_days' => $validated['type_of_investment_days'],
                'is_active' => $request->has('is_active') ? 1 : 0,
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
    
            $package = Package::create($packageData);
            Log::info('Package created successfully:', ['id' => $package->id]);
    
            DB::commit();
            return redirect()->route('admin-package-details')->with('success', 'Package created successfully.');
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create package: ' . $e->getMessage())->withInput();
        }
    }
    

    /** Remaining methods: edit, update, destroy, toggleStatus — same as before */
}
