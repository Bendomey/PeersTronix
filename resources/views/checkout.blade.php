@extends('layout.app')

@section('title','Checkout')

@section('content')


<section class="js-parallax u-promo-block" style="background-image: url({{asset('images/contactUs.jpg')}}); background-size: 100% 100%">
  <div class="container text-white u-ver-center u-content-space">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text-center">
          <blockquote>
            <h1 class="text-light" style="font-weight: 900">Checkout</h1>
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
      <li class="breadcrumb-item"><a href="{{route('cart')}}" class="text-dark">CART</a></li>
      <li class="breadcrumb-item active" style="font-weight: 700; color: #800080" aria-current="page">CHECKOUT</li>
    </ol>
  </nav>
</div>


<div class="container mb-5">

      <p class="font-weight-bold" style="font-size: 2rem; font-family: 'calibri'">PERSONAL INFORMATION AND DELIVERY ADDRESS</p>
      <form class="form" action="{{route('buy_product')}}" method="post">
        @csrf
        <div class="form-group">
          <input type="text" name="buyer_name" class="form-control form-control-lg p-3 rounded-0" style="font-size: 15px" placeholder="FULL NAME"  required>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col">
              <input type="email" name="buyer_email" class="form-control form-control-lg p-3 rounded-0" style="font-size: 15px" placeholder="EMAIL" required >
            </div>
            <div class="col">
              <input type="tel" name="buyer_contact" class="form-control form-control-lg p-3 rounded-0" style="font-size: 15px" placeholder="PHONE" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col">
              <input type="text" name="buyer_city" class="form-control form-control-lg p-3 rounded-0" style="font-size: 15px" placeholder="CITY" required>
            </div>
            <div class="col">
              <input type="text" name="address" class="form-control form-control-lg p-3 rounded-0" style="font-size: 15px" placeholder="ADDRESS" required>
            </div>
          </div>
        </div>

        <p class="font-weight-bold mt-5" style="font-size: 2rem; font-family: 'calibri'">YOUR CART</p>

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
                    <i class="fa fa-star text-warning"></i>
                  @endfor
                  @for($i = 0; $i < (5 - $cart_product->product_rating); $i++)
                    <i class="far fa-star text-warning"></i>
                  @endfor
                </div>
                <p><a href='{{url("remove_product_from_cart/$cart_product->product_id")}}' class="btn btn-lg btn-outline-primary px-5 py-3 rounded-0">REMOVE</a></p>
              </div>
            </div>
          </div>
          @endforeach
        @else

        <div class="alert alert-info show" role="alert">
          <strong>Alert!</strong> No Product Available.
        </div>

        @endif
          <div class="d-flex justify-content-end">
            {{$cart_products->links()}}
          </div>
        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-dark btn-lg p-3">CHECKOUT</button>
        </div>

      </form>




</div>


@stop
