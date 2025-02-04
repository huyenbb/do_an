@extends('layout.app')

@section('content')
<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form method="post" action="{{ route('imageDetail.update',$image->idAnh) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4 class="card-title">
                            UPDATE IMAGE
                        </h4>
                    </div>
                    <div class="card-content">
                        <div>
                            <h6>Ảnh Cũ</h6>
                            <img src="{{ URL::to($image->anh) }}" width="400px">
                        </div>
                        <div class="row">
                            <h6>Chọn Ảnh Mới</h6>
                            <div class="col-sm-6">         
                                <p class="btn btn-danger btn-fill btn-wd">Choose Image Update                                                     
                                <input type="file" name="image-update">
                            </p>
                            </div>
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-fill btn-info">UPDATE</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection