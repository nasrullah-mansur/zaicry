@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>latestproject</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($latestproject) ? route('latestproject.update', $latestproject->id) : route('latestproject.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($latestproject))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">latestproject</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">latestproject Main Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="latestproject_main_heading" placeholder="latestproject Main Heading" class="form-control{{$errors->has('latestproject_main_heading') ? ' is-invalid' : ''}}" value="{{isset($latestproject) ? $latestproject->latestproject_main_heading : old('latestproject_main_heading') }}">
            <small class="form-text text-muted">Write latestproject Main Heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">latestproject Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="latestproject_heading" placeholder="latestproject Heading" class="form-control{{$errors->has('latestproject_heading') ? ' is-invalid' : ''}}" value="{{isset($latestproject) ? $latestproject->latestproject_heading : old('latestproject_heading') }}">
            <small class="form-text text-muted">Write latestproject heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">latestproject Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('latestproject_description') ? ' is-invalid' : ''}}" id="latestproject_description" value="{{isset($latestproject) ? $latestproject->latestproject_description : old('latestproject_description') }}" type="hidden" name="latestproject_description">
            <trix-editor input="latestproject_description" placeholder="latestproject Description"></trix-editor>
            <small class="form-text text-muted">Write latestproject Description</small>
          </div>
        </div>
    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($latestproject) ? 'Update latestproject' : 'Add New latestproject'}}
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