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
					<h2 class="page-title">{{$post->title}}</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="{{route('home')}}">home</a></li>
							<li>Blog</li>
							<li>{{$post->title}}</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- blog-page-wrap start here  -->
<div class="blog-detail-page section">
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
			<div class="col-lg-8 col-md-7">
				<div class="blog-details-area">
					<div class="blog-thumbnail">
						<img src="{{asset('storage/posts/' . $post->photo->file)}}" alt="blog-detail">
					</div>
					<div class="blog-meta fix">
						<ul class="floatleft">
							<li><a href="#"><i class="fa fa-user"></i>By.{{$post->user->name}}</a></li>
							<li><i class="fas fa-calendar-alt"></i>{{$post->created_at->diffForHumans()}}</li>
						</ul>
						<a class="comment-count floatright" href="javascript::void()"><i class="far fa-comment-dots"></i> {{$post->comment->count()}} Comments</a>
					</div>
					<h2 class="post-title">{{$post->title}}</h2>
					<p class="post-content">{!!$post->description!!}</p>

					<div class="blog-details-bottom d-flex justify-content-between">
						<div class="tags-area">
							<span class="details-bottom-titel">Tags:</span>
							<ul>
								@foreach($post->tags as $tag)
								<li><a>{{$tag->name}}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="social-share">
							<span class="details-bottom-titel">Share:</span>
							<ul class="social-media">
								<li>
									<a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}&display=popup"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a class="twitter" href="https://twitter.com/intent/tweet?url={{Request::url()}}&text={{$post->title}}"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a class="pinterest" href="https://pinterest.com/pin/create/button/?url={{ Request::url() }}&media={{ asset('storage/posts/' . $post->photo->file) }}&description={{ $post->title }}"><i class=" fab fa-pinterest-p"></i></a>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<div class="comment-area">
					<h2 class="comment-title">Coments ({{$post->comment->count()}})</h2>
					<ul class="comment-list">
						@foreach($post->comment as $comment)
						<li class="comment">
							<div class="comment-body">
								<div class="media">
									<div class="media-body">
										<h3 class="author-name mt-0">
											<a href="#">{{$comment->name}} </a>
										</h3>
										<span class="comment-date">{{$comment->created_at->diffForHumans()}}</span>
										<a class="replay" href="#comment-form" onclick="getCommentId(`{{$comment->id}}`)">
											<img src="{{asset('images/icons/replay.svg')}}" alt="replay"> Reply
										</a>
									</div>
								</div>
								<p>{{$comment->comment}}</p>
							</div>
						</li>

						@foreach($comment->reply as $reply)
						<li class="comment" style="padding: 35px 65px; background:#f0f5ff;">
							<div class="comment-body">
								<div class="media">

									<div class="media-body">
										<h3 class="author-name mt-0">
											<a href="#">{{$reply->name}} </a>
										</h3>
										<span class="comment-date">{{$reply->created_at->diffForHumans()}}</span>
										<a class="replay" href="#comment-form" onclick="getCommentId(`{{$comment->id}}`)">
											<img src="{{asset('images/icons/replay.svg')}}" alt="replay"> Reply
										</a>
									</div>
								</div>
								<p>{{$reply->reply}}</p>
							</div>
						</li>
						@endforeach
						@endforeach
					</ul>
				</div>
				<div class="comment-form">
					<h2>Leave A comment</h2>
					<form action="{{route('comment')}}" method="POST" id="comment-form">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Name*" required="required" />
								</div>
							</div>
							<input type="hidden" value="{{$post->id}}" name="post_id">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email*" required="required" />
								</div>
							</div>
							<input type="hidden" name="comment_id" value="" id="comment_id">
							<div class="col-lg-12">
								<div class="form-group">
									<textarea class="form-control" name="comment" placeholder="Your Comment"></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<button type="submit" class="send-primary">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-md-5">
				<aside class="sidebar">
					<div class="widget widget-search">
						<form class="searchform" action="#">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search here" />
								<button type="submit" class="search-btn fas fa-search"></button>
							</div>
						</form>
					</div>
					<div class="widget widget-categories">
						<h3 class="widget-title">{{$blogsinglesetting->categories_title}}</h3>
						<ul>
							@foreach($categories as $category)
							<li><a href="#">{{$category->name}} <span>({{$category->posts->count()}})</span></a></li>
							@endforeach
						</ul>
					</div>
					<div class="widget widget-recent-post">
						<h3 class="widget-title">{{$blogsinglesetting->recent_blog_title}} </h3>
						<ul>
							@foreach($latestPosts as $latestPost)
							<li class="d-flex align-items-start">
								<div class="post-left mr-3" style="width: 30%;">
									<div class="blog-thumbnail">
										<a href="{{route('posts.show', $latestPost->id)}}">
											<img src="{{asset('storage/posts/' . $latestPost->photo->file)}}" alt="populer-post" />
										</a>
									</div>
								</div>
								<div class="blog-right">
									<h4 class="post-title">
										<a href="{{route('posts.show', $latestPost->id)}}">{{$latestPost->title}}</a>
									</h4>
									<ul class="blog-meta d-flex justify-content-between">
										<li>{{$latestPost->category->name}}</li>
										<li>{{$latestPost->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="widget widget-tag">
						<h3 class="widget-title">{{$blogsinglesetting->popular_tags_title}}</h3>
						<ul>
							@foreach($tags as $tag)
							<li><a>{{$tag->name}}</a></li>
							@endforeach
						</ul>
					</div>
				</aside>
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

<script>
	function getCommentId($id) {
		let commentId = document.getElementById('comment_id');
		comment_id.value = $id;
	}
</script>




</body>

</html>