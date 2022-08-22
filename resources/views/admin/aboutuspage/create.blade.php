@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>About Us Page</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($aboutuspage) ? route('aboutuspage.update', $aboutuspage->id) : route('aboutuspage.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($aboutuspage))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">About Us Page</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">About us main heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="main_heading" placeholder="About Us Main Heading" class="form-control{{$errors->has('main_heading') ? ' is-invalid' : ''}}" value="{{isset($aboutuspage) ? $aboutuspage->main_heading : old('main_heading') }}">
            <small class="form-text text-muted">Write about us main heading</small></div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Choose Us title</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="choose_us_title" placeholder="Choose us title" class="form-control{{$errors->has('choose_us_title') ? ' is-invalid' : ''}}" value="{{isset($aboutuspage) ? $aboutuspage->choose_us_title : old('choose_us_title') }}">
            <small class="form-text text-muted">Write Choose Us Title</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Choose Us Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="choose_us_heading" placeholder="Choose us heading" class="form-control{{$errors->has('choose_us_heading') ? ' is-invalid' : ''}}" value="{{isset($aboutuspage) ? $aboutuspage->choose_us_heading : old('choose_us_heading') }}">
            <small class="form-text text-muted">Write Choose Us Heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Choose Us Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('choose_us_description') ? ' is-invalid' : ''}}" id="choose_us_description" value="{{isset($aboutuspage) ? $aboutuspage->choose_us_description : old('choose_us_description') }}" type="hidden" name="choose_us_description">
            <trix-editor input="choose_us_description" placeholder="Choose Us Description"></trix-editor>
            <small class="form-text text-muted">Write Choose Us Description</small>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Choose Us Button Text</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="choose_us_button_text" placeholder="Choose us button text" class="form-control{{$errors->has('choose_us_button_text') ? ' is-invalid' : ''}}" value="{{isset($aboutuspage) ? $aboutuspage->choose_us_button_text : old('choose_us_button_text') }}">
            <small class="form-text text-muted">Write Choose Us Button Text</small></div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Choose Us Icon1</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($aboutuspage->icon1) ? (asset('storage/aboutuspage/'. $aboutuspage->icon1->file)) : 'http://placehold.it/50x50'}}"></div>


          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="choose_us_icon1" class="form-control-file">
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Choose Us Text1</label></div>
          <div class="col-12 col-md-9">
            <input class="form-control{{$errors->has('choose_us_text1') ? ' is-invalid' : ''}}" id="choose_us_text1" value="{{isset($aboutuspage) ? $aboutuspage->choose_us_text1 : old('choose_us_text1') }}" type="hidden" name="choose_us_text1">
            <trix-editor input="choose_us_text1" placeholder="Choose Us"></trix-editor>
            <small class="form-text text-muted">Write Choose Us Text1</small>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Choose Us Icon2</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($aboutuspage->icon2) ? (asset('storage/aboutuspage/'. $aboutuspage->icon2->file)) : 'http://placehold.it/50x50'}}"></div>


          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="choose_us_icon2" class="form-control-file">
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Choose Us Text2</label></div>
          <div class="col-12 col-md-9">
            <input class="form-control{{$errors->has('choose_us_text2') ? ' is-invalid' : ''}}" id="choose_us_text2" value="{{isset($aboutuspage) ? $aboutuspage->choose_us_text2 : old('choose_us_text2') }}" type="hidden" name="choose_us_text2">
            <trix-editor input="choose_us_text2" placeholder="Choose Us"></trix-editor>
            <small class="form-text text-muted">Write Choose Us Text2</small>
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Choose Us Icon3</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($aboutuspage->icon3) ? (asset('storage/aboutuspage/'. $aboutuspage->icon3->file)) : 'http://placehold.it/50x50'}}"></div>


          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="choose_us_icon3" class="form-control-file">
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Choose Us Text3</label></div>
          <div class="col-12 col-md-9">
            <input class="form-control{{$errors->has('choose_us_text3') ? ' is-invalid' : ''}}" id="choose_us_text3" value="{{isset($aboutuspage) ? $aboutuspage->choose_us_text3 : old('choose_us_text3') }}" type="hidden" name="choose_us_text3">
            <trix-editor input="choose_us_text3" placeholder="Choose Us"></trix-editor>
            <small class="form-text text-muted">Write Choose Us Text3</small>
          </div>
        </div>

    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($aboutuspage) ? 'Update' : 'Add New'}}
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