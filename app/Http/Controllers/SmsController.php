<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index()
    {
        // Return the dummy SMS index view
        return view('sms.index');
    }
}
