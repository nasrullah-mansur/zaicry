@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Blog Single Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($blogsinglesettings) ? route('singlepagesettings.update', $blogsinglesettings->id) : route('singlepagesettings.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($blogsinglesettings))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">categories Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="blog_title" placeholder="Blog Title" class="form-control{{$errors->has('blog_title') ? ' is-invalid' : ''}}" value="{{isset($blogsinglesettings) ? $blogsinglesettings->blog_title : old('blog_title') }}">
                        <small class="form-text text-muted">Write categories Name</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Recent Blog Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="recent_blog_title" placeholder="Recent Blog Title" class="form-control{{$errors->has('recent_blog_title') ? ' is-invalid' : ''}}" value="{{isset($blogsinglesettings) ? $blogsinglesettings->recent_blog_title : old('recent_blog_title') }}">
                        <small class="form-text text-muted">Write Recent Blog Title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Recent Blog Description</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="recent_blog_description" placeholder="Recent Blog Title" class="form-control{{$errors->has('recent_blog_description') ? ' is-invalid' : ''}}" value="{{isset($blogsinglesettings) ? $blogsinglesettings->recent_blog_description : old('recent_blog_description') }}">
                        <small class="form-text text-muted">Write Recent Blog Description</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Categories Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="categories_title" placeholder="Recent Blog Title" class="form-control{{$errors->has('categories_title') ? ' is-invalid' : ''}}" value="{{isset($blogsinglesettings) ? $blogsinglesettings->categories_title : old('categories_title') }}">
                        <small class="form-text text-muted">Write Categories Title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Recent Blogs Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="recent_blogs_title" placeholder="Recent Blog Title" class="form-control{{$errors->has('recent_blogs_title') ? ' is-invalid' : ''}}" value="{{isset($blogsinglesettings) ? $blogsinglesettings->recent_blogs_title : old('recent_blogs_title') }}">
                        <small class="form-text text-muted">Write Recent Blogs Title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Recent Post Item</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="recent_post_item" placeholder="Recent Post Item" class="form-control{{$errors->has('recent_post_item') ? ' is-invalid' : ''}}" value="{{isset($blogsinglesettings) ? $blogsinglesettings->recent_post_item : old('recent_post_item') }}">
                        <small class="form-text text-muted">Write Recent Post Item</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Popular Tags Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="popular_tags_title" placeholder="Popular Tags Title" class="form-control{{$errors->has('popular_tags_title') ? ' is-invalid' : ''}}" value="{{isset($blogsinglesettings) ? $blogsinglesettings->popular_tags_title : old('popular_tags_title') }}">
                        <small class="form-text text-muted">Write Popular Tags Title</small></div>
                </div>



        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($blogsinglesettings) ? 'Save' : 'Add New'}}
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