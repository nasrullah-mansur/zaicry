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
					<h2 class="page-title">Portfolio</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="{{route('home')}}">home</a></li>
							<li>Portfolio</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- team area start here  -->
<section class="portfolio-area section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">Latest Projects</span>
					<h2 class="section-title">Here is some of our <br /> Case Studies </h2>
					<p class="section-text">Contrary to popular belief, Lorem Ipsum is not simply random <br />text. It has roots in a piece of classical Latin literature.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<ul class="filter-menu">
					<li class="filter mixitup-control-active" data-filter="all">All</li>
					@foreach($portfolio_categories as $portfolio)
					<li class="filter" data-filter=".{{$portfolio->name}}">{{$portfolio->name}}</li>
					@endforeach
				</ul>
				<div class="row portfolio-lsit">
					@foreach($portfolios as $port)
					<div class="col-lg-4 col-md-6 col-sm-6 mix {{$port->category->name}}">
						<div class="single-portfolio">
							<div class="portfoio-thumbnail">
								<img src="{{asset('storage/portfolio/'. $port->photo->file)}}" alt="portfolio">
							</div>
							<div class="portfolio-info text-center">
								<h3><a href="#">{{$port->title}}</a></h3>
								<span>{{$port->description}}</span>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- team area end here  -->
<!-- blog area start here -->
<section class="blog-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">Latest news</span>
					<h2 class="section-title">Our recent blogs</h2>
					<p class="section-text">Contrary to popular belief, Lorem Ipsum is not simply random <br />text. It has roots in a piece of classical Latin literature.</p>
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
<!-- footer area start here -->
@include('front.layout.footer')
</body>

</html>