<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="{{asset ('assets/images/logo/fav.png')}}" type="image/png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{url ('assets/css/custom.css')}}">
<link rel="stylesheet" href="{{url ('assets/css/responsive.css')}}">
<link rel="stylesheet" href="{{url ('assets/css/color.css')}}">
<link rel="stylesheet" href="{{url ('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url ('assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{url ('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{url ('assets/css/prettyPhoto.css')}}">
<!--Rev Slider Start-->
<link rel="stylesheet" href="{{url ('assets/js/rev-slider/css/settings.css')}}"  type='text/css' media='all' />
<link rel="stylesheet" href="{{url ('assets/js/rev-slider/css/layers.css')}}"  type='text/css' media='all' />
<link rel="stylesheet" href="{{url ('assets/js/rev-slider/css/navigation.css')}}"  type='text/css' media='all' />

<!--Rev Slider End-->
<title>@yield('title')</title>
</head>
<body>
<!--Wrapper Start-->
<div class="wrapper"> 
 

{{-- header --}}
@include('frontend.components.common.navbar')

{{-- content --}}
@yield('content')


{{-- footer --}}
@include('frontend.components.common.footer')











</div>
<!--Wrapper End--> 



<!-- Optional JavaScript --> 
<script src="{{url ('assets/js/jquery-3.3.1.min.js')}}"></script> 
<script src="{{url ('assets/js/jquery-migrate-3.0.1.js')}}"></script> 
<script src="{{url ('assets/js/popper.min.js')}}"></script> 
<script src="{{url ('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{url ('assets/js/mobile-nav.js')}}"></script> 
<script src="{{url ('assets/js/owl.carousel.min.js')}}"></script> 
<script src="{{url ('assets/js/isotope.js')}}"></script> 
<script src="{{url ('assets/js/jquery.prettyPhoto.js')}}"></script> 
<script src="{{url ('assets/js/jquery.countdown.js')}}"></script> 
<script src="{{url ('assets/js/custom.js')}}"></script> 
<!--Rev Slider Start--> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/extensions/revolution.extension.actions.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/extensions/revolution.extension.migration.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script> 
<script type="text/javascript" src="{{url ('assets/js/rev-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
@stack('scripts')
</body>
</html>