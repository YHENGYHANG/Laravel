<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function index()
    {
        $students= student::all();
        return view('student', compact('students'));
    }
}
