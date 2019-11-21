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
                            <form class="form clearfix"  action="{{url('/')}}/registration" method="post">
                                
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" value="{{old('email')}}">
                                    <span id="subject" class="form-errors" style="color:red;">{{ $errors->first('email') }}</span>
                                </div>
                               
                                <div class="d-flex justify-content-between align-items-baseline">
                                  
                                    <input type="submit" id="register" class="btn btn-primary login-form-submit" value="Submit"> 
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
          
          $(document).ready(function(){
                            $('#email').keyup(function(){
                    // alert("hy");
                    $('#subject').html('');
                  

                    });
            });

        </script>
        @endpush
@endsection

