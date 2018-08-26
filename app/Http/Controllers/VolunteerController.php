<?php

namespace VolunteerSignUp\Http\Controllers;

use Illuminate\Http\Request;

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
}
