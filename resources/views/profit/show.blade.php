@extends('layout.app')


@section('content')



		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Profit of Months</h4>
								<p class="category">Information Profit - 2021</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center">Tổng Tour Đã Thanh Toán - Tháng {{ $month }}</th>
											<th class="text-center" colspan="3">Actions</th>
										</tr>
									</thead>


									<tbody>
										<tr>
											<td class="text-center"><h4>{{ $SumOfTour }}</h4></td>
											<td class="text-center">
                                                <form action="{{ route('listTourBasedMonth.show', $month) }}" method="get">
													<button class="btn btn-wd btn-warning btn-fill btn-magnify">DETAIL</button>
												</form>
											</td>
										</tr>
									</tbody>

                                    <tbody>
										<tr>
											<td class="text-center"><h2>Tổng Tiền : </h2></td>

											<td class="text-center">
												<h2>{{number_format($Profit,  0, ".",".")}} VNĐ</h2>
											</td>
										</tr>
									</tbody>
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
