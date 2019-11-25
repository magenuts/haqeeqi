<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Haqeeqi') }}</title>

    <!-- Scripts -->
     <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/user.css">
</head>
<body>
    <div id="app">
  <!--       <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="registerform">
         {!! csrf_field() !!}
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
           <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          <input type="email" id="defaultForm-email" class="form-control validate" name="email">
            <span id="subject" class="form-errors email-feedback" style="color:red;" ></span>
        </div>

       

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success"><i class="fa fa-spinner fa-spin show-spin "></i>Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
 -->



       <div class="page home-page">
            @yield('content')
           </div>
    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
    <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>-->
    <script src="{{url('/')}}/assets/js/selectize.min.js"></script>
    <script src="{{url('/')}}/assets/js/masonry.pkgd.min.js"></script>
    <script src="{{url('/')}}/assets/js/icheck.min.js"></script>
    <script src="{{url('/')}}/assets/js/jquery.validate.min.js"></script>
    <script src="{{url('/')}}/assets/js/custom.js"></script>
    <script type="text/javascript">
      
    </script>
    @stack('scripts')
</body>
</html>
