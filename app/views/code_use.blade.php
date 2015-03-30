<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>DANH SÁCH VOUCHER ĐÃ SỬ DỤNG</title>

		<!-- Bootstrap Core CSS -->
		<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Custom CSS -->

		<!-- Custom Fonts -->
		<link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>

		<div class="container">
			<div class="col-md-12">
				<h3 style="text-align: center;">DANH SÁCH VOUCHER ĐÃ SỬ DỤNG</h3>
				<table class="table table-bordered">
					<tr>
						<th>STT</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Biết đến khách sạn</th>
						<th>Sử dụng dịch vụ</th>
						<th>Code</th>
						<th>Thời gian</th>
					</tr>
					<?php
						$i=0;
					?>
					@foreach($data as $key => $row)
					<?php
						$i++;
					?>
					<tr>
						<td>{{$i}}</td>
						<td>{{$row->email}}</td>
						<td>{{$row->phone}}</td>
						<td>{{$row->visit ==1 ? 'có' :'chưa'}}</td>
						<td>{{$row->service ==1 ? 'có' :'chưa'}}</td>
						<td>{{$row->code}}</td>
						<td>{{$row->time_use}}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</body>
</html>
