@extends('layout1.app')

@section('content')

<!----- Đây là slide show ---->
<div class="header-3">

    <div class="page-carousel">
        <div class="filter"></div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1482690205767-61deebe15ef7?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=')">
                        <div class="filter"></div>
                        <div class="content-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 ml-auto mr-auto text-center">
                                        <h1 class="title">Du Lịch Phong Cách Riêng</h1>
                                        <h5>Trải Nghiệm Đầy Kỷ Niệm - giá Cả Hợp Lý</h5>
                                        <br />
                                        <h6>Kết Nối Với Chúng Tôi </h6>
                                        <div class="buttons">
                                            <a href="https://www.facebook.com/profile.php?id=100008142069157" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="https://www.instagram.com/trananh46/" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a href="https://mail.google.com/mail/u/1/?ogbl#inbox" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($baiviet as $BaiViet)
                   <div class="carousel-item">
                    <div class="page-header" style="background-image: url('{{ URL::to($BaiViet->anh) }}');">
                        <div class="filter"></div>
                        <div class="content-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <h2 class="title">{{ $BaiViet->tieuDe }}</h2>
                                        <h5>{{ $BaiViet->tomTat }}</h5>
                                        <br />
                                        <div class="buttons">
                                            <a href="{{ route('baiviet.show', $BaiViet->idBaiViet) }}" class="btn btn-danger btn-round  btn-lg">
                                                Read More
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="fa fa-angle-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="fa fa-angle-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!----------------------------->

<!------ Đây là option --->
<div class="features-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Tại Sao Bạn Đặt Tour Của Chúng Tôi</h2>
                        <h5 class="description">Tour Chúng tôi luôn phục vụ tốt nhất cùng tâm niệm “Mỗi tour là một hành trình khám phá & trải nghiệm”,
                            Cùng đội ngũ nhân viên và đối tác luôn hết mình vì khách hàng phục vụ nhằm đem lại những chương trình tour có chất lượng đảm bảo làm hài lòng mọi khách hàng khó tính nhất</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-palette"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Máy Bay</h4>
                                <p class="description">Hãng hàng không quốc gia một trong những hãng hàng không uy tín và chất lượng hàng đầu Việt Nam luôn được hành khách lựa chọn làm bạn đồng hành</p>
                                <a href="{{ route('maybay.index') }}" class="btn btn-link btn-danger">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-bulb-63"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Khách Sạn</h4>
                                <p>Với chất lượng đạt chuẩn Quốc Tế,Khách sạn không chỉ đáp ứng hoàn hảo nhu cầu nghỉ ngơi của Quý khách mà còn mang đến những giây phút thư giãn giải trí tuyệt vời</p>
                                <a href="{{ route('khachsan.index') }}" class="btn btn-link btn-danger">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-chart-bar-32"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Tour Du Lịch</h4>
                                <p>Tour Du Lịch là thương hiệu lữ hành thuộc Bản Quyền Du Lịch chuyên cung cấp các gói Tour với dịch vụ khép kín giá rẻ tổ chức cho du khách trong nước và quốc tế.</p>
                                <a href="{{ route('tour.index') }}" class="btn btn-link btn-danger">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-sun-fog-29"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Địa Điểm</h4>
                                <p>Những địa điểm du lịch hot nhất sẽ giúp bạn dễ dàng tham khảo và lựa chọn được những điểm tham quan phù hợp nhất cho chuyến đi.
                                </p>
                                <a href="{{ route('diadiem.index') }}" class="btn btn-link btn-danger">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!------------------------->

