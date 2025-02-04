@extends('layout.app')


@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <a href="{{ route('manageTour.create') }}" class="btn btn-danger btn-fill btn-wd">THÊM TOUR</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--- form tìm kiếm --->
                <div>
                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <button class="btn btn-wd btn-warning btn-fill btn-magnify">TÌM KIẾM</button>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" name="search" class="form-control"
                                placeholder="Search...">
                        </div>
                    </form>
                </div>
                <!------------------>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">DANH SÁCH TOUR</h4>
                            {{-- <p class="category">Information here</p> --}}
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">idTour</th>
                                        <th class="text-center">NameTour</th>
                                        <th class="text-center">Điểm Xuất Phát</th>
                                        <th class="text-center">Điểm Đến</th>
                                        <th class="text-center">Trạng Thái</th>
                                        <th class="text-center">Ảnh</th>
                                        <th class="text-center" colspan="3">Chức Năng</th>
                                    </tr>
                                </thead>


                                @foreach ($tour as $Tour)
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $Tour->idTour }}</td>
                                            <td class="text-center">{{ $Tour->nameTour }}</td>
                                            <td class="text-center">{{ $Tour->diemXuatPhat }}</td>
                                            <td class="text-center">{{ $Tour->diemDen }}</td>
                                            <td class="text-center">
                                                @if ($Tour->trangThai == 0)
													<b style="color: green"><p>CÒN CHỖ</p></b>
                                                @else
													<b style="color: red"><p>HẾT CHỖ</p></b>
                                                @endif
                                            </td>
                                            <td class="text-center"><img src="{{ $Tour->anhTour }}" width="100px"></td>
                                            <td class="text-center"><a href="{{ route('manageTour.show', $Tour->idTour) }}"
                                                    class="btn btn-sm btn-fill">CHI TIẾT</a></td>
                                            <td class="text-center"><a href="{{ route('manageTour.edit', $Tour->idTour) }}"
                                                    class="btn btn-sm btn-fill">CẬP NHẬT</a></td>
                                            <td class="text-center">
                                                <form method="post"
                                                    action="{{ route('manageTour.destroy', $Tour->idTour) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-fill" onclick="return confirm('Bạn Có Muốn Xóa Tour ?')">XÓA</button>
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
        <div>
            {{ $tour->appends(['search' => $search])->links() }}
        </div>
    </div>
@endsection
