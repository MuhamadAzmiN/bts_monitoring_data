<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BtsController extends Controller
{
    public function index()
    {
        // Return the dummy BTS index view
        return view('bts.index');
    }

    public function edit($id = null)
    {
        // Return the dummy BTS edit view
        return view('bts.edit');
    }
}
