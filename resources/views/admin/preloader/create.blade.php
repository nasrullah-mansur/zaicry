@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Page Setting</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($preloaders) ? route('preloader.update', $preloaders->id) : route('preloader.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($preloaders))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Preloader Setting Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Preloader Text</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text" placeholder="Write Preloader Text" class="form-control{{$errors->has('text') ? ' is-invalid' : ''}}" value="{{isset($preloaders) ? $preloaders->text : old('text') }}">
                        <small class="form-text text-muted">Write Preloader Text</small></div>
                </div>

                <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> {{isset($preloaders) ? 'Save' : 'Add Text'}}
                    </button>
                </div>
        </div>

        </form>
        <div class="card-body card-block">
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Preloader show/hide</label></div>
                <div class="col-12 col-md-9">

                    <form action="{{isset($preloaders) ? route('preloadericon.update', $preloaders->id) : route('preloadericon.store')}}" method="POST">
                        @csrf
                        @if(isset($preloaders))
                        @method('PUT')
                        @endif
                        @if($preloaders->on_off == 0)
                        <button class="btn btn-danger" type="submit">Show</button>
                        @else
                        <button class="btn btn-danger" type="submit">Hide</button>
                        @endif
                    </form>
                    <small class="form-text text-muted">Write Site Title</small>
                </div>
            </div>
        </div>

    </div>



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