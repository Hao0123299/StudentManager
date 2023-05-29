<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SubjectClass;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function showIndexStudent(){
        $student = Student::all();
        $subjectClass = SubjectClass::all();
//        $teacher = Teacher::all();
        return view('student.listStudent',compact('student', 'subjectClass'));
    }
    public function saveStudent(Request $request){

        $student = new Student;
        $student->code = $request->code;
        $student->name = $request->name;
        $student->subjectClass = $request->subjectClass;
        $student->phone = $request->phone;
        $student->date = $request->date;
        $student->save();
        return view('student.listStudent',compact('student', 'subjectClass', 'teacher'))->with('success', 'Thêm sinh viên thành công' );
//        return redirect('/danh-sach-hoc-vien')->with('success', 'Thêm sinh viên thành công' );
    }
    public function deleteStudent($id){
        $student = Student::find($id);
        $student->delete();
        Session::put('message', 'Xóa thành công');
        return redirect::to('danh-sach-hoc-vien');
    }

}
