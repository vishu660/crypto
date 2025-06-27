<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{

    public function create()
{
    $userId = Auth::id();
    $inboxCount = Message::where('receiver_id', $userId)->count();
    $sentCount = Message::where('sender_id', $userId)->count();

    return view('backend.pages.mail.compose', compact('inboxCount', 'sentCount'));
}
    // Inbox mails
    public function inbox()
    {
        $userId = Auth::id();
        $inboxCount = Message::where('receiver_id', $userId)->count();
        $sentCount = Message::where('sender_id', $userId)->count();
    
        $messages = Message::where('receiver_id', $userId)->latest()->paginate(10);
        return view('backend.pages.mail.inbox', compact('messages', 'inboxCount', 'sentCount'));
    }
    

    // Sent mails
    public function sent()
    {
        $userId = Auth::id();
        $inboxCount = Message::where('receiver_id', $userId)->count();
        $sentCount = Message::where('sender_id', $userId)->count();
    
        $messages = Message::where('sender_id', $userId)->latest()->paginate(10);
        return view('backend.pages.mail.sent', compact('messages', 'inboxCount', 'sentCount'));
    }

    // Store new message
    public function store(Request $request)
    {
        $request->validate([
            'referral_id' => 'required|exists:users,referral_id',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        $receiver = User::where('referral_id', $request->referral_id)->first();

    
        if (!$receiver) {
            return back()->with('error', 'Receiver not found!');
        }
    
        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $receiver->id,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
    
        return back()->with('success', 'Message sent successfully!');
    }
    
}
