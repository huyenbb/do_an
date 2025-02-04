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
                                <h4 class="card-title"></h4></h4>
                                <p class="category">Bạn Đang Trả Lời Bình Luận Với Khách Hàng :</p>
                            </div>
                            <div class="card-content">
                                <ol class="chat">


@foreach ($listTinNhan as $tinNhan)
    

    
@if (($tinNhan->id_nhan_vien == null))
<li class="other">
    <div class="avatar">
        <img src="/assets/image/user.jpg" alt="crash"/>
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
            <h6>{{$tinNhan->thoi_gian}}</h6>
        </div>
    </div>
    <div class="avatar">
        <img src="/assets/image/new_logo.png" alt="crash"/>
    </div>
</li> 
@endif

                                    
       
                                    
 @endforeach                           
                                    
                                    
                                  
                                </ol>
                                <hr>
                                <form  method="post" action="{{ route('tinNhanStaff.store')}}" method="POST">
                                     @csrf
                                    <div class="send-message">
                                    <div class="avatar">
                                        <img src="/assets/image/new_logo.png" alt="crash"/>
                                    </div>
                                    <input type="hidden" name="idCustomer" value="{{ $tinNhan->id_khach_hang }}">
                                    <input type="hidden" name="idTinNhan" value="{{ $tinNhan->id_tin_nhan }}">
                                    <input class="form-control textarea" type="text" placeholder="Gõ Tin Nhắn Của Bạn Tại Đây" name="tinNhan"/>
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
