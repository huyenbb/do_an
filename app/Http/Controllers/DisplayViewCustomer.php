<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\DiaDiem;
use App\KhachSan;
use App\MayBay;
use App\BaiViet;

class DisplayViewCustomer extends Controller
{
    public function displayInformation()
    {
        $tour = Tour::take(9)->where('soLuongNguoi', '>', 0)->get();
        $diadiem = DiaDiem::take(6)->get();
        $maybay = MayBay::take(4)->get();
        $khachsan = KhachSan::take(6)->get();

        $baiviet = BaiViet::take(4)->get();
        return view('trangchu-USER', [
            'tour' => $tour,
            'diadiem' => $diadiem,
            'maybay' => $maybay,
            'khachsan' => $khachsan,
            'baiviet' => $baiviet
        ]);
    }
}
