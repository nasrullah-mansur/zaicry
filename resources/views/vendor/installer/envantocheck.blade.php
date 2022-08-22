@extends('vendor.installer.layouts.master')

@section('template_title')
Envanto Purchase Code
@endsection

@section('title')
Verify Envanto Purchase Code
@endsection

@section('container')

<p class="text-center">
    <form action="{{route('LaravelInstaller::verifyenvantocoupon')}}" method="POST">
        @csrf
        <input type="text" name="envanto_code" placeholder="envanto code">
        <button type="submit">verify code</button>
    </form>

    @if(Session::has('error'))
    <p>{{Session('error')}}</p>
    @endif

</p>
@endsection