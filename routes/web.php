<?php

use App\Http\Controllers\AuthenticateADMINController;
use App\Http\Controllers\AuthenticateUSERController;
use App\Http\Controllers\displayHistoryReserveTour;
use App\Http\Controllers\DisplayViewCustomer;
use App\Http\Controllers\displayViewDestination;
use App\Http\Controllers\DisplayViewDestination_Customer;
use App\Http\Controllers\DisplayViewPlane_Customer;
use App\Http\Controllers\DisplayViewHotel_Customer;
use App\Http\Controllers\DisplayViewPost_Customer;
use App\Http\Controllers\DisplayViewTour_Customer;
use App\Http\Controllers\UploadFile;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ShowContractReserved;
use App\Http\Controllers\TourDetailController;
use App\Http\Controllers\ListCustomerTourController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\DatTourNhanhController;
use App\Http\Controllers\thongkedoanhthu;
use App\Http\Controllers\trangNhapNamThongKe;
use App\Http\Controllers\trangNhapNamThongKeTour;
use App\Http\Controllers\thongkengay;
use App\Http\Controllers\Tourdatnhieu;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckHasLogin;
use App\Http\Middleware\CheckHasLoginADMIN;
use App\Http\Middleware\CheckHasLoginUSER;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckLoginADMIN;
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



/* Phần ADMIN */

Route::middleware([CheckHasLoginADMIN::class])->group(function () {
    Route::get('/loginADMIN', [AuthenticateADMINController::class, 'login'])->name('loginADMIN');
    Route::post('/login-processADMIN', [AuthenticateADMINController::class, 'loginProcess'])->name('login-process');
});

Route::middleware([CheckLoginADMIN::class])->group(function () {
    Route::get('/trangchu-ADMIN', function () {
        return view('trangchu-ADMIN');
    })->name('welcomeADMIN');
    Route::get('/logoutADMNIN', [AuthenticateADMINController::class, 'logout'])->name('logoutADMIN');
    Route::resource('position', 'PositionController');
    Route::resource('staff', 'StaffController');
    Route::resource('plane', 'PlanController');
    Route::resource('hotel', 'HotelController');
    Route::resource('destination', 'DiaDiemController');
    Route::resource('customer', 'CustomerController');
    Route::resource('manageTour', 'ManageTourController');
    Route::resource('profit', 'ProfitController');
    Route::resource('listTourBasedMonth', 'TourBasedMonth');
    Route::resource('listCustomerTour', 'ListCustomerTourController');

    Route::resource('imageDetail', 'ImageDetailController');
    Route::resource('tourDetail', 'TourDetailController');
    Route::post('deleteDetailTour', [TourDetailController::class, 'delete'])->name('deleteDetailTour');
    Route::resource('contract', 'ContractController');
    Route::get('showContractReserved', [ShowContractReserved::class, 'showContract'])->name('showContract');
    Route::resource('post', 'BaiVietController');
    Route::get('ThongKeSoLuong', [thongkedoanhthu::class, 'ThongKeSLnam'])->name('ThongkeSL');
    Route::get('trangNhapNamThongKe', [trangNhapNamThongKe::class, 'hienThiTrangNhapNamThongKe'])->name('nhapNamThongKeNhieuNhat');
    Route::get('trangNhapNamThongKeTour', [trangNhapNamThongKe::class, 'hienThiTrangNhapNamTourNhieuNhat'])->name('nhapNamThongKeTourNhieuNhat');
    Route::resource('ThongKeNgay', 'thongkengay');
    Route::get('Tour-Dat-Nhieu', [Tourdatnhieu::class, 'TourDatNhieu'])->name('TourDatNhieu');
});







/****************/




/* phần USER */

Route::middleware([CheckHasLoginUSER::class])->group(function () {
    Route::get('/loginUSER', [AuthenticateUSERController::class, 'login'])->name('loginUSER');
    Route::post('/login-processUSER', [AuthenticateUSERController::class, 'loginProcess'])->name('login-processUSER');
});

Route::get('/', [DisplayViewCustomer::class, 'displayInformation'])->name('displayInformation');
Route::get('/logout', [AuthenticateUSERController::class, 'logout'])->name('logoutUSER');
Route::get('/dangky', [AuthenticateUSERController::class, 'dangky'])->name('dangky');
Route::post('dangky-process', [AuthenticateUSERController::class, 'dangkyProcess'])->name('dangky-process');
Route::get('/profile', [AuthenticateUSERController::class, 'profile'])->name('profile');
Route::get('/updateProfile', [AuthenticateUSERController::class, 'updateProfile'])->name('updateProfileUser');
Route::post('/updateProfileProcess', [AuthenticateUSERController::class, 'updateProfileProcess'])->name('updateProfileProcess');
Route::resource('/maybay', 'DisplayViewPlane_Customer');
Route::get('/listTourPlane', [DisplayViewPlane_Customer::class, 'displayListTour'])->name('listTourPlane');

Route::resource('/khachsan', 'DisplayViewHotel_Customer');
Route::resource('/diadiem', 'DisplayViewDestination_Customer');

Route::resource('/baiviet', 'DisplayViewPost_Customer');

Route::get('/lichsuDatTour', [displayHistoryReserveTour::class, 'display'])->name('lichsuDatTour');
Route::resource('/tour', 'DisplayViewTour_Customer');
Route::resource('/reserveTour', 'displayViewReserveTour');

Route::get('/datTourNgay', [DatTourNhanhController::class, 'datTourNhanh'])->name('datTourNhanh');

Route::resource('binhLuan', 'binhLuan');
Route::resource('binhLuanChuaDuyet', 'binhLuanChuaDuyetAdminController');
Route::resource('binhLuanDaDuyet', 'binhLuanDaTraLoi');
Route::resource('tinNhanCustomer', 'tinNhanCustomerController');
Route::resource('tinNhanStaff', 'tinNhanStaffController');
Route::resource('tinNhanStaffChuaDoc', 'tinNhanStaffChuaDocController');
/************/
