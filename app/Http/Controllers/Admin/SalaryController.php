<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\SeriesLevel;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
   
    public function index()
    {
        $users = User::where('role', 'user')
            ->with(['wallets' => function($q) {
                $q->where('type', 'credit')->where('source', 'roi');
            }])->get();
    
        $series_levels = \App\Models\SeriesLevel::orderBy('level')->get();
    
        return view('backend.pages.show', compact('users', 'series_levels'));
    }

    public function update(Request $request)
    {
        foreach ($request->amounts as $level => $amount) {
            $period = $request->period_months[$level] ?? null;
    
            // Only update if both amount and period are provided
            if (!is_null($amount) && !is_null($period)) {
                \App\Models\SeriesLevel::updateOrCreate(
                    ['level' => $level],
                    ['amount' => $amount, 'period_months' => $period]
                );
            }
        }
    
        return redirect()->back()->with('success', 'Series Salary Updated Successfully!');
    }
    
    public function updateLevel(Request $request, User $user)
{
    $request->validate([
        'series_level' => 'required|integer|min:0|max:5',
    ]);

    $user->series_level = $request->series_level;
    $user->save();

    return redirect()->back()->with('success', 'User Series Level Updated!');
}

    
    
}
