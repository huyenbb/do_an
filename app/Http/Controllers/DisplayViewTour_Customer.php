<?php

namespace App\Http\Controllers;

use App\Anh_Detail;
use Illuminate\Http\Request;
use App\Tour;
use App\Tour_Detail;
use App\Binh_Luan;
use App\Binh_Luan_Chi_Tiet;

class DisplayViewTour_Customer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $tour = Tour::where('nameTour', 'like', "%$search%")->where('soLuongNguoi', '>', 0)->get();
        $anhTour = Tour::take(1)->first();
        return view('displayViewTour_Customer.tour', [
            'tour' => $tour,
            'anhTour' => $anhTour,
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
        $tour = Tour::join('maybay', 'tour.idMayBay', '=', 'maybay.idMayBay')->join('khachsan', 'tour.idKhachSan', '=', 'khachsan.idKhachSan')->where('idTour', '=', $id)->first();
        $anhDetail = Anh_Detail::where('idTour', '=', $id)->get();
        $tourDetail = Tour_Detail::where('idTour', '=', $id)->orderBy('Ngay', 'asc')->get();
        $idKhachHang = session()->get('idUSER');

        $listBinhLuan = Binh_Luan::join('khachhang','binh_luan.id_khach_hang','=','khachhang.idKhachHang')->where('idTour','=',$id)->get();
        $listBinhLuanChiTiet = Binh_Luan_Chi_Tiet::where('idTour','=',$id)->get();


        return view('displayViewTour_Customer.tour-detail', [
            'tour' => $tour,
            'anhDetail' => $anhDetail,
            'tourDetail' => $tourDetail,
            'idKhachHang' => $idKhachHang,
            'listBinhLuan' => $listBinhLuan,
            'listBinhLuanChiTiet' => $listBinhLuanChiTiet
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
