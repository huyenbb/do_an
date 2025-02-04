<?php

namespace App\Http\Controllers;

use App\BaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baiviet = BaiViet::all();
        return view('post.index', [
            'baiviet' => $baiviet
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tieuDe = $request->get('tieu-de');
        $noiDung = $request->get('noi-dung');
        $tomTat = $request->get('tom-tat');
        $ngayDang = date('d-m-y');


        $image = $request->file('image');
        $folder = 'assets/image';
        $nameImage = $image->getClientOriginalName();
        $image->move($folder, $nameImage);

        $baiviet = new BaiViet();
        $baiviet->tieuDe = $tieuDe;
        $baiviet->noiDung = $noiDung;
        $baiviet->tomTat = $tomTat;
        $baiviet->anh = $folder . '/' . $nameImage;
        $baiviet->ngayDang = $ngayDang;
        $baiviet->save();




        return Redirect::route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $baiviet = BaiViet::find($id)->first();
        return view('post.show', [
            'baiviet' => $baiviet
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
        $baiviet = BaiViet::find($id)->first();
        return view('post.edit', [
            'baiviet' => $baiviet
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
        $tieuDe = $request->get('tieu-de');
        $tomTat = $request->get('tom-tat');
        $noiDung = $request->get('noi-dung');
        $ngayDang = $request->get('ngay-dang');


        $baiviet = BaiViet::find($id)->first();
        $baiviet->tieuDe = $tieuDe;
        $baiviet->noiDung = $noiDung;
        $baiviet->tomTat = $tomTat;
        $baiviet->ngayDang = $ngayDang;
        $baiviet->save();
        return Redirect::route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BaiViet::find($id)->delete();
        return Redirect::route('post.index');
    }
}
