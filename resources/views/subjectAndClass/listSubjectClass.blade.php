@extends('layout')
@section('main-content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Danh sách môn
                    <a data-toggle="modal" data-target="#modalAddSubject" style="float: right" href="#"><i class="fas fa-plus"></i></a>
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
                            <th>Môn</th>
                            <th>Học phí</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subjectClass as $subjectClass)
                        <tr>

                                <td>{{$subjectClass->code}}</td>
                                <td>{{$subjectClass->subjectName}}</td>
                                <td>{{$subjectClass->price}} VNĐ</td>
                                <td>
                                    <a href="{{URL::to('/xoa-mon-hoc/'.$subjectClass->id)}}"><i class="fas fa-trash"></i></a>
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>





        <!-- Modal Add Subject-->
        <div class="modal fade" id="modalAddSubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm môn học</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" action="{{URL::to('/luu-thong-tin-mon')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">STT</label>
                                <div class="col-sm-9">
                                    <input type="text" name="code" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Môn</label>
                                <div class="col-sm-9">
                                    <input type="text" name="subjectName" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Học phí</label>
                                <div class="col-sm-9">
                                    <input type="text" name="price" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="luu_thong_tin_mon" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal Add Subject -->

    </div>


@endsection

