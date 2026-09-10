<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        $name = "PRECIOUS";
        return view('student', compact('name'));
    }
}
