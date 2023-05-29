@extends('layout')
@section('main-content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Danh sách Phòng
                    <a data-toggle="modal" data-target="#modalAddRoom" style="float: right" href="#"><i class="fas fa-plus"></i></a>
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
                            <th>Phòng số</th>
                            <th>Chi tiết phòng</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($room as $room)
                        <tr>
                            <td>{{$room->code}}</td>
                            <td>{{$room->room}}</td>
                            <td>{{$room->description}}</td>
                            <td>
                                <a href="{{URL::to('/xoa-phong/'.$room->id)}}"><i class="fas fa-trash"></i></a>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal Add Room-->
        <div class="modal fade" id="modalAddRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm phòng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" action="{{URL::to('/luu-thong-tin-phong')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">STT</label>
                                <div class="col-sm-9">
                                    <input type="text" name="code" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Phòng số</label>
                                <div class="col-sm-9">
                                    <input type="text" name="room" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Chi tiết</label>
                                <div class="col-sm-9">
                                    <input type="text" name="description" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="luu_thong_tin" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal Add Room -->


    </div>


@endsection

