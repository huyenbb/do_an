<?php

namespace App\Http\Controllers;

use App\HoaDonTour;
use Illuminate\Http\Request;
use App\Tour;

class ListCustomerTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $idTour = $request->get('id-tour');

        $listCustomerTour = HoaDonTour::join('khachhang', 'hoadontour.idKhachHang', '=', 'khachhang.idKhachHang')->where('hoadontour.idTour', '=', $idTour)->where('hoadontour.trangThai', '=', 1)->get();
        $tour = Tour::where('idTour', '=', $idTour)->first();
        return view('manageTour.contract', [
            'listCustomerTour' => $listCustomerTour,
            'tour' => $tour
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
