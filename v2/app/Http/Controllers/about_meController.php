<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about_meController extends Controller
{
    public function about_me()
    {
        return view('about_me');
    }
}
