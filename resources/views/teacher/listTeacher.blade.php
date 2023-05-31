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
                            @foreach($teacher as $teacher)
                            <tr>
                                <td>{{$teacher->codeTeacher}}</td>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->phone}}</td>
                                <td>{{$teacher->classSubject}}</td>
                                <td>
                                    <a href="{{URL::to('/chinh-sua-giao-vien/'.$teacher->code)}}" data-toggle="modal" data-target="#modalEditTeacher"><i class="fas fa-pen"></i></a>
                                    <a href="{{URL::to('/xoa-giao-vien/'.$teacher->codeTeacher)}}"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal Add Teacher-->
        <div class="modal fade" id="modalAddTeacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm giáo viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" action="{{URL::to('/luu-thong-tin-giao-vien')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">STT</label>
                                <div class="col-sm-8">
                                    <input type="text" name="code" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Họ và tên</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Ngày tháng năm sinh</label>
                                <div class="col-sm-8">
                                    <input type="date" name="birthday" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Số điện thoại</label>
                                <div class="col-sm-8">
                                    <input type="text" name="phone" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Địa chỉ</label>
                                <div class="col-sm-8">
                                    <input type="text" name="address" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">CCCD/CMT</label>
                                <div class="col-sm-8">
                                    <input type="text" name="cccd" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Giới tính</label>
                                <div class="col-sm-8">
                                    <select name="sex" class="form-control" id="exampleFormControlSelect1">
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Môn dạy</label>
                                <div class="col-sm-8">
                                    <input type="text" name="classSubject" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="luu_thong_tin_giao_vien" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal Add Teacher -->

        <!-- Modal View Teacher-->
        <div class="modal fade" id="modalViewTeacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm giáo viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">STT</label>
                                <div class="col-sm-8">
                                    <input type="text" name="code" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Họ và tên</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Ngày tháng năm sinh</label>
                                <div class="col-sm-8">
                                    <input type="date" name="birthday" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Số điện thoại</label>
                                <div class="col-sm-8">
                                    <input type="text" name="phone" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Địa chỉ</label>
                                <div class="col-sm-8">
                                    <input type="text" name="address" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">CCCD/CMT</label>
                                <div class="col-sm-8">
                                    <input type="text" name="cccd" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Giới tính</label>
                                <div class="col-sm-8">
                                    <select name="sex" class="form-control" id="exampleFormControlSelect1">
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Môn dạy</label>
                                <div class="col-sm-8">
                                    <select name="subjectClass" class="form-control" id="exampleFormControlSelect1">
                                        <option>Toán 12</option>
                                    </select>
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
        <!-- End Modal Add Teacher -->

        <!-- Modal Edit Teacher-->
        <div class="modal fade" id="modalEditTeacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm giáo viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">STT</label>
                                <div class="col-sm-8">
                                    <input type="text" name="code" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Họ và tên</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Ngày tháng năm sinh</label>
                                <div class="col-sm-8">
                                    <input type="date" name="birthday" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Số điện thoại</label>
                                <div class="col-sm-8">
                                    <input type="text" name="phone" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Địa chỉ</label>
                                <div class="col-sm-8">
                                    <input type="text" name="address" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">CCCD/CMT</label>
                                <div class="col-sm-8">
                                    <input type="text" name="cccd" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Giới tính</label>
                                <div class="col-sm-8">
                                    <select name="sex" class="form-control" id="exampleFormControlSelect1">
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Môn dạy</label>
                                <div class="col-sm-8">
                                    <select name="subjectClass" class="form-control" id="exampleFormControlSelect1">
                                        <option>Toán 12</option>
                                    </select>
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
        <!-- End Modal Add Teacher -->





    </div>


@endsection
