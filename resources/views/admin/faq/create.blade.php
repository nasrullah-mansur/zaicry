@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($faq) ? route('faq.update', $faq->id) : route('faq.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($faq))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Terms page Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Faq Page Main Heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="main_heading" placeholder="Faq Page Main Heading" class="form-control{{$errors->has('main_heading') ? ' is-invalid' : ''}}" value="{{isset($faq) ? $faq->main_heading : old('main_heading') }}">
                        <small class="form-text text-muted">Write Faq Page Main Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Faq Page Heading</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="heading" placeholder="Faq Page Heading" class="form-control{{$errors->has('heading') ? ' is-invalid' : ''}}" value="{{isset($faq) ? $faq->heading : old('heading') }}">
                        <small class="form-text text-muted">Write Faq Page Heading</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Faq Page Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Faq Page Title" class="form-control{{$errors->has('faq') ? ' is-invalid' : ''}}" value="{{isset($faq) ? $faq->title : old('title') }}">
                        <small class="form-text text-muted">Write Faq Page Title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Faq Page Description</label></div>

                    <div class="col-12 col-md-9">

                        <input class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" id="description" value="{{isset($faq) ? $faq->description : old('description') }}" type="hidden" name="description">
                        <trix-editor input="description" placeholder="Write Faq Page Description"></trix-editor>
                        <small class="form-text text-muted">Write Faq Page Description</small>
                    </div>
                </div>



        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($faq) ? 'Save' : 'Add New'}}
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