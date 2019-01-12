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
                                  <th>Image</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                @if(count($products))
                                    @foreach($products as $product)

                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_category}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td><img src="{{asset('images/2.jpg')}}" class="rounded-circle w-100" height="100" alt=""> </td>
                                    <td>
                                      <button class="btn btn-success"><i class="fa fa-check"></i> Attend</button>
                                      <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                    @endforeach
                                  @else

                                  alerts

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
