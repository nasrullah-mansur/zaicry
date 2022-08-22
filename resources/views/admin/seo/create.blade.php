@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Seo Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($seo) ? route('seos.update', $seo->id) : route('seos.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($seo))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Blog Page Setting Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Tag Line</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="site_meta_tags" class="form-control{{$errors->has('site_tagline') ? ' is-invalid' : ''}}" data-role="tagsinput" value="{{isset($seo) ? $seo->site_meta_tags : ''}}">
                        <small class="form-text text-muted">Write Site Tag Line</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="site_meta_description" class=" form-control-label">Sete Meta Description</label></div>
                    <div class="col-12 col-md-9">
                        <input type="hidden" id="site_meta_description" name="site_meta_description" placeholder="Site Meta Description" class="form-control{{$errors->has('site_meta_description') ? ' is-invalid' : ''}}" value="{{isset($seo) ? $seo->site_meta_description : old('site_meta_description') }}">
                        <trix-editor input="site_meta_description"></trix-editor>
                        <small class="form-text text-muted">Write Site Meta Description</small>
                    </div>
                </div>


                <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> {{isset($seo) ? 'Save' : 'Add New'}}
                    </button>
                </div>

        </div>

    </div>


    </form>
</div>

</div>

</div>



@endsection


@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
<script src="{{asset('admin/assets/js/bootstrap-tagsinput.js')}}"></script>


@endsection


@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-tagsinput.css')}}">

<style>
    .bootstrap-tagsinput {
        display: block;
    }

    .bootstrap-tagsinput .tag {
        color: #000;
    }
</style>
@endsection