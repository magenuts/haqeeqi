@extends('layouts.app')
@section('content')

      <header class="hero">
          <div class="hero-wrapper">
              <!--============ Secondary Navigation ===============================================================-->

              @include('frontend.partials.header')



              <div class="page-title">
                  <div class="container">
                      <h1>Post Your Ad</h1>
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

    <h3>Choose A Category</h3>
                  <div class="row">




  <div class="col-4">
    <div class="list-group" id="myList" role="tablist">
      @foreach($category_list as $category)
  <a class="list-group-item list-group-item-action maincategory" data-toggle="list" href="#home" role="tab" data-item-id="{{$category->id}}">{{$category->category_name}}</a>
  @endforeach
</div>
  </div>
  <div class="col-6">
    <div class="tab-content">
  <div class="tab-pane " id="home" role="tabpanel">
    <ul class="tabList">
      
    </ul>
  </div>


</div>
  </div>
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
          $('#tab-content').hide();

          $('#myList a').on('click', function (e) {
          var id=$(this).data("item-id");
          e.preventDefault();
          var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                url: "{{ url('/subcategorylist')}}",
                method: 'GET',
                data: { id: id,
                 },
                success: function(data) {
                  $('.tabList').html(data);


                }
            });
            });
          });

      </script>
      @endpush
@endsection
