<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hobbyController extends Controller
{
    public function hobby()
    {
        return view('hobby');
    }
}
