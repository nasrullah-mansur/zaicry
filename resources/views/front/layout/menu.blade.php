<!-- header area start here -->
<header class="header-area transparent-header {{$homepageversion->version == 2 || $homepageversion->version == 3 || Request::is('jobs') || Request::is('about') 
    || Request::is('portfolio') || Request::is('contact') || Request::is('page/*') || Request::is('services') || Request::is('services/*') || Request::is('posts/*')|| Request::is('team') || Request::is('blog') || Request::is('apply/*') || Request::is('termspage') || Request::is('faq')
    
    ? 'header-two' : ''}}  sticky-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand" href="{{route('home')}}">
                <img class="main-logo" src="{{asset('storage/site/' . $site->photo->file)}}" alt="logo">
                <img class="sticky-logo" src="{{asset('storage/site/' . $site->photo->file)}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @if($public_menu)
                    <li class="nav-item dropdown">
                        @foreach($public_menu as $menu)
                    <li class="nav-item dropdown ">
                        <a class="nav-link {{$menu['child'] ? 'dropdown-toggle' : ''}}" href="{{$menu['child'] ? 'javascript:void(0)' : $menu['link'] }}">
                            {{ $menu['label'] }}
                        </a>
                        <ul class="dropdown-menu">
                            @if($menu['child'])
                            @foreach( $menu['child'] as $child )
                            <li><a class=" dropdown-item {{$child['child'] ? 'dropdown-toggle' : ''}}" href="{{ $child['link'] }}">{{ $child['label'] }}</a>
                                <ul class="custom-submenu">
                                    @if($child['child'])
                                    @foreach($child['child'] as $child)
                                    <li><a href="{{$child['link']}}">{{ $child['label'] }}</a></li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </li>
                    @endforeach

                </ul>
                </li>
                @endif


                </ul>
                <div class="header-right d-inline">
                    <ul class="d-flex align-items-center">
                        <li><a href="javascript:void(0)"><i class="fa fa-phone-alt"></i>{{$site->phone}}</a></li>
                        @guest
                        <li><a class="header-btn" href="{{route('register')}}">Sign Up</a></li>
                        @endguest
                        @auth
                        <li><a class="header-btn" href="{{route('logout')}}">Logout</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</header>
<!-- header area end here -->