@extends('layout1.app')

@section('content')
<div class="page-header" style="background-image: url('{{ URL::to($baiviet->anh) }}')">
</div>
<br>
<div class="content">
<br>
<div class="blog-1" id="blog-1">
    <div class="container">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <h2>{{ $baiviet->tieuDe }}</h2>
                <br>
                
                <h3 class="title">{{ $baiviet->tomTat }}</h3>
                <br />
                               
                <div class="card card-plain card-blog">
                    <h5>{{ $baiviet->noiDung }}</h5>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

@endsection