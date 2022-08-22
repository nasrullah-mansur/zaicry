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
					<h2 class="page-title">Service Page</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="{{route('home')}}">home</a></li>
							<li>Service</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- service-area-two start here -->
<section class="service-area-two section">
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
<!-- pricing area start here -->
<section class="pricing-area section">
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