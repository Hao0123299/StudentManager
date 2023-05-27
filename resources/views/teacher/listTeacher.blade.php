@extends('layout')
@section('main-content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="m-0 font-weight-bold text-primary">Danh sách giáo viên</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>STT</td>
                            <th>Học và tên</th>
                            <th>Môn dạy</th>
                            <th>Lớp dạy</th>
                            <th>Số điện thoại</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>
                                <a href="login.html"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-pen"></i></a>
                                <a href="#"><i class="fas fa-trash"></i></a>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


@endsection
