@extends('layout.app')

@section('title','Services')

@section('content')


<section class="mb-5">
  <div class="carousel-inner">
    <img src="{{asset('images/apple-business-click-392018.jpg')}}" class="w-100 mb-0" height="300vh" alt="">
    <div class="carousel-caption d-flex flex-direction-column justify-content-center">
      <h1 class="text-light" style="font-weight: 900">SERVICES</h1>
    </div>
  </div>
  <div class="breadcrumb d-flex justify-content-center">
    <ol class="breadcrumb breadcrumb-dot">
      <li class="breadcrumb-item"><a href="{{asset('/')}}" class="text-dark">Home</a> </li>
      <li class="breadcrumb-item active" aria-current="page"><a href="{{asset('services')}}" class="text-info">Services</a> </li>
    </ol>
  </div>
</section>

<section>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-9 col-md-8">
        <!-- for all services -->
        <div id="serviceS">
          <div class="row mb-5">
            <div class="col-lg-6">
              <div class="card">
                <img src="{{asset('images/laptopRepair.jpg')}}" alt="first" class="card-img-top">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                      <i class="fa fa-3x fa-laptop"></i>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                      <h4 class="card-title">Laptop Repair</h4>
                      <p class="card-text">We work even with old laptops</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <img src="{{asset('images/networkRepair.jpg')}}" alt="first" class="card-img-top">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                      <i class="fa fa-3x fa-network-wired my-1"></i>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                      <h4 class="card-title">Network Support</h4>
                      <p class="card-text">We provide 24/7 support via web</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <img src="{{asset('images/laptopRepair.jpg')}}" alt="first" class="card-img-top">
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
            <div class="col-lg-6">
              <div class="card">
                <img src="{{asset('images/networkRepair.jpg')}}" alt="first" class="card-img-top">
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
        </div>
        <!-- for laptop repair -->
        <div id="laptopRepairS">

        </div>
        <!-- for networkRepair -->
        <div class="networkRepairS">

        </div>
        <!-- for virus removal -->
        <div class="virusRemoval">

        </div>
        <!-- for data  recovery -->
        <div class="dataRepairS">

        </div>


      </div>
      <div class="col-lg-3 col-md-4" style="border-left: 1px solid #eee;">
        <div class="container">
          <h4 class="text-uppercase" style="font-weight: 600; font-family: 'Roboto Condensed', sans-serif;">solutions for your business</h4>

          <ul class="nav flex-column nav-pills mb-4">
            <li class="nav-item my-2 servi" >
              <a href="#serviceS" class="nav-link text-uppercase text-dark">all services</a>
            </li>
            <li class="nav-item my-2 servi">
              <a href="#laptopRepairS" class="nav-link text-uppercase text-dark">laptop repair</a>
            </li>
            <li class="nav-item my-2 servi">
              <a href="#networkRepairS" class="nav-link text-uppercase text-dark">network support</a>
            </li>
            <li class="nav-item my-2 servi">
              <a href="#virusRemoval" class="nav-link text-uppercase text-dark">virus removal</a>
            </li>
            <li class="nav-item my-2 servi">
              <a href="#dataRepairS" class="nav-link text-uppercase text-dark">data recovery</a>
            </li>
          </ul>

          <a href="{{route('contact_us')}}"><button type="button" name="button" class="btn btn-lg btn-outline-primary text-uppercase p-4" style="border-radius: 0px;" >contact us</button></a>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
