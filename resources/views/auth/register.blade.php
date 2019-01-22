@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('dashboard')}}">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(images/imagescd60.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" action="{{ route('register') }}" method="post">
                  @csrf
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">
                        </div>
                        <h5>Sign Up</h5>
                        <span>Register a new membership</span>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter User Name" value="{{ old('name') }}" name="name" required autofocus>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red; font-size: 0.8rem">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <div class="input-group">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Email" value="{{ old('email') }}" name="email" required>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red; font-size: 0.8rem">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <div class="input-group">
                            <input type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" placeholder="Enter Position" value="{{ old('position') }}" name="position" required>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account"></i>
                            </span>
                        </div>
                        @if ($errors->has('position'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red; font-size: 0.8rem">{{ $errors->first('position') }}</strong>
                            </span>
                        @endif
                        <div class="input-group">
                            <input type="password" placeholder="Password{{ $errors->has('password') ? ' is-invalid' : '' }}" class="form-control" value="{{ old('name') }}" name="password" required>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red; font-size: 0.8rem">{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="input-group">
                            <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">SIGN UP</button>
                    </div>
                    <h6 class="m-t-20"><a class="link" href="{{route('login')}}">You already have a membership?</a></h6>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
