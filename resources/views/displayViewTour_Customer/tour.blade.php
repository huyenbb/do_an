@extends('layout1.app')

@section('content')

<!----Phần header ---->
<div class="header-2">
    <div class="page-header"
        style="background-image: url('{{ URL::to($anhTour->anhTour) }}');">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h1 class="title"> Tìm Kiếm Tour</h1>
                        <br />
                    </div>
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card card-raised card-form-horizontal no-transition">
                            <div class="card-body">
                                <form method="get" action="{{ route('tour.index') }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-3">                                           
                                                <input type="text" value="{{ $search }}" placeholder="Tên Địa Điểm" class="form-control" name="search"/>                                                  
                                        </div>
                                       
                                        <div class="col-md-3">
                                            <button class="btn btn-danger btn-block"><i class="nc-icon nc-zoom-split"></i> &nbsp; Tìm Kiếm</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<!--------------------->
@if (Session::exists('announcement'))
    
<div id="notifications">
    <div class="alert alert-danger alert-with-icon" data-notify="container">
        <div class="container">
            <div class="alert-wrapper">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="nc-icon nc-simple-remove"></i>
                </button>
                <div class="message"><i class="nc-icon nc-bell-55"></i><h6>{{ Session::get('announcement') }}</h6></div>
            </div>
        </div>
    </div>
</div>
@endif

@if (Session::exists('ReserveSuccess'))
    
<div id="notifications">
    <div class="alert alert-danger alert-with-icon" data-notify="container">
        <div class="container">
            <div class="alert-wrapper">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="nc-icon nc-simple-remove"></i>
                </button>
                <div class="message"><i class="nc-icon nc-bell-55"></i><h6>{{ Session::get('ReserveSuccess') }} - Yêu Cầu Đặt Tour Của Bạn Sẽ Được Xét Duyệt - Vui Lòng Chờ</h6></div>
            </div>
        </div>
    </div>
</div>
@endif


<!---- Đây là list tour ---->
<div class="projects-3" id="projects-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <div class="space-top"></div>
                <h6 class="category">Danh Sách Tour</h6>
                <h2 class="title">Tour Được Yêu Thích Nhất</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($tour as $Tour)   
                  
            <div class="col-md-4">
                <div class="card card-profile card-plain">
                    <div class="card-img-top">
                        <a href="{{ route('tour.show', $Tour->idTour) }}">
                            <img class="img" src="{{ $Tour->anhTour }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category">{{ $Tour->nameTour }}</h6>
                        <h4 class="card-title">{{ $Tour->tieuDe }}</h4>
                        <p class="card-description">
                           {{ 'Ngày Bắt Đầu: '.$Tour->ngayKhoiHanh }}
                        </p>
                        <p class="card-description">
                            {{ 'Ngày Kết Thúc: '.$Tour->ngayKetThuc }}
                         </p>
                             Số Chỗ Còn Trống : <p class="btn btn-success btn-round">{{ $Tour->soLuongNguoi }}</p>                       
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!---------------------------->

<!---- Số trang ---->

<!------------------>
@endsection