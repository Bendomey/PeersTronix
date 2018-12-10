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
          <img src="{{asset('images/apple-business-click-392018.jpg')}}" alt="first" class="d-block w-100 carImg" style="height: 90vh;">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4 text-light" style="font-weight: 900;">Welcome Peers Tronix Service Center</h1>
              <p style="font-weight: 900;">We deliver quality computer repair services</p>
              <a href="{{route('services')}}"> <button type="button" name="button" class="btn btn-lg btn-primary" style="border-radius:0px">VIEW MORE <i class="fa fa-arrow-right"></i> </button></a>
            </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/adult-asking-blur-630839.jpg')}}" alt="first" class="d-block w-100 carImg" style="height: 90vh;">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="displa-4 text-light" style="font-weight: 900;">A Team of Seasoned Tech Experts</h1>
            <p style="font-weight: 900;">We have the best tech experts in the country</p>
            <a href="#OurTeam"><button type="button" name="button" class="btn btn-lg btn-primary" style="border-radius:0px">VIEW MORE <i class="fa fa-arrow-right"></i> </button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/beautiful-blur-casual-935756.jpg')}}" alt="third" class="d-block w-100" style="height: 90vh;">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="displa-4 text-light" style="font-weight: 900;">Professional Customer Service</h1>
            <p style="font-weight: 900;">We provide extensive support for every customer</p>
            <a href="#"><button type="button" name="button" class="btn btn-lg btn-primary" style="border-radius:0px">VIEW MORE <i class="fa fa-arrow-right"></i> </button></a>
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
    <h1 class="display-4 text-center offer">WHAT WE OFFER</h1>
    <!-- owl carousel -->
    <div class="container-fluid">
      <div class="owl-carousel owl-theme hi">
        <div class="item">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" alt="first" src="{{asset('images/laptopRepair.jpg')}}">
            <div class="card-body">
              <h4 class="card-title profession">Laptop Repair</h4>
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
              <h4 class="card-title profession">Network Support</h4>
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
              <h4 class="card-title profession">Data Recovery</h4>
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
              <h4 class="card-title profession">Data Recovery</h4>
              <p class="card-text">
                We offer affordable Laptop repair services to individuals and corporate clients.
              </p>
            </div>
          </div>
        </div>
        <div class="owl-dots">
          <div class="owl-dot active"><span></span></div>
          <div class="owl-dot"><span></span></div>
          <div class="owl-dot"><span></span></div>
        </div>
      </div>
    </div>
  </section>

  <section class="mb-5" id="OurTeam">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="container">
            <h1 class="offer mb-3 display-4">OUR TEAM</h1>
            <h6 class="profession">PROFESSIONAL PC REPAIR TEAM</h6>
            <p style="color: grey">Since our establishment, we have gathered a team of dedicated PC repair professionals.</p>
            <div class="">
              <a href="{{route('contact_us')}}"> <button type="button" name="button" class="btn btn-lg btn-light mess" style="border-radius: 0px; border: 2px solid;"><i class="fa fa-envelope"></i> </button></a>
              <button type="button" name="button" class="btn btn-lg btn-light" style="border-radius: 0px; border: 2px solid;"><i class="fa fa-arrow-left"></i> </button>
              <button type="button" name="button" class="btn btn-lg btn-light" style="border-radius: 0px; border: 2px solid;"><i class="fa fa-arrow-right"></i> </button>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6">
          <div class="owl-carousel owl-theme hm">
            <div class="item">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" alt="first" src="{{asset('images/adult-beard-blur-927022.jpg')}}">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text profession">
                    General Manager
                  </p>
                </div>
                <div class="d-flex justify-content-around">
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-facebook-f"></i> </button></a>
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-twitter"></i> </button></a>
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-instagram"></i> </button></a>
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-google"></i> </button></a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" alt="first" src="{{asset('images/beautiful-blur-casual-935756.jpg')}}">
                <div class="card-body">
                  <h4 class="card-title">Jane Doe</h4>
                  <p class="card-text profession">
                    Customer Service Manager
                  </p>
                </div>
                <div class="d-flex justify-content-around">
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-facebook-f"></i> </button></a>
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-twitter"></i> </button></a>
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-instagram"></i> </button></a>
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-google"></i> </button></a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" alt="first" src="{{asset('images/business-care-clinic-1282308.jpg')}}">
                <div class="card-body">
                  <h4 class="card-title">Jack Doe</h4>
                  <p class="card-text profession">
                    Field Technician
                  </p>
                </div>
                <div class="d-flex justify-content-around">
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-facebook-f"></i> </button></a>
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-twitter"></i> </button></a>
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-instagram"></i> </button></a>
                  <a href="#"> <button type="button" name="button" class="btn btn-md btn-light mess" style="border-radius: 0px;"><i class="fab fa-google"></i> </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@stop
