@extends('layout.app')

@section('title','Products')

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
<li class="breadcrumb-item"><a href="PeersTronix.html" class="text-dark">HOME</a></li>
<li class="breadcrumb-item active" style="font-weight: 700; color: #800080" aria-current="page">Shop</li>
</ol>
</nav>
</div>

<div class="container">
  <div class="row d-flex justify-content-between">
    <p style="color: grey">Showing all</p>
    <form class="form" action="#" method="post">
      <select class="form-control form-control-sm rounded-0" name="sort">
        <option value="default">Default Sorting</option>
        <option value="new">Sort By Newness</option>
        <option value="rating">Sort By Rating</option>
        <option value="low_to_high">Sort By Price: Low To High</option>
        <option value="high_to_low">Sort By Price: High To Low</option>
      </select>
    </form>
  </div>
  <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">
        <a href="{{route('single_product')}}" class="text-decoration-none">
          <div class="card shadow mb-5">
            <img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="300" class="card-img-top w-100" alt="">
            <div class="card-body">
              <h4 class="card-title text-center">Samsung Galaxy</h4>
              <p class="card-text text-center">Ghc 1,500</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <a href="{{route('single_product')}}" class="text-decoration-none">
          <div class="card shadow mb-5">
            <img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="300" class="card-img-top w-100" alt="">
            <div class="card-body">
              <h4 class="card-title text-center">Samsung Galaxy</h4>
              <p class="card-text text-center">Ghc 1,500</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <a href="{{route('single_product')}}" class="text-decoration-none">
          <div class="card shadow mb-5">
            <img src="{{asset('images/4262501_sd--400x400.jpg')}}" height="300" class="card-img-top w-100" alt="">
            <div class="card-body">
              <h4 class="card-title text-center">Samsung Galaxy</h4>
              <p class="card-text text-center">Ghc 1,500</p>
            </div>
          </div>
        </a>
      </div>

  </div>
</div>

@stop
