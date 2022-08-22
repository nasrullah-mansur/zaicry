<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="zaicre Responsive Creative HTML5 Template " />
	<meta name="keywords" content="business,corporate, creative, woocommerach, design, gallery, minimal, modern, landing page, cv, designer, freelancer, html, one page, personal, portfolio, programmer, responsive, vcard, one page" />
	<meta name="author" content="zainiklab" />
	<!-- Main Page Title -->
	<title>zaicre</title>
	<!-- Place favicon.png in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- Bootstrap 4.3.1 css -->
	<link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
	<!-- Font awesome 5 css -->
	<link rel="stylesheet" href="{{asset('front/assets/css/fontawesome.css')}}">
	<!-- flaticon css -->
	<link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
	<!-- venobox.min css -->
	<link rel="stylesheet" href="{{asset('front/assets/css/venobox.min.css')}}">
	<!-- owl.carousel css -->
	<link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
	<!-- owl.carousel css -->
	<link rel="stylesheet" href="{{asset('front/assets/css/nice-select.css')}}">
	<!-- Theme main css -->
	<link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
	<!--Theme Responsive css-->
	<link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}" />
	<!-- modernizr js-->
	<script src="{{asset('front/assets/js/vendor/modernizr-3.8.0.min.js')}}"></script>
</head>

<body>


	<!-- coming-soon page area start here  -->
	<section class="coming-soon-page section">
		<div class="container ">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="coming-soon-wrap text-center">
						<div class="coming-soon-top">
							<h2>{{$commingsoon->heading}}</h2>
							<p>{{$commingsoon->description}}</p>
						</div>
						<div id="countdown-timer"></div>
					</div>
				</div>
			</div>




			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="coming-soon-bottom">
						<div class="subsribe-wrap">
							<form action="{{route('subscriber')}}" method="POST">
								@csrf
								<div class="form-group">
									<input type="email" class="form-control" id="subsribe" name="email" placeholder="Enter Your Email" />
									<button type="submit" class="subsribe-btn">Subsribe Now</button>
								</div>
							</form>
						</div>


						<div class="col-lg-6 offset-lg-3">
							@if(Session::has('success'))
							<p>{{Session::get('success')}}</p>
							@endif
						</div>

						<ul class="d-flex justify-content-center social-follow">
							<li><a target="_blank" href="//{{$commingsoon->social_media_link1}}"><i class="fab fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="//{{$commingsoon->social_media_link2}}"><i class="fab fa-instagram"></i></a></li>
							<li><a target="_blank" href="//{{$commingsoon->social_media_link3}}"><i class="fab fa-twitter"></i></a></li>
							<li><a target="_blank" href="//{{$commingsoon->social_media_link4}}"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>



			</div>
		</div>
	</section>
	<!-- coming-soon page area end here  -->


	<a href="#" id="scrollUp"><i class="fas fa-angle-up"></i></a>
	<!-- jquery js -->
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<!-- popper js -->
	<script src="{{asset('front/assets/js/popper.js')}}"></script>
	<!-- bootstrap js -->
	<script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
	<!-- plugins js -->
	<script src="{{asset('front/assets/js/plugins.js')}}"></script>
	<!-- wow js -->
	<script src="{{asset('front/assets/js/wow.js')}}"></script>
	<!-- venobox.min js -->
	<script src="{{asset('front/assets/js/venobox.min.js')}}"></script>
	<!-- owl.carousel.min js -->
	<script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
	<!-- mixitup.min js -->
	<script src="{{asset('front/assets/js/mixitup.min.js')}}"></script>
	<!-- jquery.syotimer.min js -->
	<script src="{{asset('front/assets/js/jquery.syotimer.min.js')}}"></script>
	<!-- waypoints.min js -->
	<script src="{{asset('front/assets/js/waypoints.min.js')}}"></script>
	<!-- jquery.counterup.min js -->
	<script src="{{asset('front/assets/js/jquery.counterup.min.js')}}"></script>
	<!-- jquery.nice-select.min js -->
	<script src="{{asset('front/assets/js/jquery.nice-select.min.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('front/assets/js/main.js')}}"></script>
</body>

</html>