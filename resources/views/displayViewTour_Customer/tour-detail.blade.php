@extends('layout1.app')

@section('content')


<div class="header-3">

	<div class="page-carousel">
		<div class="filter"></div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="page-header" style="background-image: url('{{ URL::to($tour->anhTour) }}');">
					</div>
				</div>
				@foreach ($anhDetail as $AnhDetail)
				<div class="carousel-item">
					<div class="page-header" style="background-image: url('{{ URL::to($AnhDetail->anh) }}')">
					</div>
				</div>
				@endforeach
			</div>

			<a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="fa fa-angle-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="fa fa-angle-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h4 class="text-center">BẢNG GIÁ TOUR</h4>
		<br>
	</div>
	<div class="col-md-10 ml-auto mr-auto">
		<div class="table-responsive">
		<table class="table table-shopping">
			<thead>
				<tr>
					<th class="text-center"></th>
					<th></th>
					<th class="text-right">Giá / Người</th>
					<th class="text-right">Số Lượng</th>
					<th class="text-right">Ghi Chú</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>

					</td>
					<td class="td-product">
						<strong>Giá Người Lớn</strong>
						<p>
						Giá Vé Đã Bao Gồm Các Chi Phí Khác Và Thuế</p>
					</td>

					<td class="td-price">
						<h5>{{number_format($tour->giaNguoiLon, 0, ".",".")}} VNĐ</h5>
					</td>
					<td class="td-number td-quantity">
						1

					</td>
					<td class="td-number">

					</td>
				</tr>
				<tr>
					 <td>

					</td>
					<td class="td-product">
						<strong>Giá Trẻ Em</strong>
						<p>Giá Vé Đã Bao Gồm Các Chi Phí Khác Và Thuế</p>
					</td>

					<td class="td-price">
						<h5> {{number_format($tour->giaTreEm, 0, ".",".")}} VNĐ</h5>
					</td>
					<td class="td-number td-quantity">
						1

					</td>
					<td class="td-number">
						<p>Trẻ Em > 10t </p>
					</td>
				</tr>
				<tr>
					<td>

				   </td>
				   <td class="td-product">
					   <strong>Giá Trẻ Nhỏ</strong>

				   </td>

				   <td class="td-price">
					   <h5>Free</h5>
				   </td>
				   <td class="td-number td-quantity">

				   </td>
				   <td class="td-number">
					   <p>Trẻ Em < 10t </p>
				   </td>
			   </tr>

				<tr class="tr-actions">
				   <td colspan="3"></td>
				   @if (Session::exists('idUSER'))
				   <td colspan="2" class="text-right">
					<form action="{{ route('reserveTour.store') }}" method="post">
					 @csrf
						<input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
						<input type="hidden" name="id-khachhang" value="{{ $idKhachHang }}">
						<button  class="btn btn-danger btn-lg">Thêm Vào Giỏ Tour<i class="fa fa-chevron-right"></i></button>
				 </form>
				 </td>
				<td colspan="2" class="text-right">
					<form action="{{ route('datTourNhanh') }}" method="get">
						   <input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
						   <input type="hidden" name="id-khachhang" value="{{ $idKhachHang }}">
						   <button  class="btn btn-danger btn-lg">ĐẶT TOUR NGAY<i class="fa fa-chevron-right"></i></button>
					</form>
				</td>
				   @else
				   <td colspan="2" class="text-right">
					<a class="btn btn-danger btn-lg" href="{{ route('loginUSER') }}">Đăng Nhập Để Đặt Tour<i class="fa fa-chevron-right"></i></a>
					</td>
				   @endif

				</tr>
			</tbody>
		</table>
		</div>
		<br>
		<div class="table-responsive">
			<h4 class="text-center">Bao Gồm Trong Tour</h4>
			<br>
			<table class="table table-shopping">
				<thead>
					<tr>
						<th class="text-center"></th>
						<th></th>
						<th class="text-right">Tên</th>
						<th class="text-right">Hãng</th>
						<th class="text-right"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>

						</td>
						<td class="td-product">
							<strong>Vé Máy Bay</strong>
							<p>
							Giá Vé Đã Bao Gồm Các Chi Phí Khác Và Thuế</p>
						</td>

						<td class="td-price">
							<h5>{{ $tour->nameMayBay }}</h5>
						</td>
						<td class="td-number td-quantity">
							{{ $tour->hangMayBay }}
						</td>
						<td class="td-number">

						</td>
					</tr>
					<tr>
						 <td>

						</td>
						<td class="td-product">
							<strong>Khách Sạn</strong>
							<p>Giá Vé Đã Bao Gồm Các Chi Phí Khác Và Thuế</p>
						</td>

						<td class="td-price">
							<h5>{{ $tour->nameKhachSan }}</h5>
						</td>
						<td class="td-number td-quantity">


						</td>
						<td class="td-number">

						</td>
					</tr>

				</tbody>
			</table>
			</div>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-10 ml-auto mr-auto">
		<div class="text-center">
			<span class="label label-warning main-tag">Lịch Trình</span>
			<h3 class="title">Lịch Trình Tour : {{ $tour->nameTour }}</h3>
			<h6 class="title-uppercase">Ngày Khởi Hành : {{ $tour->ngayKhoiHanh }} --- Ngày Kết Thúc : {{ $tour->ngayKetThuc }}</h6>
		</div>
	</div>
