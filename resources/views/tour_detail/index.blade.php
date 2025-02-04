@extends('layout.app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <form action="{{ route('tourDetail.create') }}" method="get">
                        <input type="hidden" value="{{ $tour->idTour }}" name="id-tour">
                        <button class="btn btn-fill btn-danger btn-wd">Thêm Lịch Trình</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <h2>Chi Tiết Tour : {{ $tour->nameTour }} </h2>
                    <div>
                        <img src="{{ URL::to($tour->anhTour) }}" width="800px">
                    </div>
                </div>
            </div>
        </div>

        <!---- Phần hiển thị tour chi tiết theo ngày,lịch trình ---->
        @foreach ($tourDetail as $tourdetail)
            <div class="wrapper wrapper-full-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="header-text">
                                    <h2>Lịch Trình</h2>
                                    <h4 style="display: inline-block">Lịch Trình Ngày : {{ $tourdetail->Ngay }} (
                                        {{ $tourdetail->diemXuatPhat . '->' . $tourdetail->diemDen }} )</h4>
                                    
                                    <div style="display: inline-block">
                                        <form action="{{ route('deleteDetailTour') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id-tour" value="{{ $tourdetail->idTour }}">
                                            <input type="hidden" name="ngay" value="{{ $tourdetail->Ngay }}">
                                            <button class="btn btn-fill btn-danger btn-wd" onclick="return confirm('Bạn Có Muốn Xóa Lịch Trình Này Không ?')">XÓA LỊCH TRÌNH</button>
                                        </form>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <div class="card card-plain">
                                    <div class="content">

                                        <h5>Điểm Xuất Phát</h5>
                                        <input type="text" value="{{ $tourdetail->diemXuatPhat }}" class="form-control"
                                            disabled>
                                        <h5>Điểm Đến</h5>
                                        <input type="text" value="{{ $tourdetail->diemDen }}" class="form-control"
                                            disabled>
                                        <h5>Giờ Bắt Đầu</h5>
                                        <input type="time" class="form-control" value="{{ $tourdetail->gioBatDau }}"
                                            disabled>
                                        <h5>Giờ Kết Thúc</h5>
                                        <input type="time" class="form-control" value="{{ $tourdetail->gioDen }}"
                                            disabled>
                                            <h6>Ngày Thứ Bao Nhiêu Trong Lịch Trình Tour</h6>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="{{ $tourdetail->Ngay }}"
                                                    disabled>
                                            </div>
                                            <h6> Nội Dung Lịch Trình</h6>
                                            <textarea name="noi-dung" id="" cols="50" rows="15" class="form-control" placeholder="Nhập Nội Dung"
                                                disabled> {{ $tourdetail->ghiChu }}</textarea>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-plain">
                                    <div class="content">
                                        <h6> Ảnh Lịch Trình</h6>
                                        <img src="{{ URL::to($tourdetail->anh) }}" width="800px">
                                    </div>
                                    <br>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <hr>
            <!---------------------------------------------------------->
        @endforeach
    </div>
    <br>
@endsection
