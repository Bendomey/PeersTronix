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

      <div class="carousel-inner" style="height: 90vh;">
        <div class="carousel-item active">
          <img src="{{asset('images/business-camera-coffee-1509428.jpg')}}" alt="first" class="d-block w-100" style="height: 90vh;">
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/achievement-agreement-arms-1068523.jpg')}}" alt="first" class="d-block w-100" style="height: 90vh;">
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/cables-close-up-computer-257736.jpg')}}" alt="third" class="d-block w-100" style="height: 90vh;">
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
    <h1 class="display-4 text-center offer">WHAT WE OFFER</h1>
    <!-- owl carousel -->
    <div class="container-fluid">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" alt="first" src="{{asset('images/laptopRepair.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Laptop Repair</h4>
              <p class="card-text">
                We offer affordable Laptop repair services to individuals and corporate clients.
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" alt="first" src="{{asset('images/networkRepair.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Network Support</h4>
              <p class="card-text">
                We provide extensive 24/7 remote support via netowrks to our customers
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" alt="first" src="{{asset('images/dataRepair.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Data Recovery</h4>
              <p class="card-text">
                We offer affordable Laptop repair services to individuals and corporate clients.
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" alt="first" src="{{asset('images/dataRepair.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Data Recovery</h4>
              <p class="card-text">
                We offer affordable Laptop repair services to individuals and corporate clients.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>



@stop
