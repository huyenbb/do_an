@extends('layout.app')

@section('content')
<div class="wrapper wrapper-full-page">
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    {{-- <h2>Allocate Account For Staff</h2> --}}
                    <h4>Cung Cấp Tài Khoản Nhân Viên </h4>
                    <hr>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2">
                <div class="media">
                    <div class="media-left">
                        <div class="icon icon-danger">
                            <i class="ti ti-user"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h5> Create Account</h5>
                        Tạo Tài Khoản Theo Đúng Thông Tin Và Định Dạng
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <div class="icon icon-warning">
                            <i class="ti-bar-chart-alt"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h5> Performances</h5>
                        Tài Khoản Giúp Nhân Viên Dễ Dàng Kiểm Soát Được Số Lượng Tour,Khách Hàng,... Và Các Thông Tin Khác
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <div class="icon icon-info">
                            <i class="ti-headphone"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h5> Support</h5>
                        Nếu Gặp Vấn Đề Sự Cố Vui Lòng Liên Hệ Với Kỹ Thuật Viên
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <form method="post" action="{{ route('staff.store') }}">
                    @csrf
                    <div class="card card-plain">
                        <div class="content">
                            <div class="form-group">
                                <input type="text" placeholder="Tên Nhân Viên" class="form-control" name="ten-nhanvien" id="nameAdmin">

                            </div>
                            <div class="form-group">
                                <span style="color: rgb(248, 10, 10);display: none" id="error-nameAdmin"> Chưa Nhập Tên !</span>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control" name="emailTaiKhoan" id="emailAdmin">
                            </div>
                            <div class="form-group">
                                <span style="color: rgb(252, 7, 7);display: none" id="error-emailAdmin"> Chưa Nhập email !</span>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Password" class="form-control" name="password" id="passAdmin">
                            </div>
                            <div class="form-group">
                                <span style="color: rgb(252, 7, 7);display: none" id="error-passAdmin"> Chưa Nhập Mật Khẩu !</span>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <select class="selectpicker" data-style="btn btn-danger btn-block" title="Chức Vụ" data-size="7" name="quyen" id="quyenAdmin">
                                    @foreach ($quyenNhanVien as $vitri)
                                    <option value="{{ $vitri->idQuyen }}">{{ $vitri->nameQuyen }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <span style="color: rgb(252, 7, 7);display: none" id="error-quyenAdmin"> Lựa Chọn Chức Vụ</span>
                            </div>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button onclick="return kiemTraThemAdmin();" type="submit" class="btn btn-fill btn-danger btn-wd">
                                TẠO TÀI KHOẢN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
