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
    public function emailInbox(Request $request)
{
    $user = auth()->user();

    // Admin user (either role = 'admin' OR id = 1)
    $adminUser = \App\Models\User::where('role', 'admin')->orWhere('id', 1)->first();

    // Selected filter from request (default = all)
    $filter = $request->get('filter', 'all');

    // Only messages sent by admin
    $query = \App\Models\Message::where('receiver_id', $user->id)
                                ->where('sender_id', $adminUser->id);

    if ($filter === 'today') {
        $query->whereDate('created_at', now());
    }

    // No need to handle 'daily' here — handled in Blade
    $messages = $query->latest()->paginate(10);

    return view('user.pages.email', compact('messages', 'filter'));
}

    
    
    
}
