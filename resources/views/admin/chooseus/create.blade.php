@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Slider</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($chooseus) ? route('chooseus.update', $chooseus->id) : route('chooseus.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($chooseus))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Chooseus Section</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="chooseus_heading" placeholder="Chooseus Heading" class="form-control{{$errors->has('chooseus_heading') ? ' is-invalid' : ''}}" value="{{isset($chooseus) ? $chooseus->chooseus_heading : old('chooseus_heading') }}">
            <small class="form-text text-muted">Write chooseus heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('chooseus_description') ? ' is-invalid' : ''}}" id="chooseus_description" value="{{isset($chooseus) ? $chooseus->chooseus_description : old('chooseus_description') }}" type="hidden" name="chooseus_description">
            <trix-editor placeholder="Chooseus Description" input="chooseus_description"></trix-editor>
            <small class="form-text text-muted">Write chooseus Description</small>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus Features</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('chooseus_features') ? ' is-invalid' : ''}}" id="chooseus_feature" value="{{isset($chooseus) ? $chooseus->chooseus_feature : old('chooseus_feature') }}" type="hidden" name="chooseus_feature">
            <trix-editor placeholder="Chooseus Features" input="chooseus_feature"></trix-editor>
            <small class="form-text text-muted">Write chooseus features</small>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Chooseus Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($chooseus->photo) ? (asset('storage/chooseus/'. $chooseus->photo->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus experience</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="chooseus_experience_text[]" placeholder="Chooseus experience text" class="form-control{{$errors->has('chooseus_experience_text') ? ' is-invalid' : ''}}" value="{{isset($chooseusexp) ? $chooseusexp[0]->chooseus_experience_text : old('chooseus_experience_text') }}">
            <small class="form-text text-muted">Write chooseus text</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus experience no</label></div>
          <div class="col-12 col-md-9">
            <input type="number" id="text-input" name="chooseus_experience_no[]" placeholder="Chooseus experience no" class="form-control{{$errors->has('chooseus_experience_no') ? ' is-invalid' : ''}}" value="{{isset($chooseusexp) ? $chooseusexp[0]->chooseus_experience_no : old('chooseus_experience_no') }}">
            <small class="form-text text-muted">Write chooseus no</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Chooseus experience icon</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($chooseusexp[0]->photo) ? asset('storage/chooseusexperience/'. $chooseusexp[0]->photo->file) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="chooseus_experience_image[]" class="form-control-file">
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus experience</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="chooseus_experience_text[]" placeholder="Chooseus experience text" class="form-control{{$errors->has('chooseus_experience_text') ? ' is-invalid' : ''}}" value="{{isset($chooseusexp) ? $chooseusexp[1]->chooseus_experience_text : old('chooseus_experience_text') }}">
            <small class="form-text text-muted">Write chooseus text</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus experience no</label></div>
          <div class="col-12 col-md-9">
            <input type="number" id="text-input" name="chooseus_experience_no[]" placeholder="Chooseus experience no" class="form-control{{$errors->has('chooseus_experience_no') ? ' is-invalid' : ''}}" value="{{isset($chooseusexp) ? $chooseusexp[1]->chooseus_experience_no : old('chooseus_experience_no') }}">
            <small class="form-text text-muted">Write chooseus no</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Chooseus experience icon</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($chooseusexp[1]->photo) ? asset('storage/chooseusexperience/'. $chooseusexp[1]->photo->file) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="chooseus_experience_image[]" class="form-control-file">
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus experience</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="chooseus_experience_text[]" placeholder="Chooseus experience text" class="form-control{{$errors->has('chooseus_experience_text') ? ' is-invalid' : ''}}" value="{{isset($chooseusexp) ? $chooseusexp[2]->chooseus_experience_text : old('chooseus_experience_text') }}">
            <small class="form-text text-muted">Write chooseus text</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus experience no</label></div>
          <div class="col-12 col-md-9">
            <input type="number" id="text-input" name="chooseus_experience_no[]" placeholder="Chooseus experience no" class="form-control{{$errors->has('chooseus_experience_no') ? ' is-invalid' : ''}}" value="{{isset($chooseusexp) ? $chooseusexp[2]->chooseus_experience_no : old('chooseus_experience_no') }}">
            <small class="form-text text-muted">Write chooseus no</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Chooseus experience icon</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($chooseusexp[2]->photo) ? asset('storage/chooseusexperience/'. $chooseusexp[2]->photo->file) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="chooseus_experience_image[]" class="form-control-file">
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus experience</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="chooseus_experience_text[]" placeholder="Chooseus experience text" class="form-control{{$errors->has('chooseus_experience_text') ? ' is-invalid' : ''}}" value="{{isset($chooseusexp) ? $chooseusexp[3]->chooseus_experience_text : old('chooseus_experience_text') }}">
            <small class="form-text text-muted">Write chooseus text</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chooseus experience no</label></div>
          <div class="col-12 col-md-9">
            <input type="number" id="text-input" name="chooseus_experience_no[]" placeholder="Chooseus experience no" class="form-control{{$errors->has('chooseus_experience_no') ? ' is-invalid' : ''}}" value="{{isset($chooseusexp) ? $chooseusexp[3]->chooseus_experience_no : old('chooseus_experience_no') }}">
            <small class="form-text text-muted">Write chooseus no</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Chooseus experience icon</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($chooseusexp[3]->photo) ? asset('storage/chooseusexperience/'. $chooseusexp[3]->photo->file) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="chooseus_experience_image[]" class="form-control-file">
          </div>
        </div>

    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($chooseus) ? 'Update chooseus' : 'Add New'}}
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