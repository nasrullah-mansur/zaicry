@extends('admin.layout.master')
@section('content')

<style>
  select.package {
    display: block;
    border: 1px solid #ddd;
    padding: 5px;
  }
</style>

<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Pricing</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($pricingtable) ? route('pricingtable.update', $pricingtable->id) : route('pricingtable.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($pricingtable))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Pricing Box</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pricing Offer Heading</label></div>
          <div class="col-12 col-md-9">
            <select class="package" name="pricing_package" id="package">
              <option value="Annually" {{isset($pricingtable) ? $pricingtable->pricing_package == "Annually" ? "selected" : '' : ''}}>Annually</option>
              <option value="Monthly" {{isset($pricingtable) ? $pricingtable->pricing_package == "Monthly" ? "selected" : '' :''}}>Monthly</option>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pricing Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="pricing_heading" placeholder="Pricing Heading" class="form-control{{$errors->has('pricing_heading') ? ' is-invalid' : ''}}" value="{{isset($pricingtable) ? $pricingtable->pricing_heading : old('pricing_heading') }}">
            <small class="form-text text-muted">Write Pricing Heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pricing Amount</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="pricing_amount" placeholder="Pricing amount" class="form-control{{$errors->has('pricing_amount') ? ' is-invalid' : ''}}" value="{{isset($pricingtable) ? $pricingtable->pricing_amount : old('pricing_amount') }}">
            <small class="form-text text-muted">Write Pricing Amount</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pricing List</label></div>

          <div class="col-12 col-md-9">
            <input class="form-control{{$errors->has('pricing_list') ? ' is-invalid' : ''}}" id="pricing_list" value="{{isset($pricingtable) ? $pricingtable->pricing_list : old('pricing_list') }}" type="hidden" name="pricing_list">
            <trix-editor input="pricing_list" placeholder="Write pricing list"></trix-editor>
            <small class="form-text text-muted">Write Pricing Box List</small>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pricing Button Text</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="pricing_button_text" placeholder="Pricing Button Text" class="form-control{{$errors->has('pricing_button_text') ? ' is-invalid' : ''}}" value="{{isset($pricingtable) ? $pricingtable->pricing_button_text : old('pricing_button_text') }}">
            <small class="form-text text-muted">Write Pricing Button Text</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Pricing Box Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($pricingtable->photo) ? (asset('storage/pricing/'. $pricingtable->photo->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>
    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($pricingtable) ? 'Update pricing' : 'Add New pricing'}}
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