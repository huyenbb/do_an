@extends('layout1.app')
@section('content')
<body class="profile">
    <div class="wrapper">
        <div class="page-header page-header-small" style="background-image: url('../assets1/img/sections/rodrigo-ardilha.jpg');">
            <div class="filter"></div>
        </div>
        <div class="profile-content section">
            <form action="{{ route('updateProfileProcess') }}" method="post">
                @csrf
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
                        <input type="text" class="form-control border-input" value="{{ $khachhang->nameKhachHang }}" name="ten" required>
                        <br>

                        <h6 class="text-left">Email</h6>
                        <input type="text" class="form-control border-input" value="{{ $khachhang->email }}" name="email" required>
                        <br>

                        <h6 class="text-left">Mật Khẩu</h6>
                        <input type="text" class="form-control border-input" value="{{ $khachhang->passWord }}" name="mat-khau" required>
                        <br>

                        <h6 class="text-left">SĐT</h6>
                        <input type="text" class="form-control border-input" value="{{ $khachhang->sdt }}" name="sdt" required maxlength="10">
                        <br>

                        <h6 class="text-left">Địa Chỉ</h6>
                        <input type="text" class="form-control border-input" value="{{ $khachhang->diaChi }}" name="dia-chi" required>
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
        
                        <button class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Cập Nhật</button>
                    </div>
                </div>
                <br/>
                
            </div>
        </form>
        </div>
    </div>	
</body>
@endsection

