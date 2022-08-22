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
					<h2 class="page-title">{{$jobspage->main_heading}}</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="{{route('home')}}">home</a></li>
							<li>Career</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- career-area start here -->
<section class="career-area section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">{{$jobspage->heading}}</span>
					<h2 class="section-title">{{$jobspage->title}}</h2>
					<p class="section-text">
						{!!$jobspage->description!!}
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($jobsfacility as $jobfacility)
			<div class="col-lg-4 col-md-6">
				<div class="single-career text-center wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
					<div class="icon d-flex justify-content-center align-items-center">
						<img src="{{asset('storage/jobsfacility/' . $jobfacility->photo->file)}}" alt="job">
					</div>
					<h3 class="career-title">{{$jobfacility->title}}</h3>
					<p class="career-text">{!!$jobfacility->description!!}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- career-area end here -->
<!-- counter up area start here -->
<div class="counterup-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="single-counter text-center ">
					<h2><span class="counter">{{$jobspage->counter1}}</span>+</h2>
					<p>{{$jobspage->counter1_text}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-counter text-center ">
					<h2><span class="counter">{{$jobspage->counter2}}</span>+</h2>
					<p>{{$jobspage->counter2_text}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-counter text-center ">
					<h2><span class="counter">{{$jobspage->counter3}}</span>+</h2>
					<p>{{$jobspage->counter3_text}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-counter text-center ">
					<h2><span class="counter">{{$jobspage->counter4}}</span>+</h2>
					<p>{{$jobspage->counter4_text}}</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- counter up area end here -->
<!-- job opening area start here -->
<section class="job-opening-area section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-title-area text-center">
					<span class="section-sub-title">{{$jobspage->job_opening_heading}}</span>
					<h2 class="section-title">{{$jobspage->job_opening_title}}</h2>
					<p class="section-text">{{$jobs->count()}}+ jobs Available</p>
				</div>
			</div>
		</div>
		<div class="job-opening-form">
			<form action="#">
				<div class="row">
					<div class="col-lg-12">
						<div class="search-form">
							<label for="search" class="search-icon fa fa-search"></label>
							<input type="search" id="search" name="%s" placeholder="Search Jobs ..." onkeyup="searchjob(this)" />
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="jog-list">
			<div class="row jobsajax">

			</div>
		</div>
		<div class="work-process-area section-top">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="section-title-area text-center">
						<span class="section-sub-title">{{$jobspage->job_process_heading}}</span>
						<h2 class="section-title">{{$jobspage->job_process_title}}</h2>
						<p class="section-text">{{$jobspage->job_process_description}}</p>
					</div>
				</div>
			</div>
			<div class="work-process-list d-flex justify-content-between">
				<div class="single-process">
					<h4 class="process-title"> <i class="flaticon-resume"></i>{{$jobspage->job_process_step1}}</h4>
				</div>
				<div class="single-process">
					<h4 class="process-title"> <i class="flaticon-phone-call"></i> {{$jobspage->job_process_step2}}</h4>
				</div>
				<div class="single-process">
					<h4 class="process-title"><i class="flaticon-skills"></i> {{$jobspage->job_process_step3}}</h4>
				</div>
				<div class="single-process">
					<h4 class="process-title"><i class="flaticon-search"></i> {{$jobspage->job_process_step4}}</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- job opening area start here -->
<script>
	function searchjob(e = []) {
		$.ajaxSetup({
			headers: {
				'X-CSRF-Token': ''
			}
		});

		$.ajax({
				url: `{{route('jobsearch')}}`,
				method: 'POST',
				data: {
					"_token": "{{ csrf_token() }}",
					msg: e.value
				},
			})
			.done(function(data) {
				var html = '';
				data.forEach(function(infos) {
					html += '<div class="col-lg-4 col-md-6">'
					html += '<div class="single-job">'
					html += '<h3 class="job-title">' +
						infos.title + '</h3>'
					html += '<h4 class="job-type">' + infos.content + '</h4>'
					html += '<p class="job-description">' + infos.description + '</p>'
					html += '<span class="brand-name">' + infos.company_name + '</span>'
					html += '<a href=" ' + '/apply/' + infos.id + '" class="apply-btn">Apply Now</a>'
					html += '</div>'
					html += '</div>'
				})
				$('.jobsajax').html(html)
				if (Object.keys(data).length == 0) {
					$('.jobsajax').html("<h2>No match found</h2>")
				}

			})
			.fail(function(data) {
				console.log(data);
			})
	}

	document.addEventListener("DOMContentLoaded", function() {
		searchjob();
	});
</script>

@include('front.layout.footer')
</body>

</html>