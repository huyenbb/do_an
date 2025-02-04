<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MayBay;
use App\Tour;

class DisplayViewPlane_Customer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maybay = MayBay::all();
        return view('displayViewPlane_Customer.maybay', [
            'maybay' => $maybay
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
        $tour = Tour::join('maybay', 'tour.idMayBay', '=', 'maybay.idMayBay')->where('tour.idMayBay', '=', $id)->get();
        $anhMayBay = MayBay::take(1)->first();
        return view('displayViewPlane_Customer.show', [
            'tour' => $tour,
            'anhMayBay' => $anhMayBay
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
