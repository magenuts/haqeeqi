@extends('layouts.app')
@section('content')
    
        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
               
                @include('frontend.partials.header')
              
                
               
                <div class="page-title">
                    <div class="container">
                        <h1>Information</h1>
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
                           @if (session('email_confirmation'))
            <h2 class="alert-heading">Email Verification!</h2>
                            <p> {{ session('email_confirmation') }}
                                <a href="sign-in.html" class="link"><strong>Sign In</strong></a> or
                                <a href="register.html" class="link"><strong>Register</strong></a></p>
               
           
        @endif
                            
                        </div>
                    </section>
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

    
@endsection
