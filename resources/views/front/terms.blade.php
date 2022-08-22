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
					<h2 class="page-title">{{$termspage->terms_page_main_heading}}</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="index.html">home</a></li>
							<li>Terms Service</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- terms area start here  -->
<section class="terms-area section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">Updated {{$termspage->updated_at->toFormattedDateString()}}</span>
					<h2 class="section-title">{{$termspage->terms_page_title}}</h2>
					<p class="section-text">{{$termspage->terms_page_heading_description}}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="terms-wrap">
					<div class="terms-top ">
						<div class="terms-list">

							{!!$termspage->terms_page_description!!}
						</div>
					</div>
					<!-- <div class="terms-bottom">
							<h2 class="terms-title">Additional Terms</h2>
							<p>By visiting and/or taking any action on Bootstrap Themes, you confirm that you are in agreement with and bound by the terms outlined below. These terms apply to the website, emails, or any other communication.
							</p>
							<ul class="terms-list">
								<li>All payments are processed securely through PayPal or Stripe. Bootstrap Themes does not directly process payments through the website.
								</li>
								<li>You have 14 days to evaluate your purchase. If your purchase fails to meet expectations set by the seller, or is critically flawed in some way, contact Bootstrap Themes and we will issue a full refund pending a review.
								</li>
								<li>Membership is a benefit for those who follow our terms and policies. We may at any time suspend or terminate your account.
								</li>
							</ul>
						</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- terms area end here  -->
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
<!-- footer area start here -->
@include('front.layout.footer')
</body>

</html>