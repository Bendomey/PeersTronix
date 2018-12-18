@extends('layout.app')
@section('title','Contact US')
@section('content')


  <section class="mb-5">
    <div class="carousel-inner">
      <img src="{{asset('images/contactUs.jpg')}}" class="w-100 mb-0" height="260vh" alt="">
      <div class="carousel-caption d-flex flex-direction-column justify-content-center">
        <h1 class="text-light" style="font-weight: 900">CONTACT US</h1>
      </div>
    </div>
    <div class="breadcrumb d-flex justify-content-center">
      <ol class="breadcrumb breadcrumb-dot">
        <li class="breadcrumb-item"><a href="{{asset('/')}}" class="text-dark">Home</a> </li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{asset('contact_us')}}" class="text-info">Contact Us</a> </li>
      </ol>
    </div>
  </section>


  <section class="mb-5">
    @if (Session::has('success'))
    <div class="alert alert-success">
        <ul class="list-style-none d-flex justif-content-center">
            <li>{!! Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12  justify-content-center one" >
          <div class="container">
            <h2 class="mb-5">Get in Touch</h2>
            <form class="form" action="{{route('save')}}" method="POST">
              @csrf
              <div class="row mb-4">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <input type="text" name="full_name" value="" class="form-control p-4" placeholder="Your Name*" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <input type="email" name="email" value="" class="form-control p-4" placeholder="Your Email*" required>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <input type="text" name="service_needed" value="" class="form-control p-4" placeholder="Service Needed*" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <input type="tel" name="phone" value="" class="form-control p-4" placeholder="Your Phone*" required>
                </div>
              </div>
              <div class="row mb-4">
                <textarea name="message" rows="5" class="form-control p-4" placeholder="Your Message" required></textarea>
              </div>
              <div class="row">
                <button type="submit" name="button" class="btn text-light btn-block subit py-3">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-3 col-md 12 col-sm-12">
          <div class="container">
            <section class="py-4" style="border-bottom: 1px solid #eee;">
              <h6 style="font-weight: 900; font-family: arial">GET SOCIAL</h6>
              <span class="mr-3"><a href="#" class="text-dark"><i class="fab fa-facebook-f"></i></a> </span>
              <span class="mr-3"><a href="#" class="text-dark"> <i class="fab fa-twitter"></i></a> </span>
              <span class="mr-3"><a href="#" class="text-dark"><i class="fab fa-instagram"></i></a> </span>
              <span ><a href="#" class="text-dark"> <i class="fab fa-google"></i></a> </span>
            </section>
            <section class="py-4" style="border-bottom: 1px solid #eee;">
              <h6 style="font-weight: 900; font-family: arial">Phone</h6>
              <button type="button" name="button" class="btn btn-light transparent" style="border-radius: 50%; color: #800080"><i class="fa fa-phone "></i></button>
              <a href="tel: 054552664" class="text-dark" style="text-decoration: none;">+233 54-552-6664</a>
            </section>
            <section class="py-4" style="border-bottom: 1px solid #eee;">
              <h6 style="font-weight: 900; font-family: arial">Email</h6>
              <button type="button" name="button" class="btn btn-light transparent" style="border-radius: 50%; color: #800080"><i class="fa fa-envelope "></i></button>
              <a href="mailto: eben@gmail.com" class="text-dark" style="text-decoration: none;">eben@gmail.com</a>
            </section>
            <section class="py-4" style="border-bottom: 1px solid #eee;">
              <h6 style="font-weight: 900; font-family: arial">Email</h6>
              <button type="button" name="button" class="btn btn-light transparent" style="border-radius: 50%; color: #800080"><i class="fa fa-map-marker "></i></button>
              <p>Ashongman Ghana, Accra</p>
            </section>
          </div>

        </div>
      </div>
    </div>
  </section>

@stop
