@include('front.layout.header')
@if($preloader->on_off == 1)
<div class="preloader">
	<h2 class="loder">{{$preloader->text}}</h2>
</div>
@endif


@include('front.layout.menu')
<!-- hero banner area start here -->
<div class="hero-banner-area hero-banner-three">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="banner-text text-center">
					<h1 class="banner-title">{{$slider->slider_heading}}</h1>
					<p class="banner-content">{!!$slider->slider_description!!}</p>
					<ul class="banner-btn">
						<li><a class="primary-btn" href="{{route('portfolio')}}">Learn More</a></li>
						<li><a class="video-btn popup-video" data-autoplay="true" data-vbtype="video" href="{{$slider->video->file}}"><i class="fa fa-play"></i>Intro Video</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="banner-image-bottm wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
		<img width="400px" height="500px" src="{{asset('storage/slider/' . $slider->photo->file)}}" alt="hero banner">
	</div>
</div>
<!-- hero banner area ends here -->
<!-- service area start here -->
<section class="service-three-area section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="service-left">
					<div class="section-title-two">
						<h3 class="sub-title">Our Services</h3>
						<h2 class="title">{{$service->service_heading}} </h2>
					</div>
					<p>{!!$service->service_description!!}</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="service-list">
					<div class="row">

						<div class="col-lg-6 col-md-6">
							@foreach($serviceboxs as $servicebox)

							@if($loop->iteration ==1)
							<div class="single-service text-center ">
								<div class="service-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
										<path class="svg" d="M50.9665 7.60598C50.9243 7.46032 50.8436 7.3287 50.7331 7.22492C50.6225 7.12114 50.486 7.04903 50.338 7.01616L45.1528 5.84473L43.9814 0.659615C43.9481 0.511955 43.8758 0.375938 43.772 0.265762C43.6682 0.155585 43.5368 0.0752899 43.3914 0.0332567C43.2459 -0.00877653 43.0919 -0.0110063 42.9454 0.0268004C42.7988 0.064607 42.6651 0.141064 42.5581 0.248189L36.5946 6.21264C31.5482 3.16752 25.5618 2.07481 19.765 3.14071C13.9682 4.20661 8.76207 7.35741 5.12902 11.9985C1.49596 16.6396 -0.312707 22.45 0.0443414 28.3331C0.40139 34.2162 2.89946 39.7652 7.06712 43.9329C11.2348 48.1005 16.7838 50.5986 22.6669 50.9557C28.55 51.3127 34.3604 49.504 39.0015 45.871C43.6426 42.2379 46.7934 37.0318 47.8593 31.235C48.9252 25.4382 47.8325 19.4518 44.7874 14.4054L50.7533 8.43946C50.86 8.33227 50.9361 8.19841 50.9736 8.05182C51.0111 7.90524 51.0087 7.75128 50.9665 7.60598ZM46.5641 26.8743C46.5634 31.8137 44.9327 36.6147 41.925 40.5328C38.9173 44.4508 34.7007 47.2668 29.9293 48.5438C25.1579 49.8209 20.0984 49.4877 15.5357 47.5959C10.973 45.7041 7.16211 42.3595 4.69422 38.0808C2.22633 33.8022 1.23939 28.8287 1.88649 23.932C2.53359 19.0352 4.77856 14.4888 8.27316 10.9981C11.7678 7.50739 16.3166 5.26748 21.2141 4.62584C26.1116 3.98419 31.084 4.97668 35.3599 7.44934L32.6211 10.1881C32.5975 10.2149 32.5757 10.2432 32.5558 10.2727C28.6012 8.25942 24.0581 7.72265 19.7432 8.75893C15.4283 9.79521 11.6245 12.3366 9.01547 15.9262C6.40648 19.5159 5.1634 23.9184 5.50968 28.3425C5.85596 32.7666 7.76889 36.9221 10.9046 40.0621C14.0404 43.2021 18.1933 45.1207 22.6169 45.473C27.0405 45.8253 31.4447 44.5882 35.0379 41.9841C38.6311 39.38 41.1776 35.5796 42.2198 31.2661C43.2619 26.9526 42.7313 22.4088 40.7234 18.4515C40.7545 18.4295 40.784 18.4054 40.8119 18.3794L43.5507 15.6406C45.5285 19.0538 46.5681 22.9295 46.5641 26.8743ZM38.7156 18.3103C40.7933 21.8573 41.5074 26.0398 40.724 30.0752C39.9406 34.1106 37.7135 37.7223 34.4595 40.2342C31.2056 42.7462 27.1477 43.9863 23.0455 43.7224C18.9432 43.4585 15.0777 41.7088 12.1724 38.8007C9.26703 35.8925 7.52102 32.0253 7.2611 27.9228C7.00117 23.8203 8.24516 19.7637 10.7602 16.5121C13.2753 13.2606 16.8891 11.037 20.9252 10.2575C24.9614 9.47796 29.1433 10.196 32.6883 12.2772L33.5793 16.2241L32.7245 17.0789C30.1755 14.8406 26.856 13.6812 23.4677 13.846C20.0794 14.0108 16.888 15.4868 14.5683 17.9619C12.2485 20.4371 10.9822 23.7174 11.0372 27.1092C11.0921 30.5011 12.464 33.7386 14.8627 36.1373C17.2614 38.536 20.4989 39.9079 23.8908 39.9628C27.2826 40.0178 30.5629 38.7515 33.0381 36.4317C35.5132 34.112 36.9892 30.9206 37.154 27.5323C37.3188 24.144 36.1594 20.8245 33.9211 18.2755L34.7758 17.4207L38.7156 18.3103ZM27.7637 26.8743C27.7667 27.6831 27.5011 28.47 27.0086 29.1115C26.5161 29.753 25.8245 30.2129 25.0424 30.4189C24.2603 30.6249 23.4319 30.5655 22.6872 30.2499C21.9426 29.9343 21.3238 29.3804 20.9279 28.6751C20.532 27.9698 20.3815 27.153 20.5 26.353C20.6184 25.5529 20.9992 24.8148 21.5824 24.2545C22.1657 23.6942 22.9184 23.3433 23.7226 23.2571C24.5268 23.1708 25.3368 23.3539 26.0257 23.7777L23.5272 26.2763C23.4464 26.3543 23.3819 26.4477 23.3376 26.5509C23.2933 26.6542 23.27 26.7652 23.269 26.8775C23.2681 26.9899 23.2895 27.1013 23.3321 27.2052C23.3746 27.3092 23.4375 27.4037 23.5169 27.4831C23.5964 27.5625 23.6909 27.6253 23.7948 27.6678C23.8988 27.7103 24.0102 27.7317 24.1226 27.7307C24.2349 27.7297 24.3459 27.7064 24.4492 27.662C24.5524 27.6176 24.6457 27.5532 24.7237 27.4723L27.2223 24.9738C27.576 25.5446 27.7635 26.2028 27.7637 26.8743ZM27.2435 22.5599C26.1535 21.7703 24.806 21.4205 23.4695 21.5801C22.133 21.7397 20.9057 22.3969 20.0322 23.421C19.1587 24.445 18.7032 25.7605 18.7563 27.1055C18.8094 28.4504 19.3673 29.7259 20.3189 30.6778C21.2704 31.6298 22.5457 32.1882 23.8906 32.2419C25.2355 32.2955 26.5513 31.8405 27.5756 30.9674C28.6 30.0943 29.2578 28.8673 29.4179 27.5309C29.578 26.1945 29.2287 24.8468 28.4396 23.7565L32.7221 19.474C34.6409 21.7032 35.6209 24.5895 35.4561 27.5262C35.2912 30.4629 33.9944 33.2214 31.8382 35.2219C29.6819 37.2224 26.8342 38.3092 23.8933 38.2538C20.9525 38.1985 18.1477 37.0053 16.0683 34.925C13.9888 32.8448 12.7968 30.0394 12.7426 27.0986C12.6884 24.1577 13.7763 21.3104 15.7777 19.155C17.7791 16.9995 20.5381 15.7038 23.4749 15.5402C26.4117 15.3765 29.2976 16.3577 31.526 18.2774L27.2435 22.5599ZM43.1223 13.6758L39.9469 16.8507L39.4707 16.7434L39.4524 16.739L35.2148 15.7852L34.1469 11.0555L42.6712 2.52964L43.6222 6.73865C43.6575 6.89469 43.7362 7.03754 43.8493 7.15066C43.9625 7.26377 44.1053 7.34252 44.2613 7.37778L48.4704 8.32875L43.1223 13.6758Z" fill="#48C9B6" />
									</svg>
								</div>
								<h3>{{$servicebox->service_box_heading}}</h3>
								<p>{!!$servicebox->service_box_description!!}</p>
								<a class="learn-btn" href="{{route('service_detail', $servicebox->id)}}">Learn More</a>
							</div>
							@endif
							@if($loop->iteration ==2)
							<div class="single-service text-center wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
								<div class="service-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="54" height="51" viewBox="0 0 54 51" fill="none">
										<path class="svg" d="M51.1029 0H39.9869C39.5506 0 39.1968 0.353742 39.1968 0.790066C39.1968 1.22639 39.5505 1.58013 39.9869 1.58013H51.1029C51.8289 1.58013 52.4196 2.17076 52.4196 2.89691V33.8287C52.4196 34.5547 51.829 35.1455 51.1029 35.1455H45.9125C45.8719 35.0883 45.8316 35.0309 45.7892 34.9747C44.9916 33.9147 43.9002 33.0851 42.6739 32.5959V31.7483H47.591C48.317 31.7483 48.9077 31.1577 48.9077 30.4315V6.00602C48.9077 5.27998 48.3171 4.68925 47.591 4.68925H17.3402C16.6142 4.68925 16.0234 5.27987 16.0234 6.00602V30.4313C16.0234 31.1574 16.6141 31.7481 17.3402 31.7481H33.8979C34.3342 31.7481 34.6879 31.3944 34.6879 30.958C34.6879 30.5217 34.3343 30.168 33.8979 30.168H17.6036V6.26938H47.3277V30.168H42.674V29.5379C42.674 29.1576 42.6165 28.7804 42.5029 28.4171L41.0844 23.8775C40.9335 23.395 40.4924 23.0708 39.9868 23.0708C39.4812 23.0708 39.0403 23.3951 38.8896 23.8776L37.471 28.417C37.3575 28.78 37.3 29.1571 37.3 29.5379V32.6017C35.9694 33.1313 34.8608 34.0244 34.071 35.1452H9.11038C8.67406 35.1452 8.32031 35.499 8.32031 35.9353C8.32031 36.3716 8.67395 36.7254 9.11038 36.7254H33.2297C32.9214 37.535 32.7547 38.411 32.7547 39.321C32.7547 42.3181 34.5582 44.9488 37.2999 46.0401V47.2908C37.2999 47.888 37.379 48.4829 37.5349 49.0589C37.8386 50.1814 38.824 50.9355 39.987 50.9355C41.15 50.9355 42.1353 50.1813 42.439 49.0588C42.595 48.4824 42.6741 47.8876 42.6741 47.2908V46.0462C43.9004 45.5569 44.9917 44.7273 45.7895 43.6673C46.7386 42.4062 47.2402 40.9033 47.2402 39.321C47.2402 38.4199 47.077 37.545 46.7617 36.7254H51.103C52.7002 36.7254 53.9998 35.4259 53.9998 33.8286V2.8968C53.9997 1.29948 52.7001 0 51.1029 0ZM34.3347 39.3209C34.3347 37.1992 35.4904 35.3127 37.2999 34.3419V44.2997C35.4904 43.329 34.3347 41.4425 34.3347 39.3209ZM40.9137 48.6461C40.7722 49.1691 40.3422 49.3554 39.9869 49.3554C39.6317 49.3554 39.2016 49.169 39.06 48.6459C38.9405 48.2044 38.8799 47.7484 38.8799 47.2907V29.538C38.8799 29.3173 38.9132 29.0988 38.9789 28.8884L39.9869 25.6632L40.9947 28.8883C41.0606 29.0989 41.0939 29.3176 41.0939 29.538V47.2908C41.0939 47.7482 41.0332 48.2043 40.9137 48.6461ZM42.6739 44.3108V34.3309C44.4958 35.2979 45.6599 37.1892 45.6599 39.3209C45.6599 41.4525 44.4958 43.3439 42.6739 44.3108Z" fill="#48C9B6" />
										<path class="svg" d="M5.14614 35.1453H2.8968C2.17076 35.1453 1.58003 34.5547 1.58003 33.8286V2.89691C1.58003 2.17086 2.17065 1.58013 2.8968 1.58013H36.2617C36.6981 1.58013 37.0518 1.22639 37.0518 0.790066C37.0518 0.353742 36.6982 0 36.2617 0H2.8968C1.29959 0.000105469 0 1.29959 0 2.89691V33.8287C0 35.426 1.29959 36.7255 2.8968 36.7255H5.14614C5.58246 36.7255 5.9362 36.3717 5.9362 35.9354C5.9362 35.4991 5.58257 35.1453 5.14614 35.1453Z" fill="#48C9B6" />
										<path class="svg" d="M4.13232 17.9836C4.13232 20.544 6.21533 22.6269 8.77569 22.6269C11.3361 22.6269 13.419 20.544 13.419 17.9836C13.419 15.4233 11.3361 13.3403 8.77569 13.3403C6.21533 13.3403 4.13232 15.4233 4.13232 17.9836ZM8.77569 14.9205C10.4647 14.9205 11.8388 16.2946 11.8388 17.9836C11.8388 19.6727 10.4647 21.0468 8.77569 21.0468C7.08661 21.0468 5.71246 19.6727 5.71246 17.9836C5.71235 16.2945 7.0865 14.9205 8.77569 14.9205Z" fill="#48C9B6" />
										<path class="svg" d="M10.8607 12.4417C11.4706 12.4417 11.9667 11.9455 11.9667 11.3357V5.79538C11.9667 5.18556 11.4706 4.68933 10.8607 4.68933H6.6915C6.08157 4.68933 5.58545 5.18556 5.58545 5.79538V11.3357C5.58545 11.9455 6.08157 12.4417 6.6915 12.4417H10.8607ZM7.16548 10.8617V9.35559H10.3866V10.8617H7.16548ZM10.3867 6.26946V7.77556H7.16548V6.26946H10.3867Z" fill="#48C9B6" />
										<path class="svg" d="M11.9667 30.6422V25.1019C11.9667 24.4921 11.4706 23.9958 10.8607 23.9958H6.6915C6.08157 23.9958 5.58545 24.4921 5.58545 25.1019V30.6422C5.58545 31.252 6.08157 31.7482 6.6915 31.7482H10.8607C11.4706 31.7482 11.9667 31.252 11.9667 30.6422ZM10.3867 25.5759V27.082H7.16548V25.5759H10.3867ZM7.16548 30.1682V28.6621H10.3866V30.1682H7.16548Z" fill="#48C9B6" />
										<path class="svg" d="M29.4294 19.5334C29.9787 19.9952 30.9291 20.4099 32.3348 19.7631C33.1642 19.3816 33.9758 18.7305 34.7608 18.101C35.5692 17.4526 36.7914 16.4728 37.1274 16.7493C37.4466 17.0119 37.1697 18.059 36.9673 18.8237C36.6409 20.0571 36.2346 21.5922 37.4151 22.3868C37.5505 22.478 37.7039 22.5216 37.8555 22.5216C38.1096 22.5216 38.359 22.3993 38.5117 22.1726C38.7554 21.8107 38.6594 21.3197 38.2975 21.0761C38.0498 20.9093 38.3284 19.8568 38.4948 19.2278C38.824 17.9838 39.2336 16.4357 38.1309 15.5289C36.8031 14.4372 35.1928 15.7288 33.772 16.8685C32.2568 18.0837 31.1318 18.8998 30.4459 18.3239C29.564 17.5825 30.1363 16.2292 31.11 14.2494C32.0008 12.438 33.0104 10.3849 31.5623 9.02858C30.3347 7.87865 28.2843 8.40072 25.294 10.6249C23.3117 12.0993 21.629 13.7946 21.5584 13.866C21.2516 14.1762 21.2543 14.6763 21.5645 14.9831C21.8747 15.2899 22.3749 15.2873 22.6818 14.9772C25.6215 12.0068 29.5486 9.30681 30.4822 10.1819C31.0334 10.698 30.5024 11.9044 29.692 13.5521C28.7307 15.5072 27.5342 17.9405 29.4294 19.5334Z" fill="#48C9B6" />
										<path class="svg" d="M8.77583 18.8741C9.26768 18.8741 9.66641 18.4753 9.66641 17.9835C9.66641 17.4916 9.26768 17.0929 8.77583 17.0929C8.28398 17.0929 7.88525 17.4916 7.88525 17.9835C7.88525 18.4753 8.28398 18.8741 8.77583 18.8741Z" fill="#48C9B6" />
									</svg>
								</div>
								<h3>{{$servicebox->service_box_heading}}</h3>
								<p>{!!$servicebox->service_box_description!!}</p>
								<a class="learn-btn" href="{{route('service_detail', $servicebox->id)}}">Learn More</a>
							</div>
							@endif
							@endforeach
						</div>

						@foreach($serviceboxs as $sbox)
						@if($loop->iteration ==3)
						<div class="col-lg-6 col-md-6 align-self-center">
							<div class="single-service text-center ">
								<div class="service-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="53" height="40" viewBox="0 0 53 40" fill="none">
										<path class="svg" d="M35.5423 5.23645C35.5422 5.23645 35.5422 5.23645 35.5423 5.23645C35.1134 5.23645 34.7658 5.58395 34.7658 6.01271V6.36508L30.5858 8.10372C30.5351 7.72403 30.2107 7.43087 29.8172 7.43087C29.8171 7.43087 29.8171 7.43087 29.8171 7.43087C29.3883 7.43087 29.0407 7.77838 29.0407 8.20714V8.74645L25.7846 10.1007C24.7123 10.1006 18.7246 10.1001 17.5423 10.1C17.5422 10.1 17.5422 10.1 17.542 10.1C16.3289 10.1 15.3419 11.0869 15.3417 12.3001V12.4484L14.5656 12.4483V12.4455C14.5656 12.0166 14.2181 11.669 13.7894 11.669C13.7893 11.669 13.7893 11.669 13.7893 11.669C13.3605 11.669 13.0129 12.0165 13.0129 12.4453V12.517C11.3531 12.8417 10.0573 14.3081 10.0571 16.1154C10.0569 17.919 11.3487 19.3886 13.0123 19.7144V19.786C13.0123 20.2148 13.3598 20.5624 13.7885 20.5624H13.7887C14.2174 20.5624 14.565 20.2149 14.565 19.7862V19.7834L15.341 19.7835V19.9317C15.341 21.145 16.328 22.1321 17.5411 22.1321H17.6933L17.6929 25.0362C17.6929 25.465 18.0404 25.8126 18.4692 25.8126H18.4693C18.8981 25.8126 19.2457 25.4651 19.2457 25.0364L19.246 22.1323L22.7229 22.1327L22.7227 24.4046C22.7227 24.4215 22.7127 24.437 22.6974 24.4443L21.6324 24.9432C21.0741 25.2049 20.7133 25.7725 20.7133 26.3888L20.713 29.5691C20.713 29.8513 20.4846 30.08 20.2021 30.08H19.7562C19.4744 30.08 19.2452 29.8507 19.2452 29.569L19.2454 28.1404C19.2454 27.7115 18.8979 27.364 18.469 27.364C18.0401 27.364 17.6926 27.7115 17.6926 28.1404L17.6924 29.5688C17.6924 30.7066 18.6181 31.6325 19.7561 31.6327H20.2022C21.3426 31.6327 22.2657 30.7097 22.2657 29.5692L22.266 26.3889C22.266 26.372 22.2761 26.3565 22.2913 26.3493L23.356 25.8504C23.9145 25.5889 24.2754 25.0214 24.2754 24.4047L24.2756 22.1328L25.7834 22.1329L29.0395 23.4879V24.027C29.0395 24.4559 29.387 24.8035 29.8157 24.8035H29.8158C30.2093 24.8035 30.5337 24.5104 30.5845 24.1308L34.7642 25.8702V26.2223C34.7642 26.6512 35.1117 26.9988 35.5404 26.9988H35.5406C35.9693 26.9988 36.3169 26.6513 36.3169 26.2225L36.3188 6.01292C36.3186 5.58405 35.971 5.23645 35.5423 5.23645ZM34.7641 24.1884L30.5922 22.4522L30.5933 9.78223L34.7656 8.04679L34.7641 24.1884ZM22.4413 11.6531L22.4412 12.6513C22.4412 12.9258 22.2178 13.1492 21.9432 13.1492H21.9431C21.9431 13.1492 21.9431 13.1492 21.943 13.1492L20.0247 13.1491C19.7496 13.1491 19.5267 12.9264 19.5267 12.6511L19.5268 11.6529L22.4413 11.6531ZM11.6098 16.1154C11.6098 15.195 12.1928 14.4184 13.0126 14.1257L13.0123 18.1054C12.1905 17.8118 11.6097 17.0341 11.6098 16.1154ZM14.565 18.2305L14.5653 14.0009H15.3413C15.3413 14.5235 15.341 17.1607 15.341 18.2305H14.565ZM16.8936 19.9318C16.8938 17.6525 16.8941 14.8896 16.8943 12.3002C16.8943 11.9426 17.1837 11.6526 17.5419 11.6526H17.542H17.9742L17.9741 12.6507C17.9739 13.7814 18.8938 14.7015 20.0247 14.7016L21.943 14.7017H21.9433C23.0739 14.7016 23.9938 13.7819 23.994 12.6512V11.653L25.163 11.6531C25.1629 12.7324 25.1624 19.5192 25.1623 20.5798L17.5411 20.5791C17.1841 20.5793 16.8936 20.2888 16.8936 19.9318ZM26.715 20.8387C26.7151 19.7692 26.7158 12.4732 26.7159 11.3949L29.0405 10.428L29.0395 21.806L26.715 20.8387Z" fill="#48C9B6" />
										<path class="svg" d="M42.1667 15.3392H39.2251C38.7962 15.3392 38.4487 15.6867 38.4487 16.1156C38.4487 16.5445 38.7962 16.892 39.2251 16.892H42.1667C42.5956 16.892 42.9431 16.5445 42.9431 16.1156C42.9431 15.6867 42.5955 15.3392 42.1667 15.3392Z" fill="#48C9B6" />
										<path class="svg" d="M38.3423 12.0226C38.5409 12.0226 38.7397 11.9468 38.8913 11.7952L40.9713 9.7152C41.2745 9.4119 41.2745 8.92041 40.9713 8.61721C40.668 8.31412 40.1765 8.31412 39.8734 8.61721L37.7933 10.6973C37.4901 11.0006 37.4901 11.492 37.7933 11.7952C37.9449 11.9468 38.1436 12.0226 38.3423 12.0226Z" fill="#48C9B6" />
										<path class="svg" d="M38.8351 20.4126C38.5319 20.1093 38.0403 20.1094 37.7373 20.4125C37.434 20.7157 37.434 21.2073 37.7371 21.5104L39.8172 23.5906C39.9688 23.7422 40.1675 23.818 40.3662 23.818C40.5649 23.818 40.7636 23.7422 40.9152 23.5907C41.2185 23.2875 41.2185 22.7959 40.9153 22.4928L38.8351 20.4126Z" fill="#48C9B6" />
										<path class="svg" d="M50.6564 32.2108H49.5281V2.64585C49.5281 1.18691 48.3412 0 46.8822 0H15.0277C14.5989 0 14.2514 0.347501 14.2514 0.776366C14.2514 1.20523 14.5989 1.55273 15.0277 1.55273H46.8823C47.485 1.55273 47.9755 2.04308 47.9755 2.64585V32.2107H46.4227V3.88183C46.4227 3.45296 46.0752 3.10546 45.6464 3.10546H7.35374C6.92487 3.10546 6.57737 3.45296 6.57737 3.88183V32.2108H5.02464V2.64585C5.02464 2.04319 5.51489 1.55273 6.11766 1.55273H11.9236C12.3525 1.55273 12.7 1.20523 12.7 0.776366C12.7 0.347501 12.3525 0 11.9236 0H6.11766C4.65882 0 3.47191 1.18691 3.47191 2.64585V32.2107H2.34349C1.0512 32.2108 0 33.262 0 34.5542V36.964C0 38.2561 1.0512 39.3074 2.34349 39.3074H41.1943C41.6231 39.3074 41.9706 38.9599 41.9706 38.531C41.9706 38.1022 41.6231 37.7547 41.1943 37.7547H2.34349C1.90748 37.7547 1.55273 37.4 1.55273 36.964V34.5542C1.55273 34.1182 1.90748 33.7634 2.34349 33.7634H20.6915V34.8893C20.6915 35.7815 21.4173 36.5074 22.3095 36.5074H30.6905C31.5827 36.5074 32.3086 35.7815 32.3086 34.8893V33.7634H50.6565C51.0925 33.7634 51.4473 34.1182 51.4473 34.5542V36.964C51.4473 37.4 51.0925 37.7547 50.6565 37.7547H44.2984C43.8695 37.7547 43.522 38.1022 43.522 38.531C43.522 38.9599 43.8695 39.3074 44.2984 39.3074H50.6565C51.9487 39.3074 53 38.2562 53 36.964V34.5542C52.9999 33.262 51.9487 32.2108 50.6564 32.2108ZM30.7558 34.8894C30.7558 34.9255 30.7265 34.9548 30.6904 34.9548H22.3094C22.2734 34.9548 22.2441 34.9255 22.2441 34.8894V33.7635H30.7558V34.8894ZM8.1301 32.2108V4.65819H44.8699V32.2108H8.1301Z" fill="#48C9B6" />
									</svg>
								</div>
								<h3>{{$sbox->service_box_heading}}</h3>
								<p>{!!$sbox->service_box_description!!}</p>
								<a class="learn-btn" href="{{route('service_detail', $servicebox->id)}}">Learn More</a>
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
<!-- service area end here -->
<!-- choose area start here -->
<section class="choose-area style-two section-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="choose-left ">
					<div class="choose-img-two text-right">
						<img class="img-sluid " src="{{asset('storage/chooseus/' . $chooseus->photo->file)}}" alt="chosse">
					</div>
					<div class="chose-list">
						@foreach($ChooseusExperience as $chooseusExp)
						<div class="single-chose">
							<div class="chose-top">
								<div class="icon">
									<img src="{{asset('storage/chooseusexperience/' . $chooseusExp->photo->file)}}" alt="calender">
								</div>
								<h2 class="counter-count"><span class="counter">{{$chooseusExp->chooseus_experience_no}}</span>+</h2>
							</div>
							<div class="chose-text">
								<h4>{{$chooseusExp->chooseus_experience_text}}</h4>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-1">
				<div class="choose-right">
					<div class="section-title-two">
						<h3 class="sub-title">Why Choose US</h3>
						<h2 class="title">{{$chooseus->chooseus_heading}}</h2>
					</div>
					<p class="section-text">{!!$chooseus->chooseus_description!!}</p>
					<div class="featurs-list">
						<div class="single-feature">
							<!-- <h3>Communication & Sharing</h3>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p> -->
							{!!$chooseus->chooseus_feature!!}
						</div>
					</div>
					<a href="#" class="primary-btn two-style">Explore More</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- choose area end here -->
