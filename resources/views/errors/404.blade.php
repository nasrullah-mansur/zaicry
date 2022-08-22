@include('front.layout.header')

<body>
	<!-- error page area start here  -->
	<section class="error-page section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="error-wrap text-center">
						<img src="{{asset('images/icons/404.png')}}" alt="404">
						<h1>404</h1>
						<h2>Oops! That page can’t be found</h2>
						<a href="{{route('home')}}" class="primary-btn">Go Back Home</a>
					</div>
				</div>
			</div>
		</div>
	</section>

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