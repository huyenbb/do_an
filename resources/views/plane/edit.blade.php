@extends('layout.app')

@section('content')
    <br>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form method="post" action="{{ route('plane.update', $maybay->idMayBay) }}">
                            @method('PUT')
                            @csrf
                            <div class="card-header">
                                <h4 class="card-title text-center">
                                    CẬP NHẬT THÔNG TIN MÁY BAY
                                </h4>
                            </div>

                            <div class="card-content">
                                <div class="form-group">
                                    <label>TÊN MÁY BAY</label>
                                    <input type="text" placeholder="Tên Máy Bay" class="form-control" name="ten-maybay"
                                        value="{{ $maybay->nameMayBay }}">
                                </div>
                                <div class="form-group">
                                    <label>Giới Thiệu</label>
                                    <textarea name="gioi-thieu" cols="20" rows="5" class="form-control" name="gioi-thieu">
                                {{ $maybay->gioiThieuHang }}
                            </textarea>
                                </div>
                                {{-- <div class="row">
                            <p class="btn btn-danger btn-fill btn-wd">{{ $maybay->hangMayBay }}</p>
                        </div> --}}
                                <div class="form-group">
                                    <label class="checkbox">
                                        Vui Lòng Điền Đầy Đủ Thông Tin
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-fill btn-info">CẬP NHẬT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
