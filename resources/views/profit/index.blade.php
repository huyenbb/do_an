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
											<th class="text-center">Months</th>

											<th class="text-center" colspan="3">Actions</th>
										</tr>
									</thead>

                                    @for ($i = 1; $i < 13; $i++)
									<tbody>
										<tr>
											<td class="text-center"><h5>{{$i.'- 2022'}}</h5></td>
											<td class="text-center">
												<a href="{{ route('profit.show',$i) }}" class="btn btn-wd btn-warning btn-fill btn-magnify">DETAIL</a>
											</td>
										</tr>
									</tbody>
                                    @endfor
                                    <tbody>
										<tr>
											<td class="text-center"><h2>Tổng Tiền :</h2></td>
											<td class="text-center">

												<h2>{{number_format($ProfitOfAllMonths,  0, ".",".")}} VNĐ</h2>
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
