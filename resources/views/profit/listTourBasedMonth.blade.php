@extends('layout.app')


@section('content')

		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Tour - Tháng {{ $month }}</h4>
								<p class="category">Information Tour here</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center">idContract</th>
											<th class="text-center">Tên Tour</th>
											<th class="text-center">Tên Khách Hàng</th>
											<th class="text-center">Ngày Đặt Tour</th>
											<th class="text-center">Tổng Tiền</th>
										</tr>
									</thead>

                                    @foreach ($listTourBasedMonth as $ListTourBasedMonth)
									<tbody>
										<tr>
											<td class="text-center">{{ $ListTourBasedMonth->idHoaDon }}</td>
											<td class="text-center">{{ $ListTourBasedMonth->nameTour }}</td>
											<td class="text-center">{{ $ListTourBasedMonth->nameKhachHang }}</td>
											<td class="text-center">{{ $ListTourBasedMonth->ngayDatTour }}</td>

											<td class="text-center"><h3>{{number_format($ListTourBasedMonth->tongTien,  0, ".",".")}} VNĐ</h3></td>



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
