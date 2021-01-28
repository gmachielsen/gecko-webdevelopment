@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/prijzen.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src=""></script>
@endpush
@section('content')
<section>
  <div class="container py-5">

    <!-- FOR DEMO PURPOSE -->
    <header class="text-center mb-5 text-white">
      <div class="row">
        <div class="col-lg-7 mx-auto">
            <br><br><br>
          <h1>Websites in Wordpress</h1>
          <!-- <p>p&nbsp;4.<br> <a href="https://bootstrapious.com/snippets" class="text-reset">Bootstrap snippet by Bootstrapious</a></p> -->
        </div>
      </div>
    </header>
    <!-- END -->



    <div class="row text-center align-items-end">
      <!-- Pricing Table-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Start</h1>
          <h2 class="h1 font-weight-bold">€ 15<span class="text-small font-weight-normal ml-2">/ maand</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Eigen webdomein + registratie</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Tot wel 5 pagina's</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Gratis onderhoud</li>
              <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Inclusief hosting</li>
            <!-- <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Eigen (woocommerce webshop)</del>
            </li> -->
            <!-- <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Geen onderhoud</del>
            </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Eigen (woocommerce webshop)</del>
            </li> -->
          </ul>
          <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Interesse?</a>
        </div>
      </div>
      <!-- END -->


      <!-- Pricing Table-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Middel</h1>
          <h2 class="h1 font-weight-bold">€ 25<span class="text-small font-weight-normal ml-2">/ maand</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
          <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Eigen webdomein + registratie</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Tot wel 15 pagina's</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Gratis onderhoud</li>
              <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>inclusief hosting</li>
            <!-- <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i><del>Eigen (woocommerce) webshop</del></li> -->
            <!-- <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis</li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Sed ut perspiciatis</del>
            </li> -->
          </ul>
          <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Interesse?</a>
        </div>
      </div>
      <!-- END -->


      <!-- Pricing Table-->
      <div class="col-lg-4">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Grote website</h1>
          <h2 class="h1 font-weight-bold">€ <span class="text-small font-weight-normal ml-2">Prijs op aanvraag</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Eigen webdomein</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Heel veel pagina's</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Gratis onderhoud</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Inclusief hosting</li>
            <!-- <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Eigen (woocommerce) webshop</li> -->
            <!-- <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis</li> -->
          </ul>
          <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Interesse?</a>
        </div>
      </div>
      <!-- END -->

    </div>
</div>
</section>
<section>
    <div class="voorbeelden">
        <a type="button" class="button" href="{{ route('our.work')}}">Bekijk voorbeelden</a>
    </div>
</section>
<section>
<div class="container py-5">

    <header class="text-center mb-5 text-white">
      <div class="row">
        <div class="col-lg-7 mx-auto">
            <br><br><br>
          <h1>Webwinkels in Woocommerce</h1>
          <!-- <p>p&nbsp;4.<br> <a href="https://bootstrapious.com/snippets" class="text-reset">Bootstrap snippet by Bootstrapious</a></p> -->
        </div>
      </div>
    </header>

    <div class="row text-center align-items-end">
      <!-- Pricing Table-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Start</h1>
          <h2 class="h1 font-weight-bold">€ 25<span class="text-small font-weight-normal ml-2">/ maand</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Eigen webdomein + registratie</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Tot wel 5 pagina's</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Gratis onderhoud</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Inclusief hosting</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>3 productcategorieën</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Onbeperkt aantal producten per productcategorie</li>

            <!-- <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              Onbeperkt aantal producten in webshop
            </li> -->
            <!-- <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Geen onderhoud</del>
            </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Eigen (woocommerce webshop)</del>
            </li> -->
          </ul>
          <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Interesse?</a>
        </div>
      </div>
      <!-- END -->


      <!-- Pricing Table-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Middel</h1>
          <h2 class="h1 font-weight-bold">€ 35<span class="text-small font-weight-normal ml-2">/ maand</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
          <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Eigen webdomein + registratie</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Tot wel 15 pagina's</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Gratis onderhoud</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Inclusief hosting</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>10 productcategorieën</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Onbeperkt aantal producten per productcategorie</li>
            <!-- <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis</li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Sed ut perspiciatis</del>
            </li> -->
          </ul>
          <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Interesse?</a>
        </div>
      </div>
      <!-- END -->


      <!-- Pricing Table-->
      <div class="col-lg-4">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Groot</h1>
          <h2 class="h1 font-weight-bold">€ <span class="text-small font-weight-normal ml-2">prijs op aanvraag</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Eigen webdomein</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Veel pagina's</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Gratis onderhoud</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Inclusief hosting</li>
              <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>X aantal productcategorieën</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Onbeperkt aantal producten per productcategorie</li>
            <!-- <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis</li> -->
          </ul>
          <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Interesse?</a>
        </div>
      </div>
      <!-- END -->

    </div>
  </div>
</section>
<section>
    <div class="voorbeelden">
    <a type="button" class="button" href="{{ route('our.work')}}">Bekijk voorbeelden</a>
    </div>
</section>
<!-- <section>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Contact
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Concept
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Realisatie
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Nazorg
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
</section> -->
@endsection
