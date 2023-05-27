<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showIndexStudent(){
        return view('student.listStudent');
    }
    public function saveStudent(Request $request){
        $student = new Student;
        $student->code = $request->code;
        $student->name = $request->name;
        $student->subjectClass = $request->subjectClass;
        $student->phone = $request->phone;
        $student->date = $request->date;
        $student->save();
        return redirect('/danh-sach-hoc-vien')->with('success', 'Thêm sinh viên thành công' );
    }
    public function deleteStudent($id){
        DB::table('student')->where('id', $id)->delete();
        Session::put('message', 'Xóa thông tin học sinh thành công');
        return Redirect::to('danh-sach-hoc-sinh');
    }

}
