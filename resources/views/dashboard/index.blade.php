@extends('layout.dashboard')

@section('dashboard_content')

<section class="content home">
  <div class="block-header">
      <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
              <h2>Dashboard
              <small class="text-muted">Welcome to PeersTronix Admin Dashboard</small>
              </h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
              <ul class="breadcrumb float-md-right">
                  <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> PeersTronix</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
              </ul>
          </div>
      </div>
  </div>

  <div class="container-fluid">
    <div class="card widget_2">
        <ul class="row clearfix list-unstyled m-b-0">
            <li class="col-lg-3 col-md-6 col-sm-12">
                <div class="body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="m-t-0">Bookings</h5>
                            <p class="text-small">Requests Recieved From Clients</p>
                        </div>
                        <div class="col-5 text-right">
                            <h2 class="">{{$bookings}}</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 col-sm-12">
                <div class="body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="m-t-0">Bookings Accepted</h5>
                            <p class="text-small">Total Bookings Accepted</p>
                        </div>
                        <div class="col-5 text-right">
                            <h2 class="">{{$accepted}}</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 col-sm-12">
                <div class="body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="m-t-0">Sales</h5>
                            <p class="text-small">Sales For This Month</p>
                        </div>
                        <div class="col-5 text-right">
                            <h2 class="">12%</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 col-sm-12">
                <div class="body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="m-t-0">Products Available</h5>
                            <p class="text-small">Total</p>
                        </div>
                        <div class="col-5 text-right">
                            <h2 class="">{{$product_available}}</h2>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </div>
</section>
@stop
