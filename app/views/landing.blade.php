<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="pham duc anh">

		<title>Nhận Voucher</title>

		<!-- Bootstrap Core CSS -->
		<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="{{asset('public/css/agency.css')}}" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--		<link href="http://fonts.googleapis.com/css?family=Helvetica:400,700" rel="stylesheet" type="text/css">-->
<!--		<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>-->
<!--		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>-->


		<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
		<link rel="stylesheet" href="{{asset('public/css/bootstrap-image-gallery.css')}}">
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body id="page-top" class="index">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header page-scroll">
					<img id="hinh1" class="navbar-brand page-scroll" src="public/img/Logo-hnh.png">
				</div>
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<img id="hinh2" style="height: 50px;" class="navbar-brand page-scroll" src="public/img/Logo-hnh.png">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="#gallery">Hình ảnh </a>
						</li>
						<li>
							<a class="page-scroll" href="#portfolio">Bảng giá</a>
						</li>
						<li>
							<a class="page-scroll" href="#about">Điều khoản sử dụng</a>
						</li>
						<li>
							<a class="page-scroll" href="#team">Thông tin</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

		<!-- Header -->
		<header>
			<div class="container">
				<div class="intro-text">
					<div class="intro-lead-in">Nhận ngay Voucher 100k khi nghỉ đêm tại HoneyHouse Hotel</div>
					<div class="intro-heading form-group"><a class="page-scroll btn btn-xl" href="#info">Nhận Voucher</a></div>
				</div>
			</div>

		</header>
		<input value="thong bao" id="thongbao" type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">


		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Thông báo</h4>
					</div>
					<div class="modal-body">
						Nhận Voucher thành công. Vui lòng kiểm tra email để nhận!
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<section id="info" class="bg-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-lg-offset-4">
						<form action="{{asset('send_email')}}" method="POST" id="form_landing">
							<div class="form-group">
								<label>Email:</label>
								<input name="email" type="text" placeholder="Nhập email của bạn" class="form-control" id="in_email">
							</div>
							<div class="form-group">
								<label>Số điện thoại:</label>
								<input name="phone" type="text" placeholder="Nhập số điện thoại của bạn" class="form-control">
							</div>
							<div class="form-group">
								<p>Bạn đã biết đến khách sạn Honey House chưa?</p>
								<div class="visit">
									<label>
										<input type="radio" name="visit" value="1"> Có
									</label>

									<label style="padding-left: 30px;">
										<input type="radio" name="visit" value="0">  Chưa
									</label>
									<p id="visit-error2" class="error" for="visit">Bạn chưa chọn câu trả lời !</p>
								</div>
							</div>
							<div class="form-group service">
								<p>Bạn đã sử dụng dịch vụ chưa?
								</p>

								<label><input type="radio" name="service" value="1"> Có
								</label>

								<label style="padding-left: 30px;">
									<input type="radio" name="service" value="0"> Chưa</label>
								<p id="service-error2" class="error" for="visit">Bạn chưa chọn câu trả lời !</p>
							</div>
							<input type="submit" value="Nhận Voucher" class="btn btn-warning" id="btn_submit">
							<img style="padding-left: 30px;" src="public/img/ajax-loader.gif" class="img_ne">

						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- Services Section -->
		<section id="gallery">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Hình ảnh</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-2 col-xs-12">
						<div class="col-md-5 col-xs-6 portfolio-item" id="culao">
							<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
								<img  src="{{asset('public/img/culao1.png')}}" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>HONEYHOUSE CÙ LAO</h4>
							</div>
						</div>
						<div class="col-md-5 col-xs-6 portfolio-item" id="vanhanh">
							<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
								<img  src="{{asset('public/img/suvanhanh5.jpg')}}" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>HONEYHOUSE SƯ VẠN HẠNH</h4>
							</div>
						</div>
						<div class="col-md-5 col-xs-6 portfolio-item" id="hongphong">
							<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
								<img src="{{asset('public/img/LeHongPhong9.jpg')}}" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>HONEYHOUSE LÊ HỒNG PHONG</h4>
							</div>
						</div>
						<div class="col-md-5 col-xs-6 portfolio-item" id="trungson">
							<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
								<img src="{{asset('public/img/TrungSon2.jpg')}}" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>HONEYHOUSE TRUNG SƠN</h4>
							</div>
						</div>


					</div>

				</div>
			</div>
		</section>



		<!-- Portfolio Grid Section -->
		<section id="portfolio" class="bg-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="section-heading">Bảng giá nghỉ đêm tại HoneyHouse</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-xs-12" >
						<table class="table table-bordered">
							<tr>
								<td>Tên Hotel
								</td>
								<td>Loại phòng
								</td>
								<td>Giá
								</td>
							</tr>
							<tr>
								<td rowspan="2" class="name">HoneyHouse Sư Vạn Hạnh
								</td>
								<td>Phòng Romance
								</td>
								<td>250.000 VNĐ
								</td>
							</tr>
							<tr>
								<td>Phòng Boutique
								</td>
								<td>300.000 VNĐ
								</td>
							</tr>
							<tr>
								<td rowspan="2" class="name">HoneyHouse Cù Lao
								</td>
								<td>Phòng Romance
								</td>
								<td>250.000 VNĐ
								</td>
							</tr>

							<tr>
								<td>Phòng Boutique
								</td>
								<td>300.000 VNĐ
								</td>
							</tr>
							<tr>
								<td rowspan="2" class="name">HoneyHouse Lê Hồng Phong
								</td>
								<td>Phòng Romance
								</td>
								<td>250.000 VNĐ
								</td>
							</tr>

							<tr>
								<td>Phòng Boutique
								</td>
								<td>300.000 VNĐ
								</td>
							</tr>
							<tr>
								<td rowspan="2" class="name">HoneyHouse Trung Sơn
								</td>
								<td>Phòng Romance
								</td>
								<td>220.000 VNĐ
								</td>
							</tr>
							<tr>
								<td>Phòng Boutique
								</td>
								<td> 280.000 VNĐ
								</td>
							</tr>

						</table>
					</div>
				</div>
			</div>
		</section>

		<!-- About Section -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Điều khoản sử dụng Voucher</h2>
					</div>
				</div>
				<div class="row" style="margin-top: 40px;">
					<div class="col-lg-12 col-xs-12">
						<ul class="timeline2">
							<li>Chỉ áp dụng với hoá đơn tiền phòng, không áp dụng với nước uống và snack.
							</li>
							<li>Quý khách vui lòng gọi điện đặt phòng trước để đảm bảo có phòng.
							</li>
							<li>Chỉ áp dụng cho khách nghỉ đêm.
							</li>
							<li>Voucher không có giá trị quy đổi thành tiền.
							</li>
							<li>Không áp dụng chung với các khuyến mãi khác.
							</li>
							<li>Thời gian nghỉ đêm bắt đầu từ 22h hôm nay đến 12h trưa hôm sau.Quý Khách nghỉ đêm nhưng nhận phòng trước 22h hoặc trả phòng sau 12h trưa, vui lòng thanh toán thêm 20,000đ phụ thu mỗi tiếng.
							</li>
							<li>Mã Voucher sẽ được gửi qua email. Quý khách vui lòng đưa mã này cho nhân viên lễ tân khi thanh toán.
							</li>
							<li>Thời hạn sử dụng voucher: Quý khách vui lòng xem trong email để biết chi tiết về thời hạn sử dụng voucher.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!-- Team Section -->
		<section id="team" class="bg-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Thông tin khách sạn</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div>
							<h4>1.HoneyHouse Cù Lao </h4>
							<p><i>Địa chỉ:</i> 36/04 Cù Lao, Phường 2, Quận Phú Nhuận, Tp. Hồ Chí Minh
							</p>
							<p><i>Điện thoại:</i> (08) 3517 1942
							</p>
						</div>
						<div>
							<h4>2.HoneyHouse Sư Vạn Hạnh </h4>
							<p><i>Địa chỉ:</i> 662/7 Sư Vạn Hạnh, P.12, Quận 10, Tp. Hồ Chí Minh</p>
							<p><i>Điện thoại:</i> (08) 38623600
							</p>
						</div>
						<div>
							<h4>3.HoneyHouse Lê Hồng Phong </h4>
							<p><i>Địa chỉ:</i> 811 Lê Hồng Phong, P.12, Quận 10, Tp. Hồ Chí Minh</p>
							<p><i>Điện thoại:</i> (08) 3862 2002
							</p>
						</div>
						<div>
							<h4>4.HoneyHouse Trung Sơn  </h4>
							<p><i>Địa chỉ:</i> 9 đường 6B, khu trung sơn, Bình Hưng, Bình Chánh, Bình Hưng, Tp. Hồ Chí Minh</p>
							<p><i>Điện thoại:</i> (08) 54316277
							</p>
						</div>

					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<span class="copyright">Copyright© 2015 Honey House Hotel</span>
					</div>
				</div>
			</div>
		</footer>

		<!-- Portfolio Modals -->
		<!-- Use the modals below to showcase details about your portfolio projects! -->

		<!-- Portfolio Modal 1 -->
		<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2>HoneyHouse Cù Lao</h2>
								<div id="links"></div>
								<div id="blueimp-gallery" class="blueimp-gallery">
									<!-- The container for the modal slides -->
									<div class="slides"></div>
									<!-- Controls for the borderless lightbox -->
									<h3 class="title"></h3>
									<a class="prev">‹</a>
									<a class="next">›</a>
									<a class="close">×</a>
									<a class="play-pause"></a>
									<ol class="indicator"></ol>
									<!-- The modal dialog, which will be used to wrap the lightbox content -->
									<div class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" aria-hidden="true">&times;</button>
													<h4 class="modal-title"></h4>
												</div>
												<div class="modal-body next"></div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default pull-left prev">
														<i class="glyphicon glyphicon-chevron-left"></i>
														Previous
													</button>
													<button type="button" class="btn btn-primary next">
														Next
														<i class="glyphicon glyphicon-chevron-right"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<button style="margin-top: 20px;" type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Album</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- Button trigger modal -->

		<div class="modal hide" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false">
			<div class="modal-header">
				<h1>Processing...</h1>
			</div>
			<div class="modal-body">
				<div class="progress progress-striped active">
					<div class="bar" style="width: 100%;"></div>
				</div>
			</div>
		</div>


		<?php
			if(Session::has('message'))
				echo '<div class="noti"></div>'
		?>

		<!-- jQuery -->
		<script src="public/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="public/js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="public/js/classie.js"></script>
		<script src="public/js/cbpAnimatedHeader.js"></script>

		<!-- Contact Form JavaScript -->
		<script src="public/js/jqBootstrapValidation.js"></script>
		<!--		<script src="public/js/contact_me.js"></script>-->

		<!-- Custom Theme JavaScript -->
		<script src="public/js/agency.js"></script>


		<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
		<script src="public/js/bootstrap-image-gallery.js"></script>
		<script src="public/js/demo.js"></script>
		<script src="public/js/jquery.validate.js"></script>
		<script src="public/js/jquery.resizecrop-1.0.3.js"></script>




	</body>

</html>
