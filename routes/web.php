<?php

use App\Http\Controllers\KenhDongController;
use App\Http\Controllers\KenhDucHoaController;
use App\Http\Controllers\KenhPhuocHoaController;
use App\Http\Controllers\KenhTanHungController;
use App\Http\Controllers\KenhTayController;
use App\Http\Controllers\MauDieuTietController;
use App\Http\Controllers\MauNhapSoController;
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
Route::get('/kenh-dong',[KenhDongController::class, 'kenh_dong'])->middleware('auth');
Route::post('/kenh-dong/store',[KenhDongController::class, 'store'])->name('kenhdong.store')->middleware('auth');
Route::post('/kenh-dong/update/{id}',[KenhDongController::class, 'update'])->name('kenhdong.update')->middleware('auth');
// Kenh Tan Hung
Route::get('/',[KenhTanHungController::class, 'kenh_tan_hung'])->middleware('auth');
Route::post('/kenh-tan-hung/store',[KenhTanHungController::class, 'store'])->name('kenhtanhung.store')->middleware('auth');
Route::post('/kenh-tan-hung/update/{id}',[KenhTanHungController::class, 'update'])->name('kenhtanhung.update')->middleware('auth');
// Kenh Tay
Route::get('/kenh-tay',[KenhTayController::class, 'kenh_tay'])->middleware('auth');
Route::post('/kenh-tay/store',[KenhTayController::class, 'store'])->name('kenhtay.store');
Route::post('/kenh-tay/update/{id}',[KenhTayController::class, 'update'])->name('kenhtay.update');
// Kenh Phuoc Hoa
Route::get('/kenh-phuoc-hoa',[KenhPhuocHoaController::class, 'kenh_phuoc_hoa'])->middleware('auth');
Route::post('/kenh-phuoc-hoa/store',[KenhPhuocHoaController::class, 'store'])->name('kenhphuochoa.store')->middleware('auth');
Route::post('/kenh-phuoc-hoa/update/{id}',[KenhPhuocHoaController::class, 'update'])->name('kenhphuochoa.update')->middleware('auth');
// Kenh Duc Hoa
Route::get('/kenh-duc-hoa',[KenhDucHoaController::class, 'kenh_duc_hoa'])->middleware('auth');
Route::post('/kenh-duc-hoa/store',[KenhDucHoaController::class, 'store'])->name('kenhduchoa.store')->middleware('auth');
Route::post('/kenh-duc-hoa/update/{id}',[KenhDucHoaController::class, 'update'])->name('kenhduchoa.update')->middleware('auth');
// Mau Dieu Tiet
Route::get('/mau-dieu-tiet',[MauDieuTietController::class, 'mau_dieu_tiet'])->middleware('auth');
Route::post('/mau-dieu-tiet/store',[MauDieuTietController::class, 'store'])->name('maudieutiet.store')->middleware('auth');
Route::post('/mau-dieu-tiet/update/{id}',[MauDieuTietController::class, 'update'])->name('maudieutiet.update')->middleware('auth');
// Mau Nhap So Lieu
Route::get('/mau-nhap-so-lieu-theo-gio',[MauNhapSoController::class, 'mau_nhap_so'])->middleware('auth');
Route::post('/mau-nhap-so-lieu-theo-gio/store',[MauNhapSoController::class, 'store'])->name('maunhapso.store')->middleware('auth');
Route::post('/mau-nhap-so-lieu-theo-gio/update/{id}',[MauNhapSoController::class, 'update'])->name('maunhapso.update')->middleware('auth');

Route::get('/export', 'ExcelController@export')->name('export');

Auth::routes();
