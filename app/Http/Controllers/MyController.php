<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function show()
    {
        return view('form.input');
    }

    public function tampil(Request $data)
    {
        return view('form.hasil', compact('data'));
    }
}
