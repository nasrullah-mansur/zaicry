<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7"></div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h6><b>Welcome</b> {{Auth::user()->name}}</h6>
                </a>

                <div class="dropdown-menu">
                    <div class="dropdown-item">
                        <a href="{{route('customlogout')}}">Logout</a>
                    </div>
                </div>

            </div>


        </div>
    </div>

</header><!-- /header -->
<!-- Header-->