@extends('layout.app')


@section('content')
<br>

<br>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
                    <div class="col-md-12">
                        <div class="card card-chat">
                            <div class="card-header">
                                <h4 class="card-title">Tour : <h4>{{$listBinhLuan->nameTour}}</h4></h4>
                                <p class="category">Bạn Đang Trả Lời Bình Luận Với Khách Hàng :  <p>{{$listBinhLuan->nameKhachHang}}</p></p>

                            </div>
                            <div class="card-content">
                                <ol class="chat">
                                    <li class="other">
                                        <div class="avatar">
                                            <img src="/assets/image/user.jpg" alt="crash"/>
                                        </div>
                                        <div class="msg">
                                            <p>
                                                {{$listBinhLuan->noi_dung}}
                                            </p>
                                            <div class="card-footer">
                                                <i class="ti-check"></i>
                                                <h6> {{$listBinhLuan->thoi_gian}}</h6>
                                            </div>
                                      </div>
                                    </li>

                                    @foreach ($binhLuanChiTiet as $binhLuan)


                                    <li class="self">
                                        <div class="msg">
                                            <p>
                                                {{$binhLuan ->noi_dung}}
                                            </p>
                                            <div class="card-footer">
                                                <i class="ti-check"></i>
                                                <h6> {{$binhLuan ->thoi_gian}}</h6>
                                            </div>
                                        </div>
                                        <div class="avatar">
                                            <img src="/assets/image/new_logo.png" alt="crash"/>
                                        </div>
                                    </li>
                                    @endforeach



                                </ol>
                                <hr>
                                <form action="{{ route('binhLuanChuaDuyet.update',$listBinhLuan->id_binh_luan)}}" method="post">
                                    @csrf
									@method('PUT')
                                    <div class="send-message">
                                    <div class="avatar">
                                        <img src="/assets/image/new_logo.png" alt="crash"/>
                                    </div>
                                    <input type="hidden" name="idBinhLuan" value="{{$listBinhLuan->id_binh_luan}}">
                                    <input type="hidden" name="idTour" value="{{$listBinhLuan->idTour}}">
                                    <input class="form-control textarea" type="text" placeholder="Gõ Bình Luận Của Bạn Tại Đây" name="binhLuanAdmin"/>
                                    <span style="color: rgb(238, 9, 9);display: none" id="error-binhLuanAdmin"> Chưa Điền !!!</span>
                                    <div class="send-button">
                                        <button class="btn btn-primary btn-fill" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>

@endsection
