@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($basicsetting) ? route('basicsettings.update', $basicsetting->id) : route('basicsettings.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($basicsetting))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Blog Page Setting Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="site_title" placeholder="Blog Read More Text" class="form-control{{$errors->has('site_title') ? ' is-invalid' : ''}}" value="{{isset($basicsetting) ? $basicsetting->site_title : old('site_title') }}">
                        <small class="form-text text-muted">Write Site Title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Tag Line</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="site_tagline" placeholder="Blog Read More Text" class="form-control{{$errors->has('site_tagline') ? ' is-invalid' : ''}}" value="{{isset($basicsetting) ? $basicsetting->site_tagline : old('site_tagline') }}">
                        <small class="form-text text-muted">Write Site Tag Line</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="footer_copyright" class=" form-control-label">Footer Copyright</label></div>
                    <div class="col-12 col-md-9">
                        <input type="hidden" id="footer_copyright" name="footer_copyright" placeholder="Blog Read More Text" class="form-control{{$errors->has('footer_copyright') ? ' is-invalid' : ''}}" value="{{isset($basicsetting) ? $basicsetting->footer_copyright : old('footer_copyright') }}">
                        <trix-editor input="footer_copyright"></trix-editor>
                        <small class="form-text text-muted">Write Footer Copyright</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Meta image for site</label> </div>

                    <div class="col col-md-3">
                        <img style="height: 50px; width: 50px;" src="{{isset($basicsetting->photo) ? asset('storage/basicsetting/'. $basicsetting->photo->file) : 'http://placehold.it/50x50'}}"></div>

                    <div class="col-6 col-md-6">
                        <input type="file" id="file-input" name="image" class="form-control-file">
                    </div>
                </div>


        </div>

    </div>

    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> {{isset($basicsetting) ? 'Save' : 'Add New'}}
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