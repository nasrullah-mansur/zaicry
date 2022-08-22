@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Portfolio</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($portfolios) ? route('portfolio.update', $portfolios->id) : route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($portfolios))
                @method('PUT')
                @endif

                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Portfolio Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Portfolio Title</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Portfolio Title" class="form-control{{$errors->has('title') ? ' is-invalid' : ''}}" value="{{isset($portfolios) ? $portfolios->title : old('title') }}">
                        <small class="form-text text-muted">Write portfolio Title</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Portfolio Description</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="description" placeholder="Portfolio Description" class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" value="{{isset($portfolios) ? $portfolios->description : old('description') }}">
                        <small class="form-text text-muted">Write portfolio Description</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Portfolio Category</label></div>

                    <div class="col-12 col-md-9">
                        <select name="portfolio_category_id" id="portfolio_category_id" class="form-control ">
                            <option value="">Select</option>
                            @foreach($portfolio_categories as $category)
                            <option value="{{$category->id}}" @if(isset($portfolios)) @if($category->id == $portfolios->portfolio_category_id)
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
                        <img style="height: 50px; width: 50px;" src="{{isset($portfolios->photo) ? (asset('storage/portfolio/'. $portfolios->photo->file)) : 'http://placehold.it/50x50'}}"></div>

                    <div class="col-6 col-md-6">
                        <input type="file" id="file-input" name="image" class="form-control-file">
                    </div>
                </div>

        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($portfolios) ? 'Update Portfolio' : 'Add New'}}
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