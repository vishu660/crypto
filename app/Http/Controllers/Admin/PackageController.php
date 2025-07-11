<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\UserPackage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->paginate(10);
        // Create an empty package object for the form
        $emptyPackage = new Package();
        return view('backend.pages.packagedetails', compact('packages', 'emptyPackage'));
    }

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
                'is_show_active' => 'nullable|boolean',
                'enableBreakDown' => 'nullable|boolean',
                'breakdown_last_date' => 'nullable|date',
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
                'is_show_active' => $request->has('is_show_active') ? 1 : 0,
                'enableBreakDown' => $request->has('enableBreakDown') ? 1 : 0,
                'breakdown_last_date' => $request->breakdown_last_date,
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

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('backend.pages.packageedit', compact('package'));
    }

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
            'is_show_active' => 'nullable|boolean',
            'enableBreakDown' => 'nullable|boolean',
            'breakdown_last_date' => 'nullable|date',
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
            'is_show_active' => $request->has('is_show_active') ? 1 : 0,
            'enableBreakDown' => $request->has('enableBreakDown') ? 1 : 0,
            'breakdown_last_date' => $request->breakdown_last_date,
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

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('admin-package-details')->with('success', 'Package deleted successfully.');
    }

    public function show($id)
    {
        $package = Package::findOrFail($id);
        $user = auth()->user();

        $userPackage = $user->userPackages()->where('package_id', $id)->first();

        if (!$userPackage) {
            return back()->with('error', 'You have not purchased this package.');
        }

        if (!$userPackage->is_breakdown_done) {
            $userPackage->is_breakdown_done = true;
            $userPackage->save();
        }

        $userPackages = $user->userPackages->keyBy('package_id');
        $packages = Package::all();

        return view('user.pages.plans', compact('packages', 'userPackages'));
    }

    public function buy($id)
    {
        $user = Auth::user();
        $package = Package::findOrFail($id);

        $alreadyBought = $user->userPackages()->where('package_id', $id)->exists();

        if ($alreadyBought) {
            return back()->with('error', 'You have already purchased this package.');
        }

        UserPackage::create([
            'user_id' => $user->id,
            'package_id' => $package->id,
            'investment_amount' => $package->investment_amount,
            'status' => 'approved',
            'is_breakdown_done' => false,
        ]);

        return back()->with('success', 'Package purchased successfully.');
    }

    public function buyWithCode(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'secret_code' => 'required|string|min:6|max:20',
        ]);

        $epin = Epin::where('code', $request->secret_code)
            ->where('status', 'active')
            ->where(function ($query) {
                $query->whereNull('expiry_date')->orWhere('expiry_date', '>=', now());
            })
            ->first();

        if (!$epin) {
            return back()->with('error', 'Invalid, expired, or already used E-pin.');
        }

        $user = auth()->user();
        $package = Package::findOrFail($request->package_id);

        if (UserPackage::where('user_id', $user->id)->where('package_id', $package->id)->exists()) {
            return back()->with('error', 'Package already purchased or requested.');
        }

        try {
            DB::beginTransaction();

            $startDate = Carbon::today();
            $endDate = $startDate->copy()->addDays($package->validity_days - 1);

            $roiDates = RoiHelper::generateRoiDates(
                $startDate,
                $package->validity_days,
                $package->type_of_investment_days,
                [
                    'daily_days' => $package->daily_days,
                    'weekly_day' => $package->weekly_day,
                    'monthly_date' => $package->monthly_date,
                ]
            );

            UserPackage::create([
                'user_id' => $user->id,
                'package_id' => $package->id,
                'start_date' => $startDate->toDateString(),
                'end_date' => $endDate->toDateString(),
                'roi_dates' => json_encode($roiDates),
                'total_roi_given' => 0,
                'is_active' => true,
                'source' => 'epin',
                'amount' => $package->investment_amount,
            ]);

            Transaction::create([
                'user_id' => $user->id,
                'amount' => $package->investment_amount,
                'type' => 'package_buy',
                'status' => 'success',
                'message' => 'Package bought using E-PIN',
            ]);

            $epin->status = 'used';
            $epin->user_id = $user->id;
            $epin->used_at = now();
            $epin->save();

            DB::commit();
            return redirect()->route('user')->with('success', 'Package bought successfully using E-pin.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('BuyWithCode error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    public function buyWithRequest(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
        ]);

        $user = auth()->user();
        $package = Package::findOrFail($request->package_id);

        if (UserPackage::where('user_id', $user->id)->where('package_id', $package->id)->exists()) {
            return back()->with('error', 'Package already purchased or requested.');
        }

        UserPackage::create([
            'user_id' => $user->id,
            'package_id' => $package->id,
            'amount' => $package->investment_amount,
            'roi_dates' => [],
            'total_roi_given' => 0,
            'is_active' => false,
            'source' => 'admin',
        ]);

        Transaction::create([
            'user_id' => $user->id,
            'amount' => $package->investment_amount,
            'type' => 'debit',
            'purpose_of_payment' => 'buy_plan_one',
            'status' => 'pending',
            'message' => 'Buy request sent to admin.',
            'currency' => 'INR',
            'gateway' => 'admin',
        ]);

        return redirect()->route('user')->with('success', 'Buy request sent to admin.');
    }
}