<!---- Đây là list tour ---->
<div class="projects-3" id="projects-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <div class="space-top"></div>
                <h6 class="category">Tour Của Chúng Tôi</h6>
                <h2 class="title">Tour Được Yêu Thích Nhất</h2>
            </div>
        </div>

        <div class="row">
            @foreach ($tour as $Tour)
            <div class="col-md-4">
                <div class="card card-profile card-plain">
                    <div class="card-img-top">
                        <a href="{{ route('tour.show', $Tour->idTour) }}">
                            <img class="img" src="{{ URL::to($Tour->anhTour) }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        
                        <h6 class="card-category">Giá Người Lớn: {{number_format( $Tour->giaNguoiLon, 0, ".",".")}} VNĐ - Giá Trẻ Em: {{number_format( $Tour->giaTreEm , 0, ".",".")}} VNĐ</h6>
                        <h4 class="card-title">{{ $Tour->nameTour }}</h4>
                        <h5 class="card-title">{{ $Tour->tieuDe }}</h5>
                        <p class="card-description">
                            Ngày Khởi Hành : {{ $Tour->ngayKhoiHanh }}
                        </p>
                        <p class="card-description">
                            Ngày Kết Thúc : {{ $Tour->ngayKetThuc }}
                        </p>
                        Số Chỗ Còn Trống : <p class="btn btn-success btn-round">{{ $Tour->soLuongNguoi }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
</div>
</div>
<!---------------------------->

<!--- Đây là option Địa Điểm --->
<div class="projects-2 section section-dark">

    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h6 class="text-muted">Địa Điểm</h6>
                <h2 class="title">Điểm Địa Được Yêu Thích Nhất</h2>
                <h5 class="description">Một Trong Những Địa Điểm Được Tìm Kiếm Nhiều Nhất Hiện Nay - Bạn Có Thể Nhấp Vào Tour Để Xem Các Tour Liên Quan</h5>
            </div>
        </div>
        <div class="space-top"></div>
        <div class="row">
            @foreach ($diadiem as $DiaDiem)

            <div class="col-md-4">
                <div class="card card-plain">
                    <div class="card-img-top">
                        <a href="{{ route('diadiem.show', $DiaDiem->idDiaDiem) }}">
                            <img class="img" src="{{ URL::to($DiaDiem->anh) }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="http://www.creative-tim.com/product/paper-kit" target="_blank">
                            <h4 class="card-title">{{ $DiaDiem->tenDiaDiem }}</h4>
                        </a>
                        <h6 class="card-category text-muted">Lựa chọn cho bạn</h6>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!------------------------------>





<!---Đây là option Máy Bay --->
<div class="team-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Hãng Máy Bay</h2>
                <h5 class="description">Một Trong Những Hãng Máy Bay Trong Tour Của Bạn,Với Giá Vé Ưu Đãi</h5>
            </div>
        </div>
        <div class="row">
            @foreach ($maybay as $MayBay)

            <div class="col-md-3">
                <div class="card card-profile card-plain">
                    <div class="card-avatar">
                        <a href="{{ route('maybay.show', $MayBay->idMayBay) }}"><img src="{{ URL::to($MayBay->anh) }}" alt="..."></a>
                    </div>
                    <div class="card-body">
                        <a href="#paper-kit">
                            <div class="author">
                                <h4 class="card-title">{{ $MayBay->nameMayBay }}</h4>
                                <h6 class="card-category text-muted">VNA</h6>
                            </div>
                        </a>
                        <p class="card-description text-center">
                            {{ $MayBay->gioiThieuHang }}
                        </p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!---------------------------->


<!---Đây là option Khách Sạn -->
<div class="team-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Chuỗi Khách Sạn</h2>
                <h5 class="description">Một Trong Những Khách Sạn Đạt Chuẩn Quốc Tế</h5>
            </div>
        </div>
        <div class="space-top"></div>
        <div class="row">
            @foreach ($khachsan as $KhachSan)


            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-img-top">
                                <a href="{{ route('khachsan.show',$KhachSan->idKhachSan) }}">
                                    <img class="img" src="{{ $KhachSan->anh }}" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body text-left">
                                <h4 class="card-title">{{ $KhachSan->nameKhachSan }}</h4>
                                <p class="card-description">
                                   {{ $KhachSan->mieuTa }}
                                </p>
                                <div class="card-footer pull-left">
                                 <i class="fa fa-twitter"></i>
                                    <i class="fa fa-facebook"></i>
                                   <i class="fa fa-google-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!----------------------------->

<!------ Đây là các trang bài viết review --->
<div class="blog-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="title text-center">Bài Viết REVIEW</h2>
                <br />
            </div>
        </div>
        <div class="row">
            @foreach ($baiviet as $BaiViet)


            <div class="col-md-6">
                <div class="card card-plain card-blog text-center">
                    <div class="card-image">
                            <img class="img img-raised" src="{{ URL::to($BaiViet->anh) }}" />
                    </div>
                    <div class="card-body">

                        <h3 class="card-title">
                            {{ $BaiViet->tieuDe }}
                        </h3>
                        <p>{{ $BaiViet->tomTat }}</p>
                        <br>
                        <a href="{{ route('baiviet.show', $BaiViet->idBaiViet) }}" class="btn btn-warning btn-round"> Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!------------------------------------------->
@endsection
