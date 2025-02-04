@extends('layout.app')

@section('content')
<div class="wrapper wrapper-full-page">
<div class="content">
    <form method="post" action="{{ route('tourDetail.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <h4>Thêm Lịch Trình Theo Ngày</h4>
                    <hr>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2">
                 <div class="card card-plain">
                            <div class="content">
                                <div class="row">                       
                                <h5>Điểm Xuất Phát</h5>
                                <div class="col-sm-6">
                                    <select class="selectpicker" data-style="btn btn-danger btn-block" title="Điểm Xuất Phát" data-size="7" name="diem-xuatphat" required>
                                        @foreach ($diadiem as $diaDiem)
                                        <option value="{{ $diaDiem->tenDiaDiem }}" >{{ $diaDiem->tenDiaDiem }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                                <div class="row">                               
                                <h5>Điểm Đến</h5>
                                <div class="col-sm-6">
                                    <select class="selectpicker" data-style="btn btn-danger btn-block" title="Điểm Đến" data-size="7" name="diem-den" required>
                                        @foreach ($diadiem as $diaDiem)
                                        <option value="{{ $diaDiem->tenDiaDiem }}">{{ $diaDiem->tenDiaDiem }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                                <div class="row">
                                    <h5>Giờ Bắt Đầu</h5>
                                    <input type="time" class="form-control" name="gio-batdau" required>
                                </div>
                                <div class="row">
                                    <h5>Giờ Kết Thúc</h5>
                                    <input type="time" class="form-control" name="gio-ketthuc" required>
                                </div>
                            </div>
                
                        </div>               
            </div>           
            <div class="col-md-4">              
                    <div class="card card-plain">
                        <div class="content">
                            <h6>Ngày Thứ Bao Nhiêu Trong Lịch Trình Tour</h6>
                            <div class="form-group">
                                <input type="number" placeholder="Nhập Ngày" class="form-control" name="ngay-lichtrinh" required>
                            </div>
                            <h6>Nhập Nội Dung Lịch Trình</h6>
                            <textarea name="noi-dung" id="" cols="50" rows="15" class="form-control" placeholder="Nhập Nội Dung" required></textarea>
                        </div>
                        <br>
                        <div class="row">
                            <h6>Chọn Ảnh Lịch Trình</h6>
                            <div class="col-sm-6">         
                                <p class="btn btn-danger btn-fill btn-wd">Choose Image                                                     
                                <input type="file" name="image" required>
                            </p>
                            </div>
                        </div>
                        <br>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-fill btn-danger btn-wd">Tạo Lịch Trình</button>
                        </div>
                    </div>
                
            </div>
        </form>
        </div>
    </div>
</div>
</div>
@endsection