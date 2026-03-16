@extends('frontend.layout.master')
@section('title', 'Shop | Jharkhand Super League')
@section('content')

    <div class="inner-banner-header wf100">
        <h1 data-generated="Shop">Shop</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Shop </a> </li>
            </ul>
        </div>
    </div>
    {{-- main content --}}

    <div class="main-content innerpagebg wf100">
        <!--Product Page Start-->
        <div class="shop wf100 p80">
            <!--Products Slider Start-->
            <div class="product-slider">
                <div class="container">
                    <div id="pro-slider" class="owl-carousel owl-theme">
                        <!--item start-->
                        <div class="item">
                            <div class="pro-box">
                                <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('assets/images/proslide1.jpg') }}" alt=""> </div>
                                <div class="pro-txt">
                                    <h4> <a href="#">Sports Team T-Shirt</a> </h4>
                                    <p class="price"> <del>£20.00</del> <strong>£17.50</strong> </p>
                                    <a href="#" class="add2cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!--item end-->
                        <!--item start-->
                        <div class="item">
                            <div class="pro-box">
                                <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('assets/images/proslide2.jpg') }}" alt=""> </div>
                                <div class="pro-txt">
                                    <h4> <a href="#">Soccer Gloves</a> </h4>
                                    <p class="price"> <del>£20.00</del> <strong>£17.50</strong> </p>
                                    <a href="#" class="add2cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!--item end-->
                        <!--item start-->
                        <div class="item">
                            <div class="pro-box">
                                <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('assets/images/proslide3.jpg') }}" alt=""> </div>
                                <div class="pro-txt">
                                    <h4> <a href="#">Practice T-Shirt</a> </h4>
                                    <p class="price"> <del>£20.00</del> <strong>£17.50</strong> </p>
                                    <a href="#" class="add2cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!--item end-->
                        <!--item start-->
                        <div class="item">
                            <div class="pro-box">
                                <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('assets/images/proslide4.jpg') }}" alt=""> </div>
                                <div class="pro-txt">
                                    <h4> <a href="#">Sports Team T-Shirt</a> </h4>
                                    <p class="price"> <del>£20.00</del> <strong>£17.50</strong> </p>
                                    <a href="#" class="add2cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!--item end-->
                    </div>
                </div>
            </div>
            <!--Products slider End-->
            <section class="wf100 p80 shop-banners">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 col-md-6"><img src="{{ asset('assets/images/adbanner3.png') }}" alt=""></div>
                        <div class="col-lg-5 col-md-6"><img src="{{ asset('assets/images/adbanner4.png') }}" alt=""></div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </section>
            <section class="wf100 shop-products">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>People Also Viewed</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--Product Start-->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="pro-box">
                                <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('assets/images/pro1.jpg') }}" alt=""> </div>
                                <div class="pro-txt">
                                    <h4> <a href="#">Sports Team T-Shirt</a> </h4>
                                    <p class="price"> <del>£20.00</del> <strong>£17.50</strong> </p>
                                    <a href="#" class="add2cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="pro-box">
                                <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('assets/images/pro2.jpg') }}" alt=""> </div>
                                <div class="pro-txt">
                                    <h4> <a href="#">Soccer Gloves</a> </h4>
                                    <p class="price"> <del>£20.00</del> <strong>£17.50</strong> </p>
                                    <a href="#" class="add2cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="pro-box">
                                <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('assets/images/pro3.jpg') }}" alt=""> </div>
                                <div class="pro-txt">
                                    <h4> <a href="#">Practice T-Shirt</a> </h4>
                                    <p class="price"> <del>£20.00</del> <strong>£17.50</strong> </p>
                                    <a href="#" class="add2cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="pro-box">
                                <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('assets/images/pro4.jpg') }}" alt=""> </div>
                                <div class="pro-txt">
                                    <h4> <a href="#">Sports Shoes</a> </h4>
                                    <p class="price"> <del>£20.00</del> <strong>£17.50</strong> </p>
                                    <a href="#" class="add2cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                    </div>
                </div>
            </section>
        </div>
        <!--Product Page End-->
    </div>

@endsection