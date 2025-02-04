<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinNhan;
use Illuminate\Support\Facades\Redirect;
class tinNhanCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $idCustomer = $request->session()->get('idUSER');
        $tinNhan = TinNhan::where('id_khach_hang','=',$idCustomer)->get();
        return view('tinNhan_Customer.index',[
            'listTinNhanCustomer' => $tinNhan
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
        $noiDung = $request->get('noiDung');
        $idKhachHang = $request->session()->get('idUSER');
        $thoiGian = date("Y/m/d"); 
        $trangThai = 0;

        $tinNhan = new TinNhan();
        $tinNhan->noi_dung = $noiDung;
        $tinNhan->id_khach_hang = $idKhachHang;
        $tinNhan->thoi_gian = $thoiGian;
        $tinNhan->trang_thai = $trangThai;
        $tinNhan->save();
        return Redirect::route('tinNhanCustomer.index');
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
