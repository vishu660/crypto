<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SeriesLevel;
use App\Models\ReferralSetting;

class SalaryController extends Controller
{
    /**
     * Show all users with their ROI wallet salary and current series level.
     */
    public function index()
    {
        $users = User::where('role', 'user')
            ->with([
                'wallets' => function ($q) {
                    $q->where('type', 'credit')->where('source', 'roi');
                },
                'directReferrals' // To show referral count and time
            ])
            ->get();

        $series_levels = SeriesLevel::orderBy('level')->get();
        $referral_setting = ReferralSetting::first();

        return view('backend.pages.show', compact('users', 'series_levels', 'referral_setting'));
    }

    /**
     * Show the create form for a new Series Level.
     */
    public function create()
    {
        return view('backend.pages.series_add');
    }

    /**
     * Store a new series level (admin-created).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'level' => 'required|integer|min:1|unique:series_levels,level',
            'amount' => 'required|numeric|min:0',
            'period_months' => 'required|integer|min:1',
        ]);

        SeriesLevel::create($validated);

        return redirect()->route('admin.series.salary.index')->with('success', 'New Series Level added successfully!');
    }

    /**
     * Update all Series Levels' amount and duration (bulk update from admin).
     */
    public function update(Request $request)
    {
        foreach ($request->amounts as $level => $amount) {
            $period = $request->period_months[$level] ?? null;

            if (!is_null($amount) && !is_null($period)) {
                SeriesLevel::updateOrCreate(
                    ['level' => $level],
                    ['amount' => $amount, 'period_months' => $period]
                );
            }
        }

        return redirect()->back()->with('success', 'Series Salary Updated Successfully!');
    }

    /**
     * Update individual user's series level.
     */
    public function updateLevel(Request $request, User $user)
    {
        $request->validate([
            'series_level' => 'required|integer|min:0|max:100',
        ]);

        $user->series_level = $request->series_level;
        $user->save();

        return redirect()->back()->with('success', 'User Series Level Updated!');
    }

    /**
     * Update Referral Qualification Setting (admin defined count & time).
     */
    public function updateReferralSetting(Request $request)
    {
        $request->validate([
            'required_referrals' => 'required|integer|min:1',
            'qualification_time_hours' => 'required|integer|min:1'
        ]);

        $setting = ReferralSetting::first();
        if ($setting) {
            $setting->update([
                'required_referrals' => $request->required_referrals,
                'qualification_time_hours' => $request->qualification_time_hours
            ]);
        } else {
            ReferralSetting::create([
                'required_referrals' => $request->required_referrals,
                'qualification_time_hours' => $request->qualification_time_hours
            ]);
        }

        return redirect()->back()->with('success', 'Referral Qualification Setting Updated!');
    }
}
