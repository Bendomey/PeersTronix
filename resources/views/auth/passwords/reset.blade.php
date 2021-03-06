@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent">
        <div class="container">

            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('/')}}">Home</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header">
        <div class="page-header-image" style="background-image:url({{asset('images/imagescd60.jpg')}})"></div>
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card-plain">
                    <div class="header">
                        <div class="logo-container">
                            <img src="{{asset('assets/images/logo.svg')}}" alt="">
                        </div>
                        <h5>Reset Password</h5>
                    </div>

                    <form class="form" method="post" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="content">
                            <div class="input-group input-lg">
                                <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Email" value="{{ old('email') }}" name="email" required autofocus>
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                            </div>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong style="color: red; font-size: 0.8rem">{{ $errors->first('email') }}</strong>
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
                            <button type="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
