@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src=""></script>
@endpush
@section('content')
<div class="container contactpage text-center">
    <div class="" >
<br><br><br><br><br><br><br>

    <div class="row firstrow pt-10 pt-lg-12" >
        <div class="col-12 col-lg-4 offset-lg-1 px-0">
            <h1 class="fs-4 mb-3">Contact.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xl-6-offset-3">
            <div class="fs-2 mb-3 text-center"><p>Is de eerste stap naar resultaat</p></div>
            
            <a class="d-block arrowlink fs-2 mt-lg-5 mb-3 text-center" href="https://www.google.nl/maps/dir//Prinsenboschlaan+32,+Prinsenbeek/@51.3152735,4.8326522,141122m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x47c4201e5f955627:0x1db24007e0413184!2m2!1d4.7127148!2d51.5915355" target="_blank">
            <!-- <p>Route naar de agency</p> -->
            </a>
            <!-- <div class="d-flex flex-column mb-3">
                <div><p>Gecko Webdevelopment</p></div>
                <div><p>Prinsenboschlaan 32</p></div>
                <div class="mb-3"><p>4841 MA PRINSENBEEK</p></div>
                <div><p>+31 6 - 11864118</p></div>
                <div><p>g.machielsen@gmail.com</p></div>
            </div> -->
            <div class="text-center social-icons">
            <a href="https://facebook.com/geckowebdevelopment" target="_blank">Facebook</a>
            <a href="https://www.linkedin.com/company/geckowebdevelopment" target="_blank">LinkedIn</a>
            <a href="https://instagram.com/geckowebdevelopment" target="_blank">Instagram</a>
            </div>
        </div>
   
        <div class="col-12 col-md-6 col-lg-6 col-xl-6-offset-3">
    
        <div class="memo p-2 p-sm-5">
            <h2 class="fs-3">Neem contact op.</h2>
            <div role="form" class="wpcf7" id="wpcf7-f95-p13-o1" lang="nl-NL" dir="ltr">
            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
            <form action="{{ route('send.post')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                @csrf
            <div style="display: none;">
            <!-- <input type="hidden" name="_wpcf7" value="95">
            <input type="hidden" name="_wpcf7_version" value="5.3.1">
            <input type="hidden" name="_wpcf7_locale" value="nl_NL">
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f95-p13-o1">
            <input type="hidden" name="_wpcf7_container_post" value="13">
            <input type="hidden" name="_wpcf7_posted_data_hash" value=""> -->
            </div>
            <p><span class="firstname"><input type="text" name="firstname" value="" size="40" class="form-control formintput" aria-required="true" aria-invalid="false" placeholder="Voornaam *"></span><br>
            <span class="lastname"><input type="text" name="lastname" value="" size="40" class="form-control formintput" aria-required="true" aria-invalid="false" placeholder="Achternaam *"></span><br>
            <span class="email"><input type="email" name="email" value="" size="40" class="form-control formintput" aria-required="true" aria-invalid="false" placeholder="E-mailadres *"></span><br>
            <span class="telefoon"><input type="tel" name="telefoon" value="" size="40" class="form-control formintput" aria-invalid="false" placeholder="Telefoonnummer *"></span><br>
            <span class="bedrijfsnaam"><input type="text" name="bedrijfsnaam" value="" size="40" class="form-control formintput " aria-invalid="false" placeholder="Bedrijfsnaam"></span><br>
            <span class="functie"><input type="text" name="functie" value="" size="40" class="form-control formintput" aria-invalid="false" placeholder="Functie"></span><br>
            <!-- <span class="info"><textarea name="info" cols="40" rows="2" class="form-control" aria-invalid="false" placeholder="Kun je ons alvast wat meer informatie geven over je vraag?"></textarea></span><br>
            <span class="termijn"><textarea name="termijn" cols="40" rows="2" class="form-control" aria-invalid="false" placeholder="Binnen welke wil je een website?"></textarea></span><br>
            <span id="" class=""><label class="hp-message">Gelieve dit veld leeg te laten.</label><input class="form-control" type="text" name="mail" value="" size="40" tabindex="-1" autocomplete="nope"></span><br> -->
            <input type="submit" value="Verzenden" class="form-control formbutton"><span class="ajax-loader"></span></p>
            <div class="" aria-hidden="true"></div></form></div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="containter">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3-offset-3  title">
            <h1>Gecko Webdevelopment</h1>
            <div class="contactdetails">
                <div class="details">
                    <span>Prinsenboschlaan 32</span> / <span>4841 MA PRINSENBEEK</span>
                </div>
                <div class="details">
                    <span>06-11864118</span> / <span>g.machielsen@gmail.com</span>
                </div>
            </div>

            <div class="social">
                <br>
                <h4>Volg en bekijk onze activiteiten op sociale media</h4>
                <br>
                <div class="links">
                    <a href="https://www.facebook.com/GeckoWebdevelopment-101967601883717" target="blank"><i class="fab fa-facebook-f fa-sm"></i></a>
                    <a href="#" onclick="return false"><i class="fab fa-instagram fa-sm"></i></a>
                    <a href="#" onclick="return false"><i class="fab fa-pinterest fa-sm"></i></a>
                </div>
            </div>
        </div>
        
        </div class="col-12 col-md-6 col-lg-3">
            <br><br><br>
            <div class="contactform">
                    <h4>Contactformulier</h4>
                        <form id="contact-form" name="contact-form" action="{{ route('send.post')}}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-12 ">
                                    <div class="md-form mb-0">
                                        <br>
                                        <label for="name" class="">Uw naam</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="md-form mb-0">
                                        <br>
                                        <label for="email" class="">Uw email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                        <input type="hidden" id="mailto" name="mailto" value="g.machielsen@gmail.com">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="md-form mb-0">
                                        <br>
                                        <label for="subject" class="">Onderwerp</label>
                                        <input type="text" id="subject" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-12">

                                    <div class="md-form">
                                        <br>
                                        <label for="message">Uw bericht</label>
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    </div>

                                </div>
                            </div>


                        <div class="text-center text-md-left">
                        <br>
                        <button type="submit" class="btn btn-success">Vestuur bericht</button>
                        </div>
                        <div class="status"></div>
                    </div>
                    </form>
            </div>

        </div>
    </div>
    
