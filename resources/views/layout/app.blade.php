<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Peers Tronix</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/header&footer.css')}}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
  </head>
  <body>

    <header id="one">
      <div class="navbar navbar-expand-lg navbar-light bg-light firstNav">
        <div class="container d-flex justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item active pr-5 pt-1">
              <span style="color:#800080"><i class="fa fa-phone"></i></span> <a href="tel: 0545526664" id="telephone" >+233 54-552-6664</a>
            </li>
            <li class="nav-item pr-5 pt-1">
              <span style="color:#800080"><i class="fa fa-envelope"></i></spmailan> <a href="mailto: eben@gmail.com" id="telephone" >eben@gmail.com</a>
            </li>
            <li class="nav-item">
              <button type="button" name="button" class="btn btn-sm"><i class="fab fa-facebook-f hello"></i> </button>
              <button type="button" name="button" class="btn btn-sm"><i class="fab fa-twitter hello"></i> </button>
              <button type="button" name="button" class="btn btn-sm"><i class="fab fa-instagram hello"></i> </button>
              <button type="button" name="button" class="btn btn-sm"><i class="fab fa-google hello"></i> </button>
            </li>
          </ul>
        </div>
      </div>
    </header>


    <main>
      @yield('content')
    </main>


    <footer>
      @yield('footer')
    </footer>
  </body>
  <!-- scripts for the whole application -->
  <script src="{{asset('js/jquery-3.3.1.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/header&footer.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/all.min.js')}}" charset="utf-8"></script>

</html>
