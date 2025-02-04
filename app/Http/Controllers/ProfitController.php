<?php

namespace App\Http\Controllers;

use App\HoaDonTour;
use Illuminate\Http\Request;
use DB;

class ProfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ProfitOfAllMonths = HoaDonTour::where('ngayDatTour', 'LIKE', "%2022%")->sum('tongTien');
        return view('profit.index', [
            'ProfitOfAllMonths' => $ProfitOfAllMonths
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
        $month = $id;
        $Profit = HoaDonTour::whereMonth('ngayDatTour', $id)->whereYear('ngayDatTour', 2022)->sum('tongTien');
        $SumOfTour = HoaDonTour::whereMonth('ngayDatTour', $id)->whereYear('ngayDatTour', 2022)->count('idHoaDon');
        if ($Profit == 0) {
            $Profit = 'Tháng Chưa Có Doanh  Thu';
            return $Profit;
        } else {
            return view('profit.show', [
                'Profit' => $Profit,
                'SumOfTour' => $SumOfTour,
                'month' => $month
            ]);
        }
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
