@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Sevice</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($service) ? route('service.update', $service->id) : route('service.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($service))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Sevice</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_heading" placeholder="Service Heading" class="form-control{{$errors->has('slider_heading') ? ' is-invalid' : ''}}" value="{{isset($service) ? $service->service_heading : old('service_heading') }}">
            <small class="form-text text-muted">Write Service heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('service_description') ? ' is-invalid' : ''}}" id="service_description" value="{{isset($service) ? $service->service_description : old('service_description') }}" type="hidden" name="service_description">
            <trix-editor input="service_description"></trix-editor>
            <small class="form-text text-muted">Write Service Description</small>
          </div>
        </div>





    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($service) ? 'Update Service' : 'Add New Service'}}
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