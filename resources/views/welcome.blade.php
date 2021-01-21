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
      <!-- <div class="text" style="width: 68%;">
        <div class="col-sm-12"> -->
          <h1 class="caption">GeckoWebdevelopment<br/>agency voor Webontwikkeling</h1>

        <!-- </div>
      </div> -->
      <div class="paragraph" style="display: block;">
      </div>
      <div class="tokeh">
        <img src="cover/tokeh.png" alt="">
      </div>
    </section>
    <section class="page second_page">
      <!-- <div class="container text-center">
        <div class="diensten">
          <h1>Onze Diensten</h1>  
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-12 col-xl-4">
            <h2>Website Ontwikkeling</h2>
            <div class="icon">
              <img src="cover/web-development.png" alt="">          
            </div>
            <br>
            <p>Van bedrijfspagina tot webshop tot mobiele web</p>
          </div>
          <div class="col-12 col-md-12 col-lg-12 col-xl-4">
            <h2>Online Marketing</h2>
            <div class="icon">
              <img src="cover/bullhorn.png" alt="">          
            </div>
            <br>
            <p>Laat uw bedrijf online
              opvallen en zorg ervoor
              dat uw bereik groeit.</p>
          </div>
          <div class="col-12 col-md-12 col-lg-12 col-xl-4">
            <h2>Website-Onderhoud</h2>
            <div class="icon">
              <img src="cover/maintenance.png" alt="">          
            </div>
            <br>
            <p>Uw website up-to-date. Wordpress website onderhouden? Kom maar!</p>
          </div>
        </div>

      </div> -->
      <!-- <h1>Wat we doen?</h1> -->
    
      <a style="margin-top: 94px;" class="logo" href="#" onclick="return false"><h8 style="color: black;">Wat we doen?</h8></a>

      <h1 class="caption">Online Marketing, <br/> Websites <br/> &amp; Onderhoud</h1>

    <!-- <div class="text" style="width: 68%;">
      <h1 class="caption" style="position: relative; z-index: 32; margin-bottom: 50px;">En wij bouwen websites met passie <br/></h1>
    </div> -->
    <!-- <div class="grandis">
        <img src="cover/grandis.png" alt="">
      </div> -->

    </section>
    <section class="page third_page">
    <h8 style="margin-bottom: 10px; "><a style="margin-top: 94px;" class="logo" href="#" onclick="return false"> >> Bekijk ons werk <<</a></8>
    <h1 class="caption">Benieuwd naar <br/> ons werk?</h1>

      <!-- <div class="container">
        <div class="row">
          <div class="col-6 mx-4">
              <p>Klik hier!</p>
          </div>
          <div class="col-6">

          </div>
        </div>
      </div> -->
    <!-- <div class="text" style="width: 68%;">
      <h1 class="caption" style="position: relative; z-index: 32; margin-bottom: 50px;">Benieuwd wat wij kunnen betekenen? <br/><a href="">Ja!? >> Klik! <<</a></h1>
    </div> -->
    </section>
    <section class="page fourth_page">
    <h8 style="color: black; font-weight: bold;"><a style="margin-top: 94px; color: black;" class="logo" href="{{ route('contact')}}" onclick="return false">Ons benaderen?</a></h8>

    <div class="text" style="width: 68%;">
      <h1 class="caption" style="position: relative; z-index: 32; margin-bottom: 50px;"><a class="caption" href="{{ route('contact')}}">Contacteer ons! <br/>Vinden we leuk!</a></h1>
    </div>
    <div class="pardalis">
        <img src="cover/pardalis.png" alt="">
      </div>    
    </section>
          <!-- &amp; -->

@endsection
