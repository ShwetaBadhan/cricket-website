@extends('frontend.layout.master')
@section('title','Contact Us | Jharkhand Super League')
@section('content')
 <!--Main Slider Start-->
         <div class="inner-banner-header wf100">
            <h1 data-generated="Contact">Contact us</h1>
            <div class="gt-breadcrumbs">
               <ul>
                  <li> <a href="#" > <i class="fas fa-home"></i> Home </a> </li>
                  <li> <a href="#" class="active"> Contact Us </a> </li>
               </ul>
            </div>
         </div>
         <!--Main Slider Start--> 
         <!--Main Content Start-->
         <div class="main-content p80 innerpagebg wf100">
            <!--Contact Page Start-->
            <div class="contact">
               <div class="container">
                 @include('frontend.components.contact-us.cards')
                 
                 @include('frontend.components.contact-us.main-form')
                
               </div>
            </div>
            <!--Contact Page End--> 
         </div>
         <!--Main Content End--> 

@endsection