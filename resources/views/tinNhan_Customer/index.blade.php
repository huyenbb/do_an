@extends('layout.app1')


@section('content')
<br>
<br>


		<div class="content">
			<div class="container-fluid">
				<div class="row">
                    <div class="col-md-2"></div>
					<div class="col-md-8">
                        <a href="{{ route('displayInformation') }}">Quay Lại Trang Chủ</a>
						<div class="card card-chat">
                            <div class="card-header">
                                <h4 class="card-title">Chat Với ADMIN</h4>
                                <p class="category">Bạn Đang Trong Cuộc Trò Chuyện Với ADMIN</p>
                            </div>
                            <div class="card-content">
                                <ol class="chat">
                                    <li class="other">
                                        <div class="avatar">
                                            <img src="/assets/image/new_logo.png" alt="crash"/>
                                        </div>
                                        <div class="msg">
                                            <p>
                                               Chào Anh Chị - Em Có Thể Hỗ Trợ Mình Được Không ?
                                            </p>
                                      </div>
                                    </li>


                                    @foreach ($listTinNhanCustomer as $tinNhan)

                                    @if ($tinNhan->id_nhan_vien != null)
                                    <li class="other">
                                        <div class="avatar">
                                            <img src="/assets/image/new_logo.png" alt="crash"/>
                                        </div>
                                        <div class="msg">
                                            <p>
                                               {{$tinNhan->noi_dung}}
                                            </p>
                                            <div class="card-footer">
                                                <i class="ti-check"></i>
                                                <h6>{{$tinNhan->thoi_gian}}</h6>
                                            </div>
                                      </div>
                                    </li>
                                    @else
                                    <li class="self">
                                        <div class="msg">
                                            <p>
                                                {{$tinNhan->noi_dung}}
                                            </p>
                                            <div class="card-footer">
                                                <i class="ti-check"></i>
                                                <h6> {{$tinNhan->thoi_gian}}</h6>
                                            </div>
                                        </div>
                                        <div class="avatar">
                                            <img src="/assets/image/user.jpg" alt="crash"/>
                                        </div>
                                    </li>
                                    @endif






                                    @endforeach

                                </ol>
                                <hr>
                                <form action="{{ route('tinNhanCustomer.store') }}" method="post">
                                    @csrf
                                <div class="send-message">
                                    <div class="avatar">
                                        <img src="/assets/image/user.jpg" alt="crash"/>
                                    </div>
                                    <input class="form-control textarea" name="noiDung" type="text" placeholder="Gõ Tin Nhắn Của Bạn Tại Đây" id="nhantin" required/>

                                    <div class="send-button">
                                        <button  class="btn btn-primary btn-fill" type="submit">Send</button>
                                    </div>
                                </div>
                                 </form>
                            </div>
                        </div>
                        <a href="{{ route('displayInformation') }}">Quay Lại Trang Chủ</a>
					</div>
                    <div class="col-md-2"></div>
				</div>
			</div>
		</div>

@endsection
