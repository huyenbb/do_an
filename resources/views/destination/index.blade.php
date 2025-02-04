@extends('layout.app')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="post" action="{{ route('destination.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">
                                THÊM ĐỊA ĐIỂM
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <label>TÊN ĐỊA ĐIỂM</label>
                                <input type="text" placeholder="Tên Địa Điểm" class="form-control" name="ten-diadiem"
                                    id="tenDiaDiem">
                            </div>
                            <div class="form-group">
                                <span style="color: rgb(240, 12, 12);display: none" id="error-tenDiaDiem">Chưa Thêm Tên Địa
                                    Điểm
                                    !</span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="btn btn-danger btn-fill btn-wd">Choose Image
                                        <input type="file" name="image" id="AnhDiaDiem">
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <span style="color: rgb(240, 12, 12);display: none" id="error-AnhDiaDiem">Chưa Thêm Ảnh Địa
                                    Điểm
                                    !</span>
                            </div>
                            <br>
                            <div>
                                <button onclick="return kiemTraDiaDiem();" type="submit"
                                    class="btn btn-fill btn-info">THÊM</button>
                            </div>

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
                            <h4 class="card-title">DANH SÁCH ĐỊA ĐIỂM</h4>
                            {{-- <p class="category">Information here</p> --}}
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID ĐỊA ĐIỂM</th>
                                        <th class="text-center">TÊN ĐỊA ĐIỂM</th>
                                        <th class="text-center">ẢNH</th>
                                        <th class="text-center" colspan="2">CHỨC NĂNG</th>
                                    </tr>
                                </thead>
                                @foreach ($diadiem as $DiaDiem)
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $DiaDiem->idDiaDiem }}</td>
                                            <td class="text-center">{{ $DiaDiem->tenDiaDiem }}</td>
                                            <td class="text-center"><img src="{{ $DiaDiem->anh }}" width="120px"></td>
                                            <td class="text-center"><a href="{{ route('destination.edit', $DiaDiem->idDiaDiem) }}"
                                                    class="btn btn-sm btn-fill">CẬP NHẬT</a></td>
                                            <td class="text-center">
                                                <form method="post"
                                                    action="{{ route('destination.destroy', $DiaDiem->idDiaDiem) }}">
                                                    @method('DELETE')
                                                    @csrf
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
        {{ $diadiem->appends(['search' => $search])->links() }}
    </div>
@endsection
