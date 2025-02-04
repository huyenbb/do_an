@extends('layout.app')

@section('content')
<div class="wrapper wrapper-full-page">
<div class="content">
    <div class="container">
        <form method="post" action="{{ route('manageTour.update',$tour->idTour) }}">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <h2>CẬP NHẬT TOUR</h2>
                    <h4>Địa Điểm - Ngày - Ghi Chú </h4>
                    <hr>
                    <img src="{{ URL::to($tour->anhTour) }}" width="800px">
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2">
                <div class="content">
                    <div class="form-group">
                        <h6>Tên Tour</h6>
                        <input type="text" placeholder="Tên Nhân Viên" class="form-control" name="ten-tour" value="{{ $tour->nameTour }}" required>
                    </div>
                    <div class="form-group">
                        <h6>Tiêu Đề</h6>
                        <textarea name="tieu-de" cols="48" rows="5" class="form-control" placeholder="Nhập Tiêu Đề Tại Đây" required>{{ $tour->tieuDe }}</textarea>
                    </div>   
                    <div class="form-group">
                        <h6>Giới Thiệu Về Tour </h6>
                        <textarea name="gioi-thieu" cols="48" rows="10" class="form-control" placeholder="Giới Thiệu Về Tour,Địa Điểm,.... " required>{{ $tour->gioiThieu }}</textarea>
                    </div>                 
                </div>
            </div>
            <div class="col-md-4">             
                    <div class="card card-plain">
                        <div class="content">
                            {{-- <div class="form-group">
                                <h6>Điểm Xuất Phát</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="btn btn-danger btn-fill btn-wd">{{ $tour->diemXuatPhat }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Điểm Đến</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="btn btn-danger btn-fill btn-wd">{{ $tour->diemDen }}</p>
                                    </div>
                                    </div>
                            </div> --}}
                            <div class="form-group">
                                <h6>Ngày Xuất Phát</h6>
                                <input type="date" class="form-control" name="ngay-xuatphat" value="{{ $tour->ngayKhoiHanh }}" required>
                            </div>
                            <div class="form-group">
                                <h6>Ngày Kết Thúc</h6>
                                <input type="date" class="form-control" name="ngay-ketthuc" value="{{ $tour->ngayKetThuc }}" required>
                            </div>
                            <div class="form-group">
                                <h6>Số Lượng Người Trong Tour</h6>
                                <input type="number" class="form-control" name="so-nguoi" value="{{ $tour->soLuongNguoi }}" required>
                            </div>
                            <div class="form-group">
                                <h6>Giá vé Người Lớn</h6>
                                <input type="number" class="form-control" name="gia-veNguoiLon" value="{{ $tour->giaNguoiLon }}" required>
                            </div>
                            <div class="form-group">
                                <h6>Giá vé Trẻ Em (>10 tuổi)</h6>
                                <input type="number" class="form-control" name="gia-veTreEm" value="{{ $tour->giaTreEm }}" required>
                            </div>
                            
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-fill btn-danger btn-wd" onclick="return confirm('Bạn Có Muốn Cập Nhật Không ?')">Cập Nhật</button>
                        </div>
                    </div>
                
            </div>
        </div>
    </form>
    </div>

</div>
</div>
@endsection