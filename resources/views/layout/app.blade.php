<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Peers Tronix</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/header&footer.css')}}">
  </head>
  <body>

    <header>
      <!-- for header one -->
      <nav class="navbar navbar-expand-lg navbar-light firstNav" style="background:#fff;border-bottom:1px solid #eee">
        <div class="container d-flex justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item active pr-5 pt-1">
              <span style="color:#800080"><i class="fa fa-phone"></i></span> <a href="tel: 0545526664" id="telephone" >+233 54-552-6664</a>
            </li>
            <li class="nav-item pr-5 pt-1">
              <span style="color:#800080"><i class="fa fa-envelope"></i></spmailan> <a href="mailto: eben@gmail.com" id="telephone" >eben@gmail.com</a>
            </li>
            <li class="nav-item">
              <button type="button" name="button" class="btn btn-sm hello"><i class="fab fa-facebook-f "></i> </button>
              <button type="button" name="button" class="btn btn-sm hello"><i class="fab fa-twitter "></i> </button>
              <button type="button" name="button" class="btn btn-sm hello"><i class="fab fa-instagram "></i> </button>
              <button type="button" name="button" class="btn btn-sm hello"><i class="fab fa-google "></i> </button>
            </li>
          </ul>
        </div>
      </nav>
      <!-- for header two -->
      <nav class="navbar navbar-expand-lg navbar-light sticky-top navbar2">
        <div class="container py-2">
          <a class="navbar-brand" href="{{route('/')}}" id="appName">PEERS TRONIX</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- for navbarNav -->
          <div class=" dflex justify-content-center align-items navbar3">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a href="{{route('/')}}" class="nav-link navLink1 text text-dark" >Home</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('services')}}" class="nav-link navLink2 text-dark">Services</a>
                </li>
                <li class="nav-item ">
                  <a href="{{route('testimonials')}}" class="nav-link navLink3 text-dark">Testimonials</a>
                </li>
                <li class="nav-item ">
                  <a href="{{route('team')}}" class="nav-link navLink4 text-dark">Team</a>
                </li>
                <li class="nav-item ">
                  <a href="{{route('contact_us')}}" class="nav-link navLink5 text-dark">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>


    <main>
      @yield('content')
    </main>


    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 ">
            <div class="footerCol">
              <h3 class="text text-white py-3">GET IN TOUCH</h3>
              <ul>
                <li class="nav-item">
                  <div class="nav-link">
                    <i class="fa fa-phone text-white"></i>
                    <a href="tel: 0561516436" class="">+233 54-552-6664</a>
                  </div>
                </li>
                <li class="nav-item">
                  <div class="nav-link">
                    <i class="fa fa-envelope text-white"></i>
                    <a href="mailto: eben@gmail.com"class="">eben@gmail.com</a>
                  </div>
                </li>
                <li class="nav-item">
                  <div class="nav-link">
                    <button type="button" name="button" class="btn btn-primary hello"><i class="fab fa-facebook-f "></i> </button>
                    <button type="button" name="button" class="btn btn-info hello"><i class="fab fa-twitter "></i> </button>
                    <button type="button" name="button" class="btn btn-secondary hello"><i class="fab fa-instagram "></i> </button>
                    <button type="button" name="button" class="btn btn-danger hello"><i class="fab fa-google "></i> </button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footerCol">
              <h3 class="text text-white py-3">Pages</h3>
              <ul class="">
                <li class="nav-item"><a href="{{route('/')}}" class="nav-link footNav">Home</a> </li>
                <li class="nav-item"><a href="{{route('services')}}" class="nav-link footNav">Services</a> </li>
                <li class="nav-item"><a href="{{route('testimonials')}}"  class="nav-link footNav">Testimonials</a> </li>
                <li class="nav-item"><a href="{{route('team')}}"  class="nav-link footNav">Team</a> </li>
                <li class="nav-item"><a href="{{route('contact_us')}}"  class="nav-link footNav">Contact Us</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footerCol">
              <h3 class="text-white py-3">Map</h3>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <!-- scripts for the whole application -->
  <script src="{{asset('js/jquery-3.3.1.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/header&footer.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/all.min.js')}}" charset="utf-8"></script>

</html>
