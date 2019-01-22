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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form" method="post" action="{{ route('password.email') }}">
                        @csrf

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
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">Send Reset Password Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
