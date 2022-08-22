@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Post</strong> Elements
        </div>
        <div class="card-body card-block">

            <form action="{{isset($post) ? route('posts.update', $post->id) : route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($post))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">posts Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Post Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Post Title" class="form-control{{$errors->has('title') ? ' is-invalid' : ''}}" value="{{isset($post) ? $post->title : old('title') }}">
                        <small class="form-text text-muted">Write posts Name</small></div>
                </div>

                @if($tags->count() > 0)
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tags</label></div>
                    <div class="col-12 col-md-9">
                        <select name="tags[]" id="tags" class="form-control tags-selector" multiple>
                            @foreach($tags as $tag)
                            <option value="{{$tag->id}}" @if(isset($post)) @if($post->hasTag($tag->id))
                                selected
                                @endif
                                @endif
                                >{{$tag->name}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
                @endif

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Posts Description</label></div>

                    <div class="col-12 col-md-9">

                        <input class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" id="description" value="{{isset($post) ? $post->description : old('description') }}" type="hidden" name="description">
                        <trix-editor input="description"></trix-editor>
                        <small class="form-text text-muted">Write Post Description</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Posts Category</label></div>

                    <div class="col-12 col-md-9">
                        <select name="category" id="category" class="form-control ">
                            <option value="">Select</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @if(isset($post)) @if($category->id == $post->category_id)
                                selected
                                @endif
                                @endif
                                >{{$category->name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Post Image</label> </div>

                    <div class="col col-md-3">
                        <img style="height: 50px; width: 50px;" src="{{isset($post->photo) ? (asset('storage/posts/'. $post->photo->file)) : 'http://placehold.it/50x50'}}"></div>

                    <div class="col-6 col-md-6">
                        <input type="file" id="file-input" name="image" class="form-control-file">
                    </div>
                </div>
        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($posts) ? 'Update posts' : 'Add New'}}
            </button>
        </div>

        </form>
    </div>

</div>

</div>



@endsection


@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>


<script type="text/javascript">
    var $ = jQuery.noConflict();
    $(document).ready(function() {
        $('.tags-selector').select2();
    });
</script>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection