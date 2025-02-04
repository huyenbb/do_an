<?php

namespace App\Http\Controllers;

use App\DiaDiem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DiaDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $diadiem = DiaDiem::where('tenDiaDiem', 'like', "%$search%")->paginate(3);
        return view('destination.index', [
            'diadiem' => $diadiem,
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
        $tenDiaDiem = $request->get('ten-diadiem');
        $image = $request->file('image');
        $folder = 'assets/image';
        $nameFolder = $image->getClientOriginalName();
        $image->move($folder, $nameFolder);
        $diadiem = new DiaDiem();
        $diadiem->tenDiaDiem = $tenDiaDiem;
        $diadiem->anh = $folder . '/' . $nameFolder;
        $diadiem->save();
        return Redirect::route('destination.index');
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
        $diadiem = DiaDiem::find($id);
        return view('destination.edit', [
            'diadiem' => $diadiem
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
        $tenDiaDiem = $request->get('ten-diadiem');
        $diadiem = DiaDiem::find($id);
        $diadiem->tenDiaDiem = $tenDiaDiem;
        $diadiem->save();
        return Redirect::route('destination.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DiaDiem::find($id)->delete();
        return Redirect::route('destination.index');
    }
}
