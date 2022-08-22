@include('front.layout.header')
@include('front.layout.menu')

<body>
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
						<h2 class="page-title">About Us</h2>
						<nav class="breadcrumb-menu">
							<ul>
								<li><a href="{{route('home')}}">home</a></li>
								<li>About Us</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb area start here  -->
	<!-- choose area start here -->
	<section class="choose-area section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="choose-left ">
						<div class="choose-img text-right">
							<img class="img-sluid " src="{{asset('storage/chooseus/' . $chooseus->photo->file)}}" alt="chosse">
						</div>
						<div class="chose-list">
							@foreach($ChooseusExperience as $chooseusExp)
							<div class="single-chose">
								<div class="chose-top">
									<div class="icon">
										<img src="{{asset('storage/chooseusexperience/' . $chooseusExp->photo->file)}}" alt="calender">
									</div>
									<h2 class="counter-count"><span class="counter">{{$chooseusExp->chooseus_experience_no}}</span>+</h2>
								</div>
								<div class="chose-text">
									<h4>{{$chooseusExp->chooseus_experience_text}}</h4>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-1">
					<div class="choose-right">
						<div class="section-title-area">
							<span class="section-sub-title">Why Choose Us</span>
							<h2 class="section-title">{{$chooseus->chooseus_heading}}</h2>
							<p class="section-text">{!!$chooseus->chooseus_description!!}</p>
						</div>
						<div class="featurs-list">
							<div class="single-feature">
								{!!$chooseus->chooseus_feature!!}
							</div>
						</div>
						<a href="{{route('service')}}" class="primary-btn">Explore More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- choose area end here -->
	<!-- choose area start here -->
	<section class="choose-area-two ">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="choose-area-left">
						<span>{{$aboutuspage->choose_us_heading}}</span>
						<h2>{{$aboutuspage->choose_us_title}}</h2>
						<p>{!!$aboutuspage->choose_us_description!!}</p>
						<a href="{{route('service')}}" class="primary-btn">{{$aboutuspage->choose_us_button_text}}</a>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1">
					<div class="choose-area-right">
						<div class="single-choose d-flex align-items-center justify-content-center text-center">
							<div class="chose-wrap">
								<div class="icon">
									<img src="{{asset('storage/aboutuspage/' . $aboutuspage->icon1->file)}}" alt="icon">
								</div>
								<h4>{!!$aboutuspage->choose_us_text1!!}</h4>
							</div>
						</div>
						<div class="single-choose d-flex align-items-center justify-content-center text-center">
							<div class="chose-wrap">
								<div class="icon">
									<img src="{{asset('storage/aboutuspage/' . $aboutuspage->icon2->file)}}" alt="icon">
								</div>
								<h4>{!!$aboutuspage->choose_us_text2!!}</h4>
							</div>
						</div>
						<div class="single-choose d-flex align-items-center justify-content-center text-center">
							<div class="chose-wrap">
								<div class="icon">
									<img src="{{asset('storage/aboutuspage/' . $aboutuspage->icon3->file)}}" alt="icon">
								</div>
								<h4>{!!$aboutuspage->choose_us_text3!!}</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- choose area end here -->
	<!-- work-progres-area  start here -->
	<section class="work-progres-two section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="section-title-area text-center">
						<span class="section-sub-title">{{$workprocess->workprocess_main_heading}}</span>
						<h2 class="section-title">{{$workprocess->workprocess_heading}}</h2>
						<p class="section-text">{!!$workprocess->workprocess_description!!}</p>
					</div>
				</div>
			</div>
			<div class="work-list">
				<div class="row">
					@foreach($workprocessproject as $workprocessproject)
					<div class="col-lg-3 col-md-6">
						<div class="single-work text-center wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
							<div class="icon d-flex justify-content-center align-items-center">
								<img src="{{isset($workprocessproject->photo) ? (asset('storage/workprocessproject/'. $workprocessproject->photo->file)) : 'http://placehold.it/50x50'}}" alt="">
							</div>
							<h3>{{$workprocessproject->project_heading}}</h3>
							<p>{!!$workprocessproject->project_description!!} </p>
						</div>
					</div>
					@endforeach
				</div>
				<div class="line-shape">
					<img src="{{asset('images/icons/line-shape.png')}}" alt="line-shape">
				</div>
			</div>
		</div>
	</section>
	<!-- work-progres-area  end here -->
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
								<li><a class="facebook" href="{{$member->social_media_link1}}"><i class="fab fa-facebook-f"></i></a></li>
								<li><a class="instagram" href="{{$member->social_media_link2}}"><i class="fab fa-instagram"></i></a></li>
								<li><a class="twitter" href="{{$member->social_media_link3}}"><i class="fab fa-twitter"></i></a></li>
								<li><a class="pinterest" href="{{$member->social_media_link4}}"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a class="linkedin" href="{{$member->social_media_link5}}"><i class="fab fa-linkedin-in"></i></a></li>
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




	@include('front.layout.footer')
</body>

</html>