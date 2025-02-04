<?php

namespace App\Http\Controllers;

use App\Anh_Detail;
use App\DiaDiem;
use App\Tour;
use App\MayBay;
use App\KhachSan;
use App\HoaDonTour;
use App\Binh_Luan;
use App\Binh_Luan_Chi_Tiet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ManageTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $tour = Tour::where('nameTour', 'like', "%$search%")->where('trangThai','=',0)->orWhere('trangThai','=',1)->paginate(5);
        return view('manageTour.index', [
            'tour' => $tour,
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
        $diadiem = DiaDiem::all();
        $mayBay = MayBay::all();
        $khachSan = KhachSan::all();
        return view('manageTour.create', [
            'diadiem' => $diadiem,
            'mayBay' => $mayBay,
            'khachSan' => $khachSan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tenDiaDiem = $request->get('ten-tour');
        $tieuDe = $request->get('tieu-de');
        $gioiThieu = $request->get('gioi-thieu');
        $diemXuatPhat = $request->get('diem-xuatphat');
        $diemDen = $request->get('diem-den');
        $ngayXuatPhat = $request->get('ngay-xuatphat');
        $ngayKetThuc = $request->get('ngay-ketthuc');
        $soNguoi = $request->get('so-nguoi');
        $giaVeNguoiLon = $request->get('gia-veNguoiLon');
        $giaVeTreEm = $request->get('gia-veTreEm');
        $image = $request->file('image');
        $folder = 'assets/image';
        $nameFolder = $image->getClientOriginalName();
        $image->move($folder, $nameFolder);
        $mayBay = $request->get('may-bay');
        $khachSan = $request->get('khach-san');

        $tour = new Tour();
        $tour->nameTour = $tenDiaDiem;
        $tour->tieuDe = $tieuDe;
        $tour->anhTour = $folder . '/' . $nameFolder;
        $tour->diemXuatPhat = $diemXuatPhat;
        $tour->diemDen = $diemDen;
        $tour->ngayKhoiHanh = $ngayXuatPhat;
        $tour->ngayKetThuc = $ngayKetThuc;
        $tour->soLuongNguoi = $soNguoi;
        $tour->giaNguoiLon = $giaVeNguoiLon;
        $tour->giaTreEm = $giaVeTreEm;
        $tour->gioiThieu = $gioiThieu;
        $tour->trangThai = 0;
        $tour->idMayBay = $mayBay;
        $tour->idKhachSan = $khachSan;
        $tour->save();
        return Redirect::route('manageTour.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::join('maybay', 'tour.idMayBay', '=', 'maybay.idMayBay')->join('khachsan', 'tour.idKhachSan', '=', 'khachsan.idKhachSan')->where('tour.idTour', '=', $id)->first();
        $anhDetail = Anh_Detail::where('idTour', '=', $tour->idTour)->get();
        return view('manageTour.show', [
            'tour' => $tour,
            'anhDetail' => $anhDetail
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);
        return view('manageTour.edit', [
            'tour' => $tour
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
        $tenDiaDiem = $request->get('ten-tour');
        $tieuDe = $request->get('tieu-de');
        $gioiThieu = $request->get('gioi-thieu');
        $ngayXuatPhat = $request->get('ngay-xuatphat');
        $ngayKetThuc = $request->get('ngay-ketthuc');
        $soNguoi = $request->get('so-nguoi');
        $giaVeNguoiLon = $request->get('gia-veNguoiLon');
        $giaVeTreEm = $request->get('gia-veTreEm');

        $tour = Tour::find($id);
        $tour->nameTour = $tenDiaDiem;
        $tour->tieuDe = $tieuDe;
        $tour->ngayKhoiHanh = $ngayXuatPhat;
        $tour->ngayKetThuc = $ngayKetThuc;
        $tour->soLuongNguoi = $soNguoi;
        $tour->giaNguoiLon = $giaVeNguoiLon;
        $tour->giaTreEm = $giaVeTreEm;
        $tour->gioiThieu = $gioiThieu;
        $tour->save();
        return Redirect::route('manageTour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        $tour->trangThai = 2;
        $tour->save();
        return Redirect::route('manageTour.index');
    }
}
