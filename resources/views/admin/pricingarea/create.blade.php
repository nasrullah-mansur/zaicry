@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Pricingarea</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($pricingarea) ? route('pricingarea.update', $pricingarea->id) : route('pricingarea.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($pricingarea))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Pricingarea</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pricingarea Main Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="pricing_area_main_heading" placeholder="pricingarea main Heading" class="form-control{{$errors->has('pricing_area_heading') ? ' is-invalid' : ''}}" value="{{isset($pricingarea) ? $pricingarea->pricing_area_main_heading : old('pricing_area_main_heading') }}">
            <small class="form-text text-muted">Write pricingarea heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">pricingarea Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="pricing_area_heading" placeholder="pricingarea Heading" class="form-control{{$errors->has('pricing_area_heading') ? ' is-invalid' : ''}}" value="{{isset($pricingarea) ? $pricingarea->pricing_area_heading : old('pricing_area_heading') }}">
            <small class="form-text text-muted">Write pricingarea heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pricingarea Description</label></div>
          <div class="col-12 col-md-9">
            <input class="form-control{{$errors->has('pricing_area_description') ? ' is-invalid' : ''}}" id="pricing_area_description" value="{{isset($pricingarea) ? $pricingarea->pricing_area_description : old('pricing_area_description') }}" type="hidden" name="pricing_area_description">
            <trix-editor input="pricing_area_description"></trix-editor>
            <small class="form-text text-muted">Write pricingarea Description</small>
          </div>
        </div>
    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($pricingarea) ? 'Update Pricingarea' : 'Add New Pricingarea'}}
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