</div> -->
<!-- <section class="mb-4" style="padding: 30px;">

    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactformulier</h2>
    <p class="text-center w-responsive mx-auto mb-5">Via dit contactformulier kunt u contact opnemen met artisthub</p>

    <div class="row">
    <div class="col-sm-12">
    @if(Session::has('message'))
    <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
    </div>
        <div id="section" class="col-md-12 mb-md-0 mb-9">
            <form id="contact-form" name="contact-form" action="{{ route('send.post')}}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <br>
                            <label for="name" class="">Uw naam</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <br>
                            <label for="email" class="">Uw email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            <input type="hidden" id="mailto" name="mailto" value="g.machielsen@gmail.com">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <br>
                            <label for="subject" class="">Onderwerp</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="md-form">
                            <br>
                            <label for="message">Uw bericht</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>


            <div class="text-center text-md-left">
            <br>
            <button type="submit" class="btn btn-success">Vestuur bericht</button>
            </div>
            <div class="status"></div>
        </div>
        </form>


        

</div>
</div>
<br><br>
<hr>
</section>
<section>
<div class="container text-center">

    <div class="row">
            <div class="col-md-12 col-lg-4" style="padding-top: 25px;">
                <i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Prinsenboschlaan 32, 4841 MA Prinsenbeek</p>
            </div>
            <div class="col-md-12 col-lg-4">
                <i class="fas fa-phone mt-4 fa-2x"></i>
                <p>06-11864118</p>
            </div>
            <div class="col-md-12 col-lg-4">
                <i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>g.machielsen@gmail.com</p>
            </div>
 
        </div>
    </div>
</div>
<br><br><br>
</section> -->
</div>
@endsection
