<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Kiểm Tra CODE Khuyến Mãi</title>
		<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="{{asset('public/css/agency.css')}}" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-offset-4">
					<h2 style="padding: 50px 0 20px;">Kiểm Tra CODE Khuyến Mãi</h2>
					<form action="{{asset('update')}}" method="GET">
						<label>Code khuyễn mãi</label>
						<div class="form-group">

							<input name="code" id="in_code" style="width: 70%;float: left;" type="text" class="form-control">
							<a id="btn_check_code" style="display: inline-block;margin-left: 10px;" class="btn btn-primary">Kiểm tra</a>
						</div>
						<p id="no" style="color: red;">Vui lòng nhập Code !</p>
						<p class="img_loading"><img src="public/img/loading.gif" alt=""></p>
						<p id="sai" style="color: red;">Code không tồn tại !</p>
						<p id="roi" style="color: red;">Code đã được sử dụng !</p>
						<p id="chua" style="color: blue;">Có thể sử cụng Code !</p>
						<input id="btn_sub" type="submit" class="btn btn-primary"   value="Sử dụng code">
					</form>
				</div>
			</div>
		</div>

		<script src="public/js/jquery.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="public/js/jquery.validate.js"></script>
		<script src="public/js/check-emai.js"></script>
	</body>

</html>
