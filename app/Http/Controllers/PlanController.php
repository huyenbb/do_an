<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MayBay;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $maybay = MayBay::where('nameMayBay', 'like', "%$search%")->paginate(3);
        return view('plane.index', [
            'maybay' => $maybay,
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
        $tenMayBay = $request->get('ten-maybay');
        $hangMayBay = $request->get('hang-maybay');
        $image = $request->file('image');
        $gioiThieu = $request->get('gioi-thieu');
        $nameImage = $image->getClientOriginalName();
        $folder = 'assets/image';
        $image->move($folder, $nameImage);
        $maybay = new MayBay();
        $maybay->nameMayBay = $tenMayBay;
        $maybay->hangMayBay = $hangMayBay;
        $maybay->gioiThieuHang = $gioiThieu;
        $maybay->anh = $folder . '/' . $nameImage;
        $maybay->save();
        return Redirect::route('plane.index');
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
        $maybay = MayBay::find($id);
        return view('plane.edit', [
            'maybay' => $maybay
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
        $tenMayBay = $request->get('ten-maybay');
        $gioiThieu = $request->get('gioi-thieu');
        $maybay = MayBay::find($id);
        $maybay->nameMayBay = $tenMayBay;
        $maybay->gioiThieuHang = $gioiThieu;
        $maybay->save();
        return Redirect::route('plane.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MayBay::find($id)->delete();
        return Redirect::route('plane.index');
    }
}
