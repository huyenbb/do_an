<?php

namespace App\Http\Controllers;

use AnhDetail;
use App\Anh_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Tour;

class ImageDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $anh = Anh_Detail::join('tour', 'anh_detail.idTour', '=', 'tour.idtour')->get();
        return view('imageDetail.index', [
            'anh' => $anh
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
        $tour = Tour::where('idTour', '=', $idTour)->first();
        return view('imageDetail.create', [
            'tour' => $tour
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
        $image = $request->file('image');
        $idTour = $request->get('idTour');
        $nameImage = $image->getClientOriginalName();
        $folder = 'assets/image';
        $image->move($folder, $nameImage);
        $imageDetail = new Anh_Detail();
        $imageDetail->idTour = $idTour;
        $imageDetail->anh = $folder . '/' . $nameImage;
        $imageDetail->save();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Anh_Detail::where('idAnh', '=', $id)->first();
        return view('imageDetail.edit', [
            'image' => $image
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
        $image = $request->file('image-update');
        $folder = 'assets/image';
        $nameFolder = $image->getClientOriginalName();
        $image->move($folder, $nameFolder);
        $anhDetail = Anh_Detail::find($id);
        $anhDetail->anh = $folder . '/' . $nameFolder;
        $anhDetail->save();
        return Redirect::route('manageTour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anh_Detail::find($id)->delete();
        return Redirect::route('manageTour.index');
    }
}
