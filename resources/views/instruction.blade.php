@extends('layouts/default')

{{-- Page title --}}
@section('title')
INSTRUCTIONS
@parent
@stop

{{-- content --}}
@section('content')
<!--Start Page Content -->
<div class="page-content">
  <!--Start Page Header -->
  <div class="page-header-v1 bg-2 overlay-bg  text-center">
    <div class="page-header-inner">
      <p class="page-category">INSTRUCTIONS</p>
      <h2 class="page-title">Follow the steps</h2>
      <div class="breadcrumbs">
      </div>
    </div>
  </div>
  <!--End Page Header -->
  <!--Start Blog Post Area -->
  <div class="latest-blog-area blog-page padding50 bg-white-2">
    <div class="container">
      <div class="row">
        <div class="blog-post-inner">
          <!--Start Single Blog  -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-sm">
            <div class="single-blog text-left bg-white">
              <div class="blog-info text-left">
                <span class="blog-category c-green">Step 1</span>
                <h3 class="blog-title"><a href="#">Access our site.</a></h3>
              </div>
            </div>
          </div>
          <!--End Single Blog  -->
          <!--Start Single Blog  -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-sm">
            <div class="single-blog text-left bg-white">
              <div class="blog-info text-left">
                <span class="blog-category c-green">Step 2</span>
                <h3 class="blog-title"><a href="#">Fill out the form for registration.</a></h3>
              </div>
            </div>
          </div>
          <!--End Single Blog  -->
          <!--Start Single Blog  -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-sm">
            <div class="single-blog text-left bg-white">
              <div class="blog-info text-left">
                <span class="blog-category c-green">Step 3</span>
                <h3 class="blog-title"><a href="#">Pay $1 and public.</a></h3>
                <img src="{{ asset('assets/Imagenes/paypal.jpg') }}" alt="Brand Image" />
              </div>
            </div>
          </div>
          <!--End Single Blog  -->

        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="load-more-btn">
            <a href="{{ route('dog.register') }}" class="btn btn-success" style="background-color: #f95da8; border-color:#f95da8;">Register your dog</a>
            <br />
            <br />
            <br />
            <a href="{!! route('inicio') !!}" class="btn btn-default">Back</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Blog Post Area -->
</div>
@stop
