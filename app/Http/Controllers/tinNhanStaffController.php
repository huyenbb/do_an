<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinNhan;
use Illuminate\Support\Facades\Redirect;
class tinNhanStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $tinNhan = TinNhan::join('khachhang','tin_nhan.id_khach_hang','=','khachhang.idKhachHang')->where('tin_nhan.trang_thai','=',0)->get();
        return view('tinNhan_Staff.danhSachTinNhan',[
            'listTinNhan' => $tinNhan
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
     
        $idKhachHang = $request->get('idCustomer');
        $listTinNhan = TinNhan::join('khachhang','tin_nhan.id_khach_hang','=','khachhang.idKhachHang')->where('tin_nhan.id_khach_hang','=',$idKhachHang)->orderBy('tin_nhan.id_tin_nhan','ASC')->get();
        return view('tinNhan_Staff.index',[
            "listTinNhan" => $listTinNhan
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
        $idKhachHang = $request->get('idCustomer');
        $idAdmin = $request->session()->get('idADMIN');
        $thoiGian = date("Y/m/d"); 
        $noiDung = $request->get('tinNhan');
        $idTinNhan = $request->get('idTinNhan');


       

        $tinNhan = new TinNhan();
        $tinNhan->noi_dung = $noiDung;
        $tinNhan->id_khach_hang = $idKhachHang;
        $tinNhan->thoi_gian = $thoiGian;
        $tinNhan->id_nhan_vien = $idAdmin;
        $tinNhan->save();

        
        return Redirect::route('tinNhanStaff.show',$idKhachHang);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idKhachHang = $id;
        $tinNhanCustomer = TinNhan::where('id_khach_hang','=',$idKhachHang)->whereNull('id_nhan_vien')->update(['trang_thai' => 1]);; 
        return Redirect::route('tinNhanStaff.create',['idCustomer'=>$idKhachHang]);
        // return $idKhachHang;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
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
