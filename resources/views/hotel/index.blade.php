@extends('layout.app')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="post" action="{{ route('hotel.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">
                                THÊM KHÁCH SẠN
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <label>TÊN KHÁCH SẠN</label>
                                <input type="text" placeholder="Tên Khách Sạn" class="form-control" name="ten-khachsan"
                                    id="tenKhachSan">
                            </div>
                            <div class="form-group">
                                <span style="color: rgb(240, 12, 12);display: none" id="error-tenKhachSan">Chưa Thêm Tên
                                    Khách Sạn !</span>
                            </div>

                            <div class="form-group">
                                <label>MIÊU TẢ</label>
                                <div>
                                    <textarea class="form-control" placeholder="Miêu tả về khách sạn" rows="10" name="mieuTa-khachsan" id="MTkhachSan"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <span style="color: rgb(240, 12, 12);display: none" id="error-MTkhachSan">Chưa Thêm Miêu Tả
                                    Khách Sạn !</span>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="btn btn-danger btn-fill btn-wd">Choose Image
                                        <input type="file" name="image" id="AnhKhachSan">
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <span style="color: rgb(240, 12, 12);display: none" id="error-AnhKhachSan">Chưa Thêm Ảnh
                                    Khách Sạn !</span>
                            </div>
                            <br>
                            <button onclick="return kiemTraKhachSan();" type="submit"
                                class="btn btn-fill btn-info">THÊM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <!--- form tìm kiếm --->
            <div class="row">
                <div class="col-md-12">
                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <button class="btn btn-wd btn-warning btn-fill btn-magnify">Search</button>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="{{ $search }}" name="search" class="form-control"
                                placeholder="Search Tên Khách Sạn">
                        </div>
                    </form>
                </div>
            </div>
            <!------------------>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">DANH SÁCH KHÁCH SẠN</h4>
                            {{-- <p class="category">Information here</p> --}}
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID KHÁCH SẠN</th>
                                        <th class="text-center">TÊN KHÁCH SẠN</th>
                                        <th class="text-center">MIÊU TẢ</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center" colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($khachsan as $khachSan)
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $khachSan->idKhachSan }}</td>
                                            <td class="text-center">{{ $khachSan->nameKhachSan }}</td>
                                            <td class="text-center">{{ $khachSan->mieuTa }}</td>
                                            <td class="text-center"><img src="{{ $khachSan->anh }}" width="300px"></td>
                                            <td class="text-center"><a href="{{ route('hotel.edit', $khachSan->idKhachSan) }}"
                                                    class="btn btn-sm btn-fill">CẬP NHẬT</a></td>
                                            <td class="text-center">
                                                <form action="{{ route('hotel.destroy', $khachSan->idKhachSan) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-fill">XÓA</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        {{ $khachsan->appends(['search' => $search])->links() }}
    </div>
@endsection
