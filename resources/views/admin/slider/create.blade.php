@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Slider</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($slider) ? route('slider.update', $slider->id) : route('slider.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($slider))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Slider</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Slider Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="slider_heading" placeholder="Slider Heading" class="form-control{{$errors->has('slider_heading') ? ' is-invalid' : ''}}" value="{{isset($slider) ? $slider->slider_heading : old('slider_heading') }}">
            <small class="form-text text-muted">Write slider heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Slider Description</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="slider_description" placeholder="Slider Description" class="form-control{{$errors->has('slider_description') ? ' is-invalid' : ''}}" value="{{isset($slider) ? $slider->slider_description : old('slider_description') }}">
            <small class="form-text text-muted">Write Slider Description</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Slider Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($slider->photo) ? (asset('storage/slider/'. $slider->photo->file)) : 'http://placehold.it/50x50'}}"></div>


          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Slider Video</label> </div>

          <div class="col-6 col-md-6">
            <input type="text" id="text-input" name="video" placeholder="add youtube video" class="form-control{{$errors->has('video') ? ' is-invalid' : ''}}" value="{{isset($slider) ? $slider->video->file : old('video') }}">
            <small class="form-text text-muted">Write slider video youtube link</small></div>
        </div>
    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($slider) ? 'Update Slider' : 'Add New Slider'}}
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