@extends('layout')
@section('main-content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Danh sách học sinh
                    <a data-toggle="modal" data-target="#modalAddStudent" style="float: right" href="#"><i class="fas fa-plus"></i></a>
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
                            <th>Môn học</th>
                            <th>Số điện thoại phụ huynh</th>
                            <th>Ngày bắt dầu</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Edinburgh</td>
                            <th>0963254874</th>
                            <td>27/05/2023</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modalViewStudent"><i class="fas fa-eye"></i></a>
                                <a href="#" data-toggle="modal" data-target="#modalEditStudent"><i class="fas fa-pen"></i></a>
                                <a href="#"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Modal Add Student-->
            <div class="modal fade" id="modalAddStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm học sinh</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form role="form" action="{{URL::to('/luu-thong-tin')}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">STT</label>
                                    <div class="col-sm-9">
                                        <input type="codeStudent" class="form-control form-control-sm" id="colFormLabelSm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Họ và tên</label>
                                    <div class="col-sm-9">
                                        <input type="name" class="form-control form-control-sm" id="colFormLabelSm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Môn học</label>
                                    <div class="col-sm-9">
                                        <input type="subjectClass" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="phone" class="form-control form-control-sm" id="colFormLabelSm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Ngày bắt đầu</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
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
            <!-- End Modal Add Student -->

            <!-- Modal View Student-->
            <div class="modal fade" id="modalViewStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm học sinh</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Mã học sinh</label>
                                    <div class="col-sm-9">
                                        <input type="codeStudent" class="form-control form-control-sm" id="colFormLabelSm">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Họ và tên</label>
                                    <div class="col-sm-9">
                                        <input type="name" class="form-control form-control-sm" id="colFormLabelSm">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Môn học</label>
                                    <div class="col-sm-9">
                                        <input type="subjectClass" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="phone" class="form-control form-control-sm" id="colFormLabelSm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Ngày bắt đầu</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal View Student -->

            <!-- Modal Edit Student-->
            <div class="modal fade" id="modalEditStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm học sinh</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Mã học sinh</label>
                                    <div class="col-sm-9">
                                        <input type="codeStudent" class="form-control form-control-sm" id="colFormLabelSm">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Họ và tên</label>
                                    <div class="col-sm-9">
                                        <input type="name" class="form-control form-control-sm" id="colFormLabelSm">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Môn học</label>
                                    <div class="col-sm-9">
                                        <input type="subjectClass" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="phone" class="form-control form-control-sm" id="colFormLabelSm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Ngày bắt đầu</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Edit Student -->
        </div>

    </div>


@endsection
