@extends('admin.masterpage')
@section('header')
@include('admin.header')
@endsection

  @section('content')

  <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Subcategory</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Add Subcategory</li>
                    </ol>
                </div>
            </div>
  <div class="container-fluid">
    
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Image Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="category-form">
            {!! csrf_field() !!}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Category Title</label>
            <input type="text" name="imgcategorytitle" class="form-control" required>
              <div class="category-error" style="color:red;"></div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="category-button">Submit</button>
      </div>
        </form>
    </div>
  </div>
</div> -->
    <div class="row" style="margin-top:10px;">
                  <div class="col-12">
                      <div class="card">

                          <div class="card-body">

                              <h6 class="card-subtitle">Just add </h6>
                              <form class="m-t-40"  id="category-form" enctype="multipart/form-data" >

                                {!! csrf_field() !!}


                                  <div class="form-group m-b-40">
                                      <label for="input1">Select Main Category</label>
                                   <select name="maincategory" class="browser-default custom-select ">
    <option value="" disabled selected="true">Choose your option</option>
    @foreach($category_list as $category)
  <option value="{{$category->id}}">{{$category->category_name}}</option>
  @endforeach
</select>
                                      <span class="bar"></span>
                                      <span id="subject" class="miancategory_error" style="color:red;"></span>
                                  </div>

                                  <div class="form-group m-b-40">
                                      <label for="input1">Subcategory Name</label>
                                      <input type="text" class="form-control" value="{{old('title')}}" name="category_name" id="title" required >
                                      <span class="bar"></span>
                                      <span id="subject" class="category_error" style="color:red;"></span>
                                  </div>

                                  <!-- <div class="form-group m-b-40">
                                    <label for="input2">Category Description</label>

                                      <textarea name="description" class="form-control"  id="description" required ></textarea>
                                      <span class="bar"></span>
                                  </div> -->

                                  <div class="form-group m-b-40">
                                    <label for="input2"> Subcategory Image</label>

                                      <input type="file" name="image" value="{{old('images')}}" class="form-control"  required onchange="readURL(this);" >
                                        <img id="blah" class="show_image" src="#" height="200" width="100" style="border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;display: none;"  alt="Your selected image..."  />
                                      <span class="bar"></span>
                                      <span id="subject" class="image_error" style="color:red;"></span>
                                  </div>
                                
                                   
                               
                                   <button type="submit" class="btn btn-info " >Submit </button>
                                  <button type="reset" class="btn btn-danger " id="register-button">Reset </button>
                             
                                 

                                  <!-- <div class="form-group m-b-40">
                                      <input type="text" class="form-control" id="input3">
                                      <span class="bar"></span>
                                      <label for="input3">Placeholder</label>
                                  </div> -->



                              </form>
                          </div>
                      </div>

                  </div>
              </div>
            </div>
            <footer class="footer">
                © 2019 Online Portal
            </footer>
            <script type="text/javascript">
                function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                      $('#blah').css('display','block');
                        $('#blah')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
              jQuery(document).ready(function(){

                  // jQuery('#description').summernote({
                  // height:300,
                  // minHeight: null,             // set minimum height of editor
                  // maxHeight: null,             // set maximum height of editor
                  // focus: true                  // set focus to editable area after initializing summernote
                  // });

                jQuery('#category-form').submit(function(e){
                  e.preventDefault();
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                  });
                  var myForm = document.getElementById('category-form');
                  var formData = new FormData(myForm);
                    jQuery.ajax({
                      url: "{{ url('/admin/addsubcategory') }}",
                      method : 'post',
                      data: formData,
                      contentType: false,
                       cache: false,
                       processData: false,
                      success: function(result){
                        if(result.success==0){
                          if(result.validation==0){
                            if(result.message.category_name)
                            {
                              $('.category_error').html(result.message.category_name[0]);
                            }
                           else if(result.message.image)
                            {
                              $('.image_error').html(result.message.image[0]);
                            }
                            else if(result.message.maincategory){
                              $('.miancategory_error').html(result.message.maincategory[0]);
                            }
                          }
                        }
                        
                        else{
                          bootbox.alert({
                title: "Message",
                message:result.message,
                callback: function(){
                   $("#category-form").trigger("reset");
                              $('.image_error').html('');
                              $('.category_error').html('');
                              $('.show_image').css('display','none');
                }   
              });


                        }
                      }});
                  });

                 

              });
            </script>

  @endsection
