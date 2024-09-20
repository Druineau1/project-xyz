<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExampleController extends Controller
{
    public function list()
    {
        return view('app.home');
    }
    public function show()
    {
        return view('app.profile');
    }
   
}
