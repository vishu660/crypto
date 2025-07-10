<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserUsdtController extends Controller
{
    public function createUsdtAddress()
    {
        $networks = Address::all();
        return view('user.pages.userusdt', compact('networks'));
    }

    public function storeUsdtAddress(Request $request)
    {
        $request->validate([
            'address_id' => 'required|exists:addresses,id',
            'usdt_address' => 'required',
            'qr_code' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $data = [
            'user_id' => auth()->id(),
            'address_id' => $request->address_id,
            'usdt_address' => $request->usdt_address,
            'is_approved' => false, // 👈 auto pending by default
        ];

        if ($request->hasFile('qr_code')) {
            $file = $request->file('qr_code');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/qr_codes', $filename); // storage/app/public/qr_codes
            $data['qr_code'] = 'qr_codes/' . $filename; // save relative path only
        }

        UserAddress::create($data);

        return redirect()->route('user.view.usdt')->with('success', 'USDT Address Saved!');
    }

    public function viewUsdtAddress()
    {
        $addresses = UserAddress::where('user_id', auth()->id())->with('address')->get();
        return view('user.pages.userusdt_list', compact('addresses'));
    }
}
