@extends('layout1.app')

@section('content')
<div class="project-4 section section-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Chuyến Bay - Hãng Máy Bay</h2>
                <h5 class="description">Các Chuyến Bay Trong Lịch Trình Các Tour</h5>
            </div>
        </div>
        @foreach ($maybay as $mayBay)          
        <div class="space-top"></div>
        <div class="row">
            <div class="col-md-5 ml-auto">
                <div class="card" data-background="image"
                    style="background-image: url('{{ $mayBay->anh }}')">
                    
                </div>
            </div>

            <div class="col-md-5 mr-auto">
                <div class="card card-plain">
                    <div class="card-body">
                        <h6 class="card-category">Chuyến Bay </h6>
                        <p>
                            <h3 class="card-title">{{ $mayBay->nameMayBay .' - '. $mayBay->hangMayBay }}</h3>
                        </p>
                        <div class="card-footer">
                            <a href="{{ route('maybay.show', $mayBay->idMayBay) }}" class="btn btn-link btn-neutral">
                                <i class="fa fa-book" aria-hidden="true"></i> Chi Tiết
                            </a>
                            
                                <i class="fa fa-apple" aria-hidden="true"></i>
                           
                            
                                <i class="fa fa-android" aria-hidden="true"></i>
                            
                            
                                <i class="fa fa-windows" aria-hidden="true"></i>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br />
        <hr /><br />
        @endforeach
    </div>
</div>
@endsection