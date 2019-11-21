@extends('layouts.app')
@section('content')
    
        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
               
                @include('frontend.partials.header')
              
                
               
                <div class="page-title">
                    <div class="container">
                        <h1>Password</h1>
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
                            @if(Session::has('emailconfirmation'))
                            <div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Info! </strong>{{Session::get('emailconfirmation')}}.</div>
                            @endif
                           
          
                       </div>
                   </div>
                    <div class="row justify-content-center">

                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                            <form class="form clearfix" id="registerform" >
                                <!-- <div class="form-group">
                                    <label for="name" class="col-form-label required">Your Name</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                                </div> -->
                                <!--end form-group-->
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    
                                    <input name="email" type="hidden" class="form-control" id="email" placeholder="Your Email" value=" {{ Session::get('user_email') }}">
                                   
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" >
                                     <span id="subject" class="form-errors password-feedback" style="color:red;" ></span>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password_confirmation" class="col-form-label required">Repeat Password</label>
                                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Repeat Password" >
                                     <span id="subject" class="form-errors confirm-feedback" style="color:red;" ></span>
                                </div>
                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <!-- <label>
                                        <input type="checkbox" name="newsletter" value="1">
                                        Receive Newsletter
                                    </label> -->
                                    <button type="submit" id="register" class="btn btn-primary"><i class="fa fa-spinner fa-spin show-spin "></i>Submit</button>
                                </div>
                            </form>
                            <hr>
                            <p>
                                By clicking "Submit" button, you agree with our <a href="#" class="link">Terms & Conditions.</a>
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
             $(".show-spin").css({
          "display": "none",

        });
            $('.alert-danger').hide();
                $('#password').keyup(function(){
                    // alert("hy");
                    $('.password-feedback').html('');
                    $('.confirm-feedback').html('');

                    });
                
                jQuery('#registerform').submit(function(e){
                  $(this).attr("disabled", true);
        $(".show-spin").css({
          "display": "inline-block",

        });
                  e.preventDefault();
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                  });
                  var myForm = document.getElementById('registerform');
                  var formData = new FormData(myForm);
                    jQuery.ajax({
                      url: "{{ url('/') }}/setpassword",
                      method : 'post',
                      data: formData,
                      contentType: false,
                       cache: false,
                       processData: false,
                      success: function(result){
                        if(result.success==0){
                          if(result.validation==0){
                            if(result.message.password)
                            {
                              (".login-form-submit").attr("disabled", false);
                  $(".show-spin").css({
                   "display": "none",
                 });
                              $('.password-feedback').html(result.message.password[0]);
                            }
                             if(result.message.password_confirmation){
                              (".login-form-submit").attr("disabled", false);
                  $(".show-spin").css({
                   "display": "none",
                 });
                              $('.confirm-feedback').html(result.message.password_confirmation[0]);
                            }
                          
                          }
                        }
                        
                        else{
                          $(".login-form-submit").attr("disabled", false);
              $(".show-spin").show();
                         window.setTimeout(function() {
                         window.location.href = './';
                        }, 2000);


               

                        }

                      }});
                  });

                 

              });
        </script>
        @endpush
@endsection
