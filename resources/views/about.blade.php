@extends('layouts/default')

{{-- Page title --}}
@section('title')
Us
@parent
@stop

{{-- content --}}
@section('content')
  <!--Start Page Header -->
  <!--Start Page Header -->
  <div class="page-content">
    <div class="page-header-v1 bg-1 overlay-bg  text-center">
      <div class="page-header-inner">
        <p class="page-category">ABOUT</p>
        <h2 class="page-title">US</h2>
        <div class="breadcrumbs">
        </div>
      </div>
    </div>
    <!--Start Our school area -->
    <div class="row padding-t50">
      <section class="our-school-area">
        <div class="container">
          <div class="row">
            <div class="our-school-inner">
              <div class="col-md-6">
                <div class="school-info padding-t50">
                  <h2 class="section-title">OUR INTENTION</h2>
                  <p align="justify">We are a company of dogs lover! We look through our website and encourage conviviality Union and pet owners addition to creating a perpetual data base 1 million pictures of our puppies on the Internet! For only $ 1 for each photo.</p>

                  <p align="justify">Our vision is to build a global community of support and knowledge focused on having our canine pets clearly are part of our family.</p>

                  <p align="justify">Once the database fills our website we will donate part of the proceeds 1 animal protection organization in the country that most members have within our site, to help homeless dogs.</p>

                  <p align="justify">In addition to completing our database also we donate usd 50000 one of our members chosen at random by our user community!</p>
                  <br />
                  <h3>What are you waiting for?</h3>
                  <br />
                  <a href="{{ route('dog.register') }}" class="btn btn-success" style="background-color: #07b193; border-color:#07b193;">Register your dog</a>
                  <br />
                  <br />
                  <a href="{!! route('inicio') !!}" class="btn btn-default">Back</a>

                </div>
              </div>
              <div class="col-md-6">
                <div class="school-pic">
                  <img src="{{ asset('assets/Imagenes/img1.jpg') }}" alt="school image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--End Our school area -->
  </div>
@stop
