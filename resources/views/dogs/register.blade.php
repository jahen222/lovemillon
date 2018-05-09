@extends('layouts/default')

{{-- Page title --}}
@section('title')
Register
@parent
@stop

{{-- content --}}
@section('content')
  <!--<link href="{{ asset('assets/css/register.css') }}" rel="stylesheet">-->
  @include('flash::message')
  <div class="row padding-t50">
  <section id="contact">
  	<div class="section-content" align="center">
  		<h1 class="section-header">Register <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> your pet</span></h1>
  		<h3>Help us to reach 1000000</h3>
  	</div>
  	{!! Form::open(array('route' => 'payment', 'files' => true, 'method' => 'post')) !!}
        {{ csrf_field() }}
    <div class="contact-section">
    	<div class="container">
  			<div class="col-md-6 form-line">
            <div class="form-group">
              <label>NOTE: </label>
              <h5 style="color: red;">*All fields are required.</h5>
              <h5 style="color: red;">*If your dog has less than 1 year please enter 0 in the old field.</h5>
            </div>
            <div class="form-group">
              <label>Owner </label>
              {!! Form::text('owner_name', null, ['class' => 'form-control',  'placeholder' => 'Owner name']) !!}
            </div>
  	  			<div class="form-group">
  	  				<label>First name </label>
              {!! Form::text('name', null, ['class' => 'form-control',  'placeholder' => 'Name']) !!}
  		  		</div>
            <div class="form-group">
  			    	<label>Gender </label>
              {{ Form::select('gender', ['Male', 'Famele'], null, ['class' => 'form-control', 'placeholder' => 'Gender']) }}
  			  	</div>
  			  	<div class="form-group">
  			    	<label>Age </label>
              {!! Form::number('age', null, ['class' => 'form-control', 'placeholder' => 'Age']) !!}
  	  			</div>
            <div class="form-group">
  	  				<label>Image </label>
              {!! Form::file('image', null) !!}
  		  		</div>
            <div class="form-group">
                <label>Dead? </label>
                Yes {{ Form::radio('dead', 1) }} No {{ Form::radio('dead', 0, true) }}
            </div>
            <a href="{!! route('inicio') !!}" class="btn btn-default">Back</a>
  	  		</div>
  	  		<div class="col-md-6">
            <div class="form-group">
              <label>Email</label>
              {!! Form::text('owner_email', null, ['class' => 'form-control',  'placeholder' => 'Email']) !!}
            </div>
            <div class="form-group">
  			    	<label>Race </label>
              {!! Form::select('race_id', $races, null, ['class' => 'form-control', 'placeholder' => 'Race']) !!}
  			  	</div>
  	  			<div class="form-group">
  	  				<label> Biography</label>
              {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
  	  			</div>
            <div class="form-group">
              <label> Country</label>
              {!! Form::select('country_id', $countries, null, ['class' => 'form-control', 'placeholder' => 'Select Country']) !!}
            </div>
  	  			<div>

  	  				<button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Register</button>
  	  			</div>
  			</div>
  	   </div>
    </div>
    {!! Form::close() !!}
  </section>
  </div>
@stop
