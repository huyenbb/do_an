<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachSan;
use App\Tour;

class DisplayViewHotel_Customer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $khachsan = KhachSan::where('nameKhachSan', 'like', "%$search%")->get();
        $anhKhachSan = KhachSan::take(1)->first();
        return view('displayViewHotel_Customer.khachsan', [
            'khachsan' => $khachsan,
            'anhKhachSan' => $anhKhachSan,
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
        $tour = Tour::join('khachsan', 'tour.idKhachSan', '=', 'khachsan.idKhachSan')->where('tour.idKhachSan', '=', $id)->get();
        $anhKhachSan = KhachSan::take(1)->first();
        return view('displayViewHotel_Customer.show', [
            'tour' => $tour,
            'anhKhachSan' => $anhKhachSan
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
