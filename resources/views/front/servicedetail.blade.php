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
					<h2 class="page-title">{{$servicechild->service_box_heading}}</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="{{route('home')}}">home</a></li>
							<li><a href="{{route('service')}}">Service</a></li>
							<li>Service Destail</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- brand success area start here  -->
<section class="brand-success-area section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title"> {{$servicechild->service_single_heading}} </span>
					<h2 class="section-title">{{$servicechild->service_single_title}}</h2>
					<p class="section-text">{!!$servicechild->service_single_description!!}</p>
				</div>
			</div>
		</div>
		<div class="brand-success-wrap">
			<div class="brand-success-top">
				<div class="row">
					<div class="col-lg-6 align-self-center order-1 order-lg-0">
						<div class="success-top-left">
							<h2>{{$servicechild->service_single_detail_heading}}</h2>
							{!!$servicechild->service_single_detail_description!!}
						</div>
					</div>
					<div class="col-lg-6 order-0 order-lg-1">
						<div class="success-top-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">

							<img src="{{isset($servicechild->photo_two) ? (asset('storage/servicebox/'. $servicechild->photo_two->file)) : 'http://placehold.it/100x100'}}" alt="brand-success">
						</div>
					</div>
				</div>
			</div>
			<div class="brand-success-bottom">
				<div class="row">
					<div class="col-lg-6 align-self-center">
						<div class="success-bottom-left wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
							<img src="{{isset($servicechild->photo_three) ? (asset('storage/servicebox/'. $servicechild->photo_three->file)) : 'http://placehold.it/100x100'}}" alt="brand-success">
						</div>
					</div>
					<div class="col-lg-6 align-self-center">
						<div class="success-bottom-right">
							<div class="sigle-feature">
								<div class="media">
									<div class="icon mr-4">+</div>
									<div class="media-body">
										<h3 class="feature-title mt-0 ">{{$servicechild->service_single_support_1_heading}} </h3>
										<p class="feature-content">{{$servicechild->service_single_support_1_description}}</p>
									</div>
								</div>
							</div>
							<div class="sigle-feature">
								<div class="media">
									<div class="icon mr-4">+</div>
									<div class="media-body">
										<h3 class="feature-title mt-0 ">{{$servicechild->service_single_support_2_heading}}</h3>
										<p class="feature-content">{{$servicechild->service_single_support_2_description}}
										</p>
									</div>
								</div>
							</div>
							<div class="sigle-feature">
								<div class="media">
									<div class="icon mr-4">+</div>
									<div class="media-body">
										<h3 class="feature-title mt-0 ">{{$servicechild->service_single_support_3_heading}}</h3>
										<p class="feature-content">{{$servicechild->service_single_support_3_description}}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- brand success area end here  -->
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
							<button type="submit" class="subsribe-btn ">Subsribe Now</button>
						</div>
					</form>
				</div>
				@if(Session::has('success'))
				<p class="text-white">{{Session::get('success')}}</p>
				@endif
			</div>
		</div>
	</div>
</div>
<!-- Subsribe area end here -->



@include('front.layout.footer')


<script>
	$('.success-top-left ul').addClass('feature-list')
	$('.success-top-left ul li').append('<img class="icon" src="{{asset("images/icons/m2.svg")}}" alt="feature">')
</script>
</body>

</html>