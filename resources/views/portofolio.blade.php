@extends('layouts.layout')

@section('content')
		<div id="main-content" class="active">
			<!-- Section Breadcrumb 1 -->
		    <div id="section-breadcrumb1" class="bg4">
		    	<div class="container">
		    		<div class="row">
		    			<div class="content col-12">
		    				<h1>Our Portfolio</h1>
		    				<ul>
		    					<li><a href="#">HOME</a></li>
		    					<li class="current"><a href="#">OUR PORTFOLIO</a></li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
		    </div>
			<!-- /.Section Breadcrumb 1 -->
			<!-- Section Our Portfolio 2 -->
			<div id="section-ourportfolio2" class="v2">
				<div class="container">
					<div class="row m-top-15">
						<!-- Content Portfolio -->
						<div class="filter col-12">
							<div class="row">
								<div class="portfolioFilter clearfix">
									<a href="#" data-filter="*" class="current">Some of Our Works</a>
								</div>
							</div>
						</div>
						<div class="portfolioContainer col-12">
							<div class="row">
								<div class=" col-md-6 col-12 item ez-animate webDesign" data-animation="fadeInUp">
										<div class="img-container">
											<img class="img-fluid" src="images/por_gb.jpg" alt="ciptaprakarsa">
											<div class="overlay">
												<div class="overlay-content">
													<i></i>
													<h3>Ground Breaking Poltek Pertanian</h3>
													<p>BPPSDMP Kementerian Pertanian</p>
												</div>
											</div>
										</div>
								</div>
								<div class=" col-md-6 col-12 item ez-animate marketing" data-animation="fadeInUp">
										<div class="img-container">
											<img class="img-fluid" src="images/por_pdm.jpg" alt="ciptaprakarsa">
											<div class="overlay">
												<div class="overlay-content">
													<i></i>
													<h3>Launching Pembinaan Desa Mitra</h3>
													<p> Polbangtan Bogor</p>
												</div>
											</div>
										</div>
								</div>
								<div class=" col-md-4 col-12 item ez-animate webDesign illustrations" data-animation="fadeInUp">
										<div class="img-container">
											<img class="img-fluid" src="images/por_dt.jpg" alt="ciptaprakarsa">
											<div class="overlay">
												<div class="overlay-content">
													<i></i>
													<h3>Pembukaan Dies Natalies</h3>
													<p>Institut Pertanian Bogor</p>
												</div>
											</div>
										</div>
								</div>
								<div class=" col-md-4 col-12 item ez-animate illustrations marketing photography" data-animation="fadeInUp">
										<div class="img-container">
											<img class="img-fluid" src="images/por_kemen.jpg" alt="ciptaprakarsa">
											<div class="overlay">
												<div class="overlay-content">
													<i></i>
													<h3>Pengawasan Terhadap Tingkat Kepatuhan Notaris</h3>
													<p>Ditjen AHU Kementerian Hukum dan HAM</p>
												</div>
											</div>
										</div>
								</div>
								<div class=" col-md-4 col-12 item ez-animate webDesign" data-animation="fadeInUp">
										<div class="img-container">
											<img class="img-fluid" src="images/booth.jpg" alt="ciptaprakarsa">
											<div class="overlay">
												<div class="overlay-content">
													<i></i>
													<h3>Produksi Booth Kampung Hukum</h3>
													<p>Litbang Diklat Hukum Dan Peradilan MA</p>
												</div>
											</div>
										</div>
								</div>
								<div class="col-md-4 col-12 item ez-animate photography" data-animation="fadeInUp">
										<div class="img-container">
											<img class="img-fluid" src="images/por_polbang.jpg" alt="ciptaprakarsa">
											<div class="overlay">
												<div class="overlay-content">
													<i></i>
													<h3>Wisuda</h3>
													<p>Polbangtan</p>
												</div>
											</div>
										</div>
								</div>
								<div class=" col-md-4 col-12 item ez-animate photography marketing" data-animation="fadeInUp">
										<div class="img-container">
											<img class="img-fluid" src="images/por_food.jpg" alt="ciptaprakarsa">
											<div class="overlay">
												<div class="overlay-content">
													<i></i>
													<h3>Grand Opening Gofood Festival</h3>
													<p>Gojek</p>
												</div>
											</div>
										</div>
                                </div>
                                <div class=" col-md-4 col-12 item ez-animate photography marketing" data-animation="fadeInUp">
										<div class="img-container">
											<img class="img-fluid" src="images/por_poren.jpg" alt="ciptaprakarsa">
											<div class="overlay">
												<div class="overlay-content">
													<i></i>
													<h3>Ground Breaking</h3>
													<p>Politeknik Enjiniring Pertanian Indonesia</p>
												</div>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.Section Our Portfolio 2 -->
			<!-- Section Footer -->
            <div id="section-footer">
				<div class="footer1 col-12">
					<div class="widget col-12">
                        {{-- logo --}}
						<img width="200px" src="images/dpc.png" alt="ciptraprakarsa">
					</div>
				</div>
				<div class="container">
					<div class="footer2 row">
						<div class="ft-copyright col-md-6">
							<p>Copyright © 2021 <a href="#">Ciptaprakarsa.id</a> All Rights Reserved.</p>
						</div>
						<div class="ft-socialmedia col-md-6">
							<div class="social-links socials-header">
                                <a href="https://www.facebook.com/ciptaprakarsa.id"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="https://twitter.com/ciptaprakarsa"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="https://www.instagram.com/ciptaprakarsa.id"><i class="fa fa-instagram fa-lg"></i></a>
				            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.Section Footer -->
		</div>
	</div>

	<!-- Javascript Files -->
	<script src="assets/js/jquery2.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Swiper Slider -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- SLY Carousel -->
	<script src="assets/js/sly.min.js"></script>
	<script src="assets/js/sly.vendor.min.js"></script>
	<!-- OWL Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- ISOTOP Filter -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/our-portfolio.js"></script>
	<!-- Waypoint -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="assets/js/easy-waypoint-animate.js"></script>
	<!-- Scripts -->
	<script src="assets/js/scripts.js"></script>

</body>
</html>
@endsection
