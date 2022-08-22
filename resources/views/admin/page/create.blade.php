@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Slider</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($page) ? route('pages.update', $page->id) : route('pages.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($page))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Page Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Page</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Page Name</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Write page name" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{isset($page) ? $page->name : old('name') }}">
                        <small class="form-text text-muted">Write Page Name</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Page Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Write page title" class="form-control{{$errors->has('title') ? ' is-invalid' : ''}}" value="{{isset($page) ? $page->title : old('title') }}">
                        <small class="form-text text-muted">Write Page Name</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Page Description</label></div>

                    <div class="col-12 col-md-9">

                        <input class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" id="description" value="{{isset($page) ? $page->description : old('description') }}" type="hidden" name="description">
                        <trix-editor input="description"></trix-editor>
                        <small class="form-text text-muted">Write Page Description</small>
                    </div>
                </div>


        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($page) ? 'Update Page' : 'Add New Page'}}
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