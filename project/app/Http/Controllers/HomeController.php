<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // dd("Inside home controller");
        return view("welcome");
    }
}
