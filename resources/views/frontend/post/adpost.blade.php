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
                       <!-- <div class="alert alert-warning" role="alert">
                           <h2 class="alert-heading">You don't have an account!</h2>
                           <p>You can submit only 1 ad at a time. To submit more, you need to
                               <a href="sign-in.html" class="link"><strong>Sign In</strong></a> or
                               <a href="register.html" class="link"><strong>Register</strong></a></p>
                       </div> -->
                   </section>
                   <form class="form form-submit" action="{{url('/')}}/submitpost" method="post" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                       <section>

                           <h2>Basic Information</h2>
                           <h4 style="color:red;">{{$maincategory->category_name}} / {{$subcategory->category_name}}</h4>
                           <input type="text" name="maincategoryid" value="{{$maincategory->id}}" hidden>
                           <input type="text" name="subcategoryid" value="{{$subcategory->id}}" hidden>
                           <div class="form-group" id="type">
                               <label for="type" class="">Condition</label>
                               <figure>
                                   <label class="framed">
                                       <input type="radio" name="condition" value="new" >
                                       New
                                   </label>
                                   <label class="framed">
                                       <input type="radio" name="condition" value="used" >
                                       Used
                                   </label>
                               </figure>
                           </div>
                           <div class="row">
                               <div class="col-md-8">
                                   <div class="form-group">
                                       <label for="title" class="col-form-label ">Title</label>
                                       <input name="title" type="text" class="form-control" id="title" placeholder="Title"  name="title">
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-8-->
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="price" class="col-form-label ">Price</label>
                                       <input name="price" type="text" class="form-control" id="price" >
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

                           <!--end row-->

                           <!--end form-group-->
                           <label>Map</label>
                           <div class="map height-400px" id="map-submit"></div>
                           <input name="latitude" type="text" class="form-control" id="latitude"  hidden >
                           <input name="longitude" type="text" class="form-control" id="longitude" hidden  >
                           <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                   <label for="city" class="col-form-label ">Country</label>

                                     <input name="country" type="text" class="form-control" id="country">
                                 </div>
                                 <!--end form-group-->
                             </div>
                               <div class="col-md-4">
                                   <div class="form-group">
                                     <label for="city" class="col-form-label ">State</label>

                                       <input name="state" type="text" class="form-control" id="state">
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="city" class="col-form-label ">City</label>
                                       <input name="city" type="text" class="form-control" id="city">

                                   </div>
                                   <!--end form-group-->
                               </div>


                           </div>
                           <div class="form-group">
                               <label for="input-location" class="col-form-label">Exact Location</label>
                               <input name="location" type="text" class="form-control location" id="input-location" placeholder="Enter Location" >
                               <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                           </div>
                       </section>

                       <section>
                          <h2>Gallery</h2>
                          <div class="file-upload-previews"></div>
                          <div class="file-upload">
                              <!-- <input type="file" name="productImage[]" class="file-upload-input with-preview" multiple title="Click to add files" > -->
                              <input type="file" name="filename[]" class="file-upload-input with-preview" multiple title="Click to add files">

                              <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                          </div>


                      </section>

                       <section>


                           <h2>Additional Information</h2>
                           <h3>Review Your Details</h3>
                           <div class="row">
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="name" class="col-form-label ">Your Name</label>
                                       <input name="name" type="text" class="form-control" id="name"   >
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-4-->
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="email" class="col-form-label ">Your Email</label>
                                       <input name="email" type="email" class="form-control" id="email"  >
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-4-->
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="phone" class="col-form-label ">Your Phone Number</label>
                                       <input name="phone" type="text" class="form-control" id="phone"  >
                                   </div>
                                   <!--end form-group-->
                               </div>
                               <!--end col-md-4-->
                           </div>
                           <!--end panel-group-->
                       </section>
                       <p id="tbStreet">

                       </p>
                       <p id="tbCity">
                       </p>
                       <section class="clearfix">
                           <div class="form-group">
                               <button type="submit" class="btn btn-primary large icon float-right">Preview<i class="fa fa-chevron-right"></i>
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
      <script>

      $(document).ready(function(){
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        } else {
          x.innerHTML = "Geolocation is not supported by this browser.";
        }
        function showPosition(position) {
          var lat = position.coords.latitude;
          var long=position.coords.longitude;



             var latitude = lat;
             var longitude = long;
             var markerImage = "{{url('/')}}/assets/img/map-marker.png";
             var mapTheme = "light";
             var mapElement = "map-submit";
             var markerDrag = true;
             simpleMap(latitude, longitude, markerImage, mapTheme, mapElement, markerDrag);
              codeLatLng(lat, long);
              $("#latitude").val(latitude);
              $("#longitude").val(longitude);
        }

        function codeLatLng(lat, lng) {
          var geocoder = new google.maps.Geocoder();

  var latlng = new google.maps.LatLng(lat, lng);
  geocoder.geocode({latLng: latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        var arrAddress = results;
        console.log(results);
        $.each(arrAddress, function(i, address_component) {
          if (address_component.types[0] == "locality") {
            $("#city").val( address_component.address_components[0].long_name);
            $("#state").val( address_component.address_components[2].long_name);
            $("#country").val(address_component.address_components[3].long_name);

            itemLocality = address_component.address_components[0].long_name;
          }
        });
      } else {
        alert("No results found");
      }
    } else {
      alert("Geocoder failed due to: " + status);
    }
  });
}

      });



      </script>
      @endpush



      @endsection
