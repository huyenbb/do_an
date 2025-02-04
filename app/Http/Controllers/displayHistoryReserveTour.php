<?php

namespace App\Http\Controllers;

use App\HoaDonTour;
use Illuminate\Http\Request;

class displayHistoryReserveTour extends Controller
{
    public function display(Request $request)
    {
        $idKhachHang = $request->session()->get('idUSER');

        $lichSuDatTour = HoaDonTour::join('tour', 'hoadontour.idTour', '=', 'tour.idTour')->where('hoadontour.idKhachHang', '=', $idKhachHang)->where('hoadontour.trangThai', '=', 1)->get();
        return $lichSuDatTour;
    }
}
