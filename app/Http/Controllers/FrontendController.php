<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function portfolio()
    {
        return view('portfolio');
    }
}
