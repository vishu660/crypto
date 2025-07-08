<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FundRequest;
use App\Models\Wallet;



class FundRequestController extends Controller
{
    public function allFundRequests()
    {
        $fundRequests = FundRequest::with('user')->latest()->get();
        return view('backend.pages.all_fund_requests', compact('fundRequests'));
    }

   
    public function approve($id)
    {
        $request = FundRequest::findOrFail($id);
        $request->status = 'approved';
        $request->save();
    
        // Wallet में पैसे जोड़ें (credit)
        Wallet::create([
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'type' => 'credit',
            'remark' => 'Fund Approved by Admin',
        ]);
    
        return back()->with('success', 'Fund request approved and amount credited.');
    }

public function reject($id)
{
    $request = FundRequest::findOrFail($id);
    $request->status = 'rejected';
    $request->save();

    return back()->with('success', 'Fund request rejected.');
}

}
