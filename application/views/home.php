<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salon Muslimah</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon-->
	<img src="<?php echo base_url() ?>/asset/images/favicon.ico" />


	<!-- WebUI PopOver Plugin -->
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/webuipopover/jquery.webui-popover.css" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/normalize.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/font/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/materialize/css/materialize.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/bootstrap.css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/animate.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/sweetalert/sweet-alert.css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.transitions.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.theme.css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/main.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/responsive.css" />

	<!-- Choose your default colors -->
	<!-- colors/colorX.css replace X with 1-8 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/colors/color1.css" />

	<script src="<?php echo base_url() ?>asset/materialx/js/html5shiv.js" /></script>
</head>

<body>
	<!-- Main Container -->
	<main id="app" class="main-section">
		<!-- header navigation start -->
		<header id="navigation" class="root-sec white nav">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="nav-inner">
							<nav class="primary-nav">
								<div class="clearfix nav-wrapper">
									<a href="<?php echo base_url() ?>" class="left brand-logo menu-smooth-scroll" data-section="#home">
										<img src="<?php echo base_url() ?>asset/images/logo.jpg" alt="" />
									</a>
									<a href="#" data-activates="mobile-demo" class="button-collapse">
										<i class="mdi-navigation-menu"></i>
									</a>
									<ul class="right static-menu">

										<li>
											<a href="<?php echo base_url()?>index.php/About" data-section="#about" class="menu-smooth-scroll">
												<i class="fa fa-user fa-fw"></i>Tentang Kami</a>
										</li>
										<li>
											<a href="<?php echo base_url()?>index.php/Service" data-section="#services" class="menu-smooth-scroll">
												<i class="fa fa-list fa-fw"></i>Layanan</a>
										</li>
										<li>
											<a href="#" data-section="#bundles" class="menu-smooth-scroll">
												<i class="fa fa-list fa-fw"></i>Paket</a>
										</li>
										<li>
											<a href="#" data-section="#testimonial" class="menu-smooth-scroll">
												<i class="fa fa-comments fa-fw"></i>Testimonial</a>
										</li>
										<li>
											<a href="#" data-section="#contact" class="menu-smooth-scroll">
												<i class="fa fa-phone-square fa-fw"></i>Contact</a>
										</li>
										<li>
											<a href="<?php echo base_url()?>index.php/Admin">
												<i class="fa fa-handshake-o fa-fw"></i>Admin</a>
										</li>
										<li>
											<a class="dropdown-button blog-submenu-init" href="#" data-activates="dropdown1">
												<i class="mdi-navigation-more-vert right"></i>
											</a>
										</li>
									</ul>

									<ul class="inline-menu side-nav" id="mobile-demo">

										<!-- Mini Profile // only visible in Tab and Mobile -->
										<li class="mobile-profile">
											<div class="profile-inner">
												<div class="pp-container">
													<img src="<?php echo base_url() ?>asset/favicon.ico" alt="" />
												</div>
												<h3>Az Zahra</h3>
												<h5>Muslimah Salon and Spa</h5>
											</div>
										</li>
										<!-- mini profile end-->
                    </ul>
		</header>
		<!-- Home Section start -->
		<section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
			<div class="sec-overlay">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="home-inner">
								<div class="center-align home-content">
									<h1 class="home-title">Az
										<span>Zahra</span>
									</h1>
									<h2 class="home-subtitle">Muslimah Salon and Spa</h2>
									<a href="service.php" class="btn waves-effect waves-light btn-large brand-bg white-text regular-text">Reservasi
										<i class="mdi-content-send left"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .container end -->
				<div class="section-call-to-area">
					<div class="container">
						<div class="row">
							<a href="#" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
								<i class="mdi-navigation-expand-more"></i>
							</a>
						</div>
					</div>
					<!-- .container end -->
				</div>
			</div>
		</section>
		<!-- #home Section end -->

		<!-- About Section start -->
		<section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
			<div class="container">
				<div class="row">
					<div class="clearfix about-inner">

						<div class="col-sm-12 col-md-8">
							<div class="person-about">
								<h3 class="about-subtitle">Azzahra Salon and Spa</h3>
								<p>Dalam menghadapi rutinitas sehari-hari sebagai wanita berhijab memang tak mudah, kadang kita butuh
									<i style="font-style: italic;">Me Time</i> untuk meluangkan waktu menenangkan diri dan menyegarkan pikiran. Azzahra Muslimah Salon and Spa, merupakan
									salon kecantikan khusus untuk muslimah dengan pelayanan yang lengkap dan berkualitas, dengan demikian, muslimah
									bisa melakukan perawatan kecantikan, tidak hanya cantik fisik tetapi juga cantik dari dalam. Didirikan sejak 9 Oktober
									2015 dengan beragam layanan seperti perawatan rambut, wajah, tangan dan kaki, dan tubuh.</p>
								{{--
								<a class="waves-effect waves-light btn-large brand-bg white-text">
									<i class="mdi-content-archive left"></i> Download Resume</a> --}}
							</div>
						</div>
						<!-- about me description -->


						<div class="col-sm-12 col-md-4">
							<div class="person-info">
								<h3 class="about-subtitle">Jam Kerja</h3>
								<table>
									<tr>
										<td>
											<h5>
												<span>Senin - Sabtu :</span>
											</h5>
										</td>
										<td>
											<h5>10AM - 8PM</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>
												<span>Minggu :</span>
											</h5>
										</td>
										<td>
											<h5>Tutup</h5>
										</td>
									</tr>
								</table>
							</div>
							<!-- about me info -->

						</div>
					</div>
				</div>
				<!-- .container end -->
		</section>
		<!-- #about Section end -->


		<!-- #services section start -->
		<section id="services" class="scroll-section root-sec padd-tb-120 brand-bg experience-wrap">
			<div class="container">
				<div class="row">
					<div class="blog-inner">
						<div class="col-sm-12 card-box-wrap">
							<div class="row">
								<div class="clearfix section-head blog-text">
									<div class="col-sm-10">
										<h2 class="title">Layanan</h2>
										<p class="regular-text"></p>
									</div>
								</div>
								<div class="clearfix card-element-wrapper" id="blog-posts">
									<article class="col-sm-6 col-md-4 single-card-box single-post">
										<div class="card wow fadeInUpSmall" data-wow-duration=".7s">
											<div class="card-image">
												<div class="card-img-wrap">
													<div class="blog-post-thumb waves-effect waves-block waves-light">
														<a href="{{route('service')}}">
															<img class="activator" img src="<?php echo base_url() ?>asset/images/hair.jpg" alt="">
														</a>
													</div>
													<div class="post-body">
														<a href="{{route('service')}}" class="post-title-link brand-text">
															<h2 class="post-title">Hair Treatment</h2>
														</a>
														<p class="post-content">Cuci - Gunting, Creambath, Hair Spa, Hair Mask, HairLoss, . . . .</p>
													</div>
												</div>
											</div>
											<div class="clearfix card-content">
												<a href="{{route('service')}}" class="brand-text right waves-effect">Read More</a>
											</div>
										</div>
									</article>
									<!-- ./single blog post end -->
									<article class="col-sm-6 col-md-4  single-card-box single-post">
										<div class="card wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
											<div class="card-image">
												<div class="card-img-wrap">
													<div class="blog-post-thumb waves-effect waves-block waves-light">
														<a href="{{route('service')}}">
															<img class="activator" img src="<?php echo base_url() ?>asset/images/face.jpg" alt="" />
														</a>
													</div>
													<div class="post-body">
														<a href="{{route('service')}}" class="post-title-link brand-text">
															<h2 class="post-title">Face Treatment</h2>
														</a>
														<p class="post-content">Make up, Facial, Masker Wajah, Totok Wajah Setrika Wajah . . . </p>
													</div>
												</div>
											</div>
											<div class="clearfix card-content">
												<a href="{{route('service')}}" class="brand-text right waves-effect">Read More</a>
											</div>
										</div>
									</article>
									<!-- ./single blog post end -->
									<article class="col-sm-6 col-md-4 single-card-box single-post">
										<div class="card wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
											<div class="card-image">
												<div class="card-img-wrap">
													<div class="blog-post-thumb waves-effect waves-block waves-light">
														<a href="{{route('service')}}">
															<img class="activator" img src="<?php echo base_url() ?>asset/images/handsandfeet.jpg" alt="" />
														</a>
													</div>
													<div class="post-body">
														<a href="{{route('service')}}" class="post-title-link brand-text">
															<h2 class="post-title">Hands and Feet Treatment</h2>
														</a>
														<p class="post-content">Pedicure, Menicure, Refleksi, Massage, Bleaching . . . </p>
													</div>
												</div>
											</div>
											<div class="clearfix card-content">
												<a href="{{route('service')}}" class="brand-text right waves-effect">Read More</a>
											</div>
										</div>
									</article>
									<!-- ./single blog post end -->
								</div>
								<div class="clearfix left-align">
									<div class="col-sm-12">
										<a href="{{ route('service') }}" class="waves-effect waves-light btn-large load-more">See More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- #services section end -->

		<!-- Bundles Section start -->
		<section id="bundles" class="scroll-section root-sec grey lighten-5 padd-tb-120 education-wrap">
			<div class="container">
				<div class="row">
					<div class="blog-inner">
						<div class="col-sm-12 card-box-wrap">
							<div class="row">
								<div class="clearfix section-head blog-text">
									<div class="col-sm-10">
										<h2 class="title">Paket Cantik</h2>
										<p class="regular-text">Kami menyediakan berbagai paket dengan harga yang lebih murah.</p>
									</div>
								</div>
								<div class="clearfix card-element-wrapper" id="blog-posts">
									<article class="col-sm-6 col-md-4 single-card-box single-post">
										<div class="card wow fadeInUpSmall" data-wow-duration=".7s">
											<div class="card-image">
												<div class="card-img-wrap">
													<div class="blog-post-thumb waves-effect waves-block waves-light">
														<a href="{{route('bundle')}}">
															<img class="activator" img src="<?php echo base_url() ?>asset/images/bundle.jpg" alt="" />
														</a>
													</div>
													<div class="post-body">
														<a href="{{route('bundle')}}" class="post-title-link brand-text">
															<h2 class="post-title">AzZahra Face Spa</h2>
														</a>
														<p class="post-content">Masker Wajah + Totok Wajah + Refleksi .............................</p>
													</div>
												</div>
											</div>
											<div class="clearfix card-content">
												<a href="{{route('bundle')}}" class="brand-text right waves-effect">Read More</a>
											</div>
										</div>
									</article>
									<!-- ./single blog post end -->
									<article class="col-sm-6 col-md-4  single-card-box single-post">
										<div class="card wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
											<div class="card-image">
												<div class="card-img-wrap">
													<div class="blog-post-thumb waves-effect waves-block waves-light">
														<a href="{{route('bundle')}}">
															<img class="activator" img src="<?php echo base_url() ?>asset/images/bundle.jpg" alt="" />
														</a>
													</div>
													<div class="post-body">
														<a href="{{route('bundle')}}" class="post-title-link brand-text">
															<h2 class="post-title">AzZahra Body Spa</h2>
														</a>
														<p class="post-content">Masker Body + Body Scrup + Body Massage + Body Steam + Rendam Rempah</p>
													</div>
												</div>
											</div>
											<div class="clearfix card-content">
												<a href="{{route('bundle')}}" class="brand-text right waves-effect">Read More</a>
											</div>
										</div>
									</article>
									<!-- ./single blog post end -->
									<article class="col-sm-6 col-md-4 single-card-box single-post">
										<div class="card wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
											<div class="card-image">
												<div class="card-img-wrap">
													<div class="blog-post-thumb waves-effect waves-block waves-light">
														<a href="{{route('bundle')}}">
															<img class="activator" img src="<?php echo base_url() ?>asset/images/bundle.jpg" alt="" />
														</a>
													</div>
													<div class="post-body">
														<a href="{{route('bundle')}}" class="post-title-link brand-text">
															<h2 class="post-title">Paket Assadina</h2>
														</a>
														<p class="post-content">Creambath + Facial + Pedicure + Menicure + Lulur Spa</p>
													</div>
												</div>
											</div>
											<div class="clearfix card-content">
												<a href="{{route('bundle')}}" class="brand-text right waves-effect">Read More</a>
											</div>
										</div>
									</article>
									<!-- ./single blog post end -->
								</div>
								<div class="clearfix left-align">
									<div class="col-sm-12">
										<a href="{{ route('bundle') }}" class="waves-effect waves-light btn-large load-more">See More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- #bundles Section end -->

		<!-- Testimonial Section end -->
		<section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
			<div class="container">
				<div class="row">
					<div class="testimonial-inner">
						<div class="col-sm-12 col-md-10 card-box-wrap">
							<div class="row">
								<div class="clearfix section-head testimonial-text">
									<div class="col-sm-12">
										<h2 class="title">Testimonial</h2>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="overflow-hidden">
										<div class="row">

											<div id="testimonialSlider" class="clearfix card-element-wrapper">
												<div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
													<div class="card">
														<div class="card-image waves-effect waves-block waves-light">
															<div class="card-img-wrap">
																<img class="activator" img src="<?php echo base_url() ?>asset/materialx/example/images/avatar.png" alt="" />
																<p class="saying-about">Pegawainya ramah-ramah, bikin betah pas nyalon.</p>
															</div>
														</div>
														<div class="card-content">
															<span class="card-title activator brand-text">Fitriya -</span>
															<a href="#">Mahasiswa Unair</a>
														</div>
													</div>
												</div>
												<!-- ./single testimonial box -->
												<div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
													<div class="card">
														<div class="card-image waves-effect waves-block waves-light">
															<div class="card-img-wrap">
																<img class="activator" img src="<?php echo base_url() ?>asset/materialx/example/images/avatar.png" alt="" />
																<p class="saying-about">Nyalon disini nggak bikin kantong bolong.</p>
															</div>
														</div>
														<div class="card-content">
															<span class="card-title activator brand-text">Sulistyowati -</span>
															<a href="#">Mahasiswa Unair</a>
														</div>
													</div>
												</div>
												<!-- ./single testimonial box -->
												<div class="col-sm-6 single-card-box">
													<div class="card">
														<div class="card-image waves-effect waves-block waves-light">
															<div class="card-img-wrap">
																<img class="activator" img src="<?php echo base_url() ?>asset/materialx/example/images/avatar.png" alt="" />
																<p class="saying-about">Pelayanannya terbaik.</p>
															</div>
														</div>
														<div class="card-content">
															<span class="card-title activator brand-text">Rini Sutisno -</span>
															<a href="#">Mahasiswa Unair</a>
														</div>
													</div>
												</div>
												<!-- ./single testimonial box -->
											</div>
											<!-- #testimonialSlider end -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="btn-wrapp tmo-ctrl">
							<a class="btn-floating waves-effect waves-light btn-large white go go-left">
								<i class="mdi-navigation-chevron-left brand-text"></i>
							</a>
							<a class="btn-floating waves-effect waves-light btn-large white go go-right">
								<i class="mdi-navigation-chevron-right brand-text"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- ./container end -->
		</section>
		<!-- #testimonial Section end -->

		<!-- Contact Section end -->
		<section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
			<div class="container">
				<div class="row">
					<div class="contact-inner">
						<div class="col-sm-12 card-box-wrap">
							<div class="row">
								<div class="clearfix section-head contact-text">
									<div class="col-sm-12">
										<h2 class="title">Contact</h2>
										<p class="regular-text">Jika ada pesan atau keluhan silahkan hubungi kami</p>
									</div>
								</div>
								<!-- contact text end -->

								<div class="clearfix contact-form">

									<!-- Contact Form start -->
									<div class="col-sm-5">
										<div class="clearfix card-panel grey lighten-5 cform-wrapper">
											<div class="person-info">
												<h3 class="about-subtitle">Kantor Cabang Utama</h3>
												<h5>
													<span>Alamat :</span> Kampus C Mulyorejo, Surabaya Indonesia</h5>
												<h5>
													<span>Telp :</span> +62 8501 2345678</h5>
												<h5>
													<span> </span> +62 8508 7654321</h5>
												<h5>
													<span>Email :</span> customerservice@azzahra.com</h5>
											</div>
										</div>
									</div>
									<!-- ./contact form end -->
									<!-- Map Start -->
									<div class="col-sm-7">
										<div class="map-wrapper">
											<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ46FNOYj51y0R-r7s_BJaq20&key=AIzaSyCj8eTDsAVHIy-YBQm95o0M7CzD_7NbEL4"
											allowfullscreen></iframe>
										</div>
									</div>
									<!-- Map end -->

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ./container end -->
			<div class="section-call-to-area">
				<div class="container">
					<div class="row">
						<a href="<?php echo base_url() ?>application/views/home.php" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden"
						data-section="#home">
							<i class="mdi-navigation-expand-less"></i>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- #contact Section end -->

		<script type="text/javascript">
    $('#loginpopover').webuiPopover({url:'#loginContent', animation:'pop'});
  </script>
  <script src="<?php echo base_url() ?>asset/js/app.js"/></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/detectmobilebrowser.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/isotope.pkgd.min.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/wow.min.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/waypoints.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/jquery.counterup.min.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/jquery.nicescroll.min.js')}}"></script>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/gmaps.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/libs/materialize/js/materialize.min.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/libs/jwplayer/jwplayer.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/libs/sweetalert/sweet-alert.min.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/common.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/materialx/js/main.js')}}"></script>
  <script src="<?php echo base_url() ?>asset/webuipopover/jquery.webui-popover.js')}}"></script>

