@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Slider</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($subscribers) ? route('subscribers.update', $subscribers->id) : route('subscribers.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($subscribers))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">subscribers Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Subscriber Email</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="email" placeholder="Subscriber Email" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{isset($subscribers) ? $subscribers->email : old('email') }}">
                        <small class="form-text text-muted">Write subscribers Email</small></div>
                </div>
        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> {{isset($subscribers) ? 'Update subscribers' : 'Add New'}}
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