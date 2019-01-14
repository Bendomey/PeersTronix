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
  <div class="row d-flex justify-content-between mb-5">
    <p style="color: grey">Showing all</p>
    <form class="form-inline" action="{{route('search_results')}}" method="get">
      <input type="search" name="product_name" class="form-control form-control-lg mr-2">
      <button type="submit" class="btn btn-dark btn-lg">Search</button>
    </form>
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
  @if(count($all_available_product) == 0)

    <div class="alert alert-warning" role="alert">
      <strong>Sorry!</strong> No Product For Sale :(
    </div>

  @endif
  <div class="row mb-5">
    @if(count($all_available_product) > 0)
      @foreach($all_available_product as $product)
      <div class="col-lg-4 col-md-4 col-sm-6">
        <a href='{{url("single_product/$product->product_name")}}' class="text-decoration-none">
          <div class="card shadow mb-5">
            <img src='{{asset("$product->thumb_picture")}}' height="300" class="card-img-top w-100" alt="">
            <div class="card-body">
              <h4 class="card-title text-center">{{$product->product_name}}</h4>
              <p class="d-flex justify-content-center">
                @for($i = 0; $i < $product->product_rating; $i++)
                  <i class="fa fa-star"></i>
                @endfor
                @for($i = 0; $i < (5 - $product->product_rating); $i++)
                  <i class="far fa-star"></i>
                @endfor
              </p>
              <p class="card-text text-center">Ghc {{$product->product_price}}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    @endif
  </div>
  <div class="d-flex justify-content-center">

    {{$all_available_product->links()}}
  </div>
</div>

@stop
