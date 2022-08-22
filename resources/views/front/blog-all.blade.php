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
						<h2 class="page-title">Blog</h2>
						<nav class="breadcrumb-menu">
							<ul>
								<li><a href="{{route('home')}}">home</a></li>
								<li>Blog</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb area start here  -->
	<!-- blog-page-wrap start here  -->
	<div class="blog-page-wrap section">
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
				<div class="col-lg-12">
					<div class="blog-area">
						<div class="row">
							@foreach($posts as $post)
							<div class="col-lg-4 col-md-6">
								<div class="sigle-blog">
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
											<li><a class="user" href="{{route('posts.show', $post->id)}}"><i class="fa fa-user"></i>{{$post->user->name}}</a></li>
											<li><a class="learn-more-btn" href="{{route('posts.show', $post->id)}}">Learn More +</a></li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="pagination-area">
						{{ $posts->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- blog-page-wrap start here  -->

	<!-- Subsribe area start here -->
	<div class="subsribe-area-two section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="subsribe-wrap text-center">
						<h2>Interested To <br /> Get Our Featured Service</h2>
						<form action="#">
							<div class="form-group">
								<input type="email" class="form-control" id="subsribe" name="subsribe" placeholder="Enter Your Email" />
								<button type="submit" class="subsribe-btn">Subsribe Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Subsribe area end here -->


	@include('front.layout.footer')
</body>

</html>