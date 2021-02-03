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
      <a href="https://www.linkedin.com/company/71218508/" onclick="return true"><i class="fab fa-linkedin fa-sm"></i></a>
      <!-- <a href="#" onclick="return true"><i class="fab fa-whatsapp fa-lg"></i>wa</a> -->


      <!-- <a href="mailto: nik.message@gmail.com"> feedback&nbsp; <i class="fas fa-envelope-open fa-sm"></i></a> -->
    </section>
    <section class="contact">
      <a href="#" onclick="return true"><i class="fab fa-whatsapp fa-2x"></i></a>
      <a href="#" onclick="return true"><i class="fas fa-phone fa-2x"></i></a>
      <a href="#" onclick="return true"><i class="fas fa-envelope-square fa-2x"></i></a>

    </section>
    <section class="page first_page">
 
          <h1 class="caption">GeckoWebdevelopment<br/>agency voor Webontwikkeling</h1>

      <div class="paragraph" style="display: block;">
      </div>
      <div class="tokeh">
        <img src="cover/tokeh.png" alt="">
      </div>
    </section>
    <section class="page second_page">

    
      <a style="margin-top: 94px;" class="logo" href="{{ route('our.work')}}" onclick="return false"><h8 style="color: black;">Wat we doen?</h8></a>

      <h1 class="caption">Online Marketing, <br/> Websites <br/> &amp; Onderhoud</h1>



    </section>
    <section class="page third_page">
    <h8 style="margin-bottom: 10px; "><a style="margin-top: 94px;" class="logo" href="{{ route('our.work')}}" onclick="return true"> Prijzen en pakketten</a></h8>
    <div class="desktop">
        <div class="mac">
          <img class="" src="cover/mac.png">
        </div>
        <div class="button">
          <a type="button" href="{{ route('prijzen')}}">Meer informatie</a>
        </div>
    </div>



    </section>
    <section class="page fourth_page">
    <h8 class="shorttext" style="color: black; font-weight: bold;"><a style="margin-top: 94px; color: black;" class="logo" href="{{ route('contact')}}" onclick="return false">Ons benaderen?</a></h8>

    <!-- <div class="text" style="width: 68%;"> -->
      <h1 class="caption" style="position: relative; z-index: 32; margin-bottom: 50px;"><a class="caption" href="{{ route('contact')}}">Contacteer ons! <br/>Vinden we leuk!</a></h1>
    <!-- </div> -->
      <div class="pardalis">
        <img src="cover/pardalis.png"  alt="">
      </div>    
    </section>
          <!-- &amp; -->

@endsection



  