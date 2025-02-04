<?php

namespace App\Http\Controllers;

use App\KhachHang;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Redirect;
use App\HoaDonTour;

class AuthenticateUSERController extends Controller
{

    public function dangky()
    {
        return view('dangky');
    }

    public function dangkyProcess(Request $request)
    {

        $tenKhachHang = $request->get('ten');
        $email = $request->get('email');
        $matkhau = $request->get('mat-khau');
        $sdt = $request->get('sdt');
        $diachi = $request->get('diachi');

        $khachhang = new KhachHang();
        $khachhang->nameKhachHang = $tenKhachHang;
        $khachhang->email = $email;
        $khachhang->passWord = $matkhau;
        $khachhang->sdt = $sdt;
        $khachhang->diaChi = $diachi;
        $khachhang->save();
        return Redirect::route('loginUSER');
    }
    public function login()
    {
        return view('loginUSER');
    }
    public function loginProcess(Request $request)
    {
        $email = $request->get('email');
        $matKhau = $request->get('mat-khau');


        try {
            $khachhang = KhachHang::where('email', '=', $email)->where('passWord', '=', $matKhau)->firstOrFail();
            $request->session()->put('idUSER', $khachhang->idKhachHang);
            return Redirect::route('displayInformation');
        } catch (Exception $e) {
            return Redirect::route('loginUSER')->with('error', 'Sai mật khẩu hoặc tài khoản');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('displayInformation');
    }

    public function profile(Request $request)
    {
        $idUSER = $request->session()->get('idUSER');
        $khachhang = KhachHang::where('idKhachHang', '=', $idUSER)->first();
        $lichSuDatTour = HoaDonTour::join('tour', 'hoadontour.idTour', '=', 'tour.idTour')->where('hoadontour.idKhachHang', '=', $idUSER)->where('hoadontour.trangThai', '=', 1)->get();
        return view('displayViewProfileCustomer.profile', [
            'khachhang' => $khachhang,
            'lichSuDatTour' => $lichSuDatTour
        ]);
    }

    public function updateProfile(Request $request)
    {
        $idUSER = $request->session()->get('idUSER');
        $khachhang = KhachHang::where('idKhachHang', '=', $idUSER)->first();
        return view('displayViewProfileCustomer.updateProfile', [
            'khachhang' => $khachhang
        ]);
    }

    public function updateProfileProcess(Request $request)
    {
        $idUSER = $request->session()->get('idUSER');
        $tenKhachHang = $request->get('ten');
        $email = $request->get('email');
        $matkhau = $request->get('mat-khau');
        $sdt = $request->get('sdt');
        $diachi = $request->get('dia-chi');

        $khachang = KhachHang::find($idUSER);
        $khachang->nameKhachHang = $tenKhachHang;
        $khachang->email = $email;
        $khachang->passWord = $matkhau;
        $khachang->sdt = $sdt;
        $khachang->diaChi = $diachi;
        $khachang->save();
        return Redirect::route('profile');
    }
}
