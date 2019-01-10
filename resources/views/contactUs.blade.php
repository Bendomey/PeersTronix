@extends('layout.app')

@section('title','Contact Us')

@section('content')

    <section class="js-parallax u-promo-block" style="background-image: url(images/contactUs.jpg); background-size: 100% 100%">
      <div class="container text-white u-ver-center u-content-space">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="text-center">
              <blockquote>
                <h1 class="text-light" style="font-weight: 900">CONTACT US</h1>
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
    <li class="breadcrumb-item"><a href="PeersTronix.html" class="text-dark">HOME</a></li>
    <li class="breadcrumb-item active" style="font-weight: 700; color: #800080" aria-current="page">CONTACT US</li>
  </ol>
  </nav>
  </div>
<div class="container">
  <h2 class="mb-5 ml-3 text-capitalize">Get in touch</h2>
  <div class="row mb-5">
    <div class="col-lg-9 col-md-12 col-sm-12  justify-content-center one">
    <div class="container">
      <form action="#" class="form" method="POST">
        <div class="row mb-lg-3 mb-md-3 mb-sm-3">
          <div class="col-lg-6 col-md-6 col-sm-12 mb-2 mb-sm-3">
            <input type="text" name="full_name" value="" class="form-control form-control-lg rounded-0 py-3" style=" border-color: #eee;" placeholder="Your Name*" required>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <input type="email" name="email" value="" class="form-control form-control-lg rounded-0 py-3" style="border-color: #eee;" placeholder="Your Email*" required>
          </div>
        </div>
        <div class="row mb-lg-3 mb-md-3 mb-sm-3">
          <div class="col-lg-6 col-md-6 col-sm-12 mb-2 mb-sm-3">
            <input type="text" name="company_name" value="" class="form-control form-control-lg rounded-0 py-3" style="border-color: #eee;" placeholder="Company Name" required>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <input type="tel" name="phone" value="" class="form-control form-control-lg rounded-0 py-3" style="border-color: #eee;" placeholder="Your Phone*" required>
          </div>
        </div>
        <div class="row mb-3">
          <textarea name="message" rows="5" class="form-control rounded-0 p-3" style="border-color: #eee;" placeholder="Your Message*" required></textarea>
        </div>
        <div class="row">
          <button type="submit" class="btn btn-dark btn-block py-3 text-light">Submit</button>
        </div>
      </form>
    </div>
    </div>
    <div class="col-lg-3 col-md 12 col-sm-12">
      <div class="container">
        <section class="py-4" style="border-bottom: 1px solid #eee;">
          <h6 style="font-weight: 700; font-family: arial">GET SOCIAL</h6>
          <span class="mr-3"><a href="#" class="text-dark"><i class="fab fa-facebook-f"></i></a> </span>
          <span class="mr-3"><a href="#" class="text-dark"> <i class="fab fa-twitter"></i></a> </span>
          <span class="mr-3"><a href="#" class="text-dark"><i class="fab fa-instagram"></i></a> </span>
          <span ><a href="#" class="text-dark"> <i class="fab fa-google"></i></a> </span>
        </section>
        <section class="py-4" style="border-bottom: 1px solid #eee;">
          <h6 style="font-weight: 700; font-family: arial">Phone</h6>
          <button type="button" name="button" class="btn btn-light transparent" style="border-radius: 50%; color: #800080"><i class="fa fa-phone "></i></button>
          <a href="tel: 054552664" class="text-dark" style="text-decoration: none;">+233 54-552-6664</a>
        </section>
        <section class="py-4" style="border-bottom: 1px solid #eee;">
          <h6 style="font-weight: 700; font-family: arial">Email</h6>
          <button type="button" name="button" class="btn btn-light transparent" style="border-radius: 50%; color: #800080"><i class="fa fa-envelope "></i></button>
          <a href="mailto: eben@gmail.com" class="text-dark" style="text-decoration: none;">eben@gmail.com</a>
        </section>
        <section class="py-4" style="border-bottom: 1px solid #eee;">
          <h6 style="font-weight: 700; font-family: arial">Address</h6>
          <button type="button" name="button" class="btn btn-light transparent" style="border-radius: 50%; color: #800080"><i class="fa fa-map-marker "></i></button>
          <p>Ashongman Ghana, Accra</p>
        </section>
      </div>
        </div>
  </div>
</div>


@stop
