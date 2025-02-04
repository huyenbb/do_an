@extends('layout1.app')

@section('content')

<!---- phần header ---->
<div class="header-2">
    
    <div class="page-header"
        style="background-image: url('{{ URL::to($anhBaiViet->anh) }}');">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h1 class="title"> Tìm Kiếm Bài Viết</h1>
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
                                                <input type="text" value="{{ $search }}" placeholder="Nhập Tên Bài Viết" class="form-control" name="search"/>                                                  
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


<!---- content bài viết ---->
<div class="blog-2 section section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">Bài Viết REVIEW</h2>
                <br />
                <div class="row">
                    @foreach ($baiviet as $BaiViet)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="{{ route('baiviet.show', $BaiViet->idBaiViet) }}">
                                    <img class="img img-raised" src="{{ URL::to($BaiViet->anh) }}" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">REVIEW</h6>
                                <h5 class="card-title">
                                    <a href="{{ route('baiviet.show', $BaiViet->idBaiViet) }}">{{ $BaiViet->tieuDe }}</a>
                                </h5>
                                <p class="card-description">
                                    {{ $BaiViet->tomTat }}<br />
                                </p>
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------->

<!---- Số trang ---->

<!------------------>

@endsection