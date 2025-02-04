<?php

namespace App\Http\Controllers;

use App\HoaDonTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class thongkedoanhthu extends Controller
{
    public function ThongKeSLnam(Request $request)
    {

        $namThongKe = $request->get('nameThongKe');

        $thongKeNam = HoaDonTour::whereyear('ngayDatTour',  $namThongKe)->where('trangthai', '=', '1')->sum('tongTien');

        $thongKeThang = DB::select(DB::raw(" SELECT month(ngayDatTour) AS thongkethang,SUM(tongTien)
        as tongTien FROM `hoadontour` WHERE trangthai = 1 AND year(ngayDatTour) = $namThongKe GROUP BY (thongkethang)"));



        $thongKe1 = json_decode(json_encode($thongKeThang), true);

        $thang = [];


        foreach ($thongKe1 as $key => $value) {
            $thang[] = $value['thongkethang'];
        }

        for ($i = 1; $i < 13; $i++) {
            $flag = true;
            foreach ($thang as $key => $item) {
                if ($item == $i) {
                    $flag = false;
                    break;
                }
            }
            if ($flag) {
                $thongKe1[] = [
                    'thongkethang' => $i,
                    'tongTien' => 0
                ];
            }
        }


        usort($thongKe1, function ($a, $b) {
            return $a['thongkethang'] - $b['thongkethang'];
        });


        
        $thongKeTheoThang = json_decode(json_encode($thongKe1), FALSE);
  
      
        return view('profit.thongkedoanhthu', [
            'thongkenam' => $thongKeNam,
            'thongKe1' => $thongKeTheoThang
        ]);
    }
}
