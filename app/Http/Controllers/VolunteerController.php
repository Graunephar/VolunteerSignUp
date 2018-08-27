<?php

namespace VolunteerSignUp\Http\Controllers;

use Faker\Provider\nl_BE\Person;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;



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
        $person->id = $this->create_hash($request->name, $request->email);

        $person->timeslots = '{ "model": "car" }';

        $comments = $request->comments;

        if ($comments === NULL) {
            $comments = "EMPTY";
        }

        $person->comments = $comments;

        $person->save();

        return redirect()->back()->with('message', 'Dine oplysninger er blevet gemt. Vi har sendt dig en email med yderligere informationer.');

    }

    private function create_hash($name, $email)
    {

        $a = Hash::make($name);
        $b = Hash::make($email);

        return $a . "|" . strlen($a) . "|" . $b . "|" . strlen($b);
    }
}
