@extends('layout')
@section('main-content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Danh sách giáo viên
                    <a data-toggle="modal" data-target="#modalAddTeacher" style="float: right" href="#"><i class="fas fa-plus"></i></a>
                </h2>
                @php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message', null);
                    }
                @endphp
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>STT</td>
                            <th>Họ và tên</th>
                            <th>Số điện thoại</th>
                            <th>Môn dạy</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($teacher as $teacher)--}}
{{--                            <tr>--}}
{{--                                <td>{{$teacher->code}}</td>--}}
{{--                                <td>{{$teacher->name}}</td>--}}
{{--                                <td>{{$teacher->phone}}</td>--}}
{{--                                <td>{{$teacher->classSubject}}</td>--}}
{{--                                <td>--}}
{{--                                    <a href="   #" data-toggle="modal" data-target="#modalViewTeacher"><i class="fas fa-eye"></i></a>--}}
{{--                                    <a href="#" data-toggle="modal" data-target="#modalEditTeacher"><i class="fas fa-pen"></i></a>--}}
{{--                                    <a href="{{URL::to('/xoa-giao-vien/'.$teacher->id)}}"><i class="fas fa-trash"></i></a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
