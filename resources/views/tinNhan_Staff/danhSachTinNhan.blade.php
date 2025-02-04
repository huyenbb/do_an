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
								<h4 class="card-title">Danh Sách Tin Nhắn</h4>
								<p class="category">Tin Nhắn Khách Hàng Sẽ Hiển Thị Tại Đây</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center">Họ Tên</th>
											<th class="text-center">Trạng Thái</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($listTinNhan as $tinNhan)										
										<tr>
											<td class="text-center">{{ $tinNhan->nameKhachHang }}</td>	
											<td class="text-center">Tin Nhắn Mới</td>					
											<td class="text-center">
												<form action="{{ route('tinNhanStaff.create',$tinNhan->id_khach_hang)}}" method="get">	
												<input type="hidden" name="idCustomer" value="{{$tinNhan->id_khach_hang}}">											
												<button type="submit" class="btn btn-sm btn-fill text-center">Trả Lời</button>
												</form>
											</td>
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
