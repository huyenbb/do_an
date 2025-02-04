@extends('layout1.app')

@section('content')
<!------ phần header của trang ---->
<div class="page-header" style="background-image: url('{{ URL::to($anhKhachSan->anh) }}')">
    <div class="filter"></div>
    <div class="content-center">
        <div class="motto">
            <h1 class="text-center">Khách Sạn Quốc Tế</h1>
            <h3 class="text-center"></h3>
        </div>
    </div>
</div>
<!---------------------------------->

<!------Tìm kiếm khách sạn --->
<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-expand-md bg-success">
            <div class="container">
                <a class="navbar-brand" href="#paper-kit">Tìm Kiếm Khách Sạn</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-menu-icon" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <form class="form-inline" method="get" action="{{ route('khachsan.index') }}">
                            <input class="form-control mr-sm-2 no-border" type="text" placeholder="Tìm Khách Sạn" name="search" value="{{ $search }}">
                            <button type="submit" class="btn btn-primary btn-just-icon btn-round"><i class="nc-icon nc-zoom-split"></i></button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!---------------------------->


<!------Hiển thị khách sạn ---->
<div class="blog-1" id="blog-1">
    <div class="container">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">Khách Sạn</h2>
                <br />
                @foreach ($khachsan as $KhachSan)                  
                <div class="card card-plain card-blog">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-image">
                                <img class="img" src="{{ $KhachSan->anh }}" />
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h6 class="card-category text-info">KHÁCH SẠN TIÊU CHUẨN</h6>
                                <h3 class="card-title">
                                    <a href="{{ route('khachsan.show',$KhachSan->idKhachSan) }}">{{ $KhachSan->nameKhachSan }}</a>
                                </h3>
                                <p class="card-description">
                                   {{ $KhachSan->mieuTa }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!----------------------------->


@endsection