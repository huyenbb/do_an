<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDonTour;
use Illuminate\Support\Facades\DB;
class trangNhapNamThongKe extends Controller
{
    public function hienThiTrangNhapNamThongKe(){

        // $thongKeNam = HoaDonTour::->where('trangthai', '=', '1')->select(YEAR('ngayDatTour'))->distinct()->get();

        $thongKeNam = DB::select("SELECT DISTINCT YEAR(ngayDatTour) as yearStatistic FROM `hoadontour` WHERE trangThai = 1 ORDER BY (yearStatistic) DESC");

        return view('trangNhapNamThongKe.nhapNamThongKeNhieuNhat',[
            "yearStatistic"=>$thongKeNam
        ]);
        // return $thongKeNam;
    }

    public function hienThiTrangNhapNamTourNhieuNhat(){
        $thongKeNam = DB::select("SELECT DISTINCT YEAR(ngayDatTour) as yearStatistic FROM `hoadontour` WHERE trangThai = 1 ORDER BY (yearStatistic) DESC");
        return view('trangNhapNamThongKe.nhapNamTourDatNhieuNhat',[
            "yearStatistic"=>$thongKeNam
        ]);

        
    }
}
