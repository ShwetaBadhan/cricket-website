@extends('frontend.layout.master')
@section('title', 'Gallery | Jharkhand Super League')
@section('content')



   <div class="main-content innerpagebg wf100">
      <div class="inner-banner-header wf100">
         <h1 data-generated="Gallery">Gallery</h1>
         <div class="gt-breadcrumbs">
            <ul>
               <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
               <li> <a href="{{ route('gallery') }}" class="active"> Gallery </a> </li>
            </ul>
         </div>
      </div>

   </div>

   @php
      $gallery = \App\Models\Gallery::where('status', 'active')->latest()->get() ?? collect();
   @endphp

   <div class="main-content innerpagebg wf100">
      <!--Image Gallery Start-->
      <div class="image-gallery gallery p80">
         <div class="container">
            <div class="row">

               @forelse($gallery as $item)
                        <div class="col-sm-4">
                           <div class="gal-thumb">

                              {{-- FULL IMAGE (popup) --}}
                              <a href="{{ $item->image
                  ? asset('storage/' . $item->image)
                  : asset('assets/images/gallery/g2col-1.jpg') }}" data-rel="prettyPhoto[gallery1]">

                                 <i class="fas fa-link"></i>
                              </a>

                              {{-- THUMB IMAGE --}}
                              <img src="{{ $item->image
                  ? asset('storage/' . $item->image)
                  : asset('assets/images/gallery/g2col-1.jpg') }}" alt="{{ $item->caption ?? 'gallery' }}">

                           </div>
                        </div>

               @empty

                  {{-- 🔥 FALLBACK (if no data) --}}
                  @for($i = 1; $i <= 6; $i++)
                     <div class="col-sm-4">
                        <div class="gal-thumb">
                           <img src="{{ asset('assets/images/gallery/g2col-' . $i . '.jpg') }}">
                        </div>
                     </div>
                  @endfor

               @endforelse

            </div>
        
         </div>
      </div>
      <!--Image Gallery End-->
   </div>

@endsection