@extends('layout.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <div style="display: inline-block">
                        <form action="{{ route('listCustomerTour.index') }}">
                            <input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
                            <button class="btn btn-fill btn-danger btn-wd">Danh Sách Khách</button>
                        </form>
                    </div>
                    <div style="display: inline-block">
                        <form action="{{ route('tourDetail.index') }}" method="get">
                            <input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
                            <button class="btn btn-fill btn-danger btn-wd">Chi Tiết Tour</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2>{{ $tour->nameTour }}</h2>
                @if ($tour->soLuongNguoi == 0)
                    <b style="color: red">
                        <p>HẾT CHỖ</p>
                    </b>
                @else
                    <b style="color: green">
                        <p>CÒN CHỖ</p>
                    </b>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <div>
                        <img src="{{ URL::to($tour->anhTour) }}" width="800px">
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-4 col-md-offset-2">
                <div class="content">
                    <div class="form-group">
                        <h6>Tên Tour</h6>
                        <input type="text" class="form-control" value="{{ $tour->nameTour }}" disabled>
                    </div>
                    <div class="form-group">
                        <h6>Tiêu Đề</h6>
                        <textarea name="tieu-de" cols="48" rows="5" class="form-control" disabled>
                            {{ $tour->tieuDe }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <h6>Giới Thiệu Về Tour </h6>
                        <textarea name="ghi-chu" cols="48" rows="10" class="form-control" disabled>
                            {{ $tour->gioiThieu }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <h6>Máy Bay</h6>
                        <input type="text" class="form-control" value="{{ $tour->nameMayBay . '-' . $tour->hangMayBay }}"
                            disabled>
                    </div>
                    <div class="form-group">
                        <h6>Khách Sạn</h6>
                        <input type="text" class="form-control" value="{{ $tour->nameKhachSan }}" disabled>
                    </div>
                    {{-- <a href="{{ route('tourDetail.index',$tour->idTour) }}" class="btn btn-fill btn-danger btn-wd">Tour Chi Tiết</a> --}}
                </div>

                <br>


            </div>
            <div class="col-md-4">
                <div class="card card-plain">
                    <div class="content">
                        <div class="form-group">
                            <h6>Điểm Xuất Phát</h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" value="{{ $tour->diemXuatPhat }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6>Điểm Đến</h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" value="{{ $tour->diemDen }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6>Ngày Xuất Phát</h6>
                            <input type="date" class="form-control" value="{{ $tour->ngayKhoiHanh }}" disabled>
                        </div>
                        <div class="form-group">
                            <h6>Ngày Kết Thúc</h6>
                            <input type="date" class="form-control" value="{{ $tour->ngayKetThuc }}" disabled>
                        </div>
                        <div class="form-group">
                            <h6>Số Lượng Người Trong Tour</h6>
                            <input type="number" class="form-control" value="{{ $tour->soLuongNguoi }}" disabled>
                        </div>
                        <div class="form-group">
                            <h6>Giá vé Người Lớn</h6>
                            <input type="number" class="form-control"
                                value="{{ $tour->giaNguoiLon }}" disabled>
                        </div>
                        <div class="form-group">
                            <h6>Giá vé Trẻ Em (>10 tuổi)</h6>
                            <input type="number" class="form-control"
                                value="{{ $tour->giaTreEm }}" disabled>
                        </div>

                    </div>
                    <div class="text-center">


                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <h2>Ảnh Chi Tiết Tour - {{ $tour->nameTour }}</h2>
                </div>

                <br>
            </div>

            <div class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">
                                {{-- <a href="{{ route('imageDetail.create') }}"class="btn btn-fill btn-danger btn-wd">Thêm Ảnh</a> --}}
                                <form action="{{ route('imageDetail.create') }}" method="get">
                                    <input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
                                    <button class="btn btn-fill btn-danger btn-wd">Thêm Ảnh</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-content table-responsive table-full-width">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Id Ảnh</th>
                                                <th class="text-center">Ảnh</th>
                                                <th class="text-center" colspan="2">Chức Năng</th>
                                            </tr>
                                        </thead>
                                        @foreach ($anhDetail as $anh)
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">{{ $anh->idAnh }}</td>
                                                    <td class="text-center"><img src="{{ URL::to($anh->anh)  }}"
                                                            width="350px"></td>
                                                    <td class="text-center"><a
                                                            href="{{ route('imageDetail.edit', $anh->idAnh) }}"><button
                                                                class="btn btn-sm btn-fill">CẬP NHẬT</button></a></td>
                                                    <td class="text-center">
                                                        <form action="{{ route('imageDetail.destroy', $anh->idAnh) }}"
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


        </div>


    </div>
    <br>
@endsection
