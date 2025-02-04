<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tourdatnhieu extends Controller
{
    public function TourDatNhieu(Request $request)
    {
        $namThongKe = $request->get('nameThongKe');
        // $thongKe1 = DB::select(DB::raw(" SELECT month(ngayDat) AS thongkethang,SUM(thanhtien)
        // as tongTien FROM `hoadon` WHERE idTrangThaiHoaDon = 3 AND year(ngayDat) = 2022 GROUP BY (thongkethang)"));

        // $obj = json_decode(json_encode($thongKe1), FALSE);


        $TourDatNhieu = DB::select(DB::raw(" SELECT tour.nameTour,COUNT(hoadontour.idHoaDon) as SoLuong_HDCT FROM `hoadontour` INNER JOIN tour ON tour.idTour = hoadontour.idTour WHERE hoadontour.trangThai = 1 AND YEAR(hoadontour.ngayDatTour) = $namThongKe  GROUP BY (tour.nameTour) ORDER BY SoLuong_HDCT DESC  "));

        $obj = json_decode(json_encode($TourDatNhieu), FALSE);


        return view('profit.TourDatNhieu', [
            'TourDatNhieu' => $obj
        ]);

       
    }
}
