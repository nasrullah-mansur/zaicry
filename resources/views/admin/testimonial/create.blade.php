@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Testimonial</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($testimonial) ? route('testimonial.update', $testimonial->id) : route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($testimonial))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Testimonial</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Testimonial Main Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="testimonial_main_heading" placeholder="Testimonial main Heading" class="form-control{{$errors->has('testimonial_main_heading') ? ' is-invalid' : ''}}" value="{{isset($testimonial) ? $testimonial->testimonial_main_heading : old('testimonial_main_heading') }}">
            <small class="form-text text-muted">Write testimonial main heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">testimonial Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="testimonial_heading" placeholder="testimonial Heading" class="form-control{{$errors->has('slider_heading') ? ' is-invalid' : ''}}" value="{{isset($testimonial) ? $testimonial->testimonial_heading : old('testimonial_heading') }}">
            <small class="form-text text-muted">Write testimonial heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">testimonial Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('testimonial_description') ? ' is-invalid' : ''}}" id="testimonial_description" value="{{isset($testimonial) ? $testimonial->testimonial_description : old('testimonial_description') }}" type="hidden" name="testimonial_description">
            <trix-editor input="testimonial_description" placeholder="Write testimonial description"></trix-editor>
            <small class="form-text text-muted">Write testimonial Description</small>
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Testimonial Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($testimonial->photo) ? (asset('storage/testimonial/'. $testimonial->photo->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>
    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($testimonial) ? 'Update testimonial' : 'Add New testimonial'}}
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