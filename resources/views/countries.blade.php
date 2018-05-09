@extends('layouts/default')

{{-- Page title --}}
@section('title')
COUNTRY
@parent
@stop

{{-- content --}}
@section('content')
  <div class="page-header-v1 bg-1 overlay-bg  text-center">
    <div class="page-header-inner">
      <p class="page-category">LIST OF DOGS</p>
      <h2 class="page-title">COUNTRY</h2>
      <div class="breadcrumbs">
      </div>
    </div>
  </div>
  <div class="row padding-t50 bg-white-2">
    <section class="bg-white-2">
      <div class="container">
        <div class="list-group">
          @foreach($countries as $country)
            @if(COUNT($country->dogs)>=1)
              <a href="{{ route('pais', ['id' => $country->id]) }}" class="list-group-item">{{ $country->name }} ({{ COUNT($country->dogs) }})</a>
            @endif
          @endforeach
        </div>
        <div class="form-group">
          <br>
          <a href="{!! route('inicio') !!}" class="btn btn-default">Back</a>
        </div>
      </div>
    </section>
  </div>
@stop
