<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\Common\ContactMail;
use Illuminate\Support\Facades\Notification;

class ContactForm extends Controller
{
    public function create(Request $request)
    {
        Notification::route('mail', env('MAIL_FROM_ADDRESS', 'support@pursatnuts.com'))
        ->notify(new ContactMail(
            "Subject : " . $request['subject'],
            "From : " . $request['name'] . ", " . $request['email'] . ", " . $request['phone'],
            $request['body']
        ));

        return back();
    }
}
