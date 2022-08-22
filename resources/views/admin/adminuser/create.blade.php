@extends('admin.layout.master')
@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Users</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{isset($users) ? route('adminuser.update', $users->id) : route('adminuser.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($users))
                @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">users Section</p>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Name</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="User name" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{isset($users) ? $users->name : old('name') }}">
                        <small class="form-text text-muted">Write users Name</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="text-input" name="email" placeholder="Write User Email" class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}" value="{{isset($users) ? $users->email : old('email') }}">
                        <small class="form-text text-muted">Write users Name</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="text-input" name="password" placeholder="Write User Password" class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}" value="{{old('password') }}">
                        <small class="form-text text-muted">Write users Name</small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Confirm Password</label></div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="text-input" name="password_confirmation" placeholder="Retype Password" class="form-control{{$errors->has('password_confirmation') ? ' is-invalid' : ''}}" value="{{old('password_confirmation') }}">
                        <small class="form-text text-muted">Write confirm password</small></div>
                </div>



        </div>


        <div class=" col-md-6 offset-md-3" style="padding-left: 7px;">
            <button type="submit" class="btn btn-primary btn-sm" style="margin-bottom: 30px;">
                <i class="fa fa-dot-circle-o"></i> {{isset($users) ? 'Update users' : 'Add New Admin'}}
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