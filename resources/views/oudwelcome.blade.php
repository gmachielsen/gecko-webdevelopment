@extends('layouts.app')
@push('styles')
    <!-- <link href="{{ asset('css/welcome.css') }}" rel="stylesheet"> -->
@endpush
@push('scripts')
    <!-- <script src="{{ asset('js/welcome.js')}}"></script> -->
@endpush
@section('content')
 
    <div class="section full-height over-hide">	
        <div class="switch-wrap">
            <h1>Gecko webdevelopment</h1>


            <div id="switch" class="hover-target">
                <div id="circle"></div>
            </div>
            <p><span>dark</span> - <span>light</span></p>
        </div>
    </div>	

    <div class='cursor' id="cursor"></div>
    <div class='cursor2' id="cursor2"></div>
    <div class='cursor3' id="cursor3"></div>




@endsection

<!-- Link to page
================================================== -->

<!-- <a href="https://front.codes/" class="link-to-portfolio hover-target" target=”_blank”></a> -->

