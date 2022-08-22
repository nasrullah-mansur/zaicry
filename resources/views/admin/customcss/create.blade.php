@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($customcss) ? route('css.update', $customcss->id) : route('css.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($customcss))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Custom Css</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Custom Css</label></div>
                    <div class="col-12 col-md-9">
                        <textarea name="css" id="css" cols="30" rows="10">{{isset($customcss) ? $customcss->css : old('css')}}</textarea>
                        <small class="form-text text-muted">Write Custom Css</small></div>
                </div>

        </div>

    </div>

    <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> {{isset($basicsetting) ? 'Save' : 'Add New'}}
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