</div>

<br>
<hr>
@foreach ($tourDetail as $TourDetail)

<div class="row">
	<div class="col-md-10 ml-auto mr-auto">
		<div class="text-center">
			<span class="btn btn-success btn-round">Ngày {{ $TourDetail->Ngay }}</span>
			<a href="javascrip: void(0);"><h3 class="title">Chương Trình Tour Ngày {{ $TourDetail->Ngay }} </h3></a>
			<h6 class="title-uppercase">{{ $TourDetail->diemXuatPhat }} --- {{ $TourDetail->diemDen }}</h6>
		</div>
	</div>
	<div class="col-md-8 ml-auto mr-auto">

			<div class="card-image">
				<img src="{{ URL::to($TourDetail->anh) }}" width="900px">
			</div>
			<br>
			<p class="image-thumb text-center">Ảnh {{ $TourDetail->diemXuatPhat }} - {{ $TourDetail->diemDen }}</p>

		<div class="article-content">
			<h4>{{ $TourDetail->diemXuatPhat }} - {{ $TourDetail->diemDen }}</h4>
			<h4>Giờ Bắt Đầu: {{ $TourDetail->gioBatDau }} - Giờ Đến :{{ $TourDetail->gioDen }}</h4>
			<br>
			<p> {{ $TourDetail->ghiChu }}</p>
		</div>
		<br/>
		<hr>
	</div>
</div>
@endforeach
@if (Session::exists('idUSER'))
<h2 class="text-center">Bình Luận Khách Hàng</h2>
<br>
<br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">

		@foreach ($listBinhLuan as $binhLuan)
		<div class="media">
			<a class="pull-left" href="#paper-kit">
				<div class="avatar">
				   <img class="media-object" alt="Tim Picture" src="../assets/image/user.jpg">
				</div>
			</a>
			<div class="media-body">

			  <h5 class="media-heading">{{$binhLuan->nameKhachHang}}</h5>
			  <div class="pull-right">
				  <h6 class="text-muted">{{$binhLuan->thoi_gian}}</h6>


			  </div>

			   <p> {{ $binhLuan->noi_dung }} </p>



			   @foreach ($listBinhLuanChiTiet as $binhLuanChiTiet)
			   @if ($binhLuanChiTiet->id_binh_luan == $binhLuan->id_binh_luan)
			   <div class="media">
					<a class="pull-left" href="#paper-kit">
						<div class="avatar">
							  <img class="media-object" alt="64x64" src="../assets/image/new_logo.png">
						</div>
					</a>
					<div class="media-body">
						  <h5 class="media-heading">ADMIN</h5>
						  <div class="pull-right">
							  <h6 class="text-muted">{{$binhLuanChiTiet->thoi_gian}}</h6>
						  </div>
						  <p>{{ $binhLuanChiTiet->noi_dung }}</p>

					</div>
				</div>
				@endif
				@endforeach
			</div>
		  </div>

		  @endforeach
	</div>
</div>
<br>
<div class="row">

<div class="col-md-2"></div>

<div class="col-md-8">
	<form class="contact-form" action="{{ route('binhLuan.store') }}" method="post">
		@csrf
		<label>Nhập Bình Luận Của Bạn</label>
		<input type="hidden" name="idTour" value="{{ $tour->idTour }}">
		<textarea class="form-control" rows="4" placeholder="Điền Bình Luận Của Bạn" name="binhLuanKhachHang" id="comment"></textarea>
        <div class="row">
            <span style="color: rgb(240, 12, 12);display: none" id="error-comment">Vui Lòng Điền Vào !</span>
        </div>
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<button onclick="return kiemTraBinhLuan();" class="btn btn-danger btn-lg btn-fill">Gửi Bình Luận</button>
			</div>
		</div>
	</form>
</div>


<div class="col-md-2"></div>

</div>
@endif

@endsection
