@extends('layout.dashboard')

@section('dashboard_content')

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
                          <h5 class="m-t-0">Traffic</h5>
                          <p class="text-small">4% higher than last month</p>
                      </div>
                      <div class="col-5 text-right">
                          <h2 class="">20</h2>
                      </div>
                  </div>
              </div>
          </li>
          <li class="col-lg-3 col-md-6 col-sm-12">
              <div class="body">
                  <div class="row">
                      <div class="col-7">
                          <h5 class="m-t-0">Sales</h5>
                          <p class="text-small">6% higher than last month</p>
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
                          <h5 class="m-t-0">Email</h5>
                          <p class="text-small">Total Registered email</p>
                      </div>
                      <div class="col-5 text-right">
                          <h2 class="">39</h2>
                      </div>
                  </div>
              </div>
          </li>
          <li class="col-lg-3 col-md-6 col-sm-12">
              <div class="body">
                  <div class="row">
                      <div class="col-7">
                          <h5 class="m-t-0">Domians</h5>
                          <p class="text-small">Total registered Domain</p>
                      </div>
                      <div class="col-5 text-right">
                          <h2 class="">8</h2>
                      </div>
                  </div>
              </div>
          </li>
      </ul>
  </div>
</div>

@stop
