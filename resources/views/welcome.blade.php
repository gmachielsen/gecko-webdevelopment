@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/welcome.js')}}"></script>
@endpush
@section('content')
<section class="" id="one">
    <div class="landingtext">
        <div class="firstrule">
            <h1>Welkom</h1>
            <h1>bij</h1>
            <h1>Gecko Webdevelopment</h1>
            <p>Wij zijn gek van creativeit en technologie op het web</p>

        </div>
        <div class="secondrule">
            <p>Wij zijn gek van creativeit en technologie op het web</p>
        </div>
    </div>
</section>
@endsection
