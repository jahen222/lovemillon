@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- content --}}
@section('content')
	@include('flash::message')
	<!-- Start Slider Area -->
	<section class="slider-area slide-v2">
		<div class="bend niceties preview-2">
			<div id="ensign-nivoslider" class="slides">
				<img src="{{ asset('assets/Imagenes/slide1.jpg') }}" alt="" title="#slider-direction-1"  />
				<img src="{{ asset('assets/Imagenes/slide2.jpg') }}" alt="" title="#slider-direction-2"  />
			</div>
			<!-- direction 1 -->
			<div id="slider-direction-1" class="slider-direction slider-one">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="slider-content">
								<!-- layer 1 -->
								<div class="layer-1-1">
									<h5 class="title1">Register couple for only $1</h5>
								</div>
								<!-- layer 2 -->
								<div class="layer-1-2">
									<h5 id="word" class="title2"><span>TURN YOUR DOG INTO A PIECE OF HISTORY ON THE INTERNET FOR $1</span></h5>
								</div>
								<!-- layer 3
								<div class="layer-1-3">
									<p class="title3">Disponibles un millón de espacios para registrar a tu mascota, <br />Muéstrale al mundo ese pequeño pedazo de felicidad.</p>
								</div>
								<!-- layer 4 -->
								<div class="layer-1-4">
									<a href="{{ route('dog.register') }}" class="estut-btn active hidden-sm hidden-xs">Register couple</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- direction 2 -->
			<div id="slider-direction-2" class="slider-direction slider-two">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="slider-content">
								<!-- layer 1 -->
								<div class="layer-2-1">
									<h5 class="title1">Register couple for only $1</h5>
								</div>
								<!-- layer 2 -->
								<div class="layer-2-2">
									<h5 class="title2"><span>TURN YOUR DOG INTO A PIECE OF HISTORY ON THE INTERNET FOR $1</span></h5>
								</div>
								<!-- layer 3
								<div class="layer-2-3">
									<p class="title3">Disponibles un millón de espacios para registrar a tu mascota, <br />Muéstrale al mundo ese pequeño pedazo de felicidad.</p>
								</div>
								<!-- layer 4 -->
								<div class="layer-2-4">
									<a href="{{ route('dog.register') }}" class="estut-btn active hidden-sm hidden-xs">Register couple</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Slider Area -->
	<!-- Start Search Area -->
	<section class="search-area v2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-inner fix">
						<div class="search-title"><a href="{{ route('dog.register') }}" class="btn btn-success" style="background-color: #f95da8; border-color:#f95da8;">Register couple</a></div>
						<div class="search-form-3">
							<form action="{{ route('search') }}">
								<select>
									<option value="Nombre">Search by name</option>
									<!--<option value="Raza">Busca por raza</option>
									<option value="País">Busca por país</option>-->
								</select>
								<input name="search" type="text" placeholder="Text"/>
								<input type="submit" value="Search" class="btn btn-default"/>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="search-area-border"></div>
	<!-- End Search Area -->
	<!-- Start service v2 Area -->
	<section class="service-area service-v2 bg-white-2">
		<div class="container">
		  <!-- Start Counter Area -->
			<div class="row padding-t50">
				<div class="col-md-12 text-center">
					<div class="counter-list">
						<div class="s-counter">
							<div class="counter-box">
								<h2 class="counter">1000000</h2>
								<h5 class="count-title">WE WANT TO GET</h5>
							</div>
						</div>
						<div class="s-counter">
							<div class="counter-box">
								<h2 class="counter">{{count($dogs)}}</h2>
								<h5 class="count-title">RECORDED</h5>
							</div>
						</div>
						<div class="s-counter">
							<div class="counter-box">
								<h2 class="counter">{{1000000-count($dogs)}}</h2>
								<h5 class="count-title">WE NEED</h5>
							</div>
						</div>
						<div class="s-counter">
							<div class="counter-box">
								<h2 class="counter">247</h2>
								<h5 class="count-title">AVAILABLE COUNTRIES</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Counter Area -->
		</div>
	</section>
	<!-- End service v2 Area -->
	<link rel="stylesheet" href="{{ asset('assets/css/galery.css') }}">

	<div class="row padding-t50 bg-white-2">
		<section class="bg-white-2">
			<div class="container">
				<div class="masonry">
					@foreach($dogs as $dog)
						<div class="item">
							<a href="{{ route('show', ['id' => $dog->id]) }}">{{ Html::image(route('dogimage', ['image' => $dog->image]), 'a picture') }}</a>
						  <a href="{{ route('show', ['id' => $dog->id]) }}" style="color: #8e24aa;"><p style="color: #8e24aa; text-align:center">{{ $dog->name }}</p></a>
						</div>
					@endforeach
				</div>
			</div>
		</section>
	</div>
@stop
