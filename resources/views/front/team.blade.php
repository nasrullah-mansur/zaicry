@include('front.layout.header')
@include('front.layout.menu')

<!-- preloader start here -->
@if($preloader->on_off == 1)
<div class="preloader">
	<h2 class="loder">{{$preloader->text}}</h2>
</div>
@endif
<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-wrap text-center">
					<h2 class="page-title">{{$team->main_heading}}</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="index.html">home</a></li>
							<li>{{$team->main_heading}}</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- team area start here  -->
<section class="team-area section-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">{{$team->heading}}</span>
					<h2 class="section-title">{{$team->title}}</h2>
					<p class="section-text">{!!$team->description!!}</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($teammember as $member)
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-team text-center ">
					<div class="member-image">
						<img src="{{isset($member->photo) ? (asset('storage/teammember/'. $member->photo->file)) : 'http://placehold.it/50x50'}}" alt="team">
					</div>
					<div class="member-info">
						<h3 class="member-name"><a href="#">{{$member->name}}</a></h3>
						<h4 class="member-profesion">{{$member->title}}</h4>
						<ul class="social-media">
							<li><a class="facebook" href="//{{$member->social_media_link1}}"><i class="fab fa-facebook-f"></i></a></li>
							<li><a class="instagram" href="//{{$member->social_media_link2}}"><i class="fab fa-instagram"></i></a></li>
							<li><a class="twitter" href="//{{$member->social_media_link3}}"><i class="fab fa-twitter"></i></a></li>
							<li><a class="pinterest" href="//{{$member->social_media_link4}}"><i class="fab fa-pinterest-p"></i></a></li>
							<li><a class="linkedin" href="//{{$member->social_media_link5}}"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- team area end here  -->
<!-- Subsribe area start here -->
<div class="subsribe-area-two section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="subsribe-wrap text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
					<h2>Interested To <br /> Get Our Featured Service</h2>
					<form action="{{route('subscriber')}}" method="POST">
						@csrf
						<div class="form-group">
							<input type="email" class="form-control" id="subsribe" name="email" placeholder="Enter Your Email" />
							<button type="submit" class="subsribe-btn">Subsribe Now</button>
						</div>
					</form>
				</div>
				@if(Session::has('success'))
				<p>{{Session::get('success')}}</p>
				@endif
			</div>
		</div>
	</div>
</div>
<!-- Subsribe area end here -->
@include('front.layout.footer')
</body>

</html>