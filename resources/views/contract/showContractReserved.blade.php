@extends('layout.app')


@section('content')
<br>



		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">LIST OF CONTRACT</h4>
								<p class="category">Information Tour here</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center">ID HỢP ĐỒNG</th>
											<th class="text-center">TÊN TOUR</th>
											<th class="text-center">TÊN KHÁCH HÀNG</th>
											<th class="text-center">NGÀY ĐẶT TOUR</th>
											<th class="text-center">TỔNG TIỀN</th>

										</tr>
									</thead>

                                    @foreach ($hoadon as $HoaDon)
									<tbody>
										<tr>
											<td class="text-center">{{ $HoaDon->idHoaDon }}</td>
											<td class="text-center">{{ $HoaDon->nameTour }}</td>
											<td class="text-center">{{ $HoaDon->nameKhachHang }}</td>
											<td class="text-center">{{ $HoaDon->ngayDatTour }}</td>

											<td class="text-center">{{number_format($HoaDon->tongTien,  0, ".",".")}} VNĐ</td>

										</tr>
									</tbody>
                                    @endforeach
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div>

			</div>
		</div>

@endsection
