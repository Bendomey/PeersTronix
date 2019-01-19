<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peers Tronix  | @yield('title','Home Page')</title>
    <!-- styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact_us.css')}}">
    <link rel="stylesheet" href="{{asset('css/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owlcarousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owlcarousel/owl.theme.green.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto|Montserrat|Thasadith|Aleo|Roboto Condensed|Playfair Display" rel="stylesheet">
  </head>
  <body>


    @if(Session::has('success'))
    <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Success</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <i class="fa fa-2x fa-correct text-success mr-2"></i><strong>Congratulations!</strong> {{Session::get('success')}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    @endif

    @if(Session::has('error'))
    <div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">An Error Occured</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <i class="fa fa-2x fa-times text-danger mr-2"></i><strong>Sorry!</strong> {{Session::get('error')}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    @endif


    <!-- application starts -->
    <header>
<!--Navbar-->
		  <nav class="js-navbar-scroll navbar fixed-top navbar-expand-lg navbar-transparent navbar-dark">
			  <div class="container">
				  <a class="navbar-brand display-1" href="#">PeersTronix</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ml-auto mr-sm-2 mt-2 mt-lg-0">
					  <li class="nav-item active"> <a class="nav-link" href="{{route('/')}}"><i class="fas fa-home mr-1"></i>Home </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{route('services')}}"><i class="fas fa-cube mr-1"></i>Services</a> </li>
					  <li class="nav-item"> <a class="nav-link" href="{{route('products')}}"><i class="fas fa-cube mr-1"></i>Shop</a> </li>
						<li class="nav-item"> <a class="nav-link " href="{{route('about_us')}}"><i class="fas fa-user-alt mr-1"></i>About Us <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{route('contact_us')}}"><i class="fas fa-phone mr-1"></i>Contact Us</a> </li>
					</ul>
          <div class="">
            <a href="{{route('cart')}}" class="btn btn-outline-light"><i class="fa fa-cart-arrow-down mr-1"></i>Cart<span class="badge badge-light ml-1" id="cartBadge"></span></a>
          </div>
				 </div>
			  </div>
		  </nav>
	</header>

    @yield('content')

  <!-- Footer -->
  <footer class="page-footer text-white pt-4" style="background: #45526e ">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">PeersTronix</h6>
          <p>
            Please submit your email for updates on new products available
          </p>
          <form class="form" action="{{route('create')}}" method="post">
            @csrf
            <input type="email" name="email" class="form-control mr-2" placeholder="email ..." required>
            <button type="submit" class="btn btn-dark my-3 btn-block"><i class="fa fa-share-square mr-2"></i>Send</button>
          </form>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
          <p class="text-white">
            <a href="{{route('services')}}" class="text-white text-decoration-none footerLink">Laptop Repair</a>
          </p>
          <p class="text-white">
            <a href="{{route('services')}}" class="text-white text-decoration-none footerLink">Network Support</a>
          </p>
          <p class="text-white">
            <a href="{{route('services')}}" class="text-white text-decoration-none footerLink">Virus Removal</a>
          </p>
          <p class="text-white">
            <a href="{{route('services')}}" class="text-white text-decoration-none footerLink">Data Recovery</a>
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
          <p>
            <a href="{{route('/')}}" class="text-white text-decoration-none footerLink">Home</a>
          </p>
          <p>
            <a href="{{route('products')}}" class="text-white text-decoration-none text-decoration-none footerLink">Shop</a>
          </p>
          <p>
            <a href="{{route('about_us')}}" class="text-white text-decoration-none footerLink">About Us</a>
          </p>
          <p>
            <a href="{{route('contact_us')}}" class="text-white text-decoration-none footerLink">Contact Us</a>
          </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i> Ashongman, Accra Ghana</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> eben@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 233 234 567 8888</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left">© 2018 Copyright:
            <a href="{{route('/')}}" >
              <strong> PeersTronix</strong>
            </a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn btn-floating shadow-lg mx-1" style="border-radius: 50% ">
                <!-- <a class="btn-floating btn-sm rgba-white-slight mx-1"> -->
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-floating shadow-lg mx-1" style="border-radius: 50% ">
                <!-- <a class="btn-floating btn-sm rgba-white-slight mx-1"> -->
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-floating shadow-lg mx-1" style="border-radius: 50% ">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-floating shadow-lg mx-1" style="border-radius: 50% ">
                <!-- <a class="btn-floating btn-sm rgba-white-slight mx-1"> -->
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
  <button type="button" class="hello">hello</button>
  <!-- Footer -->

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <script src="{{asset('js/sort.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#success').modal('show');
        $('#error').modal('show');
      })
    </script>
  </body>
</html>
