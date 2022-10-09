<?php

namespace App\Http\Controllers;

use App\Mail\NewMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function privacy_policy()
    {
        return view('home.privacy_policy');
    }

    public function send_message(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        Mail::to($validated['email'])->bcc('biuro@nowewolo.pl')->send(new NewMessage($validated));

        return redirect()->route('home.index', '#contact')->with(['sent_message' => true]);
    }
}
