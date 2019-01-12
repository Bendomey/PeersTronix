@extends('layout.app')

@section('title','Shop')

@section('content')
<section class="js-parallax u-promo-block" style="background-image: url(images/contactUs.jpg); background-size: 100% 100%">
  <div class="container text-white u-ver-center u-content-space">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text-center">
          <blockquote>
            <h1 class="text-light" style="font-weight: 900">Shop</h1>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
<!--body itself-->
<div class="mb-5">
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-dot d-flex justify-content-center">
  <li class="breadcrumb-item"><a href="{{route('/')}}" class="text-dark">HOME</a></li>
<li class="breadcrumb-item"><a href="{{route('products')}}" class="text-dark">Shop</a></li>
<li class="breadcrumb-item active" style="font-weight: 700; color: #800080" aria-current="page">{{$id}}</li>
</ol>
</nav>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
      <img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="400" class="w-100 mb-1" alt="">
      <div class="row">
        <div class="col-3">
          <a href="{{asset('images/4262501_sd--400x400.jpg')}}" target="_blank"><img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="100" class="w-100 img-thumbnail mb-1" alt=""></a>
        </div>
        <div class="col-3">
          <a href="{{asset('images/4262501_sd--400x400.jpg')}}" target="_blank"><img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="100" class="w-100 img-thumbnail mb-1" alt=""></a>
        </div>
        <div class="col-3">
          <a href="{{asset('images/4262501_sd--400x400.jpg')}}" target="_blank"><img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="100" class="w-100 img-thumbnail mb-1" alt=""></a>
        </div>
        <div class="col-3">
          <a href="{{asset('images/4262501_sd--400x400.jpg')}}" target="_blank"><img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="100" class="w-100 img-thumbnail mb-1" alt=""></a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
      <h1>SAMSUNG GALAXY</h1>
      <h4>Ghc 400</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <a href="#" class="btn btn-dark btn-lg btn-block"><i class="fa fa-cart-arrow-down"></i> Purchase</a>
    </div>
  </div>
  <!-- description and reviews -->

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="additional_info-tab" data-toggle="tab" href="#additional_info" role="tab" aria-controls="additional_info" aria-selected="false">Additional Information</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active mt-4 mb-5" id="description" role="tabpanel" aria-labelledby="description-tab">
          <p>hello</p>
        </div>
        <div class="tab-pane fade mb-5 mt-4" id="additional_info" role="tabpanel" aria-labelledby="additional_info-tab">
          <p>
            <ul>
              <li>
                <strong>Brand : </strong> Samsung
              </li>
              <li>
                <strong>Color :</strong> Red
              </li>
            </ul>
            <p>
              <h5>More Information</h5>
              <p>hello world</p>
            </p>
          </p>
        </div>
    </div>



  <div class="d-flex justify-content-center">
      <h1>Related Products</h1>
  </div>
  <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">
        <a href="{{url('single_product/1')}}" class="text-decoration-none">
          <div class="card shadow mb-5">
            <img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="300" class="card-img-top w-100" alt="">
            <div class="card-body">
              <h4 class="card-title text-center">Samsung Galaxy</h4>
              <p class="d-flex justify-content-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <!-- <i class="fa fa-star-of-life"></i> -->
                <i class="fa fa-star-half-alt"></i>
              </p>
              <p class="card-text text-center">Ghc 1,500</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <a href="{{url('single_product/2')}}" class="text-decoration-none">
          <div class="card shadow mb-5">
            <img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="300" class="card-img-top w-100" alt="">
            <div class="card-body">
              <h4 class="card-title text-center">Samsung Galaxy</h4>
              <p class="d-flex justify-content-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <!-- <i class="fa fa-star-of-life"></i> -->
                <i class="fa fa-star-half-alt"></i>
              </p>
              <p class="card-text text-center">Ghc 1,500</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <a href="{{url('single_product/3')}}" class="text-decoration-none">
          <div class="card shadow mb-5">
            <img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="300" class="card-img-top w-100" alt="">
            <div class="card-body">
              <h4 class="card-title text-center">Samsung Galaxy</h4>
              <p class="d-flex justify-content-center">
                <i class="fa fa-star"></i>
                <i class="far fa-star"></i>
                <!-- <i class="fa fa-star-of-life"></i> -->
                <i class="fa fa-star-half-alt"></i>
              </p>
              <p class="card-text text-center">Ghc 1,500</p>
            </div>
          </div>
        </a>
      </div>

  </div>
</div>

@stop
