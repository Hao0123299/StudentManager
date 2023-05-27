<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function showIndexRoom(){
        return view('room.listRoom');
    }
}
