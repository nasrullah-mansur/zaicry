@include('front.layout.header')
@if($preloader->on_off == 1)
<div class="preloader">
  <h2 class="loder">{{$preloader->text}}</h2>
</div>
@endif


@include('front.layout.menu')
<!-- hero banner area start here -->
<div class="hero-banner-area hero-banner-four">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-img wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
          <img src="{{asset('storage/slider/' . $slider->photo->file)}}" alt="hero banner">
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="banner-text">
          <!-- <h4>Lorem ipsum dolor sit amet</h4> -->
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
    </div>
  </div>
</div>
<!-- hero banner area ends here -->
<!-- service area start here -->
<section class="service-four-area section-bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title-two style-two text-center">
          <h3 class="sub-title">Our Services</h3>
          <h2 class="title">{{$service->service_heading}}</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($serviceboxs as $servicebox)
      <div class="col-lg-4 col-md-6">
        <div class="single-service ">
          <div class="service-top d-flex">
            <div class="service-icon mr-3">
              <!-- <i class="far fa-lightbulb"></i> -->
              <img width="50px" height="50px" src="{{asset('storage/servicebox/' . $servicebox->photo->file)}}" alt="icon" class="icon">
            </div>
            <h3 class="service-title"><a href="{{route('service_detail', $servicebox->id)}}">{{$servicebox->service_box_heading}}</a></h3>
          </div>
          <p class="service-text">
            {!!$servicebox->service_box_description!!}
          </p>
          <a class="learn-btn" href="{{route('service_detail', $servicebox->id)}}">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- service area end here -->
<!-- choose area start here -->
<section class="choose-area style-two section sectio-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="choose-right text-right mt-0">
          <div class="section-title-two style-two text-right">
            <h3 class="sub-title">Why Choose US</h3>
            <h2 class="title">{{$chooseus->chooseus_heading}}</h2>
          </div>

          <div class="featurs-list p-0 border-0">
            <div class="single-feature">
              {!!$chooseus->chooseus_feature!!}
            </div>
          </div>
          <a href="{{route('about_us')}}" class="primary-btn two-style">Explore More</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="choose-left">
          <div class="choose-img-two text-right wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
            <img class="img-sluid " src="{{asset('storage/chooseus/' . $chooseus->photo->file)}}" alt="chosse">
          </div>
          <div class="chose-list left-align">
            @foreach($ChooseusExperience as $chooseusExp)
            <div class="single-chose">
              <div class="chose-top">
                <div class="icon">
                  <img src="{{asset('storage/chooseusexperience/' . $chooseusExp->photo->file)}}" alt="calender">
                </div>
                <h2 class="counter-count">
                  <span class="counter">{{$chooseusExp->chooseus_experience_no}}</span>+
                </h2>
              </div>
              <div class="chose-text">
                <h4>{{$chooseusExp->chooseus_experience_text}}</h4>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- choose area end here -->
<!-- work-progres-area  start here -->
<section class="work-progres-area style-three section-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title-two style-two text-center">
          <h3 class="sub-title">{{$workprocess->workprocess_main_heading}}</h3>
          <h2 class="title">{{$workprocess->workprocess_heading}}</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($workprocessproject as $project)
      <div class="col-lg-3 col-md-6">
        <div class="single-work text-center wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
          <div class="icon {{$loop->odd ? 'color-two':''}}">
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
<section class="case-studies-area style-two">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title-two style-two">
          <h3 class="sub-title">{{$latestproject->latestproject_main_heading}}</h3>
          <h2 class="title">{{$latestproject->latestproject_heading}}</h2>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh eu
          in gravida hendrerit nam adipiscing. Mollis nec blandit viverra
          senectus quisque tellus lobortis. Elementum commodo
        </p>
      </div>
      @foreach($latestprojectsliders as $latestprojectslider)
      <div class="col-lg-6 col-md-6">
        <div class="single-case-studie ">
          <div class="case-image">
            <img src="{{asset('storage/latestprojectslider/' . $latestprojectslider->photo->file)}}" alt="case-studies">
            <div class="overlay-content d-flex align-items-center">
              <div class="overlay-wrap">
                <h3>{{$latestprojectslider->latestproject_heading}}</h3>
                <p>{!!$latestprojectslider->latestproject_description!!} </p>
                <a class="primary-btn" href="javascript::void()">{{$latestprojectslider->latestproject_button}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- case-studies-area end here -->
<!-- pricing area start here -->
<section class="pricing-area-two style-three section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title-two style-two text-center">
          <h3 class="sub-title">{{$pricingarea->pricing_area_main_heading}}</h3>
          <h2 class="title">{{$pricingarea->pricing_area_heading}}</h2>
        </div>
      </div>
    </div>
    <div class="pricing-tab">
      <div class="tab-menu">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-link active" id="nav-annual-tab" data-toggle="tab" href="#nav-annual" role="tab" aria-controls="nav-annual" aria-selected="true">Annual </a>
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
                <div class="price-top">
                  <div class="icon">
                    <img src="{{asset('storage/pricing/' . $pricing->photo->file)}}" alt="icon">
                  </div>
                </div>
                <div class="price-header">
                  <h3 class="pack-name">{{$pricing->pricing_heading}}</h3>
                  <h2 class="price">${{$pricing->pricing_amount}}</h2>
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
                <div class="price-top">
                  <div class="icon">
                    <img src="{{asset('storage/pricing/' . $pricing->photo->file)}}" alt="icon">
                  </div>
                </div>
                <div class="price-header">
                  <h3 class="pack-name">{{$pricing->pricing_heading}}</h3>
                  <h2 class="price">${{$pricing->pricing_amount}}</h2>
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
<section class="blog-area style-three">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title-two style-two text-center">
          <h3 class="sub-title">Latest News</h3>
          <h2 class="title">Our Recent Blogs</h2>
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
            <h4 class="blog-meta">
              <i class="fas fa-calendar-alt"></i>{{$post->created_at->diffForHumans()}}
            </h4>
            <h3 class="blog-title">
              <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
            </h3>
            <ul class="d-flex justify-content-between">
              <li>
                <a class="user" href="{{route('posts.show', $post->id)}}"><i class="fa fa-user"></i>User</a>
              </li>

              <li>
              <li><a class="learn-more-btn" href="{{route('posts.show', $post->id)}}">{{$blogpagesettting->read_more_text}}</a></li>
              </li>
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
      <div class="col-lg-12">
        <div class="section-title-two style-two text-center">
          <h3 class="sub-title">{{$testimonial->testimonial_main_heading}}</h3>
          <h2 class="title">
            {!!$testimonial->testimonial_heading!!}
          </h2>
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
            <p class="testimonial-contnet">
              {!!$testimonialslider->testimonial_description!!}
            </p>
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