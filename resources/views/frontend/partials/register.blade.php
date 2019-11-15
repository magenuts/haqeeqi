@extends('layouts.app')
@section('content')
    
        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
               
                @include('frontend.partials.header')
              
                
               
                <div class="page-title">
                    <div class="container">
                        <h1>Register</h1>
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
                   <div class="row justify-content-center">
                       <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                         
          
                       </div>
                   </div>
                    <div class="row justify-content-center">

                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                            <form class="form clearfix" id="registerform">
                                <!-- <div class="form-group">
                                    <label for="name" class="col-form-label required">Your Name</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                                </div> -->
                                <!--end form-group-->
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" value="{{old('email')}}">
                                    <span id="subject" class="form-errors email-feedback" style="color:red;" ></span>
                                </div>
                                <!--end form-group-->
                               <!--  <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                </div> -->
                                <!--end form-group-->
                               <!--  <div class="form-group">
                                    <label for="repeat_password" class="col-form-label required">Repeat Password</label>
                                    <input name="repeat_password" type="password" class="form-control" id="repeat_password" placeholder="Repeat Password" required>
                                </div> -->
                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <!-- <label>
                                        <input type="checkbox" name="newsletter" value="1">
                                        Receive Newsletter
                                    </label> -->
                                    <button type="submit" id="register" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                            <hr>
                            <p>
                                By clicking "Register" button, you agree with our <a href="#" class="link">Terms & Conditions.</a>
                            </p>
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
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
            
           jQuery(document).ready(function(){
            $('.alert-danger').hide();
                $('#email').keyup(function(){
                    // alert("hy");
                    $('.email-feedback').html('');
                    });
                
                jQuery('#registerform').submit(function(e){
                  e.preventDefault();
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                  });
                  var myForm = document.getElementById('registerform');
                  var formData = new FormData(myForm);
                    jQuery.ajax({
                      url: "{{ url('/') }}/registration",
                      method : 'post',
                      data: formData,
                      contentType: false,
                       cache: false,
                       processData: false,
                      success: function(result){
                        if(result.success==0){
                          if(result.validation==0){
                            if(result.message.email)
                            {
                              $('.email-feedback').html(result.message.email[0]);
                            }
                          
                          }
                        }
                        
                        else{
                         window.setTimeout(function() {
                        window.location = 'emailinfo';
                        }, 2000);


               

                        }

                      }});
                  });

                 

              });
        </script>
        @endpush
@endsection
