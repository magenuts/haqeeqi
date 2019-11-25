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
                         
          
                       </div>
                   </div>
                    <div class="row justify-content-center">

                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                            <form class="form clearfix" id="" method="post" action="{{url('/')}}/login">
                              
                               @csrf
                               @if(Session::has('login_error'))
                            <div class="alert alert-warning"><button class="close" data-dismiss="alert"></button><strong>Error! </strong>{{Session::get('login_error')}}.</div>
                            @endif
                                <div class="form-group">
                                  <input type="hidden" name="email" value="{{Session::get('email')}}">
                                    <label for="email" class="col-form-label required">Password</label>
                                    <input name="password" type="password" class="form-control"  placeholder="Your Password" value="{{old('password')}}">
                                   <span id="subject" class="form-errors" style="color:red;">{{ $errors->first('password') }}</span>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-baseline">
                                   
                                    <input type="submit" class="btn btn-primary login-form-submit" value="Submit">
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

    <!--    @push('scripts')
        <script type="text/javascript">
            
           jQuery(document).ready(function(){
            $(".show-spin").css({
          "display": "none",

        });
            $('.alert-danger').hide();
                $('#email').keyup(function(){
                    // alert("hy");
                    $('.email-feedback').html('');
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
                                $(".login-form-submit").attr("disabled", false);
                  $(".show-spin").css({
                   "display": "none",
                 });
                              $('.email-feedback').html(result.message.email[0]);
                            }
                          
                          }
                        }
                        
                        else{
                            $(".login-form-submit").attr("disabled", false);
              $(".show-spin").show();

                         window.setTimeout(function() {
                        window.location = './';
                        }, 2000);


               

                        }

                      }});
                  });

                 

              });
        </script>
        @endpush -->
@endsection
