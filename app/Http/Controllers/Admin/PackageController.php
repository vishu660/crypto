<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'investment_amount' => 'required|numeric',
            'roi_percent' => 'required|numeric',
            'validity_days' => 'required|integer',
            'direct_bonus_percent' => 'required|numeric',
            'ibot_investment' => 'required|numeric',
            'type_of_investment_days' => 'required|in:daily,weekly,monthly',
            'is_active' => 'nullable|boolean',
            'daily_days' => 'nullable|array',
            'weekly_day' => 'nullable|string',
            'monthly_date' => 'nullable|integer',
        ]);
    
        $package = new Package();
        $package->name = $validated['name'];
        $package->investment_amount = $validated['investment_amount'];
        $package->roi_percent = $validated['roi_percent'];
        $package->validity_days = $validated['validity_days'];
        $package->direct_bonus_percent = $validated['direct_bonus_percent'];
        $package->ibot_investment = $validated['ibot_investment'];
        $package->type_of_investment_days = $validated['type_of_investment_days'];
        $package->is_active = $request->has('is_active') ? 1 : 0;
    
        // Based on type of investment, assign extra values
        if ($validated['type_of_investment_days'] === 'daily') {
            $package->daily_days = $request->daily_days ?? [];
        } elseif ($validated['type_of_investment_days'] === 'weekly') {
            $package->weekly_day = $validated['weekly_day'];
        } elseif ($validated['type_of_investment_days'] === 'monthly') {
            $package->monthly_date = $validated['monthly_date'];
        }
    
        $package->save();
    
        return redirect()->back()->with('success', 'Package created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
