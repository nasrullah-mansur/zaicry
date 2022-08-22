@include('front.layout.header')
@include('front.layout.menu')
<!-- header area end here -->
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
					<h2 class="page-title">{{$faq->main_heading}}</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="{{route('home')}}">home</a></li>
							<li>{{$faq->main_heading}}</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- faq area start here  -->
<section class="faq-area section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">{{$faq->heading}}</span>
					<h2 class="section-title">{{$faq->title}}</h2>
					<p class="section-text">{!!$faq->description!!}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="accordion" id="prumaryaccordion">
					@foreach($faqtab as $tab)
					<div class="card">
						<div class="card-header" id="i{{$tab->id}}">
							<button type="button" data-toggle="collapse" data-target="#s{{$tab->id}}" aria-expanded="{{ $loop->first ? 'true' : 'false'}}" aria-controls="s{{$tab->id}}">
								{{$tab->title}}
							</button>
						</div>
						<div id="s{{$tab->id}}" class="collapse {{ $loop->first ? 'show' : ''}}" aria-labelledby="i{{$tab->id}}" data-parent="#prumaryaccordion">
							<div class="card-body">
								<p>{!!$tab->description!!}</p>
							</div>
						</div>
					</div>
					@endforeach


				</div>
			</div>
		</div>
	</div>
</section>
<!-- faq area end here  -->
<!-- Subsribe area start here -->
<div class="subsribe-area-two section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="subsribe-wrap text-center">
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