<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Binh_Luan;
use App\Binh_Luan_Chi_Tiet;
class binhLuanChuaDuyetAdminController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $binhLuan = Binh_Luan::join('tour','tour.idTour','binh_luan.idTour')->join('khachhang','khachhang.idKhachHang','binh_luan.id_khach_hang')->where('binh_luan.trang_thai','=',0)->get();
        return view('binhLuan_Admin.binhLuanChuaDuyet',[
            'listBinhLuan' => $binhLuan
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $idBinhLuan = $request->get('idBinhLuan');
        $binhLuan = Binh_Luan::join('tour','tour.idTour','binh_luan.idTour')->join('khachhang','khachhang.idKhachHang','binh_luan.id_khach_hang')->where('binh_luan.id_binh_luan','=',$idBinhLuan)->first();
        $binhLuanChiTiet = Binh_Luan_Chi_Tiet::where("id_binh_luan","=",$idBinhLuan)->get();
        
        return view('binhLuanChuaDoc.traLoiBinhLuanAdmin',[
            'listBinhLuan' => $binhLuan,
            'binhLuanChiTiet' => $binhLuanChiTiet
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
        $idAdmin = session()->get('idADMIN');
        $idTour = $request->get('idTour');
        $noiDung = $request->get('binhLuanAdmin');
        $thoiGian = date("Y/m/d");
        $idBinhLuan = $request->get('idBinhLuan');

        $binhLuanChiTiet = new Binh_Luan_Chi_Tiet();
        $binhLuanChiTiet->id_binh_luan = $idBinhLuan;
        $binhLuanChiTiet->noi_dung = $noiDung;
        $binhLuanChiTiet->id_nhan_vien = $idAdmin;
        $binhLuanChiTiet->thoi_gian = $thoiGian;
        $binhLuanChiTiet->idTour = $idTour;
        $binhLuanChiTiet->save();

        $binhLuan = Binh_Luan::where('id_binh_luan','=',$idBinhLuan)->first();
        $binhLuan->trang_thai = 1;
        $binhLuan->save();

        return Redirect::route('binhLuanChuaDuyet.index');
   
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
