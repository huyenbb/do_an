@extends('layout.app')


@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!--- form tìm kiếm --->
                <div>
                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <button class="btn btn-wd btn-warning btn-fill btn-magnify">TÌM KIẾM</button>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" name="search" class="form-control" placeholder="Search...">
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
                            <h4 class="card-title">DANH SÁCH KHÁCH HÀNG</h4>
                            {{-- <p class="category">Information here</p> --}}
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID KHÁCH HÀNG</th>
                                        <th class="text-center">TÊN KHÁCH HÀNG</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center" colspan="2">CHỨC NĂNG</th>
                                    </tr>
                                </thead>


                                @foreach ($khachHang as $khachhang)
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $khachhang->idKhachHang }}</td>
                                            <td class="text-center">{{ $khachhang->nameKhachHang }}</td>
                                            <td class="text-center">{{ $khachhang->email }}</td>
                                            <td class="text-center"> <a href="{{ route('customer.show', $khachhang->idKhachHang) }}"
                                                    class="btn btn-sm btn-fill">CHI TIẾT</a></td>
                                            <td class="text-center">
                                                <form method="post"
                                                    action="{{ route('customer.destroy', $khachhang->idKhachHang) }}">
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
                        <div class="text-center">
                            {{ $khachHang->appends(['search' => $search])->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
