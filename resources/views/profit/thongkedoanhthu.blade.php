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
                                    <th data-field="name" data-sortable="true" class="text-center">Tháng</th>
                                    <th data-field="name" data-sortable="true" class="text-center">Tổng thiệt Hại<i></i></th>
                                    <th data-field="actions" class="text-center"  data-events="operateEvents" data-formatter="operateFormatter" >Actions</th>
                                </tr>
                            </thead>
                            @foreach ($thongKe1 as $thongKe)


                            <tbody>

                                <tr>
                                <td class="text-center">{{$thongKe->thongkethang}}</td>
                                <td class="text-center">{{number_format($thongKe->tongTien,  0, ".",".")}} VNĐ</td>
                                <td class="text-center"><a href="{{ route('ThongKeNgay.show', $thongKe->thongkethang) }}"><button class="btn btn-fill btn-info text-center">Chi Tiết </button></a></td>
                                </tr>

                            </tbody>
                            @endforeach
                            <tbody>
                                <tr>
                                    {{-- {{number_format($thongkenam, 0, ".",".")}} --}}
                                    <td class="text-center"><h5>Tổng Tiền :</h5></td>
                                    <td class="text-center"><h3>{{number_format($thongkenam, 0, ".",".")}} VNĐ</h3></td>
                                    <td class="text-center"></td>
                                </tr>
                            </tbody>
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
