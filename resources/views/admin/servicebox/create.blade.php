@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Service Box</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{isset($servicebox) ? route('servicebox.update', $servicebox->id) : route('servicebox.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($servicebox))
        @method('PUT')
        @endif
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">Sevice Box</p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Box Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_box_heading" placeholder="Service Box Heading" class="form-control{{$errors->has('service_box_heading') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_box_heading : old('service_box_heading') }}">
            <small class="form-text text-muted">Write Service Box heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Box Description</label></div>

          <div class="col-12 col-md-9">

            <input class="form-control{{$errors->has('service_box_description') ? ' is-invalid' : ''}}" id="service_box_description" value="{{isset($servicebox) ? $servicebox->service_box_description : old('service_box_description') }}" type="hidden" name="service_box_description">
            <trix-editor input="service_box_description" placeholder="Service Box Description"></trix-editor>
            <small class="form-text text-muted">Write Service Box Description</small>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Service Box Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($servicebox->photo) ? (asset('storage/servicebox/'. $servicebox->photo->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image" class="form-control-file">
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_single_heading" placeholder="Service Box Heading" class="form-control{{$errors->has('service_single_heading') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_heading : old('service_single_heading') }}">
            <small class="form-text text-muted">Write Service Single heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Title</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_single_title" placeholder="Service Single Title" class="form-control{{$errors->has('service_single_title') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_title : old('service_single_title') }}">
            <small class="form-text text-muted">Write Service Single Title</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Description</label></div>
          <div class="col-12 col-md-9">
            <input type="hidden" id="service_single_description" name="service_single_description" placeholder="Service Single Title" class="form-control{{$errors->has('service_single_description') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_description : old('service_single_description') }}">
            <trix-editor input="service_single_description" placeholder="Service Single Description"></trix-editor>
            <small class="form-text text-muted">Write Service Single Description</small>
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Service Single Detail Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($servicebox->photo_two) ? (asset('storage/servicebox/'. $servicebox->photo_two->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image2" class="form-control-file">
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Detail Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_single_detail_heading" placeholder="Service Single Detail Heading" class="form-control{{$errors->has('service_single_detail_heading') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_detail_heading : old('service_single_detail_heading') }}">
            <small class="form-text text-muted">Write Service Single Detail Heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Detail Description</label></div>
          <div class="col-12 col-md-9">
            <input type="hidden" id="service_single_detail_description" name="service_single_detail_description" placeholder="Service Single Detail Description" class="form-control{{$errors->has('service_single_detail_description') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_detail_description : old('service_single_detail_description') }}">
            <trix-editor input="service_single_detail_description" placeholder="Service Single Detail Description"></trix-editor>
            <small class="form-text text-muted">Write Service Single Detail Description</small>
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Service Single Detail Image</label> </div>

          <div class="col col-md-3">
            <img style="height: 50px; width: 50px;" src="{{isset($servicebox->photo_three) ? (asset('storage/servicebox/'. $servicebox->photo_three->file)) : 'http://placehold.it/50x50'}}"></div>

          <div class="col-6 col-md-6">
            <input type="file" id="file-input" name="image3" class="form-control-file">
          </div>
        </div>


        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Support 1 Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_single_support_1_heading" placeholder="Service Single Support 1 Heading" class="form-control{{$errors->has('service_single_support_1_heading') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_support_1_heading : old('service_single_support_1_heading') }}">
            <small class="form-text text-muted">Write Service Single Support 1 Heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Support 1 Description</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_single_support_1_description" placeholder="Service Single Support 1 Description" class="form-control{{$errors->has('service_single_support_1_description') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_support_1_description : old('service_single_support_1_description') }}">
            <small class="form-text text-muted">Write Service Single Support 1 Description</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Support 2 Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_single_support_2_heading" placeholder="Service Single Support 2 Heading" class="form-control{{$errors->has('service_single_support_2_heading') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_support_2_heading : old('service_single_support_2_heading') }}">
            <small class="form-text text-muted">Write Service Single Support 2 Heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Support 2 Description</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_single_support_2_description" placeholder="Service Single Support 2 Description" class="form-control{{$errors->has('service_single_support_2_description') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_support_2_description : old('service_single_support_2_description') }}">
            <small class="form-text text-muted">Write Service Single Support 2 Description</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Support 3 Heading</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_single_support_3_heading" placeholder="Service Single Support 3 Heading" class="form-control{{$errors->has('service_single_support_3_heading') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_support_3_heading : old('service_single_support_3_heading') }}">
            <small class="form-text text-muted">Write Service Single Support 3 Heading</small></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Single Support 3 Description</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="service_single_support_3_description" placeholder="Service Single Support 3 Description" class="form-control{{$errors->has('service_single_support_3_description') ? ' is-invalid' : ''}}" value="{{isset($servicebox) ? $servicebox->service_single_support_3_description : old('service_single_support_3_description') }}">
            <small class="form-text text-muted">Write Service Single Support 3 Description</small></div>
        </div>


    </div>


    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{isset($servicebox) ? 'Update Service' : 'Add New Service'}}
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