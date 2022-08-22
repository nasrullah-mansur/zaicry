@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Job</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($jobs) ? route('jobs.update', $jobs->id) : route('jobs.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($jobs))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Jobs Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Job Title" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{isset($jobs) ? $jobs->title : old('title') }}">
                        <small class="form-text text-muted">Write Job Title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jobs Content</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="content" placeholder="Job Content" class="form-control{{$errors->has('content') ? ' is-invalid' : ''}}" value="{{isset($jobs) ? $jobs->content : old('content') }}">
                        <small class="form-text text-muted">Write jobs content</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jobs Description</label></div>

                    <div class="col-12 col-md-9">

                        <input class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" id="description" value="{{isset($jobs) ? $jobs->description : old('description') }}" type="hidden" name="description">
                        <trix-editor input="description"></trix-editor>
                        <small class="form-text text-muted">Write Jobs Description</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Company Name</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="company_name" placeholder="Company Name" class="form-control{{$errors->has('company_name') ? ' is-invalid' : ''}}" value="{{isset($jobs) ? $jobs->company_name : old('company_name') }}">
                        <small class="form-text text-muted">Write company name</small></div>
                </div>


                <!-- <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Company Image</label> </div>
                    <div class="col col-md-3">
                        <img style="height: 50px; width: 50px;" src="{{isset($jobs->photo) ? (asset('storage/jobs/'. $jobs->photo->file)) : 'http://placehold.it/50x50'}}"></div>

                    <div class="col-6 col-md-6">
                        <input type="file" id="file-input" name="image" class="form-control-file">
                    </div>
                </div> -->

                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Company Image</label> </div>

                    <div class="col col-md-3">
                        <img style="height: 50px; width: 50px;" src="{{isset($jobs->photo) ? (asset('storage/jobs/'. $jobs->photo->file)) : 'http://placehold.it/50x50'}}"></div>

                    <div class="col-6 col-md-6">
                        <input type="file" id="file-input" name="image" class="form-control-file">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Company About</label></div>

                    <div class="col-12 col-md-9">
                        <input class="form-control{{$errors->has('company_about') ? ' is-invalid' : ''}}" id="company_about" value="{{isset($jobs) ? $jobs->company_about : old('company_about') }}" type="hidden" name="company_about">
                        <trix-editor input="company_about"></trix-editor>
                        <small class="form-text text-muted">Write Company About</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Company Vision</label></div>

                    <div class="col-12 col-md-9">
                        <input class="form-control{{$errors->has('company_vision') ? ' is-invalid' : ''}}" id="company_vision" value="{{isset($jobs) ? $jobs->company_vision : old('company_vision') }}" type="hidden" name="company_vision">
                        <trix-editor input="company_vision"></trix-editor>
                        <small class="form-text text-muted">Write Company Vision</small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Vacancy</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="vacancy" placeholder="Vacancy" class="form-control{{$errors->has('vacancy') ? ' is-invalid' : ''}}" value="{{isset($jobs) ? $jobs->vacancy : old('vacancy') }}">
                        <small class="form-text text-muted">Write vacancy</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Experience</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="experience" placeholder="Experience" class="form-control{{$errors->has('experience') ? ' is-invalid' : ''}}" value="{{isset($jobs) ? $jobs->experience : old('experience') }}">
                        <small class="form-text text-muted">Write Experience</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Location</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="location" placeholder="Location" class="form-control{{$errors->has('location') ? ' is-invalid' : ''}}" value="{{isset($jobs) ? $jobs->location : old('location') }}">
                        <small class="form-text text-muted">Write Location</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Deadline</label></div>
                    <div class="col-12 col-md-9">
                        <input type="date" id="text-input" name="deadline" placeholder="Deadline" class="form-control{{$errors->has('deadline') ? ' is-invalid' : ''}}" value="{{isset($jobs) ? $jobs->deadline : old('deadline') }}">
                        <small class="form-text text-muted">Write Deadline</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Salary</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="salary" placeholder="Salary" class="form-control{{$errors->has('salary') ? ' is-invalid' : ''}}" value="{{isset($jobs) ? $jobs->salary : old('salary') }}">
                        <small class="form-text text-muted">Write Salary</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Type</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="job_type" placeholder="Job Type" class="form-control{{$errors->has('job_type') ? ' is-invalid' : ''}}" value="{{isset($jobs) ? $jobs->job_type : old('job_type') }}">
                        <small class="form-text text-muted">Write Job Type</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">What we looking for</label></div>

                    <div class="col-12 col-md-9">
                        <input class="form-control{{$errors->has('looking_for') ? ' is-invalid' : ''}}" id="looking_for" value="{{isset($jobs) ? $jobs->looking_for : old('looking_for') }}" type="hidden" name="looking_for">
                        <trix-editor input="looking_for"></trix-editor>
                        <small class="form-text text-muted">Write Looking For</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Requirement Skill</label></div>

                    <div class="col-12 col-md-9">
                        <input class="form-control{{$errors->has('requirement_skill') ? ' is-invalid' : ''}}" id="requirement_skill" value="{{isset($jobs) ? $jobs->requirement_skill : old('requirement_skill') }}" type="hidden" name="requirement_skill">
                        <trix-editor input="requirement_skill"></trix-editor>
                        <small class="form-text text-muted">Write Requirement Skill</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Educational Qualification</label></div>

                    <div class="col-12 col-md-9">
                        <input class="form-control{{$errors->has('educational_qualification') ? ' is-invalid' : ''}}" id="educational_qualification" value="{{isset($jobs) ? $jobs->educational_qualification : old('educational_qualification') }}" type="hidden" name="educational_qualification">
                        <trix-editor input="educational_qualification"></trix-editor>
                        <small class="form-text text-muted">Educational Qualification</small>
                    </div>
                </div>

        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($jobs) ? 'Update jobs' : 'Add New'}}
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