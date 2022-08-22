@include('front.layout.header')

@if($preloader->on_off == 1)
<div class="preloader">
	<h2 class="loder">{{$preloader->text}}</h2>
</div>
@endif


@include('front.layout.menu')
<!-- hero banner area start here -->
<div class="hero-banner-area hero-banner-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="banner-text">
					<h1 class="banner-title">{{$slider->slider_heading}}</h1>
					<p class="banner-content">
						{{$slider->slider_description}}
					</p>
					<ul class="banner-btn">
						<li><a class="primary-btn" href="#">Learn More</a></li>
						<li><a class="video-btn popup-video" data-autoplay="true" data-vbtype="video" href="{{$slider->video->file}}"><i class="fa fa-play"></i>Intro Video</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="banner-image wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
					<img src="{{asset('storage/slider/' . $slider->photo->file)}}" alt="hero banner">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- hero banner area ends here -->



<!-- choose area start here -->
<section class="choose-area-two section-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="choose-area-left">
					<span>{{$aboutuspage->choose_us_heading}}</span>
					<h2>{{$aboutuspage->choose_us_title}}</h2>
					<p>{!!$aboutuspage->choose_us_description!!}</p>
					<a href="#" class="primary-btn">{{$aboutuspage->choose_us_button_text}}</a>
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
							<!-- <h4>Technical support</h4> -->
						</div>
					</div>
					<div class="single-choose d-flex align-items-center justify-content-center text-center">
						<div class="chose-wrap">
							<div class="icon">
								<img src="{{asset('storage/aboutuspage/' . $aboutuspage->icon3->file)}}" alt="icon">
							</div>
							<h4>{!!$aboutuspage->choose_us_text3!!}</h4>
							<!-- <h4>Projects complete</h4> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- choose area end here -->

<!-- service-area-two start here -->
<section class="service-area-two section-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">{{$servicepage->heading}}</span>
					<h2 class="section-title">{{$servicepage->title}}</h2>
					<p class="section-text">{!!$servicepage->description!!}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 align-self-center">
				<div class="serice-left-img wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
					<img src="{{isset($servicepage->photo) ? (asset('storage/servicepage/'. $servicepage->photo->file)) : 'http://placehold.it/100x100'}}" alt="service-two">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="features-list">
					@foreach($servicechild as $schild)
					<div class="single-features">
						<div class="media">
							<div class="icon mr-5 d-flex justify-content-center align-items-center">
								<img src="{{isset($schild->photo) ? (asset('storage/servicebox/'. $schild->photo->file)) : 'http://placehold.it/100x100'}}" alt="features icon">
							</div>
							<div class="media-body">
								<h4 class="features-title mt-0"><a href="service-detail.html">{{$schild->service_box_heading}}</a></h4>
								<p>{!!$schild->service_box_description!!}</p>
								<a href="{{route('service_detail', $schild->id)}}" class="float-right learn-more-btn">Learn More +</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- service-area-two end here -->
<!-- work-progres-area  start here -->
<section class="work-progres-two section-top">
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


<!-- testimonial area start here -->
<section class="testimonial-area section-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">{{$testimonial->testimonial_main_heading}}</span>
					<h2 class="section-title">{!!$testimonial->testimonial_heading!!}</h2>
					<p class="section-text">{!!$testimonial->testimonial_description!!}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 align-self-center">
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
			<div class="col-lg-7">
				<div class="testimonial-left">
					<img src="{{asset('storage/testimonial/' . $testimonial->photo->file)}}" alt="testimonial">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- testimonial area end here -->

<!-- blog area start here -->
<section class="blog-area section">
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
						<a href="single-blog.html">
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
@include('front.layout.subscribe')


@include('front.layout.footer')

<style>
{{ isset($customcss->css) ? $customcss->css :'' }}
</style>



</body>

</html>