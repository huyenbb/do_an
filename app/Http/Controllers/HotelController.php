<?php

namespace App\Http\Controllers;

use App\KhachSan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $khachsan = KhachSan::where('nameKhachSan', 'like', "%$search%")->paginate(3);
        return view('hotel.index', [
            'khachsan' => $khachsan,
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
        $tenKhachSan = $request->get('ten-khachsan');
        $mieuTa = $request->get('mieuTa-khachsan');
        $image = $request->file('image');
        $folder = 'assets/image';
        $nameFolder = $image->getClientOriginalName();
        $image->move($folder, $nameFolder);
        $khachsan = new KhachSan();
        $khachsan->nameKhachSan = $tenKhachSan;
        $khachsan->mieuTa = $mieuTa;
        $khachsan->anh = $folder . '/' . $nameFolder;
        $khachsan->save();
        return Redirect::route('hotel.index');
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
        $khachsan = KhachSan::find($id);
        return view('hotel.edit', [
            'khachsan' => $khachsan
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
        $tenKhachSan = $request->get('ten-khachsan');
        $mieuTa = $request->get('mieuTa-khachsan');
        $khachsan = KhachSan::find($id);
        $khachsan->nameKhachSan = $tenKhachSan;
        $khachsan->mieuTa = $mieuTa;
        $khachsan->save();
        return Redirect::route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KhachSan::find($id)->delete();
        return Redirect::route('hotel.index');
    }
}
