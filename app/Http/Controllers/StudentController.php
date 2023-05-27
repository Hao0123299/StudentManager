<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showIndexStudent(){
        return view('student.listStudent');
    }
}
