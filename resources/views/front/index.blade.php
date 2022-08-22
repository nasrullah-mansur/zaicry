@include('front.layout.header')

<body>
	<!-- preloader start here -->
	@if($preloader->on_off == 1)
	<div class="preloader">
		<h2 class="loder">{{$preloader->text}}</h2>
	</div>
	@endif


	@include('front.layout.menu')


	<!-- hero banner area start here -->
	<div class="hero-banner-area hero-banner-one">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 align-self-center">
					<div class="banner-text">
						<h1 class="banner-title">{{$slider->slider_heading}}</h1>
						<p class="banner-content">{!!$slider->slider_description!!}</p>
						<ul class="banner-btn">
							<li><a class="primary-btn" href="{{route('portfolio')}}">Learn More</a></li>
							<li>
								<a class="video-btn popup-video" data-autoplay="true" data-vbtype="video" href="{{$slider->video->file}}"><i class="fa fa-play"></i>Intro Video</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="banner-image wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
						<img src="{{asset('storage/slider/' . $slider->photo->file)}}" alt="hero banner">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- hero banner area ends here -->


	<!-- service area start here -->
	<section class="service-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="section-title-area text-center">
						<span class="section-sub-title">Our Services</span>
						<h2 class="section-title">{{$service->service_heading}}</h2>
						<p class="section-text">{!!$service->service_description!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($serviceboxs as $servicebox)
				<div class="col-lg-4 col-md-6">
					<div class="single-service {{$loop->iteration == 2 ? 'style-two' : ''}} text-center ">
						<div class="service-icon d-flex align-items-center justify-content-center">
							<img src="{{asset('storage/servicebox/' . $servicebox->photo->file)}}" alt="icon" class="icon">
						</div>
						<h3 class="service-title"><a href="{{route('service_detail', $servicebox->id)}}">{{$servicebox->service_box_heading}}</a></h3>
						<p class="service-content">{!!$servicebox->service_box_description!!}</p>
						<a href="{{route('service_detail', $servicebox->id)}}" class="service-btn">Learn More</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- service area end here -->


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
								<!-- <h3>Unlimited Features</h3>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p> -->
								{!!$chooseus->chooseus_feature!!}

							</div>
						</div>
						<a href="{{route('about_us')}}" class="primary-btn">Explore More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- choose area end here -->

	<!-- work-progres-area  start here -->
	<section class="work-progres-area section-bottom">
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
			<div class="row">
				@foreach($workprocessproject as $project)
				<div class="col-lg-3 col-md-6">
					<div class="single-work text-center wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
						<div class="icon">
							<img src="{{asset('storage/workprocessproject/' . $project->photo->file)}}" alt="icon">
						</div>
						<h3 class="work-title">{{$project->project_heading}}</h3>
						<p class="work-text">{!!$project->project_description!!} </p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- work-progres-area  end here -->

	<!-- case-studies-area starte here -->
	<section class="case-studies-area bg-color section fix">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="section-title-area text-center">
						<span class="section-sub-title">{{$latestproject->latestproject_main_heading}}</span>
						<h2 class="section-title">{{$latestproject->latestproject_heading}}</h2>
						<p class="section-text">{!!$latestproject->latestproject_description!!}</p>
					</div>
				</div>
			</div>
			<div class="row p-0">
				<div class="col-lg-12 p-0">
					<div class="case-studies-list owl-carousel">
						@foreach($latestprojectsliders as $latestprojectslider)
						<div class="single-case-studie ">
							<div class="case-image">
								<img src="{{asset('storage/latestprojectslider/' . $latestprojectslider->photo->file)}}" alt="case-studies">
								<div class="overlay-content bg-two d-flex justify-content-center align-items-center flex-column text-center">
									<h3>{{$latestprojectslider->latestproject_heading}}</h3>
									<p>{!!$latestprojectslider->latestproject_description!!} </p>
									<a class="primary-btn" href="javascript::void()">{{$latestprojectslider->latestproject_button}}</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- case-studies-area end here -->


	<!-- pricing area start here -->
	<section class="pricing-area section-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="section-title-area text-center">
						<span class="section-sub-title">{{$pricingarea->pricing_area_main_heading}}</span>
						<h2 class="section-title">{{$pricingarea->pricing_area_heading}}</h2>
						<p class="section-text">{!!$pricingarea->pricing_area_description!!}</p>
					</div>
				</div>
			</div>
			<div class="pricing-tab">
				<div class="tab-menu">
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-link active" id="nav-annual-tab" data-toggle="tab" href="#nav-annual" role="tab" aria-controls="nav-annual" aria-selected="true">Annually </a>
						<a class="nav-link" id="nav-monthly-tab" data-toggle="tab" href="#nav-monthly" role="tab" aria-controls="nav-monthly" aria-selected="false">Monthly</a>
					</div>
				</div>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-annual" role="tabpanel" aria-labelledby="nav-annual-tab">
						<div class="row">
							@foreach($pricings as $pricing)
							@if($pricing->pricing_package=='Annually')
							<div class="col-lg-4 col-md-6">
								<div class="single-pricing text-center ">
									<div class="price-header">
										<div class="icon">
											<img src="{{asset('storage/pricing/' . $pricing->photo->file)}}" alt="icon">
										</div>
										<h3 class="pack-name">{{$pricing->pricing_heading}}</h3>
										<h2 class="price"><sup class="currency">$</sup>{{$pricing->pricing_amount}}</h2>
									</div>
									<div class="price-body">
										<ul class="pack-info">
											<li>{!!$pricing->pricing_list!!}</li>
										</ul>
									</div>
									<div class="price-footer">
										<a href="#" class="register-btn">{{$pricing->pricing_button_text}}</a>
									</div>
								</div>
							</div>
							@endif
							@endforeach
						</div>


					</div>
					<div class="tab-pane fade" id="nav-monthly" role="tabpanel" aria-labelledby="nav-monthly-tab">
						<div class="row">
							@foreach($pricings as $pricing)
							@if($pricing->pricing_package=='Monthly')
							<div class="col-lg-4 col-md-6">
								<div class="single-pricing text-center ">
									<div class="price-header">
										<div class="icon">
											<img src="{{asset('storage/pricing/' . $pricing->photo->file)}}" alt="icon">
										</div>
										<h3 class="pack-name">{{$pricing->pricing_heading}}</h3>
										<h2 class="price"><sup class="currency">$</sup>{{$pricing->pricing_amount}}</h2>
									</div>
									<div class="price-body">
										<ul class="pack-info">
											<li>{!!$pricing->pricing_list!!}</li>
										</ul>
									</div>
									<div class="price-footer">
										<a href="#" class="register-btn">{{$pricing->pricing_button_text}}</a>
									</div>
								</div>
							</div>
							@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- pricing area end here -->

	<!-- blog area start here -->
	<section class="blog-area section-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="section-title-area text-center">
						<span class="section-sub-title">{{$blogsinglesetting->blog_title}}</span>
						<h2 class="section-title">{{$blogsinglesetting->recent_blog_title}} </h2>
						<p class="section-text">{{$blogsinglesetting->recent_blog_description}}</p>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($post as $post)
				<div class="col-lg-4 col-md-6">
					<div class="sigle-blog ">
						<div class="blog-thumbnail">
							<a href="{{route('posts.show', $post->id)}}">
								<img src="{{asset('storage/posts/' . $post->photo->file)}}" alt="blog">
							</a>
						</div>
						<div class="blog-info">
							<h4 class="blog-meta"><i class="fas fa-calendar-alt"></i>{{$post->created_at->diffForHumans()}}</h4>
							<h3 class="blog-title">
								<a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
							</h3>
							<ul class="d-flex justify-content-between">
								<li><a class="user" href="{{route('posts.show', $post->id)}}"><i class="fa fa-user"></i>User</a></li>
								<li><a class="learn-more-btn" href="{{route('posts.show', $post->id)}}">{{$blogpagesettting->read_more_text}}</a></li>
							</ul>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- blog area end here -->

	<!-- testimonial area start here -->
	<section class="testimonial-area section-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="section-title-area text-center">
						<span class="section-sub-title">{{$testimonial->testimonial_main_heading}}</span>
						<h2 class="section-title">{!!$testimonial->testimonial_heading!!} </h2>
						<p class="section-text">{!!$testimonial->testimonial_description!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="testimonial-left">
						<img src="{{asset('storage/testimonial/' . $testimonial->photo->file)}}" alt="testimonial">
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1 align-self-center">
					<div class="testimonial-slide owl-carousel">
						@foreach($testimonialslider as $testimonialslider)
						<div class="single-testimonial">
							<i class="quote-iocn fas fa-quote-right"></i>
							<p class="testimonial-contnet">{!!$testimonialslider->testimonial_description!!}</p>
							<div class="author-info">
								<ul>
									<li>
										<img src="{{asset('storage/testimonialslider/' . $testimonialslider->photo->file)}}" alt="testimonail-author">
									</li>
									<li>
										<a class="user-name" href="{{route('team')}}">{{$testimonialslider->testimonial_name}}</a>
									</li>
								</ul>
								<h5>{{$testimonialslider->testimonial_title}}</h5>
							</div>
						</div>
						@endforeach
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- testimonial area end here -->


	@include('front.layout.subscribe')


	@include('front.layout.footer')

	<style>
	{{ isset($customcss->css) ? $customcss->css :'' }}
	</style>



</body>

</html>