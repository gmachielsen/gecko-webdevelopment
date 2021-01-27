@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/test.js') }}"></script>
@endpush
@section('content')
<section class="slider-pages">

  <article class="js-scrolling__page js-scrolling__page-1 js-scrolling--active">
    <div class="slider-page slider-page--left">
      <div class="slider-page--skew">
        <div class="slider-page__content">
        </div>
        <!-- /.slider-page__content -->
      </div>
      <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--left -->

    <div class="slider-page slider-page--right">
      <div class="slider-page--skew">
        <div class="slider-page__content">
          <h1 class="slider-page__title slider-page__title--big">
            Artisthub
          </h1>
          <!-- /.slider-page__title slider-page__title--big -->
          <h2 class="slider-page__title">
            Marktplaats voor kunst
          </h2>
          <!-- /.slider-page__title -->
          <p class="slider-page__description">
            <br>
            <a type="button"  href="https://www.artisthub.geckowebdevelopment.nl/">Bekijk website</a>
           
          </p>
          <!-- /.slider-page__description -->
        </div>
        <!-- /.slider-page__content -->
      </div>
      <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--right -->
  </article>
  <!-- /.js-scrolling__page js-scrolling__page-1 js-scrolling--active -->


  <article class="js-scrolling__page js-scrolling__page-2">
    <div class="slider-page slider-page--left">
      <div class="slider-page--skew">
        <div class="slider-page__content">
        <h1 class="slider-page__title slider-page__title--big">
            IT-jobvinder
          </h1>
          <h1 class="slider-page__title">
          Vacaturewebsite
          </h1>
          <!-- /.slider-page__title -->
          <!-- <p class="slider-page__description"> -->
          <br>
            <a type="button"  href="http://www.it-jobvinder.geckowebdevelopment.nl/">Bekijk website</a>
                     <!-- </p> -->
          <!-- /.slider-page__description -->
        </div>
        <!-- /.slider-page__content -->
      </div>
      <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--left -->

    <div class="slider-page slider-page--right">
      <div class="slider-page--skew">
        <div class="slider-page__content">
        </div>
        <!-- /.slider-page__content -->
      </div>
      <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--right -->
  </article>
  <!-- /.js-scrolling__page js-scrolling__page-2 -->


  <article class="js-scrolling__page js-scrolling__page-3">
    <div class="slider-page slider-page--left">
      <div class="slider-page--skew">
        <div class="slider-page__content">
        </div>
        <!-- /.slider-page__content -->
      </div>
      <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--left -->

    <div class="slider-page slider-page--right">
      <div class="slider-page--skew">
        <div class="slider-page__content">
          <h1 class="slider-page__title">
            Made-by-Loni
          </h1>
          <!-- /.slider-page__title -->
          <p class="slider-page__description">
              webhop in kleding en sieraden
          </p>
          <!-- /.slider-page__description -->
        </div>
        <!-- /.slider-page__content -->
      </div>
      <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--right -->
  </article>
  <!-- /.js-scrolling__page js-scrolling__page-3 -->



  <article class="js-scrolling__page js-scrolling__page-4">
    <div class="slider-page slider-page--left">
      <div class="slider-page--skew">
        <div class="slider-page__content">
          <h1 class="slider-page__title">
            Now you are here
          </h1>
          <!-- /.slider-page__title -->
          <p class="slider-page__description">
            Please continue scrolling
          </p>
          <!-- /.slider-page__description -->
        </div>
        <!-- /.slider-page__content -->
      </div>
      <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--left -->

    <div class="slider-page slider-page--right">
      <div class="slider-page--skew">
        <div class="slider-page__content">
        </div>
        <!-- /.slider-page__content -->
      </div>
      <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--right -->
  </article>
  <!-- /.js-scrolling__page js-scrolling__page-2 -->

@endsection






