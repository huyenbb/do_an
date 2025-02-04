@extends('layout1.app')

@section('content')

<!---- phần header ---->
<div class="header-2">
    
    <div class="page-header"
        style="background-image: url('{{ URL::to($anhDiaDiem->anh) }}');">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h1 class="title"> Tìm Kiếm Địa Điểm</h1>
                        <br />
                    </div>
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card card-raised card-form-horizontal no-transition">
                            <div class="card-body">
                                <form method="" action="">
                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-3">                                           
                                                <input type="text" value="{{ $search }}" placeholder="Nhập Địa Điểm Tìm Kiếm" class="form-control" name="search"/>                                                  
                                        </div>
                                       
                                        <div class="col-md-3">
                                            <button class="btn btn-danger btn-block"><i class="nc-icon nc-zoom-split"></i> &nbsp; Search</a>
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
<!---------------------->

<!----- phần hiển thị content địa điểm ----->
<div class="team-2 section-image" style="background-image: url('assets/img/sections/jan-sendereks.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Địa Điểm Du Lịch</h2>
                <h5 class="description">Chúng tôi tổng hợp các địa điểm của các tour , các địa điểm nổi bật thu hút khách du lịch nhiều nhất</h5>
            </div>
        </div>

        <div class="row">
            @foreach ($diadiem as $DiaDiem)                    
            <div class="col-md-4">
                <div class="card card-profile card-plain">
                    <div class="card-img-top">
                        <a href="{{ route('diadiem.show', $DiaDiem->idDiaDiem) }}">
                            <img class="img" src="{{ $DiaDiem->anh }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $DiaDiem->tenDiaDiem }}</h4>
                        <br>
                        <div class="card-footer">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-dribbble"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!------------------------------------------->

<br>
<!---- Số trang ---->

<!------------------>
@endsection