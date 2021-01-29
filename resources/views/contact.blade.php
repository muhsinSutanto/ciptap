@extends('layouts.layout')

@section('content')
		<div id="main-content" class="active">
			<!-- Section Breadcrumb 1 -->
		    <div id="section-breadcrumb1" class="bg8">
		    	<div class="container">
		    		<div class="row">
		    			<div class="content col-12">
		    				<h1>Contact Us</h1>
		    				<ul>
		    					<li><a href="#">HOME</a></li>
		    					<li class="current"><a href="#">CONTACT US</a></li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
		    </div>
			<!-- /.Section Breadcrumb 1 -->
			<!-- Section Contact -->
			<div id="section-contact">
				<div class="container">
                    @if ($message = Session::get('post_status')) 
                        <p  style="font-family: 'Quicksand-Bold';
                        color: #d0bb79;">{{$message}}</p> 
                    @endif

					<div class="row">
						<div class="col-12">
							<h1>Type your message</h1>
						</div>
						<!-- Contact Form -->
						<div class="contact-form col-sm-12 col-md-6">
							<!-- Form -->
                            <form action="/message" method="POST">
                                @csrf
								<div class="row">
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<input type="text" class="form-control" name="name" placeholder="Name" required="">
									</div>
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<input type="email" class="form-control" name="email" placeholder="Email*" required="">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<input type="text" class="form-control" name="number" placeholder="Phone Number*" required="">
									</div>
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<input type="text" class="form-control" name="subject" placeholder="Subject" required="">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12">
										<textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-12">
										<button type="submit">Submit</button>
									</div>
								</div>
							</form>
							<!-- /.Form -->
						</div>
						<!-- /.Contact Form -->
						<!-- Contact Details -->
						<div class="contact-details col-sm-12 col-md-6">
							<!-- Item -->
							<div class="item ez-animate" data-animation="fadeInRight">
								<div class="thumb-icon">
									<i class="flaticon-house"></i>
								</div>
								<div class="description">
									<p> Jl. Bogor Baru A4 No. 8<br>
                                        Tegal Lega, Bogor Tengah, Jawa Barat, Indonesia 16152</p>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="item ez-animate" data-animation="fadeInRight">
								<div class="thumb-icon">
									<i class="flaticon-smartphone-1"></i>
								</div>
								<div class="description">
									<p>Mobile:  +62 812 9083 8831</p>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="item ez-animate" data-animation="fadeInRight">
								<div class="thumb-icon">
									<i class="flaticon-paper-plane"></i>
								</div>
								<div class="description">
									<p>info@ciptaprakarsa.id</p>
								</div>
							</div>
							<!-- /.Item -->
						</div>
						<!-- /.Contact Details -->
					</div>
				</div>
			</div>
            <!-- /.Section Contact -->
            <!-- Section Map -->
			<div id="section-map">
				<div class="detail">
					<div class="marker-img">
						<img src="assets/images/marker.png" alt="Akroot">
					</div>
					<div class="description">
						<h5> Cipta Prakarsa Event Management</h5>
						<p>Jl Bogor Baru A4 No.8<br>Kota Bogor</p>
					</div>
				</div>
				<div id="map"></div>
			</div>
			<!-- /.Section Map -->
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
	<!-- Waypoint -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="assets/js/easy-waypoint-animate.js"></script>
	<!-- Scripts -->
	<script src="assets/js/scripts.js"></script>
	<!--Google Maps Init -->
    <script>
        function initMap() {

            var location = new google.maps.LatLng(-6.5915219632325694, 106.81023675325766);

            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: location,
                zoom: 14,
                zoomControl: false,
	            mapTypeControl: false,
	            scaleControl: false,
	            streetViewControl: false,
	            rotateControl: false,
	            scrollwheel: false,
	            fullscreenControl: false,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP

            }
            var map = new google.maps.Map(mapCanvas, mapOptions);

            // var marker = new google.maps.Marker({
            //     position: location,
            //     map: map,
            //     icon: 'assets/images/marker.png'
            // });

        }

        google.maps.event.addDomListener(window, 'load', initMap);
                
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDO9a4QLB3Mw5L995FcMxObb9QYVzqyRU&callback=initMap"></script>

</body>
@endsection 
