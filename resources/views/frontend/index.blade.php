@extends('layouts.app')
@section('content')
    
 @if(Session::has('passwordset'))
<!-- Central Modal Medium Danger -->
<div class="modal fade myModal" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Information</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
          <p>Congratulations!
          You have successfully registered your account. For further procedure please login to the site.</p>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
       
        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Ok</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Danger-->
@elseif(Session::has('email_confirmation'))

<div class="modal fade myModal" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Information</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
          <p>Congratulations!
          Check your inbox to confirm your email address.</p>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
       
        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Ok</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

@endif


        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
               
                @include('frontend.partials.header')
              
                <div class="page-title">
                    <div class="container">
                        <h1 class="opacity-60 center">
                            <a href="#">Buy</a>, <a href="#">Sell</a> or <a href="#">Find</a> What You need
                        </h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <!--============ Hero Form ==========================================================================-->
                <form class="hero-form form">
                    <div class="container">
                        <!--Main Form-->
                        <div class="main-search-form">
                            <div class="form-row">
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group">
                                        <label for="what" class="col-form-label">What Are You Looking For?</label>
                                        <input name="keyword" type="text" class="form-control" id="what" placeholder="Enter Anything">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                                <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary width-100">Search</button>
                                </div>
                                <!--end col-md-3-->
                            </div>
                            <!--end form-row-->
                        </div>
                        <!--end main-search-form-->
                        <!--Alternative Form-->
                        <div class="alternative-search-form">
                            <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                            <div class="collapse" id="collapseAlternativeSearchForm">
                                <div class="wrapper">
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                                            <label>
                                                <input type="checkbox" name="new">
                                                New
                                            </label>
                                            <label>
                                                <input type="checkbox" name="used">
                                                Used
                                            </label>
                                            <label>
                                                <input type="checkbox" name="with_photo">
                                                With Photo
                                            </label>
                                            <label>
                                                <input type="checkbox" name="featured">
                                                Featured
                                            </label>
                                        </div>
                                        <!--end col-xl-6-->
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-row">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                                        <span class="input-group-addon small">$</span>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-4-->
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                                        <span class="input-group-addon small">$</span>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-4-->
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <select name="distance" id="distance" class="small" data-placeholder="Distance" >
                                                            <option value="">Distance</option>
                                                            <option value="1">1km</option>
                                                            <option value="2">5km</option>
                                                            <option value="3">10km</option>
                                                            <option value="4">50km</option>
                                                            <option value="5">100km</option>
                                                        </select>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-3-->
                                            </div>
                                            <!--end form-row-->
                                        </div>
                                        <!--end col-xl-6-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end collapse-->
                        </div>
                        <!--end alternative-search-form-->
                    </div>
                    <!--end container-->
                </form>
                <!--============ End Hero Form ======================================================================-->
                <div class="background">
                    <div class="background-image">
                        <img src="assets/img/hero-background-image-02.jpg" alt="">
                    </div>
                    <!--end background-image-->
                </div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <!--============ Categories =============================================================================-->

            <section class="block">
                <div class="container">
                    <h2>Categories</h2>
                    <ul class="categories-list clearfix">
                          @foreach($categories as $category)
           <!--  {{$category}} -->
                        <li>
                            <i class="category-icon" style="background-color:silver;">
                                <img src="{{url('/assets/category')}}/{{$category->image}}" alt="">
                            </i>
                            <h3><a href="#">{{$category->category_name}}</a></h3>
                            <div class="sub-categories">
                                @foreach($category->subcategories->take(2) as $subcategory)
                                <a href="#">{{$subcategory->category_name}}</a>
                                @endforeach
                            </div>
                        </li>
            @endforeach

                        <!--end category item-->
                        <!-- <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-pets-b.png" alt="">
                            </i>
                            <h3><a href="#">Pets</a></h3>
                            <div class="sub-categories">
                                <a href="#">Dogs</a>
                                <a href="#">Cats</a>
                                <a href="#">Exotic</a>
                            </div>
                        </li> -->
                        <!--end category item-->
                       <!--  <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" alt="">
                            </i>
                            <h3><a href="#">Real Estate</a></h3>
                            <div class="sub-categories">
                                <a href="#">Houses</a>
                                <a href="#">Apartments</a>
                            </div>
                        </li> -->
                        <!--end category item-->
                       <!--  <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-jobs-b.png" alt="">
                            </i>
                            <h3><a href="#">Jobs</a></h3>
                            <div class="sub-categories">
                                <a href="#">Find Job</a>
                                <a href="#">Offer Job</a>
                            </div>
                        </li> -->
                        <!--end category item-->

                       <!--  <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-cars-b.png" alt="">
                            </i>
                            <h3><a href="#">Car</a></h3>
                            <div class="sub-categories">
                                <a href="#">New</a>
                                <a href="#">Used</a>
                                <a href="#">Rent</a>
                            </div>
                        </li> -->
                        <!--end category item-->
                       <!--  <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-mobile-b.png" alt="">
                            </i>
                            <h3><a href="#">Mobile</a></h3>
                            <div class="sub-categories">
                                <a href="#">Apple</a>
                                <a href="#">Samsung</a>
                            </div>
                        </li> -->
                        <!--end category item-->
                      <!--   <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-cameras-b.png" alt="">
                            </i>
                            <h3><a href="#">Cameras</a></h3>
                            <div class="sub-categories">
                                <a href="#">Photo</a>
                                <a href="#">Video</a>
                                <a href="#">Lenses</a>
                            </div>
                        </li> -->
                        <!--end category item-->
                       <!--  <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-sport-b.png" alt="">
                            </i>
                            <h3><a href="#">Sport</a></h3>
                            <div class="sub-categories">
                                <a href="#">Ski</a>
                                <a href="#">Bike</a>
                                <a href="#">Hockey</a>
                            </div>
                        </li> -->
                        <!--end category item-->

                       <!--  <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-electro-b.png" alt="">
                            </i>
                            <h3><a href="#">Electro</a></h3>
                            <div class="sub-categories">
                                <a href="#">TV</a>
                                <a href="#">Radio</a>
                                <a href="#">PC</a>
                            </div>
                        </li> -->
                        <!--end category item-->
                       <!--  <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-clothing-b.png" alt="">
                            </i>
                            <h3><a href="#">Clothing</a></h3>
                            <div class="sub-categories">
                                <a href="#">Shirts</a>
                                <a href="#">Trousers</a>
                            </div>
                        </li> -->
                        <!--end category item-->
                        <!-- <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-books-b.png" alt="">
                            </i>
                            <h3><a href="#">Books</a></h3>
                            <div class="sub-categories">
                                <a href="#">Fantasy</a>
                                <a href="#">History</a>
                                <a href="#">Sci-Fi</a>
                            </div>
                        </li> -->
                        <!--end category item-->
                       <!--  <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-music-b.png" alt="">
                            </i>
                            <h3><a href="#">Music</a></h3>
                            <div class="sub-categories">
                                <a href="#">Rock</a>
                                <a href="#">Techno</a>
                                <a href="#">Folk</a>
                            </div>
                        </li> -->
                        <!--end category item-->
                    </ul>
                    <!--end categories-list-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
            <!--============ End Categories =========================================================================-->
            <!--============ Featured Ads ===========================================================================-->
            <section class="block">
                <div class="container">
                    <h2>Featured Ads</h2>
                    <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Home & Decor</a>
                                        <a href="single-listing-1.html" class="title">Furniture for sale</a>
                                        <span class="tag">Offer</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-01.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Manhattan, NY</a>
                                </h4>
                                <div class="price">$80</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>02.05.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Jane Doe
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                </div>
                                <!--end description-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Education</a>
                                        <a href="single-listing-1.html" class="title">Creative Course</a>
                                        <span class="tag">Offer</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-02.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Nashville, TN</a>
                                </h4>
                                <div class="price">$125</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>28.04.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Peter Browner
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit amet. </p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Start Date</figure>
                                            <aside>25.06.2017 09:00</aside>
                                        </li>
                                        <li>
                                            <figure>Length</figure>
                                            <aside>2 months</aside>
                                        </li>
                                        <li>
                                            <figure>Bedrooms</figure>
                                            <aside>3</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Adventure</a>
                                        <a href="single-listing-1.html" class="title">Into The Wild</a>
                                        <span class="tag">Ad</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-03.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Seattle, WA</a>
                                </h4>
                                <div class="price">$1,560</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>21.04.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Peak Agency
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Nam eget ullamcorper massa. Morbi fringilla lectus nec lorem tristique gravida</p>
                                </div>
                                <!--end description-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                    </div>
                </div>
                <div class="background" data-background-color="#fff"></div>
                <!--end background-->
            </section>
            <!--============ End Featured Ads =======================================================================-->
            <!--============ Features Steps =========================================================================-->
            <section class="block has-dark-background">
                <div class="container">
                    <div class="block">
                        <h2>Selling With Us Is Easy</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-user.png" alt="">
                                        <span>1</span>
                                    </figure>
                                    <h3>Create an Account</h3>
                                    <p>Etiam molestie viverra dui vitae mattis. Ut velit est</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-upload.png" alt="">
                                        <span>2</span>
                                    </figure>
                                    <h3>Submit Your Ad</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-like.png" alt="">
                                        <span>3</span>
                                    </figure>
                                    <h3>Make a Deal</h3>
                                    <p>Nunc ultrices eu urna quis cursus. Sed viverra ullamcorper</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-wallet.png" alt="">
                                        <span>4</span>
                                    </figure>
                                    <h3>Enjoy the Money!</h3>
                                    <p>Integer nisl ipsum, sodales sed scelerisque nec, aliquet sit</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end block-->
                </div>
                <!--end container-->
                <div class="background" data-background-color="#2b2b2b"></div>
                <!--end background-->
            </section>
            <!--end block-->
            <!--============ End Features Steps =====================================================================-->
            <!--============ Recent Ads =============================================================================-->
            <section class="block">
                <div class="container">
                    <h2>Recent Ads</h2>
                    <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">
                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Real Estate</a>
                                        <a href="single-listing-1.html" class="title">Luxury Apartment</a>
                                        <span class="tag">Offer</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-04.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Greeley, CO</a>
                                </h4>
                                <div class="price">$75,000</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>13.03.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Hills Estate
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Area</figure>
                                            <aside>368m<sup>2</sup></aside>
                                        </li>
                                        <li>
                                            <figure>Bathrooms</figure>
                                            <aside>2</aside>
                                        </li>
                                        <li>
                                            <figure>Bedrooms</figure>
                                            <aside>3</aside>
                                        </li>
                                        <li>
                                            <figure>Garage</figure>
                                            <aside>1</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Architecture</a>
                                        <a href="single-listing-1.html" class="title">We'll Redesign Your Apartment</a>
                                        <span class="tag">Offer</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-05.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Greeley, CO</a>
                                </h4>
                                <div class="price">
                                    <span class="appendix">From</span>
                                    $200
                                </div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>13.03.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>XL Designers
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Area</figure>
                                            <aside>368m<sup>2</sup></aside>
                                        </li>
                                        <li>
                                            <figure>Bathrooms</figure>
                                            <aside>2</aside>
                                        </li>
                                        <li>
                                            <figure>Bedrooms</figure>
                                            <aside>3</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="ribbon-featured">Featured</div>
                            <!--end ribbon-->
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Jobs</a>
                                        <a href="single-listing-1.html" class="title">Seeking for a Job</a>
                                        <span class="tag">Demand</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-06.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Delavan, IL</a>
                                </h4>
                                <div class="price">$1,200</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>10.03.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Aurelio Thomas
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Degree</figure>
                                            <aside>Bachelor’s</aside>
                                        </li>
                                        <li>
                                            <figure>Category</figure>
                                            <aside>Art & Design</aside>
                                        </li>
                                        <li>
                                            <figure>Experience</figure>
                                            <aside>5 years</aside>
                                        </li>
                                        <li>
                                            <figure>Language</figure>
                                            <aside>English, German</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Pets & Animals</a>
                                        <a href="single-listing-1.html" class="title">Baby Cats</a>
                                        <span class="tag">Offer</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-07.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Detroit, MI</a>
                                </h4>
                                <div class="price">
                                    <span class="appendix">From</span>
                                    $80
                                </div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>23.02.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Detroit Pet Center
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Pellentesque ullamcorper justo quis bibendum
                                        consequat. Integer id euismod lacus, facilisis faucibus urna.
                                    </p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Age</figure>
                                            <aside>2 weeks</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Mobiles</a>
                                        <a href="single-listing-1.html" class="title">Used Smartphone</a>
                                        <span class="tag">Offer</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-08.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">West Roxbury, MA</a>
                                </h4>
                                <div class="price">$300</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>28.02.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Gloria A. Crawford
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Vestibulum congue at justo semper dignissim. Pellentesque ullamcorper justo quis bibendum
                                        consequat. Integer id euismod lacus, facilisis faucibus urna.
                                    </p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Status</figure>
                                            <aside>Used</aside>
                                        </li>
                                        <li>
                                            <figure>Brand</figure>
                                            <aside>Samsung</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Cars</a>
                                        <a href="single-listing-1.html" class="title">Offroad Car</a>
                                        <span class="tag">Offer</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-09.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Nehalem, OR</a>
                                </h4>
                                <div class="price">$30,000</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>14.01.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Leonardo
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Nam eget imperdiet massa. Cras dolor nulla, tristique eu nisl ut, venenatis volutpat massa.
                                        Integer imperdiet finibus ipsum vitae scelerisque.
                                    </p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Brand</figure>
                                            <aside>Jeep</aside>
                                        </li>
                                        <li>
                                            <figure>Engine</figure>
                                            <aside>Diesel</aside>
                                        </li>
                                        <li>
                                            <figure>Mileage</figure>
                                            <aside>28,630</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Clothing</a>
                                        <a href="single-listing-1.html" class="title">High Boots</a>
                                        <span class="tag">Offer</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-10.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Raleigh, NC</a>
                                </h4>
                                <div class="price">$67</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>05.01.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Bobby
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Nam pulvinar mollis tortor, eu lobortis mauris luctus non. Integer lobortis sapien enim,
                                        ut imperdiet leo faucibus id. Fusce tincidunt nunc elit, at varius erat rutrum vitae.
                                    </p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Status</figure>
                                            <aside>Used</aside>
                                        </li>
                                        <li>
                                            <figure>Material</figure>
                                            <aside>Genuine Leather</aside>
                                        </li>
                                        <li>
                                            <figure>Size</figure>
                                            <aside>10</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Books & Magazines</a>
                                        <a href="single-listing-1.html" class="title">Will Buy "Behind the Sea" Book</a>
                                        <span class="tag">Demand</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-11.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Long Beach, CA</a>
                                </h4>
                                <div class="price">$30</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>02.01.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Patty McAlexander
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Mauris nisi ligula, pulvinar eu commodo eu, semper id quam. In vitae purus bibendum,
                                        mattis ex nec, eleifend diam. Cras at vehicula metus. Sed elementum lectus ut aliquet vehicula.
                                    </p>
                                </div>
                                <!--end description-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->
                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
            <!--============ End Recent Ads =========================================================================-->
            <!--============ Newsletter =============================================================================-->
            <section class="block">
                <div class="container">
                    <div class="box has-dark-background">
                        <div class="row align-items-center justify-content-center d-flex">
                            <div class="col-md-10 py-5">
                                <h2>Get the Latest Ads in Your Inbox</h2>
                                <form class="form email">
                                    <div class="form-row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="newsletter-category" class="col-form-label">Category?</label>
                                                <select name="newsletter-category" id="newsletter-category" data-placeholder="Select Category" >
                                                    <option value="">Select Category</option>
                                                    <option value="1">Computers</option>
                                                    <option value="2">Real Estate</option>
                                                    <option value="3">Cars & Motorcycles</option>
                                                    <option value="4">Furniture</option>
                                                    <option value="5">Pets & Animals</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <label for="newsletter-email" class="col-form-label">Your Email</label>
                                                <input name="newsletter-email" type="email" class="form-control" id="newsletter-email" placeholder="Your Email">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                        <div class="col-md-1 col-sm-1">
                                            <div class="form-group">
                                                <label class="invisible">.</label>
                                                <button type="submit" class="btn btn-primary width-100"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                </form>
                                <!--end form-->
                            </div>
                        </div>
                        <div class="background">
                            <div class="background-image">
                                <img src="assets/img/hero-background-image-01.jpg" alt="">
                            </div>
                            <!--end background-image-->
                        </div>
                        <!--end background-->
                    </div>
                    <!--end box-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->

            <section class="block">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-around">
                        <a href="#">
                            <img src="assets/img/partner-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/partner-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/partner-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/partner-4.png" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/partner-5.png" alt="">
                        </a>
                    </div>
                </div>

            </section>

        </section>
        @include('frontend.partials.footer')
        @push('scripts')
       <script type="text/javascript">
           $('.myModal').modal('show');
       </script>
       @endpush
@endsection