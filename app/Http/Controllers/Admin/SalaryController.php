<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SeriesLevel;
use App\Models\ReferralSetting;
use App\Models\Wallet;
use Carbon\Carbon;

class SalaryController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')
            ->with([
                'wallets' => function ($q) {
                    $q->where('type', 'credit')->where('source', 'roi');
                },
                'directReferrals'
            ])
            ->get();

        $series_levels = SeriesLevel::orderBy('level')->get();
        $referral_setting = ReferralSetting::first();

        return view('backend.pages.show', compact('users', 'series_levels', 'referral_setting'));
    }

    public function create()
    {
        return view('backend.pages.series_add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'level' => 'required|integer|min:1|unique:series_levels,level',
            'amount' => 'required|numeric|min:0',
            'period_months' => 'required|integer|min:1',
            'salary_amount' => 'required|numeric|min:0', // नया field
        ]);

        SeriesLevel::create($validated);

        return redirect()->route('admin.series.salary.index')->with('success', 'New Series Level added successfully!');
    }

    public function update(Request $request)
    {
        foreach ($request->amounts as $level => $amount) {
            $period = $request->period_months[$level] ?? null;
            $salary = $request->salary_amounts[$level] ?? null;

            if (!is_null($amount) && !is_null($period) && !is_null($salary)) {
                SeriesLevel::updateOrCreate(
                    ['level' => $level],
                    [
                        'amount' => $amount,
                        'period_months' => $period,
                        'salary_amount' => $salary
                    ]
                );
            }
        }

        return redirect()->back()->with('success', 'Series Salary Updated Successfully!');
    }

    public function updateLevel(Request $request, User $user)
    {
        $request->validate([
            'series_level' => 'required|integer|min:0|max:100',
        ]);

        $user->series_level = $request->series_level;
        $user->save();

        return redirect()->back()->with('success', 'User Series Level Updated!');
    }

    public function updateReferralSetting(Request $request)
    {
        $request->validate([
            'required_referrals' => 'required|integer|min:1',
            'qualification_time_hours' => 'required|integer|min:1',
        ]);

        $setting = ReferralSetting::first();
        if ($setting) {
            $setting->update([
                'required_referrals' => $request->required_referrals,
                'qualification_time_hours' => $request->qualification_time_hours,
            ]);
        } else {
            ReferralSetting::create([
                'required_referrals' => $request->required_referrals,
                'qualification_time_hours' => $request->qualification_time_hours,
            ]);
        }

        return redirect()->back()->with('success', 'Referral Qualification Setting Updated!');
    }

    /**
     * ✅ Distribute Salary to Users Based on Series Level
     */
    public function distributeSeriesSalaries()
    {
        $users = User::where('role', 'user')->whereNull('series_salary_paid_at')->get();

        foreach ($users as $user) {
            $level = $user->series_level;
            $seriesLevel = SeriesLevel::where('level', $level)->first();

            if ($seriesLevel && $seriesLevel->salary_amount > 0) {
                // 1. Credit to Wallet
                Wallet::create([
                    'user_id' => $user->id,
                    'amount' => $seriesLevel->salary_amount,
                    'type' => 'credit',
                    'source' => 'series_salary',
                    'message' => 'Series Salary (Level ' . $level . ') Credited',
                ]);

                // 2. Mark Paid
                $user->series_salary_paid_at = Carbon::now();
                $user->save();
            }
        }

        return redirect()->back()->with('success', 'Series Salaries Distributed Successfully!');
    }
}
