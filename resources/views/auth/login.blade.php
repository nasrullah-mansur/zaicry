<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta name="author" content="zainiklab" />
    <!-- Main Page Title -->
    <title>{{$site->title}}</title>
    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
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


    <div class="signin-form-area">
        <div class="left-shape">
            <img src="{{asset('images/icons/signin.svg')}}" alt="signin">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="form-wrap my-5">
                        <div class="signin-top d-flex justify-content-between align-items-center">
                            <h2 class="signin-title">Welcome Back</h2>
                            <a href="{{ route('register') }}" class="sign-btn">Sign Up </a>
                        </div>
                        <div class="signin-form">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" name="email" placeholder="Enter Email" />
                                    <i class="icon fas fa-envelope"></i>


                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password" />
                                    <i class="icon fas fa-lock"></i>
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input " name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <div class="forgot-password">
                                        <a href="{{ route('password.request') }}">Forgot Password? </a>
                                    </div>
                                    @endif
                                </div>
                                <button type="submit" class="submit-btn">Sign In</button>
                            </form>
                        </div>
                        <div class="signin-bottom text-center">
                            <h3 class="sign-with-title">or sign in with</h3>
                            <a class="sign-button google" href="{{url('login/google')}}">
                                <i class="fab fa-google"></i>Sign In with Google
                            </a>
                            <a class="sign-button facebook" href="{{url('login/facebook')}}">
                                <i class="fab fa-facebook"></i>Sign In with Facebook
                            </a>
                            <p class="have-account">Don’t have account? <a href="{{ route('register') }}">Sign Up now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scrollUp"><i class="fas fa-angle-up"></i></a>
    <!-- jquery js -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- popper js -->
    <script src="assets/js/popper.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.js"></script>
    <!-- venobox.min js -->
    <script src="assets/js/venobox.min.js"></script>
    <!-- owl.carousel.min js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- mixitup.min js -->
    <script src="assets/js/mixitup.min.js"></script>
    <!-- jquery.syotimer.min js -->
    <script src="assets/js/jquery.syotimer.min.js"></script>
    <!-- waypoints.min js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- jquery.counterup.min js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- jquery.nice-select.min js -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>