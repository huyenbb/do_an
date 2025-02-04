<?php

namespace App\Http\Controllers;

use App\HoaDonTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Tour;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoadon = HoaDonTour::join('tour', 'hoadontour.idTour', '=', 'tour.idTour')->join('khachhang', 'hoadontour.idKhachHang', '=', 'khachhang.idKhachHang')->where('hoadontour.trangThai', '=', 0)->get();
        return view('contract.index', [
            'hoadon' => $hoadon
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hoadon = HoaDonTour::join('tour', 'hoadontour.idTour', '=', 'tour.idTour')->join('khachhang', 'hoadontour.idKhachHang', '=', 'khachhang.idKhachHang')->where('hoadontour.idHoaDon', '=', $id)->first();
        return view('contract.show', [
            'hoadon' => $hoadon
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $hoadon = HoaDonTour::find($id);
        $hoadon->trangThai = 1;

        $idTour = $hoadon->idTour;
        $tongNguoi = $hoadon->soLuongNguoiLon + $hoadon->soLuongTreEm;

        $tour = Tour::find($idTour);
        $soLuongNguoi = $tour->soLuongNguoi - $tongNguoi;
        $tour->soLuongNguoi = $soLuongNguoi;
        $tour->save();
        $hoadon->save();
        return Redirect::route('contract.index');
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
        return Redirect::route('contract.index');
    }
}
