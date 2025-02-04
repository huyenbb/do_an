<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\HoaDonTour;

class DatTourNhanhController extends Controller
{
    public function datTourNhanh(Request $request)
    {
        $idTour = $request->get('id-tour');
        $idKhachHang = $request->get('id-khachhang');
        $hoaDonTour = new HoaDonTour();
        $hoaDonTour->idTour = $idTour;
        $hoaDonTour->idKhachHang = $idKhachHang;
        $hoaDonTour->save();
        $datTour = HoaDonTour::join('tour', 'hoadontour.idTour', '=', 'tour.idTour')->where('hoadontour.idKhachHang', '=', $idKhachHang)->where('hoadontour.trangThai', '=', NULL)->get();
        return view('displayViewReserveTour.gioHang', [
            'datTour' => $datTour
        ]);
    }
}
