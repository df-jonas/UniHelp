<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutoringController extends Controller
{
    public function index()
    {
        return view("platform.tutoring.index");
    }
}
