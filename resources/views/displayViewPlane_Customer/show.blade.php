@extends('layout1.app')

@section('content')
<div class="page-header" style="background-image: url('{{ URL::to($anhMayBay->anh) }}')">
    <div class="filter"></div>
</div>
<div class="row">
    <div class="col-md-8 ml-auto mr-auto">
        <h4 class="title"><small>Danh Sách Tour - Chuyến Bay</small></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Tên Tour</th>
                        <th class="text-center">Chuyến Bay</th>
                        <th class="text-center">Ngày Khởi Hành</th>
                        <th class="text-center">Số Lượng Người / Tour</th>
                        <th class="text-right">Action</th>
                        
                    </tr>
                </thead>
                @foreach ($tour as $listTour)
                    
               
                <tbody>
                    <tr>
                        <td class="text-center">{{ $listTour->nameTour }}</td>
                        <td class="text-center">{{ $listTour->nameMayBay.' - '.$listTour->hangMayBay }}</td>
                        <td class="text-center">{{ $listTour->ngayKhoiHanh }}</td>
                        <td class="text-center">{{ $listTour->soLuongNguoi }}</td>
                        <td class="td-actions text-right">
                            <a href="{{ route('tour.show', $listTour->idTour) }}" class="btn btn-round btn-danger">Xem</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection