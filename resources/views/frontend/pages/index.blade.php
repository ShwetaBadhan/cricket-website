@extends('frontend.layout.master')
@section('title', 'Welcome to Jharkhand Super League')
@section('content')
  {{-- top --}}
  @include('frontend.components.common.top-header')
  <!--Main Content Start-->
  <div class="main-content wf100">
    {{-- hero slider --}}
    @include('frontend.components.home.breadcrumb')
    {{-- slider tabs --}}
    @include('frontend.components.home.tabs')

    {{-- about section --}}
    @include('frontend.components.home.about-section')
    {{-- features --}}
    @include('frontend.components.home.features')

    {{-- banner --}}
    {{-- <div class="banner-wrap text-center wf100 mb-80"> <img src="{{url('assets/images/placeyourbanner.png')}}" alt="">
      --}}
      {{-- widgets --}}
      @include('frontend.components.home.widgets')
      {{-- work flow --}}
      @include('frontend.components.home.work-flow')

      <!--Banner Size 920 x 100 End-->
      {{-- news --}}
      @include('frontend.components.home.news')

      {{-- team --}}
      @include('frontend.components.home.team')



      {{-- gallery --}}
      @include('frontend.components.home.gallery')



      {{-- sponsors --}}
      @include('frontend.components.home.sponsors')

      {{-- tweets --}}
      @include('frontend.components.home.tweets')
    </div>
    <!--Main Content End-->

@endsection
  @push('scripts')
    <script>
      var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?86687';
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = url;
      var options = {
        "enabled": true,
        "chatButtonSetting": {
          "backgroundColor": "#2ACA45;",
          "ctaText": "",
          "borderRadius": "25",
          "marginLeft": "20",
          "marginBottom": "30",
          "marginRight": "50",
          "position": "left"
        },
        "brandSetting": {
          "brandName": "Jharkhand Super League",
          "brandSubTitle": "Typically replies within a day",
          "brandImg": "../assets/images/logo/fav.png",
          "welcomeText": "Hi there!\nHow can I help you?",
          "messageText": "Hello, I have a question about ",
          "backgroundColor": "#2ACA45;",
          "ctaText": "Start Chat",
          "borderRadius": "25",
          "autoShow": false,
          "phoneNumber": "+919263747143"
        }
      };
      s.onload = function () {
        CreateWhatsappChatWidget(options);
      };
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    </script>
  
  @endpush