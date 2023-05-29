<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function showIndexTeacher(){
        $teacher = Teacher::all();
        return view('teacher.listTeacher', compact('teacher'));
    }
    public function saveTeacher(Request $request){
        $teacher = new Teacher();

        $teacher->code = $request->code;
        $teacher->name = $request->name;
        $teacher->birthday = $request->birthday;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->address = $request->address;
        $teacher->cccd = $request->cccd;
        $teacher->sex = $request->sex;
        $teacher->classSubject = $request->classSubject;
        $teacher->save();
        return view('teacher.listTeacher',compact('teacher'))->with('success', 'Thêm sinh viên thành công' );
    }
    public function deleteTeacher($id){
        $teacher = Teacher::find($id);
        $teacher->delete();
        Session::put('message', 'Xóa thành công');
        return redirect::to('danh-sach-giao-vien');
    }
}
