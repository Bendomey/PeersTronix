@extends('layout.app')

@section('title','Cart')

@section('content')

<section class="js-parallax u-promo-block" style="background-image: url({{asset('images/contactUs.jpg')}}); background-size: 100% 100%">
  <div class="container text-white u-ver-center u-content-space">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text-center">
          <blockquote>
            <h1 class="text-light" style="font-weight: 900">Cart</h1>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="mb-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-dot d-flex justify-content-center">
      <li class="breadcrumb-item"><a href="{{route('/')}}" class="text-dark">HOME</a></li>
      <li class="breadcrumb-item active" style="font-weight: 700; color: #800080" aria-current="page">CART</li>
    </ol>
  </nav>
</div>


<div class="container mb-5">

@if(count($cart_products) > 0)
  @foreach($cart_products as $cart_product)
  <div class="row mb-5 py-lg-3 py-sm-3 roomBorder">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <img src='{{asset("$cart_product->thumb_picture")}}' height="350" class="w-100" alt="">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 ">
      <div class="container my-lg-5 my-md-4 my-sm-3">
        <h3 class="text-uppercase font-weight-bold" style="font-family: 'Old Standard TT',serif;">{{$cart_product->product_name}}</h3>
        <h4 class=" font-weight-bold" style="font-family: 'Old Standard TT',serif;">{{$cart_product->product_price}}</h4>
        <div class="star d-inline-block mb-3">
          @for($i = 0; $i < $cart_product->product_rating; $i++)
            <i class="fa fa-star"></i>
          @endfor
          @for($i = 0; $i < (5 - $cart_product->product_rating); $i++)
            <i class="far fa-star"></i>
          @endfor
        </div>
        <p><a href='{{url("remove_product_from_cart/$cart_product->product_id")}}' class="btn btn-lg btn-outline-primary px-5 py-3 rounded-0">REMOVE</a></p>
      </div>
    </div>
  </div>
  @endforeach
  @else

  <div class="alert alert-info show" role="alert">
    <strong>Alert!</strong> No Product Available In Your Cart. <a href="{{route('products')}}">Click Here</a> to add products
  </div>

@endif
  <div class="d-flex justify-content-end">
    {{$cart_products->links()}}
  </div>
  <div class="d-flex justify-content-end flex-direction-row pt-5" style="border-top: 1px solid #eee">
    <span class="mr-5"><span style="font-size: 20px; color: #8e8e8e" class="mr-3">Total</span><span style="font-size: 30px;">Ghc {{$totalPrice}}</span></span>
    <a href="{{route('checkout')}}" class="btn btn-dark btn-lg p-3 ">CHECKOUT</a>
  </div>

</div>


@stop
