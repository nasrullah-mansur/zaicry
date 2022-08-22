@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($commingsoon) ? route('commingsoon.update', $commingsoon->id) : route('commingsoon.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($commingsoon))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Comming Soon Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Comming Soon Heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="heading" placeholder="Comming Soon Heading" class="form-control{{$errors->has('heading') ? ' is-invalid' : ''}}" value="{{isset($commingsoon) ? $commingsoon->heading : old('heading') }}">
                        <small class="form-text text-muted">Write Comming Soon Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Comming Soon Descripton</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="description" placeholder="Comming Soon Description" class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" value="{{isset($commingsoon) ? $commingsoon->description : old('description') }}">
                        <small class="form-text text-muted">Write Comming Soon Description</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Facebook link</div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="social_media_link1" placeholder="facebook link" class="form-control{{$errors->has('social_media_link1') ? ' is-invalid' : ''}}" value="{{isset($commingsoon) ? $commingsoon->social_media_link1 : old('social_media_link1') }}">
                        <small class="form-text text-muted">Write Facebook link</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Instagram link</div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="social_media_link2" placeholder="Instagram link" class="form-control{{$errors->has('social_media_link2') ? ' is-invalid' : ''}}" value="{{isset($commingsoon) ? $commingsoon->social_media_link2 : old('social_media_link2') }}">
                        <small class="form-text text-muted">Write Instagram link</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Twitter link</div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="social_media_link3" placeholder="Twitter link" class="form-control{{$errors->has('social_media_link3') ? ' is-invalid' : ''}}" value="{{isset($commingsoon) ? $commingsoon->social_media_link3 : old('social_media_link3') }}">
                        <small class="form-text text-muted">Write Twitter link</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Linkdin link</div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="social_media_link4" placeholder="Linkdin link" class="form-control{{$errors->has('social_media_link4') ? ' is-invalid' : ''}}" value="{{isset($commingsoon) ? $commingsoon->social_media_link4 : old('social_media_link4') }}">
                        <small class="form-text text-muted">Write Linkdin link</small></div>
                </div>
        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($commingsoon) ? 'Save' : 'Add New'}}
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