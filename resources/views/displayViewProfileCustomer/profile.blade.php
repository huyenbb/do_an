@extends('layout1.app')
@section('content')
<body class="profile">
    <div class="wrapper">
        <div class="page-header page-header-small" style="background-image: url('../assets1/img/sections/rodrigo-ardilha.jpg');">
            <div class="filter"></div>
        </div>
        <div class="profile-content section">
            <div class="container">
                <div class="row">
                    <div class="profile-picture">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new img-no-padding">
                                @if ($khachhang->anh==NULL)
                                <img src="../assets1/img/faces/joe-gardner-2.jpg" alt="...">
                                @else
                                <img src="{{ URL::to($khachhang->anh) }}" alt="...">
                                @endif    
                            </div>
                            <div class="name">
                                <h4 class="title text-center">{{ $khachhang->nameKhachHang }}<br /></h4>
                            </div>
	                    </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <h6 class="text-left">Họ Tên</h6>
                        <input type="text" class="form-control border-input" value="{{ $khachhang->nameKhachHang }}" disabled>
                        <br>

                        <h6 class="text-left">Email</h6>
                        <input type="text" class="form-control border-input" value="{{ $khachhang->email }}" disabled>
                        <br>

                        <h6 class="text-left">Mật Khẩu</h6>
                        <input type="password" class="form-control border-input" value="{{ $khachhang->passWord }}" disabled>
                        <br>

                        <h6 class="text-left">SĐT</h6>
                        <input type="text" class="form-control border-input" value="{{ $khachhang->sdt }}" disabled>
                        <br>

                        <h6 class="text-left">Địa Chỉ</h6>
                        <input type="text" class="form-control border-input" value="{{ $khachhang->diaChi }}" disabled>
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
        
                        <a class="btn btn-outline-default btn-round" href="{{ route('updateProfileUser') }}"><i class="fa fa-cog"></i> Thay Đổi Thông Tin</a>
                    </div>
                </div>
                <br/>
                
            </div>
        </div>
    </div>	
      <!----- Hiển thị các tour đã đặt ---->
    
      <div class="row">
          <div class="col-md-12">
              <h2 class="text-center">Tour Đã Đặt</h2>
              <div class="row">
                  <div class="col-md-8 ml-auto mr-auto">
                      <h4 class="title"><small>Danh Sách Tour Bạn Đã Đặt</small></h4>
                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th class="text-center">Tên Tour</th>
                                      <th class="text-center">Số Lượng Người Lớn</th>
                                      <th class="text-center">Số Lượng Trẻ Em</th>
                                      <th class="text-right">Ngày Đặt Tour</th>
                                      <th class="text-right">Tổng Tiền</th>
                                  </tr>
                              </thead>
                              
                              @foreach ($lichSuDatTour as $history)
                              <tbody>
                                  
                                  <tr>
                                      <td class="text-center">{{ $history->nameTour }}</td>
                                      <td class="text-center">{{ $history->soLuongNguoiLon }}</td>
                                      <td class="text-center">{{ $history->soLuongTreEm }}</td>
                                      <td class="text-center">{{ $history->ngayDatTour }}</td>
                                      <td class="text-center">{{number_format($history->tongTien , 0, ".",".")}} VND</td>
                                  </tr>
                              </tbody>
                              @endforeach
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    
      <!----------------------------------->
</body>
@endsection

