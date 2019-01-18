@extends('layout.app')

@section('content')

<section class="js-parallax u-promo-block" style="background-image: url(images/contactUs.jpg); background-size: 100% 100%">
  <div class="container text-white u-ver-center u-content-space">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text-center">
          <blockquote>
            <h1 class="text-light" style="font-weight: 900">Search Result</h1>
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
      <li class="breadcrumb-item active" style="font-weight: 700; color: #800080" aria-current="page">Search Result</li>
    </ol>
  </nav>
</div>

<div class="container">
  <h1>Search Results</h1>
  <form class="form mb-5" action="{{route('search_results')}}" method="get">
    <div class="input-group">
      <div class="input-group-prepend">
        <button type="submit" class="input-group-text"><i class="fa fa-search"></i> </button>
      </div>
      <input type="search" name="product_name" value="{{$name}}" class="form-control form-control-lg" placeholder="Search ..." aria-describedby="inputGroupPrepend" required>
    </div>
  </form>


  @if(count($search) == 0)

    <div class="alert alert-warning" role="alert">
      <strong>Sorry!</strong> No Product Match Your Search :(
    </div>

  @endif


  <div class="row mb-5">
    @if(count($search) > 0)
      @foreach($search as $product)
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
    {{$search->links()}}
  </div>


</div>
@stop
