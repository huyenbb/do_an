<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Binh_Luan;
use Illuminate\Support\Facades\Redirect;

class binhLuan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $noiDung = $request->get('binhLuanKhachHang');
        $idTour = $request->get('idTour');
        $idKhachHang = session()->get('idUSER');
        $thoiGian = date("Y/m/d");
        
        $binhLuan = new Binh_Luan();
        $binhLuan->noi_dung = $noiDung;
        $binhLuan->idTour = $idTour;
        $binhLuan->id_khach_hang = $idKhachHang;
        $binhLuan->thoi_gian = $thoiGian;
        $binhLuan->trang_thai = 0;
        $binhLuan->save();
        return Redirect::route('tour.show',$idTour);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
