@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($termspage) ? route('termspage.update', $termspage->id) : route('termspage.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($termspage))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Terms page Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Terms Page Main Heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="terms_page_main_heading" placeholder="Terms Page Main Heading" class="form-control{{$errors->has('terms_page_main_heading') ? ' is-invalid' : ''}}" value="{{isset($termspage) ? $termspage->terms_page_main_heading : old('terms_page_main_heading') }}">
                        <small class="form-text text-muted">Write Terms Page Main Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Terms Page Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="terms_page_title" placeholder="Terms Page Title" class="form-control{{$errors->has('terms_page_title	') ? ' is-invalid' : ''}}" value="{{isset($termspage) ? $termspage->terms_page_title : old('terms_page_title') }}">
                        <small class="form-text text-muted">Write Terms Page Title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Terms Page Heading Description</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="terms_page_heading_description" placeholder="Terms Page Heading Description" class="form-control{{$errors->has('terms_page_heading_description	') ? ' is-invalid' : ''}}" value="{{isset($termspage) ? $termspage->terms_page_heading_description : old('terms_page_heading_description') }}">
                        <small class="form-text text-muted">Write Terms Page Heading Description</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Terms Page Description</label></div>

                    <div class="col-12 col-md-9">

                        <input class="form-control{{$errors->has('terms_page_description') ? ' is-invalid' : ''}}" id="terms_page_description" value="{{isset($termspage) ? $termspage->terms_page_description : old('terms_page_description') }}" type="hidden" name="terms_page_description">
                        <trix-editor input="terms_page_description" placeholder="Write testimonial description"></trix-editor>
                        <small class="form-text text-muted">Write testimonial Description</small>
                    </div>
                </div>



        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($termspage) ? 'Save' : 'Add New'}}
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