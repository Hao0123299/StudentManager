<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function showIndexLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = md5($request->password);

        $result = DB::table('teacher')->where('email', $email)->where('password', $password)->first();
        if($result == true){
            Session::put('name', $result->name);
            return redirect()->intended('/trang-chu');
        }else{
            return redirect()->back()->with(['message' => 'Thông tin đăng nhập không chính xác']);
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->intended('/dang-nhap');
    }
    public function showIndexForgotPass(){
        return view('auth.forGotPass');
    }
}
