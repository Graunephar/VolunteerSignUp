<?php

namespace VolunteerSignUp\Http\Controllers;

use Illuminate\Http\Request;
use VolunteerSignUp\Person;

class PersonController extends Controller
{
    public function show($id)
    {
        $person = Person::find($id);
        return view('people.show', array('person' => $person));
    }
}
