@extends('layout.dashboard')

@section('dashboard_content')

<section class="content home">
  <div class="block-header">
      <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
              <h2>Sold Products
              <small class="text-muted">Welcome to PeersTronix Admin Dashboard</small>
              </h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
              <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> PeersTronix</a></li>
                  <li class="breadcrumb-item"><a href="{{route('dashboard/view_products')}}"><i class="zmdi zmdi-eye"></i> Products</a></li>
                  <li class="breadcrumb-item active">Sold Products</li>
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
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Brand</th>
                                    <th>Rating</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                  @if(count($products) > 0)
                                    @foreach($products as $product)
                                    <tr>
                                      <td>{{$product->product_name}}</td>
                                      <td>{{$product->product_category}}</td>
                                      <td>Ghc {{$product->product_price}}</td>
                                      <td>{{$product->product_brand}}</td>
                                      <td>{{$product->product_rating}}</td>
                                      <td>
                                        <a href="{{url('make_available/$product->product_id')}}"><button class="btn btn-success"><i class="fa fa-check mr-1"></i>Make Available </button> </a>
                                        <a href='{{url("dashboard/edit_product/$product->product_id")}}'><button class="btn btn-primary"><i class="fa fa-pencil-alt"></i> Edit</button></a>
                                        <a href='{{url("delete_product/$product->product_id")}}'><button class="btn btn-danger"><i class="fa fa-trash mr-1"></i></button></a>
                                      </td>
                                    </tr>
                                    @endforeach

                                    @else
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Sorry!</strong> No sold products Available :(
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

@stop
