@extends('layout.app')

@section('content')

<div class="content">
    <form action="{{ route('post.update',$baiviet->idBaiViet) }}" method="post">
        @csrf
        @method('PUT')
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <h2>Bài Viết</h2>
                    <div>
                        <img src="{{ URL::to($baiviet->anh) }}" width="800px">
                    </div>
                </div>    
            </div>
            <br>
            <div class="col-md-4 col-md-offset-2">
                <div class="content">
                   
                    <div class="form-group">
                        <h6>Tiêu Đề</h6>
                        <textarea name="tieu-de" cols="48" rows="5" class="form-control" >
                           {{ $baiviet->tieuDe }}
                        </textarea>
                    </div>    
                    <div class="form-group">
                        <h6>Tóm Tắt</h6>
                        <textarea name="tom-tat" cols="48" rows="5" class="form-control" >
                           {{ $baiviet->tomTat }}
                        </textarea>
                    </div>                
                    <div class="form-group">
                        <h6>Ngày Đăng</h6>
                        <input type="date" value="{{ $baiviet->ngayDang }}" class="form-control" name="ngay-dang"> 
                    </div>     
                    
                </div>
                
            </div>
            <div class="col-md-4">             
                    <div class="card card-plain">
                        <div class="content">
                            <div class="form-group">
                                <h6>Nội Dung</h6>
                                <textarea name="noi-dung" cols="150" rows="10" class="form-control" >
                                   {{ $baiviet->noiDung }}
                                </textarea>
                            </div>             
                        </div>
                        
                    </div>              
            </div>  
        </div>
        <div class="text-center">
            <button class="btn btn-danger btn-fill btn-wd">CẬP NHẬT</button>
        </div>
       
    </div>
    </form>
</div>
<br>
@endsection