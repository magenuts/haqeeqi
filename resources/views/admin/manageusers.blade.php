@extends('admin.masterpage')
@section('header')
@include('admin.header')
@endsection

  @section('content')

      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Users</h3>
          </div>
          <div class="col-md-7 align-self-center">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

              </ol>
          </div>

      </div>

      <div class="container-fluid">
                  <div class="row">
     
      <!-- <div class="col-md-2">
        <button type="button" class="btn waves-effect waves-light  btn-info del-button" data-toggle="modal" data-target="#exampleModal"
         style="margin-left:78px;">Add Category</button>
      </div> -->
        <div class="col-md-2" >
 <a href="{{url('/admin/subcategory')}}" ><button type="button" class="btn waves-effect waves-light  btn-success "
      >Add User</button></a>
      </div>
      <div class="col-md-10">
   
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
                                <h4 class="card-title">Users List </h4>


                                <div class="table-responsive table-hover" >
                                    <table class="table " id="example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>IsVerified</th>

                                                <th>Phone</th>
                                                <th>PhoneVerified</th>
                                                 <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @if(count($users) < 0)
                                          <p>Not record yet</p>
                                         @else
                                          @php
                                          $count=1;
                                          @endphp
                
                                          @foreach($users as $user)
                                            <tr>
                                                <td><a href="javascript:void(0)">{{$count++}}</a></td>
                                                <td>{{$user->username}}</td>

                                              <td>{{$user->email}}</td>
                                               @if($user->is_verified==1)
                                              <td>Verified</td>
                                              @else
                                              <td>Not Verified</td>

                                              @endif


                                              
                                              @if($user->phone=="")
                                              <td>Not added</td>
                                              @else
                                              <td>{{$user->phone}}</td>

                                              @endif

                                             
                                  @if($user->phone_verified==0)
                                              <td>Not verified</td>
                                              @else
                                              <td>verified</td>

                                              @endif

                                                <td><a href="{{url('/admin/editsubcategory',$user->id)}}"><button type="button" class="btn waves-effect waves-light   btn-warning "><i class="fa fa-edit" rel="tooltip" title="Edit"></i></button></a>
                                              <button type="button" class="btn waves-effect waves-light  btn-danger del-button" data-id="{{ $user->id }}"><i class="fa fa-trash" rel="tooltip" title="Delete"></i></button>
                                              @if($user->is_verified==0)
                                               <button type="button" class="btn waves-effect waves-light  btn-primary status-button" data-id="{{ $user->id }}"><i class="fa fa-check-circle" rel="tooltip" title="Activate"></i></button>
                                              @else
                                               <button type="button" class="btn waves-effect waves-light  btn-primary status-button" data-id="{{ $user->id }}"><i class="fa fa-ban" rel="tooltip" title="Deactivate"></i></button>

                                              @endif
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

                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

      <footer class="footer">
          © 2019 Online Portal
      </footer>
 @push('scripts')
     <script type="text/javascript">
        jQuery(document).ready(function(){
     $('#example').DataTable();

        $("[rel=tooltip]").tooltip({ placement: 'right'});

        //Change user status

        jQuery('.status-button').click(function(e){
            var el = this;
            table = $("#example").DataTable();
            e.preventDefault();
            var token = $("meta[name='csrf-token']").attr("content");
             var id = $(this).data("id");
             bootbox.confirm("Do you really want to change status?", function(getresult) {
               if(getresult){
              jQuery.ajax({
                url:"{{ url('/admin/userstatus')}}/"+id,
                method : 'post',

                data: { id: id,
                  "_token": token,
                 },
                success: function(result){

                  if(result.success == 0){

                    bootbox.alert({
          title: "Message",
          message:result.message,
          callback: function(){
              // window.setTimeout(function(){location.reload()},2000)
}
});
                  }
                  else{
                             
                    bootbox.alert({
              title: "Message",
              message:result.message,
              callback: function(){
               window.setTimeout(function(){location.reload()},1000)
              }
              });
                  }
                }});
              }
              });
            });


        //



          jQuery('.del-button').click(function(e){
            var el = this;
            e.preventDefault();
            var token = $("meta[name='csrf-token']").attr("content");
             var id = $(this).data("id");
             bootbox.confirm("Do you really want to delete record?", function(getresult) {
               if(getresult){
              jQuery.ajax({
                url:"{{ url('/admin/deletesubcategory')}}/"+id,
                method : 'post',
                data: { id: id,
                  "_token": token,
                 },
                success: function(result){

                  if(result.success == 0){
                    bootbox.alert({
          title: "Message",
          message:result.message,
          callback: function(){
              // window.setTimeout(function(){location.reload()},2000)
}
});
                  }
                  else{

                    $(el).closest('tr').css('background','tomato');
                    $(el).closest('tr').fadeOut(800,function(){
                    $(this).remove();
                    });
                    bootbox.alert({
              title: "Message",
              message:result.message,
              callback: function(){
              // window.setTimeout(function(){location.reload()},2000)
              }
              });
                  }
                }});
              }
              });
            });
        });
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



             
            
            @endpush




      @endsection
