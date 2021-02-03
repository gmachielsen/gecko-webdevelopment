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
<div class="section">
		<div class="container">
            <br><br><br><br><br><br>
			<div class="row justify-content-center">
          <input class="checkbox-alizarin" type="checkbox" id="color-1"  checked="checked"/>
          <label for="color-1"> wordpress</label>
          <input class="checkbox-wisteria" type="checkbox" id="color-2"  checked="checked"/>
          <label for="color-2">woocommerce</label>
          <input class="checkbox-emerland" type="checkbox" id="color-3"  checked="checked"/>
          <label for="color-3">laravel</label>
          <input class="checkbox-belizehole" type="checkbox" id="color-4"  checked="checked"/>
          <label for="color-4">node.js</label>
          <!-- <input class="checkbox-sunflower" type="checkbox" id="color-5"  checked="checked"/>
          <label for="color-5">sunflower</label> -->
          <br>
          			    <div class="section p-0 pt-2"></div>

          @foreach($websites as $website)
                    <div class="col box {{ $website->type_website }}">
                        <!-- <div class="col-6 col-sm-6 col-md-4 col-lg-3"> -->
                        <a href="{{ $website->url }}">

                            <!-- <div class="card" style=""> -->
                            <img src="{{ asset('uploads/websites') }}/{{ $website->image }}" class="card-img-top" alt="...">

                                <!-- <div class="card-body">
                                    <h5 class="card-title">{{ $website->name }}</h5>
                                </div>
                            </div> -->
                        </a>
                        <br>
                        <!-- </div> -->
                    </div>
            @endforeach

			    <!-- <div class="section p-0 pt-2"></div>
			    <div class="col box alizarin"></div>
			    <div class="col box wisteria"></div>
			    <div class="col box emerland"></div>
			    <div class="col box belizehole"></div>
			    <div class="col box sunflower"></div>
			    <div class="col box alizarin"></div>
			    <div class="col box wisteria"></div>
			    <div class="col box emerland"></div>
			    <div class="col box belizehole"></div>
			    <div class="col box sunflower"></div>
			    <div class="col box alizarin"></div>
			    <div class="col box wisteria"></div>
			    <div class="col box emerland"></div>
			    <div class="col box belizehole"></div>
			    <div class="col box sunflower"></div>
			    <div class="col box alizarin"></div>
			    <div class="col box wisteria"></div>
			    <div class="col box emerland"></div>
			    <div class="col box belizehole"></div>
			    <div class="col box sunflower"></div> -->
      </div>
    </div>
</div>
<!------ Include the above in your HEAD tag ---------->

 <br><br><br><br><br><br><br>
<!-- <section id="three">
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
</section> -->
@endsection
