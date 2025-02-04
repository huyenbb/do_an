@extends('layout.app')

@section('content')
<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form method="post" action="{{ route('imageDetail.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">
                            THÊM ẢNH CHI TIẾT
                        </h4>
                    </div>
                    <div class="card-content">
                        <div>
                            <input type="hidden" name="idTour" value="{{ $tour->idTour }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">         
                                <p class="btn btn-danger btn-fill btn-wd">Chọn Ảnh Tại Đây                                                     
                                <input type="file" name="image">
                            </p>
                            </div>
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-fill btn-info">THÊM ẢNH</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection