<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectClassController extends Controller
{
    public function showIndexSubjectClass(){
        return view('subjectAndClass.listSubjectClass');
    }
}
