@extends('layout.dashboard')

@section('dashboard_content')

<section class="content home">
  <div class="block-header">
      <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
              <h2>Buyer's Information
              <small class="text-muted">Welcome to PeersTronix Admin Dashboard</small>
              </h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
              <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> PeersTronix</a></li>
                  <li class="breadcrumb-item active">Buyer's Information</li>
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
                                    <th>Buyer Name</th>
                                    <th>Buyer Contact</th>
                                    <th>Buyer Location</th>
                                    <th>Product Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($all_info) > 0)
                                  @foreach($all_info as $buyer)
                                    <tr>
                                      <td>{{$buyer->buyer_name}}</td>
                                      <td>{{$buyer->buyer_contact}}</td>
                                      <td>{{$buyer->buyer_location}}</td>
                                      <td>{{$buyer->product_name}}</td>
                                      <td>
                                        <a href='{{url("sell_product/$buyer->buyer_id/$buyer->product_name")}}'><button class="btn btn-success"><i class="fa fa-check"></i> Sell</button></a>
                                        <a href='{{url("delete_buyer_request/$buyer->buyer_id")}}'><button class="btn btn-danger"><i class="fa fa-check mr-2"></i>Remove</button></a>
                                      </td>
                                    </tr>
                                  @endforeach
                                @else
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Sorry!</strong> No Buyer's Request Available :(
                                    </div>
                              @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

{{--modal for deleting request--}}

<div class="modal fade" id="viewProduct" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h4>Product Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <span></span>'s reuest?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

@stop
