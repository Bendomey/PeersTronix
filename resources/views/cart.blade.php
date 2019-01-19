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

  <div class="row">
    <div class="col-lg-9 col-md-8 col-sm-12 mb-5">
      @if(count($cart_products) > 0)
        @foreach($cart_products as $cart_product)
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="col">Product Name</th>
                <th class="col">Product Image</th>
                <th class="col">Product Price</th>
                <th class="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td ><h5 class="text-uppercase font-weight-bold" style="font-family: 'Old Standard TT',serif;">{{$cart_product->product_name}}</h5></td>
                <td><img src='{{asset("$cart_product->thumb_picture")}}'  class="w-100" height="50" alt=""> </td>
                <td>Ghc {{$cart_product->product_price}}</td>
                <td class="col text-center"><a href='{{url("remove_product_from_cart/$cart_product->product_id")}}'> <i class="fa fa-times"></i> </a></td>
              </tr>
            </tbody>
          </table>
        @endforeach
      @else
        <div class="alert alert-info show" role="alert">
          <strong>Alert!</strong> No Product Available In Your Cart. <a href="{{route('products')}}">Click Here</a> to add products
        </div>

      @endif
        <div class="d-flex justify-content-end">
          {{$cart_products->links()}}
        </div>
      <div class=" d-flex justify-content-end flex-direction-row py-2" style="border-top: 1px solid #eee; border-bottom: 1px solid #eee">
        <span class="mr-5"><span style="font-size: 15px; color: #8e8e8e" class="mr-3">Total</span><span style="font-size: 25px;">Ghc {{$totalPrice}}</span></span>
        <input type="hidden" id="cartView">
        <a href="{{route('checkout')}}" class="btn btn-dark rounded-0 p-3 checkoutBtnCart">CHECKOUT</a>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
      <div class="card shadow mb-5 py-lg-3 py-md-3">
        <div class="card-body">
          <h3 class="text-center">Categories</h3>
          <ul>
            <li><a href="{{'products'}}">All Types</a></li>
            <li><a href="{{'laptop'}}">Laptops</a></li>
            <li><a href="{{'phone'}}">Phones</a></li>
            <li><a href="{{'computer_part'}}">Computer Part</a></li>
          </ul>
        </div>
      </div>
      <div class="card shadow py-lg-3 py-md-3">
        <div class="card-body">
          <h3 class="text-center">Services</h3>
          <ul>
            <li>Laptop Repair</li>
            <li>Network Support</li>
            <li>Virus Removal</li>
            <li>Data Recovery</li>
          </ul>
          <div class="d-flex justify-content-center">
            <a href="{{route('services')}}" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@stop
