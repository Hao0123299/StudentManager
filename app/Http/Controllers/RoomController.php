<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\TableUpdate;

class RoomController extends Controller
{
    public function showIndexRoom(){
        $room = Room::all();
        return view('room.listRoom', compact('room'));
    }

    public function saveRoom(Request $request){
        $room = new Room();

        $room->code = $request->code;
        $room->room = $request->room;
        $room->description = $request->description;
        $room->save();
        Session::put('message', 'Thêm mới thành công');
        return redirect::to('danh-sach-phong');
    }
    public function deleteRoom($id){
        $room = Room::find($id);
        $room->delete();
        Session::put('message', 'Xóa thành công');
        return redirect::to('danh-sach-phong');
    }
}
