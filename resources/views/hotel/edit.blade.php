@extends('layout.app')

@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form method="post" action="{{ route('hotel.update', $khachsan->idKhachSan) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4 class="card-title">
                            CẬP NHẬT THÔNG TIN KHÁCH SẠN
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="form-group">
                            <label>TÊN KHÁCH SẠN</label>
                            <input type="text" class="form-control" name="ten-khachsan" value="{{ $khachsan->nameKhachSan }}">
                        </div>
                   
                            <div class="form-group">
                                <label>MIÊU TẢ</label>
                                <div>
                                    <textarea class="form-control" rows="10" name="mieuTa-khachsan">{{ $khachsan->mieuTa }}</textarea>
                                </div>
                            </div>
                     
                        <button type="submit" class="btn btn-fill btn-info" onclick="return confirm('Bạn Muốn Cập Nhật ?')">CẬP NHẬT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection