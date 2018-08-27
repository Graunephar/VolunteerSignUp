<?php

namespace VolunteerSignUp\Http\Controllers;

use Faker\Provider\nl_BE\Person;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use VolunteerSignUp\Http\Controllers\EmailController;


class VolunteerController extends Controller
{

    public function getIndex()
    {

    }

    public function postIndex()
    {

    }

    public function create() {
        return view('pages.signup');
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'phone' => 'required|max:8|min:8',
            'name' => 'required|min:5',
            'email' => 'required|email',
            'group' => 'required'
        ]);


        $person = new \VolunteerSignUp\Person;

        $person->name = $request->name;
        $person->phone = $request->phone;
        $person->email= $request->email;
        $person->group = $request->group;

        $person->comments = $request->comments;
        $person->hash = $this->create_hash($request->name, $request->email);


        $firstnight = $request->firstnight;
        $secondnight= $request->secondnight;

        if ($firstnight === NULL) {
            $firstnight = false;
        }

        if ($secondnight === NULL) {
            $secondnight = false;
        }

        $person->firstnight = $firstnight;
        $person->secondnight = $secondnight;


            error_log('Lol HASH: ' . $person->hash);
        error_log('Lol ID: ' . $person->id);


        $person->timeslots = '{ "model": "car" }';

        $comments = $request->comments;

        if ($comments === NULL) {
            $comments = "EMPTY";
        }

        $person->comments = $comments;

        $person->save();


        $mail = new EmailController();
        $mail->sendEmail($person);


        return redirect()->back()->with('message', __('messages.success_message'));

    }

    private function create_hash($name, $email)
    {

        $a = Hash::make($name);
        $b = Hash::make($email);

        $res = Hash::make($a . "|" . strlen($a) . "|" . $b . "|" . strlen($b));

        return $res;
    }
}
