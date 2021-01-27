<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;

class FrontendController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function portfolio()
    {
        $websites = Website::all();
        return view('portfolio', compact('websites'));
    }
    public function diensten()
    {
        $websites = Website::all();
        return view('diensten', compact('websites'));
    }
}
