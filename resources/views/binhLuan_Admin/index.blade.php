@extends('layout.app')


@section('content')
<br>

<br>


		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Danh Sách Bình Luận</h4>
								<p class="category">Các Bình Luận Chưa Trả Lời</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center">Họ Tên</th>
											<th class="text-center">Bình Luận</th>
											<th class="text-center">Thời Gian</th>
											<th class="text-center">Tên Tour</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($listBinhLuan as $binhLuan)
										<tr>
											<td class="text-center">{{$binhLuan->nameKhachHang}}</td>
											<td class="text-center">{{$binhLuan->noi_dung}}</td>
											<td class="text-center">{{$binhLuan->thoi_gian}}</td>
											<td class="text-center">{{$binhLuan->nameTour}}</td>
											<td class="text-center" required><a href="" class="btn btn-sm btn-fill">Trả Lời</a></td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
