@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Contact Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($contact) ? route('contact.update', $contact->id) : route('contact.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($contact))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Contact Section</p>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Main Heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="main_heading" placeholder="Contact Main Heading" class="form-control{{$errors->has('main_heading') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->main_heading : old('main_heading') }}">
                        <small class="form-text text-muted">Write Contact Main Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="heading" placeholder="Contact Main Heading" class="form-control{{$errors->has('heading') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->heading : old('heading') }}">
                        <small class="form-text text-muted">Write Contact Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Contact Title" class="form-control{{$errors->has('title') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->title : old('title') }}">
                        <small class="form-text text-muted">Write Contact Title</small></div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="description" class=" form-control-label">Contact Description</label></div>
                    <div class="col-12 col-md-9">
                        <input type="hidden" id="description" name="description" placeholder="Contact Description" class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->description : old('description') }}">
                        <trix-editor input="description"></trix-editor>
                        <small class="form-text text-muted">Write Contact Description</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Form Heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="contact_form_heading" placeholder="Contact Form Heading" class="form-control{{$errors->has('contact_form_heading') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->contact_form_heading : old('contact_form_heading') }}">
                        <small class="form-text text-muted">Write Contact Form Heading</small></div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="description" class=" form-control-label">Contact Form Description</label></div>
                    <div class="col-12 col-md-9">
                        <input type="hidden" id="contact_form_description" name="contact_form_description" placeholder="Contact Form Description" class="form-control{{$errors->has('contact_form_description') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->contact_form_description : old('contact_form_description') }}">
                        <trix-editor input="contact_form_description"></trix-editor>
                        <small class="form-text text-muted">Write Contact Form Description</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Form Address</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="address" placeholder="Contact Address" class="form-control{{$errors->has('address') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->address : old('address') }}">
                        <small class="form-text text-muted">Write Contact Form Address</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Form Phone</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="phone" placeholder="Contact Phone" class="form-control{{$errors->has('phone') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->phone : old('phone') }}">
                        <small class="form-text text-muted">Write Contact Form Phone</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Form Email</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="email" placeholder="Contact Email" class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->email : old('email') }}">
                        <small class="form-text text-muted">Write Contact Form Email</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Form Skype</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="skype" placeholder="Contact Skype" class="form-control{{$errors->has('skype') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->skype : old('skype') }}">
                        <small class="form-text text-muted">Write Contact Form Skype</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Form Facebook link</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="social_media_link1" placeholder="Contact facebook link" class="form-control{{$errors->has('social_media_link1') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->social_media_link1 : old('social_media_link1') }}">
                        <small class="form-text text-muted">Write Contact Form Facebook Link</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Form Instagram link</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="social_media_link2" placeholder="Contact instagram link" class="form-control{{$errors->has('social_media_link2') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->social_media_link2 : old('social_media_link2') }}">
                        <small class="form-text text-muted">Write Contact Form Instagram Link</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Form Twitter link</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="social_media_link3" placeholder="Contact instagram link" class="form-control{{$errors->has('social_media_link3') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->social_media_link3 : old('social_media_link3') }}">
                        <small class="form-text text-muted">Write Contact Form Twitter Link</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Form Linkedin link</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="social_media_link4" placeholder="Contact instagram link" class="form-control{{$errors->has('social_media_link4') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->social_media_link4 : old('social_media_link4') }}">
                        <small class="form-text text-muted">Write Contact Form Linkedin Link</small></div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Google Map Api</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="google_map_api" placeholder="Contact instagram link" class="form-control{{$errors->has('google_map_api') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->google_map_api : old('google_map_api') }}">
                        <small class="form-text text-muted">Write Google Map Api</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Google Map Latitude/label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="google_map_lat" placeholder="Google Map Lat" class="form-control{{$errors->has('google_map_lat') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->google_map_lat : old('google_map_lat') }}">
                        <small class="form-text text-muted">Write Google Map lat</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Google Map Longitude</div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="google_map_long" placeholder="Google Map Longitude" class="form-control{{$errors->has('google_map_long') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->google_map_long : old('google_map_long') }}">
                        <small class="form-text text-muted">Write Google Map Longitude</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Google Map Location Info</div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="google_map_location_info" placeholder="Google Map Location Info" class="form-control{{$errors->has('google_map_location_info') ? ' is-invalid' : ''}}" value="{{isset($contact) ? $contact->google_map_location_info : old('google_map_location_info') }}">
                        <small class="form-text text-muted">Write Google Map Location Info</small></div>
                </div>

                <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> {{isset($contact) ? 'Save' : 'Add New'}}
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

<script>
    $("input").val();
</script>
@endsection


@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-tagsinput.css')}}">

<style>
    .bootstrap-tagsinput {
        background: #000;
        display: block;
    }
</style>
@endsection