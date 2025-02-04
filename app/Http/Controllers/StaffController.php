<?php

namespace App\Http\Controllers;

use App\NhanVien;
use Illuminate\Http\Request;
use App\Quyen;
use Illuminate\Support\Facades\Redirect;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $nhanvien = NhanVien::join('quyen', 'nhanvien.quyen', '=', 'quyen.idQuyen')->where('nameNhanVien', 'like', "%$search%")->paginate(3);
        return view('staff.index', [
            'nhanvien' => $nhanvien,
            'search' => $search
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quyenNhanVien = Quyen::all();
        return view('staff.create', [
            'quyenNhanVien' => $quyenNhanVien
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tenNhanVien = $request->get('ten-nhanvien');
        $emailDangNhap = $request->get('emailTaiKhoan');
        $matKhau = $request->get('password');
        $quyen = $request->get('quyen');
        $nhanvien = new NhanVien();
        $nhanvien->nameNhanVien = $tenNhanVien;
        $nhanvien->email = $emailDangNhap;
        $nhanvien->passWord = $matKhau;
        $nhanvien->quyen = $quyen;
        $nhanvien->save();
        return Redirect::route('staff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhanvien = NhanVien::join('quyen', 'nhanvien.quyen', '=', 'quyen.idQuyen')->find($id);
        return view('staff.edit', [
            'nhanvien' => $nhanvien
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emailDangNhap = $request->get('email-taiKhoan');
        $matKhau = $request->get('mat-khau');
        $nhanvien = NhanVien::find($id);
        $nhanvien->email = $emailDangNhap;
        $nhanvien->passWord = $matKhau;
        $nhanvien->save();
        return Redirect::route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NhanVien::find($id)->delete();
        return Redirect::route('staff.index');
    }
}
