

@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/test.js') }}"></script>
@endpush
@section('content')
<div class="box">END</div>
<div class="box">Slide 4</div>
<div class="box">Slide 3</div>
<div class="box">Slide 2</div>
<div class="box">Slide 1</div>
@endsection

