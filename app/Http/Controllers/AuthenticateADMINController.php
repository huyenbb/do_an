<?php

namespace App\Http\Controllers;

use App\NhanVien;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthenticateADMINController extends Controller
{
    public function login()
    {
        return view('loginADMIN');
    }
    public function loginProcess(Request $request)
    {
        $emailDangNhap = $request->get('emailDangNhap');
        $matKhau = $request->get('mat-khau');
        try {
            $authenticate = NhanVien::where('email', '=', $emailDangNhap)->where('passWord', '=', $matKhau)->firstOrFail();

            $request->session()->put('idADMIN', $authenticate->idNhanVien);
            $request > session()->put('nameADMIN', $authenticate->nameNhanVien);
            return Redirect::route('welcomeADMIN');
        } catch (Exception $e) {
            return Redirect::route('loginADMIN')->with('error', 'Sai mật khẩu hoặc tài khoản');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('loginADMIN');
    }
}
