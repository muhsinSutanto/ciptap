<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Uniocde -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <![endif]-->
    <!-- First Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Pgae Description -->
    <meta name="description" content="ciptraprakarsa portfolio Template">
    <!-- Page Kewords -->
    <meta name="keywords" content="ciptraprakarsa">
    <!-- Site Author -->
    <meta name="author" content="ciptraprakarsa">
    <!-- Title -->
    <title>Cipta Prakarsa</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!-- REVOLUTION SLIDER -->
    <link href="http://fonts.googleapis.com/css?family=Quicksand:400%2C700%7COpen+Sans:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="assets/revslider1/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="assets/revslider1/fonts/font-awesome/css/font-awesome.css">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="assets/revslider1/css/settings.css">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" href="assets/revslider1/css/inline-revslider1.css" type="text/css">
	<!-- ADD-ONS CSS FILES -->
	<link rel="stylesheet" type="text/css"  media="all" href="assets/revslider1/css/revolution.addon.particles.css" />
	<link rel="stylesheet" type="text/css"  media="all" href="assets/revslider1/css/revolution.addon.polyfold.css" />
	<!-- /.REVOLUTION SLIDER -->
</head>
<body>
    <div id="section-preloader">
		<div class="blobs">
			<div class="blob-center"></div>
			<div class="blob"></div>
			<div class="blob"></div>
			<div class="blob"></div>
			<div class="blob"></div>
			<div class="blob"></div>
			<div class="blob"></div>
		</div>
	</div>
	<!-- /.Section Preloader -->
	<!-- Section Navbar -->
	<div id="section-navbar1">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<div class="header-logo mr-auto">
                    {{-- logo --}}
					<a href="#"><img width="100px" src="images/dpc.png" alt="ciptraprakarsa"></a>
				</div>
				<ul class="nav navbar-nav navbar1">
					<li class="nav-item">
		                <div class="header-contact">Contact phone: <span>+62 812 9083 8831</span></div>
		            </li>
		            <li class="nav-item">
		                <button type="button" id="sidebarCollapse" class="navbar-btn active">
			                <span></span>
			                <span></span>
			                <span></span>
			                <span></span>
			            </button>
		            </li>
		        </ul>
		    </nav>
		</div>
	</div>
	<div id="section-search" class="close-search">
		<div class="container">
			<div class="navigation-search">
				<div class="row">
					<div class="col ns-logo">
						<a href="#"><img src="assets/images/logo.png" alt="ciptraprakarsa"></a>
					</div>
					<div class="col ns-close">
						<span class="close"></span>
					</div>
				</div>
			</div>
			<div class="col search-content">
				<form action="#" method="post">
                    <input type="text" name="search" placeholder="Type here give it to enter">
                    <input type="submit" name="search" value="">
                    <i class="flaticon-search"></i>
                </form>
			</div>
		</div>
	</div>
	<!-- /.Section Navbar -->
	<div class="main-wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
        	<div class="social-links socials-header text-center">
                <a href="https://www.facebook.com/ciptaprakarsa.id"><i class="fa fa-facebook fa-lg"></i></a>
                <a href="https://twitter.com/ciptaprakarsa"><i class="fa fa-twitter fa-lg"></i></a>
                <a href="https://www.instagram.com/ciptaprakarsa.id"><i class="fa fa-instagram fa-lg"></i></a>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/" class="list-menu">Home</a>
                </li>
                <li>
                    <a href="/#section-aboutus1" class="list-menu">About</a>
                </li>
                <li>
                    <a href="/service" class="list-menu">Services</a>
                </li>
                <li>
                    <a href="/portofolio" class="list-menu">Portfolio</a>
                </li>
                <li>
                    <a href="/contact" class="list-menu">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- /.Sidebar  -->
        @yield('content')
</html>
