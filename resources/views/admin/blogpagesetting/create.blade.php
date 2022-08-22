@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($blogpagesettings) ? route('blogpagesetting.update', $blogpagesettings->id) : route('blogpagesetting.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($blogpagesettings))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Blog Page Setting Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Read More Text</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="read_more_text" placeholder="Blog Read More Text" class="form-control{{$errors->has('read_more_text') ? ' is-invalid' : ''}}" value="{{isset($blogpagesettings) ? $blogpagesettings->read_more_text : old('read_more_text') }}">
                        <small class="form-text text-muted">Write Blog Read More Text</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Post Item</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="post_item" placeholder="Select Post Item" class="form-control{{$errors->has('post_item') ? ' is-invalid' : ''}}" value="{{isset($blogpagesettings) ? $blogpagesettings->post_item : old('post_item') }}">
                        <small class="form-text text-muted">Write Post Item</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Recent Post Widget Item</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="recent_post_widget_item" placeholder="Recent Post Widget Item" class="form-control{{$errors->has('recent_post_widget_item') ? ' is-invalid' : ''}}" value="{{isset($blogpagesettings) ? $blogpagesettings->recent_post_widget_item : old('recent_post_widget_item') }}">
                        <small class="form-text text-muted">Select Recent Post Widget Item</small></div>
                </div>

                <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> {{isset($blogpagesettings) ? 'Save' : 'Add New'}}
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
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection