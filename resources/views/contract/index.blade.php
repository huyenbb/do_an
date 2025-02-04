@extends('layout.app')


@section('content')
<br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <a href="{{ route('showContract') }}" class="btn btn-danger btn-fill btn-wd">Các Tour Đã Được Đặt</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <!--- form tìm kiếm --->
            <div class="row">
                <div class="col-md-12">
                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <button class="btn btn-wd btn-warning btn-fill btn-magnify">TÌM KIẾM</button>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" name="search" class="form-control"
                                placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
            <!------------------>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">DANH SÁCH HÓA ĐƠN</h4>
                            <p class="category">THÔNG TIN CÁC LOẠI HÓA ĐƠN SẼ ĐƯỢC HIỂN THỊ TẠI ĐÂY</p>
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID HỢP ĐỒNG</th>
                                        <th class="text-center">Tên Tour</th>
                                        <th class="text-center">Tên Khách Hàng</th>
                                        <th class="text-center">Ngày Đặt Tour</th>
                                        <th class="text-center">Tổng Tiền</th>
                                        <th class="text-center" colspan="3">CHỨC NĂNG</th>
                                    </tr>
                                </thead>

                                @foreach ($hoadon as $HoaDon)
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $HoaDon->idHoaDon }}</td>
                                            <td class="text-center">{{ $HoaDon->nameTour }}</td>
                                            <td class="text-center">{{ $HoaDon->nameKhachHang }}</td>
                                            <td class="text-center">{{ $HoaDon->ngayDatTour }}</td>
                                            <td class="text-center">{{ number_format($HoaDon->tongTien, 0, '.', '.') }} VNĐ
                                            </td>
                                            <td class="text-center">

                                                <a href="{{ route('contract.show', $HoaDon->idHoaDon) }}"
                                                    class="btn btn-sm btn-fill">CHI TIẾT</a>

                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('contract.update', $HoaDon->idHoaDon) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-sm btn-fill">DUYỆT</button>
                                                </form>
                                            </td>
                                            <td class="text-center">
                                                <form method="post"
                                                    action="{{ route('contract.destroy', $HoaDon->idHoaDon) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-fill">HỦY BỎ</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>

        </div>
    </div>
@endsection
