@extends('layout.dashboard')

@section('dashboard_content')

<div class="block-header">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>Proflie
            <small class="text-muted">Welcome to PeersTronix Admin Dashboard</small>
            </h2>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> PeersTronix</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid">
  <div class="row clearfix">
      <div class="col-lg-4 col-md-12">
          <div class="card member-card">
              <div class="header l-purple">
                  <h4 class="m-t-10">Michael Dorsey</h4>
              </div>
              <div class="member-img">
                  <img src="{{asset('assets/images/profile_av.jpg')}}" class="rounded-circle" alt="profile-image">
              </div>
              <button class="btn btn-primary mt-3">Change</button>
              <div class="body">
                  <div class="col-12">
                      <ul class="social-links list-unstyled">
                          <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                          <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                          <li><a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                      </ul>
                  </div>

              </div>
          </div>
          <div class="card">
              <ul class="nav nav-tabs">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">About</a></li>
              </ul>
              <div class="tab-content">
                  <div class="tab-pane body active" id="about">
                      <small class="text-muted">Email address: </small>
                      <p>michael@gmail.com</p>
                      <hr>
                      <small class="text-muted">Phone: </small>
                      <p>+ 202-555-0191</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-8 col-md-12">
          <div class="card">
              <ul class="nav nav-tabs">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#usersettings">Profile Settings</a></li>
              </ul>
          </div>
          <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="usersettings">

                  <div class="card">
                      <div class="header">
                          <h2><strong>Account</strong> Settings</h2>
                      </div>
                      <div class="body">
                        <form class="form" action="#" method="post">
                          @csrf
                          <label for="full name">Full Name</label>
                          <div class="form-group">
                              <input type="text" class="form-control" value="" required readonly>
                          </div>
                          <label for="email">Email</label>
                          <div class="form-group">
                              <input type="email" class="form-control" value="" required readonly>
                          </div>
                          <label for="contact">Contact</label>
                          <div class="form-group">
                              <input type="tel" class="form-control" value="" required readonly>
                          </div>
                          <button type="submit" class="btn btn-primary btn-round saveAccSetting">Save Changes</button>
                        </form>
                        <button class="btn btn-info btn-round editAccSetting">Edit</button>
                      </div>
                  </div>
                  <div class="card">
                      <div class="header">
                          <h2><strong>Security</strong> Settings</h2>
                      </div>
                      <div class="body">
                        <form class="form" action="#" method="post">
                          @csrf
                          <div class="form-group">
                              <input type="password" name="" class="form-control currentPass" placeholder="Current Password" required>
                          </div>
                          <div class="form-group">
                              <input type="password" name="" class="form-control newPass" placeholder="New Password" required>
                          </div>
                          <button class="btn btn-primary btn-round saveSecSetting">Save Changes</button>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


@stop