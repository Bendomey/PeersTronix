@extends('layout.dashboard')

@section('dashboard_content')

<section class="content home">
  <div class="block-header">
      <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
              <h2>Bookings
              <small class="text-muted">Welcome to PeersTronix Admin Dashboard</small>
              </h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
              <ul class="breadcrumb float-md-right">
                  <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> PeersTronix</a></li>
                  <li class="breadcrumb-item active">Booking</li>
              </ul>
          </div>
      </div>
  </div>

  <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Company Name</th>
                                    <th>Customer Email</th>
                                    <th>Customer Contact</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  @if(count($all_booking) > 0)
                                      @foreach($all_booking as $booking)
                                      <td>{{$booking->customer_full_name}}</td>
                                      <td>
                                        @if($booking == null)
                                        <i>NULL</i>
                                        @else
                                          {{$booking->company_name}}
                                        @endif
                                      </td>
                                      <td>{{$booking->customer_email}}</td>
                                      <td>{{$booking->customer_phone}}</td>
                                      <td>{{$booking->message}}</td>
                                      <td>
                                        <button class="btn btn-success"><i class="fa fa-check"></i> Attend</button>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                      </td>
                                      @endforeach
                                    @else

                                    <div class="alert alert-warning" role="alert">
                                        <strong>Sorry!</strong> No bookings Available :(
                                    </div>

                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

@stop
