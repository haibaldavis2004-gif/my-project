<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home()
    {
        return "Welcome to Home Page!";
    }

    public function about()
    {
        return "This is About Page!";
    }
}
