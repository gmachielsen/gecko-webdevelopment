@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/test.js') }}"></script>
@endpush
@section('content')

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
