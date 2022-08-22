@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Workprocess</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($workprocess) ? route('workprocess.update', $workprocess->id) : route('workprocess.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($workprocess))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Workprocess</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Workprocess Main Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="workprocess_main_heading" placeholder="Workprocess Main Heading" class="form-control{{$errors->has('workprocess_main_heading') ? ' is-invalid' : ''}}" value="{{isset($workprocess) ? $workprocess->workprocess_main_heading : old('workprocess_main_heading') }}">
            <small class="form-text text-muted">Write Workprocess Main Heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Workprocess Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="workprocess_heading" placeholder="Workprocess Heading" class="form-control{{$errors->has('workprocess_heading') ? ' is-invalid' : ''}}" value="{{isset($workprocess) ? $workprocess->workprocess_heading : old('workprocess_heading') }}">
            <small class="form-text text-muted">Write Workprocess heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Workprocess Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('workprocess_description') ? ' is-invalid' : ''}}" id="workprocess_description" value="{{isset($workprocess) ? $workprocess->workprocess_description : old('workprocess_description') }}" type="hidden" name="workprocess_description">
            <trix-editor input="workprocess_description" placeholder="Workprocess Description"></trix-editor>
            <small class="form-text text-muted">Write Workprocess Description</small>
          </div>
        </div>
    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($workprocess) ? 'Update Workprocess' : 'Add New Workprocess'}}
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