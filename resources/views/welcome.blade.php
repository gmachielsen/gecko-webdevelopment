@extends('layouts.app')
@push('styles')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

@endpush
@push('scripts')
    <script src="{{ asset('js/portfolio.js') }}"></script>

    <!-- <script src="{{ asset('js/navbar.js') }}"></script> -->


@endpush
@section('content')


  <section class="dnav">
      <div class="dnav_point">
      </div>
      <div class="dnav_point">
      </div>
      <div class="dnav_point">
      </div>
      <div class="dnav_point">
      </div>
    </section>
    <!-- <a class="logo" href="#" onclick="return false">OnScroll Page Slider v1</a> -->
    <!-- <ul class="download">
      <li><a href="https://github.com/nikita-zirko/Onscroll-Page-Slider.git">GitHub</a></li>
      <li><a href="https://codepen.io/nikita-zirko/pen/qxGRjd">CodePen</a></li>
    </ul> -->
    <section class="social">
      <!-- <a href="#" onclick="return false"><i class="fab fa-twitter fa-sm"></i></a> -->
      <a href="https://www.facebook.com/GeckoWebdevelopment-101967601883717" target="blank"><i class="fab fa-facebook-f fa-sm"></i></a>
      <a href="#" onclick="return false"><i class="fab fa-instagram fa-sm"></i></a>
      <a href="#" onclick="return false"><i class="fab fa-pinterest fa-sm"></i></a>

      <!-- <a href="mailto: nik.message@gmail.com"> feedback&nbsp; <i class="fas fa-envelope-open fa-sm"></i></a> -->
    </section>
    <section class="page first_page">
      <div class="text" style="width: 68%;">
        <h1 class="caption">Welkom bij<br/>Gecko Webdevelopment</h1>
      </div>
      <div class="paragraph" style="display: block;">
      </div>
      <div class="tokeh">
        <img src="cover/tokeh.png" alt="">
      </div>
    </section>
    <section class="page second_page">
    <div class="text" style="width: 68%;">
      <h1 class="caption" style="position: relative; z-index: 32; margin-bottom: 50px;">En wij bouwen websites met passie <br/></h1>
    </div>
    <div class="grandis">
        <img src="cover/grandis.png" alt="">
      </div>

    </section>
    <section class="page third_page">
    <div class="text" style="width: 68%;">
      <h1 class="caption" style="position: relative; z-index: 32; margin-bottom: 50px;">Benieuwd wat wij kunnen betekenen? <br/><a href="">Ja!? >> Klik! <<</a></h1>
    </div>
    </section>
    <section class="page fourth_page">
    <div class="text" style="width: 68%;">
      <h1 class="caption" style="position: relative; z-index: 32; margin-bottom: 50px;">Contacteer ons <br/></h1>
    </div>
    <div class="pardalis">
        <img src="cover/pardalis.png" alt="">
      </div>    
    </section>
          <!-- &amp; -->

@endsection
