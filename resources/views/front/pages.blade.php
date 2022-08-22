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
                    <h2 class="page-title">{{$page->name}}</h2>
                    <nav class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{route('home')}}">home</a></li>
                            <li>{{$page->name}}</li>
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
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <span class="section-sub-title">{{$page->name}}</span>
                    <h2 class="section-title">{{$page->title}}</h2>
                    <p class="section-text">{!!$page->description!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.layout.footer')

</body>

</html>