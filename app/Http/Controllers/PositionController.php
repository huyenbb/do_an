<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quyen;
use Illuminate\Support\Facades\Redirect;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*hiển thị toàn bộ bản ghi trong database */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $listPosition = Quyen::where('nameQuyen', 'like', "%$search%")->paginate(3);
        return view('position.index', [
            "listPosition" => $listPosition,
            "search" => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /* Thêm bản ghi vào database */
    public function store(Request $request)
    {
        $namePosition = $request->get('name-position');
        $quyen = new Quyen();
        $quyen->nameQuyen = $namePosition;
        $quyen->save();
        return Redirect::route('position.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $position = Quyen::where('idQuyen', '=', $id)->first();
        // $position = Quyen::find($id);
        // return view('update-position', [
        //     'position' => $position
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $position = Quyen::find($id);
        return view('position.edit', [
            'position' => $position
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
        $position = Quyen::find($id);
        $position->nameQuyen = $request->get('update-position');
        $position->save();
        return Redirect::route('position.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quyen::find($id)->delete();
        return Redirect::route('position.index');
    }
}
