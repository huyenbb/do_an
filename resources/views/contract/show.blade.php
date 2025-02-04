@extends('layout.app')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Tên Tour : {{ $hoadon->nameTour }}</h2>
                <h4 class="text-center">Ngày Khởi Hành : {{ $hoadon->ngayKhoiHanh }} --- Ngày Kết Thúc : {{ $hoadon->ngayKetThuc }}</h4>
                <h4 class="text-center">Số Chỗ Còn : {{ $hoadon->soLuongNguoi }}</h4>
                <div class="text-center">
                    <img src="{{ URL::to($hoadon->anhTour) }}" width="800px">
                </div>
                <h2 >Thông Tin Khách Hàng</h2>
                <br>
                <div>
                    <h6>Tên Khách Hàng</h6>
                    <input type="text" value="{{ $hoadon->nameKhachHang }}" disabled class="form-control">
                    <br>

                    <h6>SĐT</h6>
                    <input type="text" value="{{ $hoadon->sdt }}" disabled class="form-control">
                    <br>

                    <h6>Số Lượng Người Lớn</h6>
                    <input type="text" value="{{ $hoadon->soLuongNguoiLon }}" disabled class="form-control">
                    <br>

                    <h6>Số Lượng Trẻ Em</h6>
                    <input type="text" value="{{ $hoadon->soLuongTreEm }}" disabled class="form-control">
                    <br>

                    <h6>Ngày Đặt Tour</h6>
                    <input type="text" value="{{ $hoadon->ngayDatTour }}" disabled class="form-control">
                    <br>

                    <h6>Tổng Giá Tiền</h6>
                    <input type="text" value="{{number_format($hoadon->tongTien,  0, ".",".")}} VNĐ" disabled class="form-control">
                    <br>

                    <h6>Ghi Chú</h6>
                    <textarea cols="30" rows="5" disabled class="form-control">{{ $hoadon->ghiChu }}</textarea>
                    <br>


                </div>

            </div>
        </div>
    </div>
    <br>
@endsection
