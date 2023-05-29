<?php

    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\RoomController;
    use App\Http\Controllers\StudentController;
    use App\Http\Controllers\SubjectClassController;
    use App\Http\Controllers\TeacherController;
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
Route::get('/trang-chu', [HomeController::class, 'showIndex'])->name('showIndex');
Route::get('/', [HomeController::class, 'showIndex'])->name('showIndex');

//Học sinh: thêm, sửa, xóa, lưu thông tin
Route::get('/danh-sach-hoc-vien', [StudentController::class, 'showIndexStudent'])->name('showIndexStudent');
Route::post('/luu-thong-tin-hoc-vien', [StudentController::class, 'saveStudent'])->name('saveStudent');
Route::get('/xoa-hoc-vien/{id}', [StudentController::class, 'deleteStudent'])->name('deleteStudent');


//Giáo viên: thêm, sửa, xóa, lưu thông tin
Route::get('/danh-sach-giao-vien', [TeacherController::class, 'showIndexTeacher'])->name('showIndexTeacher');
Route::post('/luu-thong-tin-giao-vien', [TeacherController::class, 'saveTeacher'])->name('saveTeacher');
Route::get('/xoa-giao-vien/{id}', [TeacherController::class, 'deleteTeacher'])->name('deleteTeacher');
//Route::get('/them-giao-vien', [App\Http\Controllers\GiaoVienController::class, 'them_giao_vien']);
//Route::get('/sua-giao-vien/{id}', [App\Http\Controllers\GiaoVienController::class, 'sua_giao_vien']);
//Route::post('/luu-thong-tin-giao-vien', [App\Http\Controllers\GiaoVienController::class, 'luu_thong_tin_giao_vien']);
//Route::get('/xoa-giao-vien/{id}', [App\Http\Controllers\GiaoVienController::class, 'xoa_giao_vien']);
//Route::get('/dang-ky-tai-khoan', [App\Http\Controllers\DangKyController::class, 'index']);

//Môn
Route::get('/danh-sach-mon', [SubjectClassController::class, 'showIndexSubjectClass'])->name('showIndexSubjectClass');
Route::post('/luu-thong-tin-mon', [SubjectClassController::class, 'saveSubjectClass'])->name('saveSubjectClass');
Route::get('/xoa-mon-hoc/{id}', [SubjectClassController::class, 'deleteSubjectClass'])->name('deleteSubjectClass');

//Phòng
Route::get('/danh-sach-phong', [RoomController::class, 'showIndexRoom'])->name('showIndexRoom');
Route::post('/luu-thong-tin-phong', [RoomController::class, 'saveRoom'])->name('saveRoom');
Route::get('/xoa-phong/{id}', [RoomController::class, 'deleteRoom'])->name('deleteRoom');


//    phân quyền
//Route::get('/danh-sach-quyen', [App\Http\Controllers\RoleController::class, 'index']);
//Route::get('/them-quyen', [App\Http\Controllers\RoleController::class, 'them_quyen']);
//đăng nhập và reset password
Route::get('/dang-nhap', [AuthController::class, 'showIndexLogin'])->name('showIndexLogin');
Route::get('/quen-mat-khau', [AuthController::class, 'showIndexForgotPass'])->name('showIndexForgotPass');




