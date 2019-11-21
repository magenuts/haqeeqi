 
                 <div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{url('/')}}/assets/img/logo.png" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
                                <ul class="navbar-nav">
                                    <li class="nav-item active ">
                                        <a class="nav-link" href="#">Home</a>
                                        
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">Listing</a>
                                        <!-- 1st level -->
                                        
                                        <!-- end 1st level -->
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">Pages</a>
                                        <!-- 2nd level -->
                                        
                                        <!-- end 2nd level -->
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="submit.html" class="btn btn-primary text-caps btn-rounded">Submit Ad</a>
                                    </li>
                                    @if (Auth::check())
                                    <li class="nav-item">
                                        
                                        <a href="{{url('/')}}/logout" class="btn btn-primary text-caps btn-rounded loginbutton" >Logout</a>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                        <a href="{{url('/')}}/register" class="btn btn-primary text-caps btn-rounded loginbutton" >Login</a>
                                    </li>
                                    @endif

                                     
                                   
                                </ul>

                                <!--Main navigation list-->
                            </div>
                            <!--end navbar-collapse-->
                        </nav>
                        <!--end navbar-->
                    </div>
                    <!--end container-->
                </div>

                <!-- Login Modal -->

                @push('scripts')
<!-- <script type="text/javascript">

            
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
     -->
                @endpush
