@extends('layout.app')


@section('content')
<br>
	
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Danh Sách Khách - Tour : {{ $tour->nameTour }}</h4>
								<p class="category">Information Tour here</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center">idCustomer</th>
                                            <th class="text-center">Tên Khách Hàng</th>
											<th class="text-center">SĐT</th>
											<th class="text-center">Số Người Lớn</th>
											<th class="text-center">Số Trẻ Em</th>
											<th class="text-center">Tổng Tiền</th>
										  
										</tr>
									</thead>
                                     @foreach ($listCustomerTour as $customer)                                                                                         
									<tbody>
										<tr>
											<td class="text-center">{{ $customer->idKhachHang }}</td>
                                            <td class="text-center">{{ $customer->nameKhachHang }}</td>
											<td class="text-center">{{ $customer->sdt }}</td>
											<td class="text-center">{{ $customer->soLuongNguoiLon }}</td>
											<td class="text-center">{{ $customer->soLuongTreEm }}</td>
											<td class="text-center">{{number_format($customer->tongTien ,  0, ".",".")}} VND</td>			
											
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
