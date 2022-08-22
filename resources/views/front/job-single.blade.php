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
				@if (session('job'))
				<div class="text-center">
					<h2>done</h2>
					<h2>{{session('job')}}</h2>
				</div>
				@endif
				<div class="breadcrumb-wrap text-center">
					<h2 class="page-title">{{$job->title}}</h2>
					<nav class="breadcrumb-menu">
						<ul>
							<li><a href="{{route('home')}}">home</a></li>
							<li><a href="{{route('career')}}">career</a></li>
							<li>Career details</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area start here  -->
<!-- Career details page start here -->
<section class="career-details-page section">
	<div class="container">
		<div class="we-area-area mb-100">
			<div class="row">
				<div class="col-lg-6">
					<figure class="we-area-left">
						<img src="{{isset($job->photo) ? (asset('storage/jobs/'. $job->photo->file)) : 'http://placehold.it/100x100'}}" alt="who we are image" />

					</figure>
				</div>
				<div class="col-lg-6 align-self-center">
					<div class="we-area-righ">
						<h2 class="career-section-title">Who We Are?</h2>
						<p>
							{!!$job->company_about!!}
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="our-vision-area mb-50">
			<div class="row">
				<div class="col-lg-7">
					<div class="our-vision-left">
						<h2 class="career-section-title">What is our Vision?</h2>
						{!!$job->company_vision!!}
					</div>
				</div>
				<div class="col-lg-5">
					<div class="our-vision-right">
						<div class="table-responsive">
							<table class="table">
								<tr>
									<td>Position</td>
									<td>{{$job->content}}</td>
								</tr>
								<tr>
									<td>Published Date</td>
									<td>{{$job->created_at->toFormattedDateString()}}</td>
								</tr>
								<tr>
									<td>Available Vacancies</td>
									<td>{{$job->vacancy}}</td>
								</tr>
								<tr>
									<td>Job Type</td>
									<td>{{$job->job_type}}</td>
								</tr>
								<tr>
									<td>Salary</td>
									<td>{{$job->salary}} </td>
								</tr>
								<tr>
									<td>Experience</td>
									<td>{{$job->experience}}</td>
								</tr>
								<tr>
									<td>Location</td>
									<td>{{$job->location}}</td>
								</tr>
								<tr>
									<td>Deadline</td>
									<td>{{date('F j, Y',(int)($job->deadline))}}</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="looking-for-area mb-50">
			<div class="row">
				<div class="col-lg-8">
					<div class="looking-for-wrap">
						<h2 class="career-section-title">What we looking for?</h2>
						<p>{!!$job->looking_for!!}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="requirement-skill mb-50">
			<div class="row">
				<div class="col-lg-8">
					<div class="looking-for-wrap">
						<h2 class="career-section-title">Requirement Skill</h2>
						{!!$job->requirement_skill!!}
					</div>
				</div>
			</div>
		</div>
		<div class="educational-area ">
			<div class="row">
				<div class="col-lg-8">
					<div class="looking-for-wrap">
						<h2 class="career-section-title">Educational Qualification</h2>
						{!!$job->educational_qualification!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Career details page end here -->
<section class="apply-form-area section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Apply For This Position</h2>
			</div>
		</div>
		<div class="apply-form">
			<form action="{{route('job.submit')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<input type="text" class="form-control" id="firstname" name="firstname" autocomplete="off" placeholder="First Name" />
							<i class="icon far fa-user"></i>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<input type="text" class="form-control" id="lastname" name="lastname" autocomplete="off" placeholder="Last Name" required />
							<i class="icon far fa-user"></i>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Email" required />
							<i class="icon far fa-envelope"></i>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<input type="text" class="form-control" id="phone" name="phone" autocomplete="off" placeholder="Phone" required />
							<i class="icon fas fa-phone-alt"></i>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<textarea class="form-control" id="message" name="message" rows="3" placeholder="Write Your Cover Letter" required></textarea>
							<i class="icon fas fa-book"></i>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="uplode-group">
							<span class="uplode-text">Upload CV :</span>
							<input type="file" id="file" name="file" class="custom-file-input">
							<label class="file" for="file">Choose File</label>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="check">
							<label class="form-check-label" for="check">I am ensure all of my data is right and ligal.</label>
						</div>
						<div class="form-btn">
							<button type="submit" class="submit-btn">Submit Application</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

@include('front.layout.footer')
</body>

</html>