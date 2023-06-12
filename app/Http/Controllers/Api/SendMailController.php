<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SendMailWhenClientContactJob;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        dispatch(new SendMailWhenClientContactJob($contact));

        return response()->json([
            'statuc' => 'success',
            'message' => 'Your message has been sent successfully',
        ]);
    }
}
