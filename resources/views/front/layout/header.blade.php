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