
@extends('layouts.layout')

@section('content')
<div id="main-content" class="active">
			<!-- Section Breadcrumb 1 -->
		    <div id="section-breadcrumb1" class="bg2">
		    	<div class="container">
		    		<div class="row">
		    			<div class="content col-12">
		    				<h1>Our Services</h1>
		    				<ul>
		    					<li><a href="#">HOME</a></li>
		    					<li class="current"><a href="#">OUR SERVICES</a></li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
		    </div>
			<!-- /.Section Breadcrumb 1 -->
			<!-- Section Services 2 -->
			<div id="section-services2">
				<div class="container">
					<div class="row">
						<div class="left col-sm-12 col-md-6">
							<h1>Event Management</h1>
							<p>
								We create and develop large or small scale events such as MICE (meetings, incentives, conferences
                                and exhibitions), ceremonies, formal parties, concerts, festivals, or even weddings. <br><br>We will be involved
                                in identifying the target audience, formulating the concept of the event, planning the overall logistics
                                of the event and managing the project from the overall event, including managing the team of people
                                responsible for each function, budget, and overseeing the implementation of the event.

							</p>
						</div>
						<div style="text-align: center" class="right ez-animate col-sm-12 col-md-6" data-animation="fadeInRight">
							<img width="370px" style="border-radius: 5px" class="img-fluid" src="images/event.jpg" alt="event">
						</div>
					</div>
				</div>
			</div>
			<!-- /.Section Services 2 -->
			<!-- Section Services 2 -->
			<div class="section-services2 bg-2">
				<div class="container">
					<div class="row">
						<div  style="text-align: center" class="right ez-animate col-sm-12 col-md-6 text-center" data-animation="fadeInLeft">
							<img width="370px" style="border-radius: 5px" class="img-fluid" src="images/manajemen.jpg" alt="event">
						</div>
						<div class="left col-sm-12 col-md-6">
							<h1>Marketing Communication</h1>
							<p>
								We will help you to manage fundamental and complex part of a company’s marketing efforts. what we
                                will do can be described as all the messages and media you deploy to communicate with the market. <br><br>
								It's includes advertising, direct marketing, branding, packaging, your online presence, printed materials,
                                PR activities, sales presentations, sponsorships, trade show appearances and more.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /.Section Services 2 -->
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
	<!-- OWL Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Waypoint -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="assets/js/easy-waypoint-animate.js"></script>
	<!-- Scripts -->
	<script src="assets/js/scripts.js"></script>

</body>
@endsection 
