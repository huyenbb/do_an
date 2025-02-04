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
                                <form method="" action="">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" value="" placeholder="Nhập Địa Điểm hoặc Thành Phố Bạn Muốn Tìm Kiếm"
                                                    class="form-control" id="bar-search"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-danger btn-block" id="bar-seach"><i
                                                    class="nc-icon nc-zoom-split"></i> &nbsp; Search</a>
                                            </button>
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


<!---- Đây là list tour ---->
<div class="projects-3" id="projects-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <div class="space-top"></div>
                <h6 class="category">Danh Sách Tour</h6>
                <h2 class="title">Kết Quả Tìm Được</h2>
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
                        <h6 class="card-category">{{ $Tour->nameTour }}</h6>
                        <h4 class="card-title">{{ $Tour->tieuDe }}</h4>
                        <p class="card-description">
                           {{ 'Ngày Bắt Đầu: '.$Tour->ngayKhoiHanh }}
                        </p>
                        <p class="card-description">
                            {{ 'Ngày Kết Thúc: '.$Tour->ngayKetThuc }}
                         </p>
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