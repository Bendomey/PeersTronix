@extends('layout.app')

@section('content')

  <!-- carousel section -->

  <section class="mb-5">
    <div class="carousel slide" data-ride="carousel" id="carouselIndicator">
      <ol class="carousel-indicators">
        <li data-target="#carouselIndicator" data-slide="0" class="active"></li>
        <li data-target="#carouselIndicator" data-slide="1"></li>
        <li data-target="#carouselIndicator" data-slide="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('images/2.jpg')}}" alt="first" class="d-block w-100 carImg" style="height: 100vh;">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4 text-light" style="font-weight: 900;">Welcome To Peers Tronix Service Center</h1>
              <p style="font-weight: 900;">We deliver quality computer repair services</p>
              <a href="{{route('services')}}"> <button type="button" name="button" class="btn btn-lg btn-dark" >VIEW MORE <i class="fa fa-arrow-right"></i> </button></a>
            </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/dedicate0.jpg')}}" alt="first" class="d-block w-100 carImg" style="height: 100vh;">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="displa-4 text-light" style="font-weight: 900;">A Team of Seasoned Tech Experts</h1>
            <p style="font-weight: 900;">We have the best tech experts in the country</p>
            <a href="{{route('about_us')}}"><button type="button" name="button" class="btn btn-lg btn-dark">VIEW MORE <i class="fa fa-arrow-right"></i> </button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/beautiful-blur-casual-9357560.jpg')}}" alt="third" class="d-block w-100" style="height: 100vh;">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="displa-4 text-light" style="font-weight: 900;">Professional Customer Service</h1>
            <p style="font-weight: 900;">We provide extensive support for every customer, contact us</p>
            <a href="{{route('contact_us')}}"><button type="button" name="button" class="btn btn-lg btn-primary">VIEW MORE <i class="fa fa-arrow-right"></i> </button></a>
          </div>
        </div>
      </div>

      <a href="#carouselIndicator" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a href="#carouselIndicator" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>


  <section class="mb-5">
    <h1 class="display-5 mb-5 text-center offer">WHAT WE OFFER</h1>
    <div class="container">
      <div class="row ">
        <div class="col-lg-4">
          <div class="card shadow mb-md-5 mb-sm-5">
            <img src="images/laptopRepair.jpg" height="290" alt="first" class="card-img-top">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <i class="fa fa-3x fa-bug"></i>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8">
                  <h4 class="card-title">Virus removal</h4>
                  <p class="card-text">Remove any virus with our help</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card shadow">
            <img src="images/networkRepair.jpg" height="290" alt="first" class="card-img-top">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <i class="fa fa-3x fa-database my-1"></i>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8">
                  <h4 class="card-title">Data Recovery</h4>
                  <p class="card-text">Helping you restore your data</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card shadow">
            <img src="images/networkRepair.jpg" height="290" alt="first" class="card-img-top">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <i class="fa fa-3x fa-database my-1"></i>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8">
                  <h4 class="card-title">Data Recovery</h4>
                  <p class="card-text">Helping you restore your data</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="{{route('services')}}"><button class="btn btn-lg btn-ouline-dark">View More</button></a>
      </div>
    </div>
  </section>




@stop
