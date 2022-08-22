@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Site</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($site) ? route('sites.update', $site->id) : route('sites.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($site))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Site Box</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Title</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="title" placeholder="Site Title" class="form-control{{$errors->has('title') ? ' is-invalid' : ''}}" value="{{isset($site) ? $site->title : old('title') }}">
            <small class="form-text text-muted">Write Site Title</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Footer Copyright</label></div>

          <div class="col-12 col-md-9">
            <input class="form-control{{$errors->has('footer_copyright') ? ' is-invalid' : ''}}" id="footer_copyright" value="{{isset($site) ? $site->footer_copyright : old('footer_copyright') }}" type="hidden" name="footer_copyright">
            <trix-editor input="footer_copyright"></trix-editor>
            <small class="form-text text-muted">Write Footer Copyright</small>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Footer Heading</label></div>

          <div class="col-12 col-md-9">
            <input class="form-control{{$errors->has('footer_heading') ? ' is-invalid' : ''}}" id="footer_heading" value="{{isset($site) ? $site->footer_heading : old('footer_heading') }}" type="hidden" name="footer_heading">
            <trix-editor input="footer_heading"></trix-editor>
            <small class="form-text text-muted">Write Footer Heading</small>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Address</label></div>

          <div class="col-12 col-md-9">
            <input class="form-control{{$errors->has('site_address') ? ' is-invalid' : ''}}" id="site_address" value="{{isset($site) ? $site->site_address : old('site_address') }}" type="hidden" name="site_address">
            <trix-editor input="site_address"></trix-editor>
            <small class="form-text text-muted">Write Footer Site Address</small>
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Support Text</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="site_support_text" placeholder="Site Support Text" class="form-control{{$errors->has('site_support_text') ? ' is-invalid' : ''}}" value="{{isset($site) ? $site->site_support_text : old('site_support_text') }}">
            <small class="form-text text-muted">Write Site Support Text</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Phone</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="phone" placeholder="Site Phone" class="form-control{{$errors->has('phone') ? ' is-invalid' : ''}}" value="{{isset($site) ? $site->phone : old('phone') }}">
            <small class="form-text text-muted">Write Site Phone</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Email</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="email" placeholder="Site Email" class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}" value="{{isset($site) ? $site->email : old('email') }}">
            <small class="form-text text-muted">Write Site Email</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Site Logo</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($site->photo) ? (asset('storage/site/'. $site->photo->file)) : 'http://placehold.it/50x50'}}">
          </div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Site Favicon</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($site->photo2) ? (asset('storage/site/'. $site->photo2->file)) : 'http://placehold.it/50x50'}}">
          </div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image2" class="form-control-file">
          </div>
        </div>
    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($site) ? 'Update Site' : 'Add New Site'}}
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