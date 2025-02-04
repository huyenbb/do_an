@extends('layout.app')


@section('content')

		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<h2>Nhập Năm Bạn Muốn Tìm Kiếm</h2>
					</div>
					<div class="col-md-2"></div>
				</div>
				<form action="{{ route('ThongkeSL') }}" method="get">
                <div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<select name="nameThongKe" class="form-control">
							@foreach ($yearStatistic as $year)
							<option value="{{$year->yearStatistic}}">{{$year->yearStatistic}}</option>
							@endforeach
						</select>
					</div>
					<div class="col-md-2"></div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<button type="submit" class="btn btn-fill btn-info">Tìm Kiếm</button>
					</div>
					<div class="col-md-2"></div>
				</div>
			</form>
			</div>
		</div>
	
@endsection
