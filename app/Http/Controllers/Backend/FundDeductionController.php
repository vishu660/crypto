<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FundDeductionController extends Controller
{
    public function deductFund()
    {
        return view('backend.pages.deductfund');
    }

    public function deductionReport()
    {
        // Here you can add logic to fetch deduction data from database
        $deductions = []; // Replace with actual database query
        return view('backend.pages.deductionreport', compact('deductions'));
    }

    public function allDeductions()
    {
        return $this->deductionReport();
    }

    public function manualDeduction()
    {
        return $this->deductFund();
    }

    public function storeDeduction(Request $request)
    {
        // Validate the request
        $request->validate([
            'member_id' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'wallet' => 'required|string',
            'remark' => 'required|string|max:255',
        ]);

        // Here you would add logic to:
        // 1. Check if member exists
        // 2. Check if member has sufficient balance
        // 3. Deduct the amount from the specified wallet
        // 4. Log the transaction
        // 5. Send notification if needed

        // For now, just redirect back with success message
        return redirect()->back()->with('success', 'Fund deduction completed successfully!');
    }

    public function getDeductionData(Request $request)
    {
        // This method can be used for AJAX requests to get deduction data
        // You can add filtering, pagination, etc.
        
        $deductions = []; // Replace with actual database query
        
        return response()->json([
            'success' => true,
            'data' => $deductions
        ]);
    }
} 