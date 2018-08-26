<?php

namespace VolunteerSignUp\Http\Controllers;

use Faker\Provider\nl_BE\Person;
use Illuminate\Http\Request;
use Carbon\Carbon;


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
        $person = new \VolunteerSignUp\Person;

        $person->name = $request->name;
        $person->phone = $request->phone;
        $person->email= $request->email;
        $person->group = $request->group;

        $person->comments = $request->comments;
        $person->id = 42;
        $person->timeslots = '{ "model": "car" }';
        $person->save();
    }
}
