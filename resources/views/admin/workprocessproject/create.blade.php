@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Workproject</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($workprocessproject) ? route('workprocessproject.update', $workprocessproject->id) : route('workprocessproject.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($workprocessproject))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Workproject Box</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Box Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="project_heading" placeholder="Service Box Heading" class="form-control{{$errors->has('project_heading') ? ' is-invalid' : ''}}" value="{{isset($workprocessproject) ? $workprocessproject->project_heading : old('project_heading') }}">
            <small class="form-text text-muted">Write Service Box heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Box Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('project_description') ? ' is-invalid' : ''}}" id="project_description" value="{{isset($workprocessproject) ? $workprocessproject->project_description : old('service_boxproject_description_description') }}" type="hidden" name="project_description">
            <trix-editor input="project_description"></trix-editor>
            <small class="form-text text-muted">Write Service Box Description</small>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Service Box Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($workprocessproject->photo) ? (asset('storage/workprocessproject/'. $workprocessproject->photo->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>



    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($workprocessproject) ? 'Update Workprocessproject' : 'Add New Workprocessproject'}}
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