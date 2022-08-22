@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Slider</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($team) ? route('team.update', $team->id) : route('team.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($team))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Team</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Team Main Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="main_heading" placeholder="Team main Heading" class="form-control{{$errors->has('main_heading') ? ' is-invalid' : ''}}" value="{{isset($team) ? $team->main_heading : old('main_heading') }}">
            <small class="form-text text-muted">Write Team main heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Team Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="heading" placeholder="Team Heading" class="form-control{{$errors->has('heading') ? ' is-invalid' : ''}}" value="{{isset($team) ? $team->heading : old('heading') }}">
            <small class="form-text text-muted">Write Team heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Team Title</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="title" placeholder="Team Title" class="form-control{{$errors->has('title') ? ' is-invalid' : ''}}" value="{{isset($team) ? $team->title : old('title') }}">
            <small class="form-text text-muted">Write Team Title</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Team Description</label></div>

          <div class="col-12 col-md-9">
            <input class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" id="description" value="{{isset($team) ? $team->description : old('description') }}" type="hidden" name="description">
            <trix-editor input="description" placeholder="Write Team description"></trix-editor>
            <small class="form-text text-muted">Write Team Description</small>
          </div>
        </div>
    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($team) ? 'Update' : 'Add New'}}
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