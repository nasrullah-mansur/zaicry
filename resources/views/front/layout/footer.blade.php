<style>
	.post-thumbnail a img {
		height: 60px;
	}
</style>
<!-- footer area start here -->
<footer class="footer-area">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-widget">
						<a class="footer-brand" href="index.html">{!!$site->footer_heading!!}</a>
						<address class="text-widget">
							<p>Address: {!!$site->site_address!!}</p>
							<p>Phone: {{$site->phone}} <br /> (24/7 Support)</p>
							<p>Email: {{$site->email}}</p>
						</address>
						<ul class="social-media-widget">
							<li><a class="facebook" href="//{{($global_social_contact->social_media_link1)}}"><i class="fab fa-facebook-f"></i></a></li>
							<li><a class="instagram" href="//{{$global_social_contact->social_media_link2}}"><i class="fab fa-instagram"></i></a></li>
							<li><a class="twitter" href="//{{$global_social_contact->social_media_link3}}"><i class="fab fa-twitter"></i></a></li>
							<li><a class="pinterest" href="//{{$global_social_contact->social_media_link4}}"><i class="fab fa-pinterest-p"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-widget">
						<h3 class="widget-title">Our Service.</h3>
						<ul class="menu-widget">

							@foreach($serviceschild as $servicefooter)
							<li><a href="{{ route('service_detail', $servicefooter->id )}}">{{$servicefooter->service_box_heading}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-widget">
						<h3 class="widget-title">Quick Links.</h3>
						<ul class="menu-widget">
							@if($footer_menu)
							@foreach($footer_menu as $menu)
							<li><a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
							@endforeach
							@endif
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-widget">
						<h3 class="widget-title">Latest post</h3>
						<ul class="recent-post-widget">
							@foreach($posts as $post)
							<li>
								<div class="single-post media">
									<div class="post-thumbnail mr-3">
										<a href="{{route('posts.show', $post->id)}}"><img style="height: 70px; object-fit:cover" src="{{asset('storage/posts/' . $post->photo->file)}}" class="" alt="post image"></a>
									</div>
									<div class="media-body align-self-center">
										<h4 class="post-title mt-0"><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h4>
										<span class="post-time">{{$post->created_at->diffForHumans()}}</span>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-wrap">
				<div class="row">
					<div class="col-lg-6 col-md-6 align-self-center">
						<div class="copyright-area">
							<p>{!!$basicsetting->footer_copyright!!} </p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="footer-bottom-right text-right">
							<ul>
								<li><a href="{{route('terms')}}">Help Desk Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

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
<script src="{{asset('front/assets/js/main.js')}}" async></script>
<!-- footer area end here -->