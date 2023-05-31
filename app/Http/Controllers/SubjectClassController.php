<?php

namespace App\Http\Controllers;

use App\Models\SubjectClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class SubjectClassController extends Controller
{

    public function showIndexSubjectClass(){
        $subjectClass = SubjectClass::all();
        return view('subjectAndClass.listSubjectClass', compact('subjectClass'));
    }
    public function saveSubjectClass(Request $request){
        $subjectClass = new SubjectClass();

        $subjectClass->codeSubject = $request->code;
        $subjectClass->subjectName = $request->subjectName;
        $subjectClass->price = $request->price;
        $subjectClass->save();
        Session::put('message', 'Thêm mới thành công');
        return redirect::to('danh-sach-mon');
    }
    public function deleteSubjectClass($codeSubject){
        DB::delete('delete from subjects where codeSubject = ?', [$codeSubject]);
        Session::put('message', 'Xóa thành công');
        return redirect::to('danh-sach-mon');
    }
}
