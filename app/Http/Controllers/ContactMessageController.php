<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
class ContactMessageController extends Controller
{
    
     public function store(Request $request)
    {
        // تحقق من صحة البيانات
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);


          ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح!');
    }

    public function index()
    {
        $messages = ContactMessage::all();
        return view('dashboard.messages.index', compact('messages'));
    }
}

}