<!-- work-progres-area  start here -->
<section class="work-progres-area style-three section-bottom">
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
		<div class="row">
			@foreach($workprocessproject as $project)
			<div class="col-lg-3 col-md-6">
				<div class="single-work text-center wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
					<div class="icon">
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
<section class="case-studies-area bg-color section fix">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">{{$latestproject->latestproject_main_heading}}</span>
					<h2 class="section-title">{{$latestproject->latestproject_heading}}</h2>
					<p class="section-text">{!!$latestproject->latestproject_description!!}</p>
				</div>
			</div>
		</div>
		<div class="row p-0">
			<div class="col-lg-12 p-0">
				<div class="case-studies-list owl-carousel">
					@foreach($latestprojectsliders as $latestprojectslider)
					<div class="single-case-studie ">
						<div class="case-image">
							<img src="{{asset('storage/latestprojectslider/' . $latestprojectslider->photo->file)}}" alt="case-studies">
							<div class="overlay-content bg-two d-flex justify-content-center align-items-center flex-column text-center">
								<h3>{{$latestprojectslider->latestproject_heading}}</h3>
								<p>{!!$latestprojectslider->latestproject_description!!} </p>
								<a class="primary-btn" href="javascript::void()">{{$latestprojectslider->latestproject_button}}</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- case-studies-area end here -->
<!-- pricing area start here -->
<section class="pricing-area-two style-two section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title-two text-center">
					<h3 class="sub-title">Our Pricing Plan</h3>
					<h2 class="title">Check Our Flexible Plan</h2>
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
								<div class="price-top">
									<div class="icon">
										<img src="{{asset('storage/pricing/' . $pricing->photo->file)}}" alt="icon">
									</div>
								</div>
								<div class="price-header">
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

<!-- blog area start here -->
<section class="blog-area style-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title-two text-center">
					<h3 class="sub-title">{{$blogsinglesetting->blog_title}}</h3>
					<h2 class="title">{{$blogsinglesetting->recent_blog_title}}</h2>
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

<!-- testimonial area start here -->
<section class="testimonial-area section-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title-two text-center">
					<h3 class="sub-title">{{$testimonial->testimonial_main_heading}}</h3>
					<h2 class="title">{!!$testimonial->testimonial_heading!!}</h2>
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
						<p class="testimonial-contnet">{!!$testimonialslider->testimonial_description!!}</p>
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