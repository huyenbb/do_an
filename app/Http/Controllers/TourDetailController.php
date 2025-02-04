<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\DiaDiem;
use App\Tour_Detail;
use Illuminate\Support\Facades\Redirect;

class TourDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $idTour = $request->get('id-tour');
        $tour = Tour::where('idTour', '=', $idTour)->first();
        $tourDetail = Tour_Detail::where('idTour', '=', $idTour)->orderBy('Ngay', 'asc')->get();


        return view('tour_detail.index', [
            'tour' => $tour,
            'tourDetail' => $tourDetail
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $idTour = $request->get('id-tour');
        $tour = Tour::where('idtour', '=', $idTour)->first();
        $diadiem = DiaDiem::all();
        return view('tour_detail.create', [
            'tour' => $tour,
            'diadiem' => $diadiem
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
        $idTour = $request->get('id-tour');
        $diemXuatPhat = $request->get('diem-xuatphat');
        $diemDen = $request->get('diem-den');
        $gioBatDau = $request->get('gio-batdau');
        $gioDen = $request->get('gio-ketthuc');
        $ngayLichTrinh = $request->get('ngay-lichtrinh');
        $noiDung = $request->get('noi-dung');
        $image = $request->file('image');
        $folder = 'assets/image';
        $nameImage = $image->getClientOriginalName();
        $image->move($folder, $nameImage);

        $tourDetail = new Tour_Detail();
        $tourDetail->idTour = $idTour;
        $tourDetail->diemXuatPhat = $diemXuatPhat;
        $tourDetail->diemDen = $diemDen;
        $tourDetail->gioBatDau = $gioBatDau;
        $tourDetail->gioDen = $gioDen;
        $tourDetail->ghiChu = $noiDung;
        $tourDetail->Ngay = $ngayLichTrinh;
        $tourDetail->anh = $folder . '/' . $nameImage;
        $tourDetail->save();
        return Redirect::route('manageTour.index');
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
    }

    public function delete(Request $request)
    {
        $idTour = $request->get('id-tour');
        $Ngay = $request->get('ngay');
        Tour_Detail::where('idTour', '=', $idTour)->where('Ngay', '=', $Ngay)->delete();
        return Redirect::route('manageTour.index');
    }
}
