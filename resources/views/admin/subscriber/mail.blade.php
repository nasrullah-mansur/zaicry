@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>subscribers</strong> Elements
        </div>
        @if(Session::has('mail_sent'))
        <h2>{{Session::get('mail_sent')}}</h2>
        @endif
        <div class="card-body card-block">
            <form action="{{route('subscribers.mailsent')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">subscribers Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Subscriber subject</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="subject" placeholder="Subscriber Subject" class="form-control{{$errors->has('subject') ? ' is-invalid' : ''}}" value="{{old('subject') }}">
                        <small class="form-text text-muted">Write subscribers Email</small></div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Subscriber Message</label></div>

                    <div class="col-12 col-md-9">

                        <input class="form-control{{$errors->has('subscriber_message') ? ' is-invalid' : ''}}" id="subscriber_message" value="{{old('subscriber_message') }}" type="hidden" name="subscriber_message">
                        <trix-editor input="subscriber_message"></trix-editor>
                        <small class="form-text text-muted">Write Subscriber Message</small>
                    </div>
                </div>

                <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Add New
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