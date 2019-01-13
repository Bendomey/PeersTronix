@extends('layout.dashboard')

@section('dashboard_content')


<div class="block-header">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>Products
            <small class="text-muted">Welcome to PeersTronix Admin Dashboard</small>
            </h2>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> PeersTronix</a></li>
                <li class="breadcrumb-item active">Products</li>
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
                                  <th>Product Name</th>
                                  <th>Category</th>
                                  <th>Price</th>
                                  <th>Brand</th>
                                  <th>Rating</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                @if(count($products) > 0)
                                  @foreach($products as $product)
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_category}}</td>
                                    <td>Ghc {{$product->product_price}}</td>
                                    <td>{{$product->product_brand}}</td>
                                    <td>{{$product->product_rating}}</td>
                                    <td>
                                      <button class="btn btn-info" data-toggle="modal" data-target="#viewProduct"><i class="fa fa-eye"></i> View</button>
                                      <a href='{{url("sell_product/$product->product_id")}}'><button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Sell</button></a>
                                      <a href='{{url("dashboard/edit_product/$product->product_id")}}'><button class="btn btn-primary"><i class="fa fa-pencil-alt"></i> Edit</button></a>
                                    </td>
                                  @endforeach

                                  @else
                                  <div class="alert alert-warning" role="alert">
                                      <strong>Sorry!</strong> No products Available :(
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


@stop
