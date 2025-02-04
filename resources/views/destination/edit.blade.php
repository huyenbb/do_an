@extends('layout.app')

@section('content')
    <br>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form method="post" action="{{ route('destination.update', $diadiem->idDiaDiem) }}">
                            @method('PUT')
                            @csrf
                            <div class="card-header">
                                <h4 class="card-title">
                                    CẬP NHẬT THÔNG TIN ĐỊA ĐIỂM
                                </h4>
                            </div>
                            <div class="card-content">
                                <div class="form-group">
                                    <label>TÊN ĐỊA ĐIỂM</label>
                                    <input type="text" class="form-control" value="{{ $diadiem->tenDiaDiem }}"
                                        name="ten-diadiem">
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
