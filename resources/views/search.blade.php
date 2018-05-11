@extends('layouts/default')

{{-- Page title --}}
@section('title')
Search
@parent
@stop

{{-- content --}}
@section('content')
	@include('flash::message')
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
