<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDonTour;

class ShowContractReserved extends Controller
{
    public function showContract()
    {
        $hoadon = HoaDonTour::join('tour', 'hoadontour.idTour', '=', 'tour.idTour')->join('khachhang', 'hoadontour.idKhachHang', '=', 'khachhang.idKhachHang')->where('hoadontour.trangThai', '=', 1)->get();

        return view('contract.showContractReserved', [
            'hoadon' => $hoadon
        ]);
    }
}
