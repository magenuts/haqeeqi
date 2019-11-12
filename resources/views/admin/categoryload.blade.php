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
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->

                </div>
                <div class="row">
                  <div class="col-md-4">
                    
                  </div>
                  <div class="col-md-4">
                    
                  </div>
                  <div class="col-md-2">
                    
                  </div>
                  <div class="col-md-2">
                    <div>
                   
                    </div>
                  </div>
                  
                  
                </div>
              <!-- </div> -->

              @push('scripts')
              <script type="text/javascript">
              
        $(document).ready(function() {
    // Setup - add a text input to each footer cell
     $('#example').DataTable();

                   
    });
</script>
            @endpush