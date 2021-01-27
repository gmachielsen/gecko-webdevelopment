@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/diensten.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <!-- <script src="{{ asset('js/diensten.js') }}"></script> -->
@endpush
@section('content')
<section id="one" class="header">
    <div class="tokeh">
        <img src="cover/tokeh.png" alt="">
    </div>
    <div class="svg">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FFB3B3" fill-opacity="1" d="M0,128L40,149.3C80,171,160,213,240,208C320,203,400,149,480,122.7C560,96,640,96,720,101.3C800,107,880,117,960,138.7C1040,160,1120,192,1200,197.3C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg> -->
    </div>

</section>


<section id="two">
    <div class="text text-center">
        <h1>Als online partner denken we graag met je mee</h1>
        <br>
        <!-- <p>Bij ons koop je geen website, maar een samenwerking</p> -->
        <br><br>
    </div>
</section>
<section id="three">
<div class="container">
        <div class="row">
            <div class="col-12">
                    <br><br><br>
                    <h1 class="text-center">Ons Werk</h1>
                    <br><br><br>
                    <div class="row">
                        @foreach($websites as $website)
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                        <a href="{{ $website->url }}">

                            <div class="card" style="">
                            <img src="{{ asset('uploads/websites') }}/{{ $website->image }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $website->name }}</h5>
                                </div>
                            </div>
                        </a>
                        <br><br>
                        </div>
                        @endforeach
                    </div>
                    <br><br><br>
                    <a type="button"href="">Meer zien?</a>
                    <br><br><br>

            </div>
        </div>
    </div>
    <br><br>
</section>

<section id="four">
 <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <br><br><br>
            <h1>Onze aanpak</h1>
            <br><br><br>
            <!-- <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="">

                            <div class="card" style="">
                            <img src="cover/tokeh.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">Advies</h5>
                                </div>
                            </div>
                        </a>
                        <br><br><br><br><br><br>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="">

                            <div class="card" style="">
                            <img src="cover/tokeh.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">Concept en design</h5>
                                </div>
                            </div>
                        </a>
                        <br><br><br><br><br><br>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="">

                            <div class="card" style="">
                            <img src="cover/tokeh.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">webdevelopment</h5>
                                </div>
                            </div>
                        </a>
                        <br><br><br><br><br><br>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="">

                            <div class="card" style="">
                            <img src="cover/tokeh.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">Livegang</h5>
                                </div>
                            </div>
                        </a>
                        <br><br><br><br><br><br>
                        </div>


                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="">

                            <div class="card" style="">
                            <img src="cover/tokeh.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">Online Marketing</h5>
                                </div>
                            </div>
                        </a>
                        <br><br><br><br><br><br>
                        </div>


                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="">

                            <div class="card" style="">
                            <img src="cover/tokeh.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">Onderhoud</h5>
                                </div>
                            </div>
                        </a>
                        <br><br><br><br><br><br>
                        </div>
            </div> -->
        </div>
    </div>
 </div>
</section>
<section>
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
</section>
<section id="five">
    <br><br><br>
    <h1 class="text-center">Prijzen</h1>
    <br><br><br>
</section>

@endsection
