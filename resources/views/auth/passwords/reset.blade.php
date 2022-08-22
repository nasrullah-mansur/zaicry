<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{!!$seo->site_meta_description!!} " />
    <meta name="keywords" content="{{$seo->site_meta_tags}}" />
    <meta name="author" content="zainiklab" />
    <!-- Main Page Title -->
    <title>{{$basicsetting->title}}</title>
    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/site/' . $basicsetting->photo->file)}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap 4.3.1 css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <!-- Font awesome 5 css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome.css')}}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
    <!-- venobox.min css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/venobox.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.css')}}">
    <!-- Theme main css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}" />
    <!-- modernizr js-->
    <script src="{{asset('front/assets/js/vendor/modernizr-3.8.0.min.js')}}"></script>

</head>

<body>


    <div class="signin-form-area">
        <div class="left-shape">
            <img src="{{asset('images/icons/signin.svg')}}" alt="signin">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="form-wrap">
                        <div class="signin-top ">
                            <h2 class="signin-title">Forget Password</h2>
                            <p>Enter your Email to reset your password</p>
                        </div>

                        <form action="{{ route('password.update') }}" method="POST">
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scrollUp"><i class="fas fa-angle-up"></i></a>
    <!-- jquery js -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- popper js -->
    <script src="{{asset('front/assets/js/popper.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
    <!-- plugins js -->
    <script src="{{asset('front/assets/js/plugins.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('front/assets/js/wow.js')}}"></script>
    <!-- venobox.min js -->
    <script src="{{asset('front/assets/js/venobox.min.js')}}"></script>
    <!-- owl.carousel.min js -->
    <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
    <!-- mixitup.min js -->
    <script src="{{asset('front/assets/js/mixitup.min.js')}}"></script>
    <!-- jquery.syotimer.min js -->
    <script src="{{asset('front/assets/js/jquery.syotimer.min.js')}}"></script>
    <!-- waypoints.min js -->
    <script src="{{asset('front/assets/js/waypoints.min.js')}}"></script>
    <!-- jquery.counterup.min js -->
    <script src="{{asset('front/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- jquery.nice-select.min js -->
    <script src="{{asset('front/assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('front/assets/js/main.js')}}"></script>
</body>

</html>