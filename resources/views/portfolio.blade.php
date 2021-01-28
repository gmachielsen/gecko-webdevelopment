@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

@endpush
@push('scripts')
    <script src="{{ asset('js/test.js') }}"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endpush
@section('content')

<!------ Include the above in your HEAD tag ---------->

 <br><br><br><br><br><br><br>
<section id="three">
<div class="container">
        <div class="row">
            <div class="col-12">
                    <br><br>
                    <h1 class="text-center">Ons Werk</h1>
                    <br><br><br>
                    <div class="row">
                        @foreach($websites as $website)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ $website->url }}">

                            <div class="card" style="">
                            <img src="{{ asset('uploads/websites') }}/{{ $website->image }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $website->name }}</h5>
                                </div>
                            </div>
                        </a>
                        <br>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
