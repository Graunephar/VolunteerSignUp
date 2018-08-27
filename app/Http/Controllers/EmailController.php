<?php

namespace VolunteerSignUp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Mail;
use VolunteerSignUp\Person;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    public function sendEmail($person)
    {


        $data = [];
        $data['receiever'] = $person;
        $data['from_name'] = Config::get('mail.from.name');
        $data['from_address'] = Config::get('mail.from.address');

        Mail::send('emails.newsignup', ['person' => $person], function ($m) use ($data) {
            $m->from($data['from_address'], $data['from_name']);

            $m->to($data['receiever']->email, $data['receiever']->name)->subject(__('messages.email_subject'));
        });
    }

}
