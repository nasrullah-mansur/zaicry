@include('front.layout.header')
@include('front.layout.menu')
<!-- breadcrumb area start here  -->

<!-- preloader start here -->
@if($preloader->on_off == 1)
<div class="preloader">
	<h2 class="loder">{{$preloader->text}}</h2>
</div>
@endif
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-wrap text-center">
					<h2 class="page-title">{{$contact->main_heading}}</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="{{route('home')}}">home</a></li>
							<li>{{$contact->main_heading}}</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- contact-page  start here  -->
<section class="contact-page section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">{{$contact->heading}}</span>
					<h2 class="section-title">{{$contact->title}}</h2>
					<p class="section-text">
						{!!$contact->description!!}
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="address-area">
					<div class="single-address">
						<div class="media">
							<div class="icon mr-4">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="media-body">
								<h3 class="mt-0">Address :</h3>
								<p>{{$contact->address}}</p>
							</div>
						</div>
					</div>
					<div class="single-address">
						<div class="media">
							<div class="icon mr-4">
								<i class="fas fa-phone-alt"></i>
							</div>
							<div class="media-body">
								<h3 class="mt-0">Phone : </h3>
								<p>{{$contact->phone}}</p>
							</div>
						</div>
					</div>
					<div class="single-address">
						<div class="media">
							<div class="icon mr-4">
								<i class="far fa-envelope"></i>
							</div>
							<div class="media-body">
								<h3 class="mt-0">Email : </h3>
								<p>{{$contact->email}}</p>
							</div>
						</div>
					</div>
					<div class="single-address">
						<div class="media">
							<div class="icon mr-4">
								<i class="fab fa-skype"></i>
							</div>
							<div class="media-body">
								<h3 class="mt-0">Skype :</h3>
								<p>{{$contact->skype}}</p>
							</div>
						</div>
					</div>
					<div class="single-address">
						<div class="media">
							<div class="icon mr-4">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="media-body">
								<h3 class="mt-0">Follow Us :</h3>
								<ul class="d-flex social-follow">
									<li><a href="//{{$contact->social_media_link1}}"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="//{{$contact->social_media_link2}}"><i class="fab fa-instagram"></i></a></li>
									<li><a href="//{{$contact->social_media_link3}}"><i class="fab fa-twitter"></i></a></li>
									<li><a href="//{{$contact->social_media_link4}}"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="contact-form">
					<h2>{{$contact->contact_form_heading}}</h2>
					<p>{!!$contact->contact_form_description!!}</p>
					<form action="{{route('contact')}}" method="POST">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" />
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" />
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<textarea class="form-control" id="message" rows="3" name="message" placeholder="Message"></textarea>
								</div>
								<button type="submit" class="primary-btn">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- contact-page end here  -->
<!-- google map area start here  -->
<div class="google-map-area">
	<div id="gmap"></div>
</div>
<!-- google map area end here  -->
@include('front.layout.subscribe')

<!-- footer area end here -->


@include('front.layout.footer')
<!-- map script -->
<script src="http://maps.google.com/maps/api/js?key={{$contact->google_map_api}}"></script>
<script src="{{asset('front/assets/js/gmaps.js')}}"></script>
<script id="helper" data-lat="{{$contact->google_map_lat}}" data-long="{{$contact->google_map_long}}" data-info="{{$contact->google_map_location_info}}" src="{{asset('front/assets/js/map-helper.js')}}"></script>


</body>

</html>