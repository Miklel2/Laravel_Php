<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    public function master()
    {
        return view('template\master');
    }

    public function index()
    {
        return view('index');
    }
}

