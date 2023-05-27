<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Trang chủ tổng quan
Route::get('/trang-chu', [App\Http\Controllers\HomeController::class, 'showIndex'])->name('showIndex');
Route::get('/', [HomeController::class, 'showIndex'])->name('showIndex');

//Học sinh: thêm, sửa, xóa, lưu thông tin
Route::get('/danh-sach', [StudentController::class, 'showIndex'])->name('showIndex');
Route::get('/them-hoc-sinh', [StudentController::class, 'showIndex'])->name('showIndex');
Route::get('/sua-thong-tin/{id}', [StudentController::class, 'showIndex'])->name('showIndex');
Route::get('/xoa-hoc-sinh', [StudentController::class, 'showIndex'])->name('showIndex');
Route::get('/luu-thong-tin', [StudentController::class, 'showIndex'])->name('showIndex');


//Giáo viên: thêm, sửa, xóa, lưu thông tin
Route::get('/danh-sach-giao-vien', [App\Http\Controllers\GiaoVienController::class, 'index']);
Route::get('/them-giao-vien', [App\Http\Controllers\GiaoVienController::class, 'them_giao_vien']);
Route::get('/sua-giao-vien/{id}', [App\Http\Controllers\GiaoVienController::class, 'sua_giao_vien']);
Route::post('/luu-thong-tin-giao-vien', [App\Http\Controllers\GiaoVienController::class, 'luu_thong_tin_giao_vien']);
Route::get('/xoa-giao-vien/{id}', [App\Http\Controllers\GiaoVienController::class, 'xoa_giao_vien']);
Route::get('/dang-ky-tai-khoan', [App\Http\Controllers\DangKyController::class, 'index']);

//Môn + lớp
Route::get('/danh-sach-giao-vien', [App\Http\Controllers\GiaoVienController::class, 'index']);
Route::get('/them-mon-hoc', [App\Http\Controllers\MonHocController::class, 'them_mon_hoc']);
Route::get('/sua-mon-hoc/{id}', [App\Http\Controllers\MonHocController::class, 'sua_mon_hoc']);
Route::post('/luu-thong-tin-mon-hoc', [App\Http\Controllers\MonHocController::class, 'luu_thong_tin_mon_hoc']);
Route::get('/xoa-mon-hoc/{id}', [App\Http\Controllers\MonHocController::class, 'xoa_mon_hoc']);

//    phân quyền
Route::get('/danh-sach-quyen', [App\Http\Controllers\RoleController::class, 'index']);
Route::get('/them-quyen', [App\Http\Controllers\RoleController::class, 'them_quyen']);
//    đăng ký thong tin giao vien
Route::get('/dang-nhap', [App\Http\Controllers\DangNhapController::class, 'index']);




