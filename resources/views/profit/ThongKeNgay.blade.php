@extends('layout.app')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- thêm  --}}
                    <div class="text-center">
                        <form class="navbar-form  navbar-search-form" role="search">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                {{-- <input type="text" value="{{$search}}" name="search" class="form-control" placeholder="Search..."> --}}
                            </div>
                        </form>
                        </div>
                <div class="card">
                    <div class="card-content">
                        <div class="toolbar">
                            <!--Here you can write extra buttons/actions for the toolbar-->
                        </div>
                        <table id="bootstrap-table" class="table">
                            <thead>
                                <tr>
                                    <th data-field="name" data-sortable="true" class="text-center">STT</th>
                                    <th data-field="name" data-sortable="true" class="text-center">Tên Khách hàng</th>
                                    <th data-field="name" data-sortable="true" class="text-center">Tên Tour</th>
                                    <th data-field="name" data-sortable="true" class="text-center">Số Lượng Người lớn</th>
                                    <th data-field="name" data-sortable="true" class="text-center">Giá Người Lớn</th>
                                    <th data-field="name" data-sortable="true" class="text-center">Số Lượng Người trẻ em</th>
                                    <th data-field="name" data-sortable="true" class="text-center">Giá Người Trẻ Em</th>
                                    <th data-field="name" data-sortable="true" class="text-center">Ngày Mua</th>
                                    <th data-field="name" data-sortable="true" class="text-center">Tổng Thanh Toán</th>
                                </tr>

                            </thead>
                                <?PHP
                                $i = 1;
                                ?>
                               @foreach ($chitietngay as $ChiTietNgay)
                            <tbody>
                                <tr>
                                    <td class="text-center"><?PHP  echo($i++) ?></td>
                                    <td class="text-center">{{$ChiTietNgay->nameKhachHang}}</td>
                                    <td class="text-center">{{$ChiTietNgay->nameTour}}</td>
                                    <td class="text-center">{{$ChiTietNgay->soLuongNguoiLon}}</td>
                                    <td class="text-center">{{number_format($ChiTietNgay->giaNguoiLon, 0, ".",".")}} VNĐ</td>
                                    <td class="text-center">{{$ChiTietNgay->soLuongTreEm}}</td>
                                    <td class="text-center">{{number_format($ChiTietNgay->giaTreEm, 0, ".",".")}} VNĐ</td>
                                     <td class="text-center">{{$ChiTietNgay->ngayDatTour}}</td>
                                    <td class="text-center">{{number_format($ChiTietNgay->tongTien, 0, ".",".")}} VNĐ</td>
                                    <!-- 100.000,00-->

                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div class="text-center">
                        {{-- {{$hoadon->appends([
                            'search' => $search
                        ])->links() }} --}}
                        </div>
                    </div>
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div>
</div>
 @endsection
