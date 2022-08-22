@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Slider</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($teammember) ? route('teammember.update', $teammember->id) : route('teammember.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($teammember))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Team Member</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Team member name</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="name" placeholder="Team member name" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{isset($teammember) ? $teammember->name : old('name') }}">
            <small class="form-text text-muted">Write Team Member heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Team member title</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="title" placeholder="Team member title" class="form-control{{$errors->has('title') ? ' is-invalid' : ''}}" value="{{isset($teammember) ? $teammember->title : old('title') }}">
            <small class="form-text text-muted">Write Team Member Title</small></div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Facebook link</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="social_media_link1" placeholder="Facebook link" class="form-control{{$errors->has('social_media_link1') ? ' is-invalid' : ''}}" value="{{isset($teammember) ? $teammember->social_media_link1 : old('social_media_link1') }}">
            <small class="form-text text-muted">Facebook link</small></div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Instagram link</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="social_media_link2" placeholder="Instagram link" class="form-control{{$errors->has('social_media_link2') ? ' is-invalid' : ''}}" value="{{isset($teammember) ? $teammember->social_media_link2 : old('social_media_link2') }}">
            <small class="form-text text-muted">Write instagram link</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Twitter link</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="social_media_link3" placeholder="Twitter link" class="form-control{{$errors->has('social_media_link3') ? ' is-invalid' : ''}}" value="{{isset($teammember) ? $teammember->social_media_link3 : old('social_media_link3') }}">
            <small class="form-text text-muted">Write Twitter link</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pinterest link</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="social_media_link4" placeholder="Pinterest link" class="form-control{{$errors->has('social_media_link4') ? ' is-invalid' : ''}}" value="{{isset($teammember) ? $teammember->social_media_link4 : old('social_media_link4') }}">
            <small class="form-text text-muted">Write Pinterest link</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Linkedin link</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="social_media_link5" placeholder="Linkedin link" class="form-control{{$errors->has('social_media_link5') ? ' is-invalid' : ''}}" value="{{isset($teammember) ? $teammember->social_media_link5 : old('social_media_link5') }}">
            <small class="form-text text-muted">Write Linkedin link</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Teammember Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($teammember->photo) ? (asset('storage/teammember/'. $teammember->photo->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>



    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($teammember) ? 'Update' : 'Add New'}}
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