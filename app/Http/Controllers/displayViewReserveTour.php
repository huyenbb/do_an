<?php

namespace App\Http\Controllers;

use App\HoaDonTour;
use App\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Tour;
use Illuminate\Support\Facades\Redis;

class displayViewReserveTour extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $soNguoiLon = $request->get('so-nguoiLon');
        $soTreEm = $request->get('so-treEm');
        $idTour = $request->get('id-tour');
        $idHoaDon = $request->get('id-hoadon');
        $idKhachHang = session()->get('idUSER');

        $tour = Tour::where('idTour', '=', $idTour)->first();
        $soTienNguoiLon = $soNguoiLon * $tour->giaNguoiLon;
        $soTienTreEm = $soTreEm * $tour->giaTreEm;
        $soTienTong = $soTienNguoiLon + $soTienTreEm;

        $hoadon = HoaDonTour::join('tour', 'hoadontour.idTour', '=', 'tour.idTour')->where('idHoaDon', '=', $idHoaDon)->first();
        $khachhang = KhachHang::where('idKhachHang', '=', $idKhachHang)->first();
        return view('displayViewReserveTour.thanh-toan', [
            'khachhang' => $khachhang,
            'hoadon' => $hoadon,
            'soNguoiLon' => $soNguoiLon,
            'soTreEm' => $soTreEm,
            'soTienNguoiLon' => $soTienNguoiLon,
            'soTienTreEm' => $soTienTreEm,
            'soTienTong' => $soTienTong
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idTour = $request->get('id-tour');
        $idKhachHang = $request->get('id-khachhang');
        $hoaDonTour = new HoaDonTour();
        $hoaDonTour->idTour = $idTour;
        $hoaDonTour->idKhachHang = $idKhachHang;
        $hoaDonTour->save();
        return Redirect::route('tour.index')->with('announcement', 'Thêm Vào Giỏ Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datTour = HoaDonTour::join('tour', 'hoadontour.idTour', '=', 'tour.idTour')->where('hoadontour.idKhachHang', '=', $id)->where('hoadontour.trangThai', '=', NULL)->get();
        return view('displayViewReserveTour.gioHang', [
            'datTour' => $datTour
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $tenKhachHang = $request->get('ho-ten');
        $sdt = $request->get('sdt');
        $soLuongNguonLon = $request->get('so-nguoiLon');
        $soLuongTreEm = $request->get('so-treEm');
        $ngayDatTour = date("y/m/d");
        $ghiChu = $request->get('ghi-chu');
        $trangThai = 0;
        $tongTien = $request->get('tong-tien');

        $hoadon = HoaDonTour::where('idHoaDon', '=', $id)->first();
        $hoadon->nameKhachHang = $tenKhachHang;
        $hoadon->sdt = $sdt;
        $hoadon->soLuongNguoiLon = $soLuongNguonLon;
        $hoadon->soLuongTreEm = $soLuongTreEm;
        $hoadon->ngayDatTour = $ngayDatTour;
        $hoadon->ghiChu = $ghiChu;
        $hoadon->trangThai = $trangThai;
        $hoadon->tongTien = $tongTien;
        $hoadon->save();
        return Redirect::route('tour.index')->with('ReserveSuccess', 'Đặt Tour Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HoaDonTour::find($id)->delete();
        return Redirect::route('tour.index');
    }

    public function test(Request $request)
    {
        $idkhach = $request->get('id-khachhang');
        return $idkhach;
        // return 'nè';
    }
}
