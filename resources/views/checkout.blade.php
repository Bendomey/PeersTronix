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

  <div class="row">
    <div class="col-lg-9 col-md-8 col-sm-12 mb-5">
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
              <input type="text" name="buyer_location" class="form-control form-control-lg p-3 rounded-0" style="font-size: 15px" placeholder="ADDRESS" required>
            </div>
          </div>
        </div>

        <h3 class="font-weight-bold mt-5" style="font-family: 'calibri'">YOUR ORDER</h3>

        @if(count($cart_products) > 0)
          @foreach($cart_products as $cart_product)
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="col">Product Name</th>
                <th class="col">Product Image</th>
                <th class="col">Product Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td ><h5 class="text-uppercase font-weight-bold" style="font-family: 'Old Standard TT',serif;">{{$cart_product->product_name}}</h5></td>
                <td><img src='{{asset("$cart_product->thumb_picture")}}'  class="w-100" height="50" alt=""> </td>
                <td>Ghc {{$cart_product->product_price}}</td>
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
        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-dark p-3">CHECKOUT</button>
        </div>

      </form>

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
