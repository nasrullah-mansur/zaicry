@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Servicepage</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($servicepage) ? route('servicepage.update', $servicepage->id) : route('servicepage.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($servicepage))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Servicepage</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">servicepage Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="heading" placeholder="servicepage Heading" class="form-control{{$errors->has('heading') ? ' is-invalid' : ''}}" value="{{isset($servicepage) ? $servicepage->heading : old('heading') }}">
            <small class="form-text text-muted">Write servicepage heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">servicepage Title</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="title" placeholder="servicepage title" class="form-control{{$errors->has('title') ? ' is-invalid' : ''}}" value="{{isset($servicepage) ? $servicepage->title : old('title') }}">
            <small class="form-text text-muted">Write servicepage Title</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">servicepage Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" id="description" value="{{isset($servicepage) ? $servicepage->description : old('description') }}" type="hidden" name="description">
            <trix-editor input="description"></trix-editor>
            <small class="form-text text-muted">Write servicepage Description</small>
          </div>
        </div>



        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Service Single Detail Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($servicepage->photo) ? (asset('storage/servicepage/'. $servicepage->photo->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>

    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($servicepage) ? 'Update servicepage' : 'Add New servicepage'}}
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