<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SubjectClass;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function showIndexStudent(){
        $student = Student::all();
        $subjectClass = SubjectClass::all();
        $teacher = Teacher::all();
        return view('student.listStudent',compact('student', 'subjectClass', 'teacher'));
    }
    public function saveStudent(Request $request){
        $subjectClass = SubjectClass::all();
        $teacher = Teacher::all();
//        csdl->name listStudnet
        $student = new Student;
        $student->codeStudent = $request->codeStudent;
        $student->name = $request->name;
        $student->subjectClass = $request->subjectClass;
        $student->codeTeacher = $request->teacher;
        $student->phone = $request->phone;
        $student->date = $request->date;
        $student->save();
        return view('student.listStudent',compact('student', 'subjectClass', 'teacher'))
            ->with('success', 'Thêm sinh viên thành công' );
    }
    public function deleteStudent($codeStudent){
        DB::delete('delete from student where codeStudent = ?', [$codeStudent]);
        Session::put('message', 'Xóa thành công');
        return redirect::to('danh-sach-hoc-vien');
    }
}
