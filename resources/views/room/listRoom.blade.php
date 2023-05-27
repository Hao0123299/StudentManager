@extends('layout')
@section('main-content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Phòng dạy
                    <a style="float: right" href="#"><i class="fas fa-plus"></i></a>
                </h2>
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
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Máy lạnh: 1 <br> Số lượng học sinh: 18-20</td>
                            <td>
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

