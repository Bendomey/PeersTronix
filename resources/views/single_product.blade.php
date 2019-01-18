@extends('layout.app')

@section('title','Shop')

@section('content')
<section class="js-parallax u-promo-block" style="background-image: url(images/contactUs.jpg); background-size: 100% 100%">
  <div class="container text-white u-ver-center u-content-space">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text-center">
          <blockquote>
            <h1 class="text-light" style="font-weight: 900">{{$one_product->product_name}}</h1>
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
<li class="breadcrumb-item active" style="font-weight: 700; color: #800080" aria-current="page">{{$one_product->product_name}}</li>
</ol>
</nav>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
      <img src='{{asset("$one_product->thumb_picture")}}' height="400" class="w-100 mb-1" alt="">
      <div class="row">
        <div class="col-3">
          <a href='{{asset("$one_product->image_one")}}' target="_blank"><img src='{{asset("$one_product->image_one")}}' height="100" class="w-100 img-thumbnail mb-1" alt=""></a>
        </div>
        <div class="col-3">
          <a href='{{asset("$one_product->image_two")}}' target="_blank"><img src='{{asset("$one_product->image_two")}}' height="100" class="w-100 img-thumbnail mb-1" alt=""></a>
        </div>
        <div class="col-3">
          <a href='{{asset("$one_product->image_three")}}' target="_blank"><img src='{{asset("$one_product->image_three")}}' height="100" class="w-100 img-thumbnail mb-1" alt=""></a>
        </div>
        <div class="col-3">
          <a href='{{asset("$one_product->image_four")}}' target="_blank"><img src='{{asset("$one_product->image_four")}}' height="100" class="w-100 img-thumbnail mb-1" alt=""></a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
      @if(Session::has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Congratulations!</strong> {!! Session::get('success') !!}.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      @endif

      <h1>{{$one_product->product_name}}</h1>
      <h4>Ghc {{$one_product->product_price}}</h4>
      <p>{{$one_product->brief_description}}</p>
      <p>
        <!-- <h5>Product Rating</h5> -->
      @for($i = 0; $i < $one_product->product_rating; $i++)
        <i class="fa fa-star" style="color: gold"></i>
      @endfor
      @for($i = 0; $i < (5 - $one_product->product_rating); $i++)
        <i class="far fa-star" style="color: gold"></i>
      @endfor
    </p>
      <a href="#" class="btn btn-dark btn-lg btn-block buy"><i class="fa fa-cart-arrow-down"></i> Purchase</a>
      <p class="my-3"><strong>Category :</strong>{{$one_product->product_category}} </p>
      <form class="form buyProductForm" action="{{route('buy_product')}}" method="post">
        @csrf
        <div class="form-group">
          <i>Please fill this form</i>
          <input type="text" name="buyer_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Your Full Name" required>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" name="buyer_contact" placeholder="Enter Your Contact" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="buyer_email" placeholder="Enter Your Email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Location" name="buyer_location" required>
        </div>
        <input type="hidden" name="product_name" value="{{$one_product->product_name}}" required>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
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
          <p>{{$one_product->description}}</p>
        </div>
        <div class="tab-pane fade mb-5 mt-4" id="additional_info" role="tabpanel" aria-labelledby="additional_info-tab">
          <p>
            <ul>
              <li>
                <strong>Brand : </strong> {{$one_product->product_brand}}
              </li>
              <li>
                <strong>Color :</strong> @if($one_product->product_color == null) <i>NULL</i> @else {{$one_product->product_color}} @endif
              </li>
            </ul>
            <p>
              <h5>More Information</h5>
              <p>@if($one_product->additional_info == null) <i>NULL</i> @else {{$one_product->additional_info}} @endif</p>
            </p>
          </p>
        </div>
    </div>



    @if(count($some_product) > 0)
  <div class="d-flex justify-content-center">
      <h1>Related Products</h1>
  </div>
  <div class="row">
      @foreach($some_product as $product)
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
                  <p class="card-text text-center">Ghc 1,500</p>
                </div>
              </div>
            </a>
          </div>
      @endforeach
    @endif
  </div>
</div>

@stop
