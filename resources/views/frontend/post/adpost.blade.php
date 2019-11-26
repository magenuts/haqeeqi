@extends('layouts.app')
@section('content')

      <header class="hero">
          <div class="hero-wrapper">
              <!--============ Secondary Navigation ===============================================================-->

              @include('frontend.partials.header')



              <div class="page-title">
                  <div class="container">
                      <h1>Post Your Ad</h1>
                  </div>
                  <!--end container-->
              </div>
              <!--============ End Page Title =====================================================================-->
              <div class="background"></div>
              <!--============ End Hero Form ======================================================================-->

              <!--end background-->
          </div>
          <!--end hero-wrapper-->
      </header>

       <section class="content">
           <section class="block">
               <div class="container">
                   <section>
                       <div class="alert alert-warning" role="alert">
                           <h2 class="alert-heading">You don't have an account!</h2>
                           <p>You can submit only 1 ad at a time. To submit more, you need to
                               <a href="sign-in.html" class="link"><strong>Sign In</strong></a> or
                               <a href="register.html" class="link"><strong>Register</strong></a></p>
                       </div>
                   </section>
                   <form class="form form-submit">
                       <section>
                           <h2>Basic Information</h2>
                           <div class="form-group" id="type">
                               <label for="type" class="required">Condition</label>
                               <figure>
                                   <label class="framed">
                                       <input type="radio" name="condition" value="new" required>
                                       New
                                   </label>
                                   <label class="framed">
                                       <input type="radio" name="condition" value="used" required>
                                       Used
                                   </label>
                               </figure>
                           </div>
                           <div class="row">
                               <div class="col-md-8">
                                   <div class="form-group">
                                       <label for="title" class="col-form-label required">Title</label>
                                       <input name="title" type="text" class="form-control" id="title" placeholder="Title" required name="title">
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-8-->
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="price" class="col-form-label required">Price</label>
                                       <input name="price" type="text" class="form-control" id="price" required>
                                       <span class="input-group-addon">$</span>
                                   </div>
                                   <!--end form-group-->
                               </div>
                           </div>

                       </section>
                       <!--end basic information-->
                       <section>

                           <!--end row-->
                       </section>

                       <section>
                           <h2>Details</h2>
                           <div class="form-group">
                               <label for="details" class="col-form-label">Additional Details</label>
                               <textarea name="description" id="details" class="form-control" rows="4"></textarea>
                           </div>
                           <!--end form-group-->
                       </section>

                       <section>
                           <h2>Location</h2>
                           <div class="row">
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="state" class="col-form-label required">State</label>
                                       <input name="state" type="text" class="form-control" id="state">

                                   </div>
                                   <!--end form-group-->
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="city" class="col-form-label required">City</label>
                                       <input name="city" type="text" class="form-control" id="city">

                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-6-->
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="street" class="col-form-label">Street</label>
                                       <input name="street" type="text" class="form-control" id="street">
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-6-->
                           </div>
                           <!--end row-->
                           <div class="form-group">
                               <label for="input-location" class="col-form-label">Exact Location</label>
                               <input name="location" type="text" class="form-control location" id="input-location" placeholder="Enter Location" required>
                               <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                           </div>
                           <!--end form-group-->
                           <label>Map</label>
                           <div class="map height-400px" id="map-submit"></div>
                           <input name="latitude" type="text" class="form-control" id="latitude" hidden >
                           <input name="longitude" type="text" class="form-control" id="longitude" hidden>
                       </section>

                       <section>
                           <h2>Upload Images</h2>
                           <div class="file-upload-previews"></div>
                           <div class="file-upload">
                               <input type="file" name="images[]" class="file-upload-input with-preview multi" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                               <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                           </div>
                       </section>

                       <section>
                         <!-- <p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

                         <p id="demo"></p> -->

                           <h2>Additional Information</h2>
                           <h3>Review Your Details</h3>
                           <div class="row">
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="name" class="col-form-label required">Your Name</label>
                                       <input name="name" type="text" class="form-control" id="name"  required >
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-4-->
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="email" class="col-form-label required">Your Email</label>
                                       <input name="email" type="email" class="form-control" id="email"  required>
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-4-->
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="phone" class="col-form-label required">Your Phone Number</label>
                                       <input name="phone" type="text" class="form-control" id="phone"  required>
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-4-->
                           </div>
                           <!--end panel-group-->
                       </section>

                       <section class="clearfix">
                           <div class="form-group">
                               <button type="submit" class="btn btn-primary large icon float-right">Preview<i class="fa fa-chevron-right"></i></button>
                           </div>
                       </section>
                   </form>
                   <!--end form-submit-->
               </div>
               <!--end container-->
           </section>
           <!--end block-->
       </section>

      <!--*********************************************************************************************************-->
      <!--************ CONTENT ************************************************************************************-->
      <!--*********************************************************************************************************-->

      @include('frontend.partials.footer')

      @push('scripts')

    <script type="text/javascript">

      // var x = document.getElementById("demo");
      //
      // function getLocation() {
      // if (navigator.geolocation) {
      // navigator.geolocation.watchPosition(showPosition);
      // } else {
      // x.innerHTML = "Geolocation is not supported by this browser.";
      // }
      // }
      //
      // function showPosition(position) {
      // x.innerHTML="Latitude: " + position.coords.latitude +
      // "<br>Longitude: " + position.coords.longitude;
      // }


       var latitude = 51.511971;
       var longitude = -0.137597;
       var markerImage = "{{url('/')}}/assets/img/map-marker.png";
       var mapTheme = "light";
       var mapElement = "map-submit";
       var markerDrag = true;
       simpleMap(latitude, longitude, markerImage, mapTheme, mapElement, markerDrag);



      </script>
      @endpush
@endsection
