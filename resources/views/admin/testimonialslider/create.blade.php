@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Slider</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($testimonialslider) ? route('testimonialslider.update', $testimonialslider->id) : route('testimonialslider.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($testimonialslider))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Sevice</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">testimonialslider Name</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="testimonial_name" placeholder="testimonialslider name" class="form-control{{$errors->has('testimonial_name') ? ' is-invalid' : ''}}" value="{{isset($testimonialslider) ? $testimonialslider->testimonial_name : old('testimonial_name') }}">
            <small class="form-text text-muted">Write testimonialslider name</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">testimonialslider Title</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="testimonial_title" placeholder="testimonialslider Title" class="form-control{{$errors->has('testimonial_title') ? ' is-invalid' : ''}}" value="{{isset($testimonialslider) ? $testimonialslider->testimonial_title : old('testimonial_title') }}">
            <small class="form-text text-muted">Write testimonialslider heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">testimonialslider Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('testimonial_description') ? ' is-invalid' : ''}}" id="testimonial_description" value="{{isset($testimonialslider) ? $testimonialslider->testimonial_description : old('testimonial_description') }}" type="hidden" name="testimonial_description">
            <trix-editor input="testimonial_description" placeholder="Write testimonialslider description"></trix-editor>
            <small class="form-text text-muted">Write testimonialslider Description</small>
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">testimonialslider Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($testimonialslider->photo) ? (asset('storage/testimonialslider/'. $testimonialslider->photo->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>
    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($testimonialslider) ? 'Update testimonialslider' : 'Add New testimonialslider'}}
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