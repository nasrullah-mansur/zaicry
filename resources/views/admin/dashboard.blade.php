@extends('admin.layout.master')
@section('content')


<style>
    #homepage {
        width: 200px;
        height: 60px;
        padding: 10px 20px;
        font-size: 16px;
        color: #222;
    }

    button.homeversionbtn {
        margin-top: 20px;
        width: 120px;
        height: 60px;
        font-size: 16px;
        font-weight: 600;
        text-transform: capitalize;
        padding: 0;
    }
</style>


<div class="content mt-3">


    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$posts->count()}}</span>
                </h4>
                <p class="text-light">Blogs</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart1"></canvas>
                </div>

            </div>

        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">

                <h4 class="mb-0">
                    <span class="count">{{$adminUsers->count()}}</span>
                </h4>
                <p class="text-light">Total Admin</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$jobs->count()}}</span>
                </h4>
                <p class="text-light">Total Jobs</p>

            </div>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart3"></canvas>
            </div>
        </div>
    </div>

    <form action="{{route('selecthomepage')}}" method="POST">
        @csrf
        <select id="homepage" name="homepage" id="">
            <option value="1" {{$showhomepage->version ==1 ? 'selected' : ''}}>Version 1</option>
            <option value="2" {{$showhomepage->version ==2 ? 'selected' : ''}}>Version 2</option>
            <option value="3" {{$showhomepage->version ==3 ? 'selected' : ''}}>Version 3</option>
            <option value="4" {{$showhomepage->version ==4 ? 'selected' : ''}}>Version 4</option>
        </select>
        <br>
        <button class="homeversionbtn" type="submit">Save</button>
    </form>
</div>
@endsection