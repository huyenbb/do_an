@extends('layout.app')

@section('content')
	

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-4 col-md-5">
	                        <div class="card card-user">
	                            <div class="image">
	                                <img src="../../assets/img/background.jpg" alt="..."/>
	                            </div>
	                            <div class="card-content">
	                                <div class="author">
	                                  <img class="avatar border-white" src="../../assets/img/faces/face-2.jpg" alt="..."/>
	                                  <h4 class="card-title">{{ $nhanvien->nameNhanVien }}</h4>
	                                </div>	                                
	                            </div>
	                        </div>	                       
	                    </div>
	                    <div class="col-lg-8 col-md-7">
	                        <div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Edit Profile</h4>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="{{ route('staff.update',$nhanvien->idNhanVien) }}">
										@csrf
										@method('PUT')
	                                    <div class="row">
	                                        <div class="col-md-5">
	                                            <div class="form-group">
	                                                <label>Họ Tên:</label>
	                                                <input type="text" class="form-control border-input" disabled value="{{ $nhanvien->nameNhanVien }}">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>Email</label>
	                                                <input type="text" class="form-control border-input"  value="{{ $nhanvien->email }}" name="email-taiKhoan">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>PassWord</label>
	                                                <input type="text" class="form-control border-input"  value="{{ $nhanvien->passWord }}" name="mat-khau">
	                                            </div>
	                                        </div>
	                                    </div>
										<div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>SĐT</label>
	                                                <input type="text" class="form-control border-input" disabled placeholder="SĐT" value="{{ $nhanvien->sdt }}">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>Quyền</label>
	                                                <input type="text" class="form-control border-input" disabled value="{{ $nhanvien->nameQuyen }}">
	                                            </div>
	                                        </div>
	                                    </div>	                                   	                                                 
	                                    <div class="text-center">
	                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
	                                    </div>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
@endsection

	        