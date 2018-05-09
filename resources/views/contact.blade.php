@extends('layouts/default')

{{-- Page title --}}
@section('title')
Contact
@parent
@stop

{{-- content --}}
@section('content')
  <!--Start Page Content -->
  <div class="page-content">
    <!--Start Google Map area -->
    <div class="contact-map">
      <div id="googleMap" style="width:100%;height:500px;"></div>
    </div>
    <!--End Google Map area -->
    <!-- Start Contact Us area -->
    <div class="contact-us-area padding100 bg-white-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="area-headding text-center">
              <h2 class="section-title">Contact</h2>
              <p>Contact us for any requests or problems you may have, <br>do not forget to visit our social networks and leave your comment, our pets will thank you.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="contact-info-list text-center clear">
              <div class="contact-info-inner clear">
                <!-- Start Single info -->
                <div class="single-info location bg-white text-center">
                  <div class="info-icon">
                    <img src="{{ asset('html_front/img/icon/map-marker.png') }}" alt="">
                  </div>
                  <div class="info-dis">
                    <h3 class="con-in-title">LOCATION</h3>
                    <address>
                      <p>650-698 9th St, <br>Sacramento, CA 95814, EEUU.</p>
                    </address>
                  </div>
                </div>
                <!-- End Single info -->
                <!-- Start Single info -->

                <!-- End Single info -->
                <!-- Start Single info -->
                <div class="single-info email bg-white  text-center">
                  <div class="info-icon">
                    <img src="{{ asset('html_front/img/icon/email.png') }}" alt="">
                  </div>
                  <div class="info-dis">
                    <h3 class="con-in-title">E-MAIL</h3>
                    <p><a href="#">doggymillon@outlook.com</a></p>
                  </div>
                </div>
                <!-- End Single info -->
              </div>
              <div class="form-group">
                <br>
                <a href="{!! route('inicio') !!}" class="btn btn-default">Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Us area -->
  </div>
  <!-- Google Map js -->
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script>function initialize() {var mapOptions = {zoom: 15,scrollwheel: false,center: new google.maps.LatLng(38.5842215, -121.4941224)};var map = new google.maps.Map(document.getElementById('googleMap'),mapOptions);var marker = new google.maps.Marker({position: map.getCenter(),animation:google.maps.Animation.BOUNCE,icon: '{{ asset('html_front/img/others/marker.png') }}',map: map});}google.maps.event.addDomListener(window, 'load', initialize);</script>

@stop
