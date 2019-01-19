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

    @if(Session::has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong> {!! Session::get('success') !!}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

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
                                @if(count($all_booking) > 0)
                                  @foreach($all_booking as $booking)
                                    <tr>
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
                                        <a href='{{url("accept_booking/$booking->customer_id")}}'><button class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                        <button class="btn btn-danger" data-id="{{$booking->customer_id}}" id="confirmDeleteBooking"><i class="fa fa-trash"></i></button>
                                      </td>
                                    </tr>
                                  @endforeach
                                @else

                                    <div class="alert alert-warning" role="alert">
                                        <strong>Sorry!</strong> No bookings Available :(
                                    </div>

                                @endif
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                          {{$all_booking->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

<div class="modal fade" id="confirmDeleteBookingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this request?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger deleteBtn">Okay</a>
      </div>
    </div>
  </div>
</div>

@stop
