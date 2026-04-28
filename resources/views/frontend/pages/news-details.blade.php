@extends('frontend.layout.master')
@section('title', 'Blog Detail | Jharkhand Super League')
@section('content')
  <!--Main Slider Start-->
  <div class="inner-banner-header wf100">
    <h1 data-generated="Blogs">Blog Details</h1>
    <div class="gt-breadcrumbs">
      <ul>
        <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
        <li> <a href="#"> Our Blogs </a> </li>
        <li> <a href="#" class="active"> Blog Details </a> </li>
      </ul>
    </div>
  </div>
  <!--Main Slider Start-->
  <!--Main Content Start-->
  <div class="main-content innerpagebg wf100 p80">
    <!--News Large Page Start-->
    <!--Start-->
    <div class="news-details">
      <div class="container">
        <div class="row">
          <!--News Start-->
          <div class="col-lg-8">
            <div class="news-details-wrap">
              <div class="news-large-post">
                <div class="post-thumb">
                  <img src="{{ $blog->image
    ? asset('storage/' . $blog->image)
    : asset('assets/images/nlarge2.jpg') }}">
                </div>
                <div class="post-txt">
                  <h3>
                    <h3>{{ $blog->title ?? 'Blog Title' }}</h3>
                  </h3>
                  <ul class="post-meta">
                    <li><i class="fas fa-user"></i> {{ $blog->author ?? 'Admin' }}</li>

                    <li>
                      <i class="fas fa-calendar-alt"></i>
                      {{ $blog->date
    ? \Carbon\Carbon::parse($blog->date)->format('d F, Y')
    : '' }}
                    </li>

                    <li><i class="far fa-comment"></i> {{ random_int(5, 50) }} Comments</li>
                    <li><i class="far fa-heart"></i> {{ random_int(10, 100) }} Likes</li>
                  </ul>
                  <p> {!! $blog->description !!}</p>
                  <div class="post-author-box">
                    <img src="{{ $blog->author_image
    ? asset('storage/' . $blog->author_image)
    : asset('assets/images/postauthor.jpg') }}">

                    <h4>About Author</h4>

                    <p>
                      Written by {{ $blog->author ?? 'Admin' }}
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!--News End-->
          <!--Sidebar Start-->
          @include('frontend.components.news.sidebar')
          <!--Sidebar End-->
        </div>
      </div>
    </div>
    <!--End-->
  </div>
  <!--Main Content End-->

@endsection