<?php

use App\Http\Controllers\KenhDongController;
use App\Http\Controllers\KenhDucHoaController;
use App\Http\Controllers\KenhPhuocHoaController;
use App\Http\Controllers\KenhTanHungController;
use App\Http\Controllers\KenhTayController;
use App\Http\Controllers\MauDieuTietController;
use App\Http\Controllers\MauNhapSoController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AdminPermissionController;
use App\Http\Controllers\DashboardController;
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


// Kenh Dong
Route::get('/kenh-dong',[KenhDongController::class, 'kenh_dong'])->name('kenhdong');
Route::post('/kenh-dong/store',[KenhDongController::class, 'store'])->name('kenhdong.store')->middleware('can:kenh-dong-create');
Route::post('/kenh-dong/update/{id}',[KenhDongController::class, 'update'])->name('kenhdong.update')->middleware('can:kenh-dong-update');
// Kenh Tan Hung
Route::get('/',[KenhTanHungController::class, 'kenh_tan_hung'])->name('kenhtanhung');
Route::post('/kenh-tan-hung/store',[KenhTanHungController::class, 'store'])->name('kenhtanhung.store')->middleware('can:kenh-tan-hung-create');
Route::post('/kenh-tan-hung/update/{id}',[KenhTanHungController::class, 'update'])->name('kenhtanhung.update')->middleware('can:kenh-tan-hung-update');
// Kenh Tay
Route::get('/kenh-tay',[KenhTayController::class, 'kenh_tay'])->name('kenhtay');
Route::post('/kenh-tay/store',[KenhTayController::class, 'store'])->name('kenhtay.store')->middleware('can:kenh-tay-create');
Route::post('/kenh-tay/update/{id}',[KenhTayController::class, 'update'])->name('kenhtay.update')->middleware('can:kenh-tay-update');
// Kenh Phuoc Hoa
Route::get('/kenh-phuoc-hoa',[KenhPhuocHoaController::class, 'kenh_phuoc_hoa'])->name('kenhphuochoa');
Route::post('/kenh-phuoc-hoa/store',[KenhPhuocHoaController::class, 'store'])->name('kenhphuochoa.store')->middleware('can:kenh-phuoc-hoa-create');
Route::post('/kenh-phuoc-hoa/update/{id}',[KenhPhuocHoaController::class, 'update'])->name('kenhphuochoa.update')->middleware('can:kenh-phuoc-hoa-update');
// Kenh Duc Hoa
Route::get('/kenh-duc-hoa',[KenhDucHoaController::class, 'kenh_duc_hoa'])->name('kenhduchoa');
Route::post('/kenh-duc-hoa/store',[KenhDucHoaController::class, 'store'])->name('kenhduchoa.store')->middleware('can:kenh-duc-hoa-create');
Route::post('/kenh-duc-hoa/update/{id}',[KenhDucHoaController::class, 'update'])->name('kenhduchoa.update')->middleware('can:kenh-duc-hoa-update');
// Mau Dieu Tiet
Route::get('/mau-dieu-tiet',[MauDieuTietController::class, 'mau_dieu_tiet'])->name('maudieutiet');
Route::post('/mau-dieu-tiet/store',[MauDieuTietController::class, 'store'])->name('maudieutiet.store')->middleware('can:mau-dieu-tiet-create');
Route::post('/mau-dieu-tiet/update/{id}',[MauDieuTietController::class, 'update'])->name('maudieutiet.update')->middleware('can:mau-dieu-tiet-update');
// Mau Nhap So Lieu
Route::get('/mau-nhap-so-lieu-theo-gio',[MauNhapSoController::class, 'mau_nhap_so'])->name('maunhapso');
Route::post('/mau-nhap-so-lieu-theo-gio/store',[MauNhapSoController::class, 'store'])->name('maunhapso.store')->middleware('can:mau-nhap-so-create');
Route::post('/mau-nhap-so-lieu-theo-gio/update/{id}',[MauNhapSoController::class, 'update'])->name('maunhapso.update')->middleware('can:mau-nhap-so-update');

Route::get('/export', 'ExcelController@export')->name('export');


Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');


// ADMIN

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);

    Route::get('/admin/user', [AdminUserController::class, 'index'])->name('user.index');
    Route::get('/admin/user/edit/{id}', [AdminUserController::class, 'edit'])->name('user.edit');
    Route::post('/admin/user/update/{id}', [AdminUserController::class, 'update'])->name('user.update');
    Route::get('/admin/user/delete/{id}', [AdminUserController::class, 'delete'])->name('user.delete');

    Route::get('/admin/role', [AdminRoleController::class, 'index'])->name('role.index');
    Route::get('/admin/role/create', [AdminRoleController::class, 'create'])->name('role.create');
    Route::post('/admin/role/store', [AdminRoleController::class, 'store'])->name('role.store');
    Route::get('/admin/role/edit/{id}', [AdminRoleController::class, 'edit'])->name('role.edit');
    Route::post('/admin/role/update/{id}', [AdminRoleController::class, 'update'])->name('role.update');

    Route::get('/admin/permission', [AdminPermissionController::class, 'index'])->name('permission.index');
});



Auth::routes();

