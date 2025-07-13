<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index() {
        $addresses = Address::all();
        // Ye tera blade file ka path hai => resources/views/backend/pages/usdt.blade.php
        return view('backend.pages.usdt', compact('addresses'));
    }

    public function create() {
        return view('admin.addresses.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'address_key' => 'required',
        ]);
    
        Address::create([
            'name' => $request->name,
            'address_key' => $request->address_key,
            'user_id' => auth()->id(), // ya $request->user_id agar admin kisi aur user ke liye add kar raha hai
        ]);
    
        return redirect()->route('admin.addresses.index')->with('success', 'Address Added');
    }

    public function edit(Address $address) {
        return view('admin.addresses.edit', compact('address'));
    }

    public function update(Request $request, Address $address) {
        $request->validate([
            'name' => 'required',
            'address_key' => 'required',
        ]);
    
        $address->update($request->only(['name', 'address_key']));
    
        return redirect()->route('admin.addresses.index')->with('success', 'Address Updated');
    }

    public function destroy(Address $address) {
        $address->delete();
        return redirect()->route('admin.addresses.index')->with('success', 'Address Deleted');
    }
}
