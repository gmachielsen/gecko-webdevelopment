@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src=""></script>
@endpush
@section('content')
<section id="one">
    <div class="landingtext">
        <div class="firstrule">
            <h1>Welkom</h1>
            <h1>bij</h1>
            <h1>Gecko Webdevelopment</h1>
        </div>
        <!-- <div class="secondrule">
            <h1>Welkom</h1>
        </div> -->
    </div>
</section>
@endsection
