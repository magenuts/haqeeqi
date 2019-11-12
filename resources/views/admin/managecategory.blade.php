@extends('admin.masterpage')
@section('header')
@include('admin.header')
@endsection

  @section('content')

      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Category</h3>
          </div>
          <div class="col-md-7 align-self-center">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

              </ol>
          </div>

      </div>

      <div class="container-fluid">
                  <div class="row">
      <div class="col-md-10">

      </div>
      <!-- <div class="col-md-2">
        <button type="button" class="btn waves-effect waves-light  btn-info del-button" data-toggle="modal" data-target="#exampleModal"
         style="margin-left:78px;">Add Category</button>
      </div> -->
      <div class="col-md-2">
    <a href="{{url('/admin/category')}}"><button type="button" class="btn waves-effect waves-light  btn-success "
      >Add Category</button></a>


      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        @if (session('deletecategory'))
            <div class="alert alert-danger">
                {{ session('deletecategory') }}
            </div>
        @endif
      </div>
       
    </div>
       
       <!-- <div id="load" style="position: relative;"> -->
<div class="row" style="margin-top:10px;">
                    <!-- column -->

                    <div class="col-12" id="load" style="position: relative;">
                        <div class="card" >
                            <div class="card-body">
                                <h4 class="card-title">Category List </h4>


                                <div class="table-responsive table-hover" >
                                    <table class="table " id="example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @if(count($category_list) < 0)
                                          <p>Not record yet</p>
                                         @else
                                          @php
                                          $count=1;
                                          @endphp
                
                                          @foreach($category_list as $list)
                                            <tr>
                                                <td><a href="javascript:void(0)">{{$count++}}</a></td>
                                                <td>{{$list->category_name}}</td>

                                              


                                                <td><a href="{{url('/admin/editcategory',$list->id)}}"><button type="button" class="btn waves-effect waves-light   btn-warning">Edit</button></a>
                                              <a href="{{url('/admin/deletecategory',$list->id)}}"  onclick="return confirm('Are You Sure to delete this category?')">  <button type="button" class="btn waves-effect waves-light  btn-danger del-button" data-id="{{ $list->id }}">Delete</button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->

                </div>
              
              <!-- </div> -->

                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

      <footer class="footer">
          © 2019 Online Portal
      </footer>

     <script type="text/javascript">

$(function() {
    $('body').on('click', '.pagination a', function(e) {
        e.preventDefault();

        $('#load a').css('color', '#dfecf6');
        $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="{{url('/')}}/admin_asset/images/Ring-Preloader.gif" />');

        var url = $(this).attr('href');  
        getArticles(url);
        window.history.pushState("", "", url);
    });

    function getArticles(url) {
        $.ajax({
            url : url  
        }).done(function (data) {
            $('.articles').html(data);  
        }).fail(function () {
            alert('Articles could not be loaded.');
        });
    }
});

</script>



              @push('scripts')
              <script type="text/javascript">
              
        $(document).ready(function() {
    // Setup - add a text input to each footer cell
     $('#example').DataTable();

                   
    });
</script>
            @endpush




      @endsection
