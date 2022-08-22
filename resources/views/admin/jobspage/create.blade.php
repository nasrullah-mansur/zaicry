@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Jobs Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($jobspage) ? route('jobspage.update', $jobspage->id) : route('jobspage.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($jobspage))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Jobs page Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Page Main Heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="main_heading" placeholder="Job Page Main Heading" class="form-control{{$errors->has('main_heading') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->main_heading : old('main_heading') }}">
                        <small class="form-text text-muted">Write Job Page Main Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Page Heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="heading" placeholder="Job Page Heading" class="form-control{{$errors->has('heading') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->heading : old('heading') }}">
                        <small class="form-text text-muted">Write Job Page Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Page Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Job Page Title" class="form-control{{$errors->has('title') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->title : old('title') }}">
                        <small class="form-text text-muted">Write Job Page Title</small></div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Page Description</label></div>

                    <div class="col-12 col-md-9">

                        <input class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" id="description" value="{{isset($jobspage) ? $jobspage->description : old('description') }}" type="hidden" name="description">
                        <trix-editor input="description" placeholder="Write jobs Page Description"></trix-editor>
                        <small class="form-text text-muted">Write Job Page Description</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Counter one</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="counter1" placeholder="Counter One" class="form-control{{$errors->has('counter1') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->counter1 : old('counter1') }}">
                        <small class="form-text text-muted">Write Counter One</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Counter one Text</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="counter1_text" placeholder="Counter One" class="form-control{{$errors->has('counter1_text') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->counter1_text : old('counter1_text') }}">
                        <small class="form-text text-muted">Write Counter One Text</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Counter Two</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="counter2" placeholder="Counter Two" class="form-control{{$errors->has('counter2') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->counter2 : old('counter2') }}">
                        <small class="form-text text-muted">Write Counter Two</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Counter Two Text</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="counter2_text" placeholder="Counter Two Text" class="form-control{{$errors->has('counter2_text') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->counter2_text : old('counter2_text') }}">
                        <small class="form-text text-muted">Write Counter Two Text</small></div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Counter Three</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="counter3" placeholder="Counter Three" class="form-control{{$errors->has('counter3') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->counter3 : old('counter3') }}">
                        <small class="form-text text-muted">Write Counter Three</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Counter Three Text</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="counter3_text" placeholder="Counter Three Text" class="form-control{{$errors->has('counter3_text') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->counter3_text : old('counter3_text') }}">
                        <small class="form-text text-muted">Write Counter Three Text</small></div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Counter Four</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="counter4" placeholder="Counter Four" class="form-control{{$errors->has('counter4') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->counter4 : old('counter4') }}">
                        <small class="form-text text-muted">Write Counter Four</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Counter Four Text</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="counter4_text" placeholder="Counter Four Text" class="form-control{{$errors->has('counter4_text') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->counter4_text : old('counter4_text') }}">
                        <small class="form-text text-muted">Write Counter Four Text</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job opening heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_opening_heading" placeholder="Job Opening Heading" class="form-control{{$errors->has('job_opening_heading') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->job_opening_heading : old('job_opening_heading') }}">
                        <small class="form-text text-muted">Write Job Opening Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job opening Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_opening_title" placeholder="Job Opening Title" class="form-control{{$errors->has('job_opening_title') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->job_opening_title : old('job_opening_title') }}">
                        <small class="form-text text-muted">Write Job Opening Title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Process heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_process_heading" placeholder="Job Process heading" class="form-control{{$errors->has('job_process_heading') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->job_process_heading : old('job_process_heading') }}">
                        <small class="form-text text-muted">Write Job Opening Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job process title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_process_title" placeholder="Job process title" class="form-control{{$errors->has('job_process_title') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->job_process_title : old('job_process_title') }}">
                        <small class="form-text text-muted">Write Job process title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job process description</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_process_description" placeholder="Job process description" class="form-control{{$errors->has('job_process_description') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->job_process_description : old('job_process_description') }}">
                        <small class="form-text text-muted">Write Job process description</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job process step 1</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_process_step1" placeholder="Job process step 1" class="form-control{{$errors->has('job_process_step1') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->job_process_step1 : old('job_process_step1') }}">
                        <small class="form-text text-muted">Write Job process step 1</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job process step 2</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_process_step2" placeholder="Job process step 2" class="form-control{{$errors->has('job_process_step2') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->job_process_step2 : old('job_process_step2') }}">
                        <small class="form-text text-muted">Write Job process step 2</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job process step 3</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_process_step3" placeholder="Job process step 3" class="form-control{{$errors->has('job_process_step3') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->job_process_step3 : old('job_process_step3') }}">
                        <small class="form-text text-muted">Write Job process step 3</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job process step 4</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_process_step4" placeholder="Job process step 4" class="form-control{{$errors->has('job_process_step4') ? ' is-invalid' : ''}}" value="{{isset($jobspage) ? $jobspage->job_process_step4 : old('job_process_step4') }}">
                        <small class="form-text text-muted">Write Job process step 4</small></div>
                </div>

        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($jobspage) ? 'Save' : 'Add New'}}
            </button>
        </div>

        </form>
    </div>

</div>

</div>



@endsection


@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection