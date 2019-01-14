@extends('layout.dashboard')

@section('dashboard_content')

<section class="content home">

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
                                        <button class="btn btn-info view_product" data-product="{{$product}}"><i class="fa fa-eye"></i> View</button>
                                        <a href='{{url("dashboard/edit_product/$product->product_id")}}'><button class="btn btn-primary"><i class="fa fa-pencil-alt"></i> Edit</button></a>
                                        <a href='{{url("delete_product/$product->product_id")}}'><button class="btn btn-danger"><i class="fa fa-trash mr-1"></i></button></a>
                                      </td>
                                    </tr>
                                    @endforeach

                                    @else
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Sorry!</strong> No products Available :(
                                    </div>
                                    @endif
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                          {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

{{--modal for viewing products--}}

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
              <img class="rounded w-100" id="thumb_picture" height="300" alt="">
              <form class="form">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" name="product_name" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <label for="price">Price</label>
                      <div class="input-group">
                          <span class="input-group-addon">Ghc</span>
                          <input type="text" class="form-control date" placeholder="Price" name="product_price" readonly>
                      </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-6">
                      <label for="Category">Category</label>
                      <input type="text" name="product_category" class="form-control" readonly>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="Brand">Brand</label>
                          <input type="text" class="form-control" placeholder="Brand" name="product_brand" readonly>
                      </div>
                    </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Color"></label>
                        <input type="text" class="form-control" placeholder="Color" name="product_color" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <label for="Rating">Rating</label>
                      <input type="text" name="product_rating" class="form-control" readonly>
                  </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="brief">Brief Description</label>
                      <textarea name="brief_description" rows="8" cols="80" class="form-control" placeholder="Brief Description" readonly></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="description">Specifications</label>
                      <textarea name="description" rows="8" cols="80" class="form-control" placeholder="Specifications" readonly></textarea>
                    </div>
                  </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Additional Information">Additional Information</label>
                      <textarea name="additional_info" rows="8" cols="80" class="form-control" placeholder="Additional Information" readonly ></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="Thumbnail One">Thumbnail One</label>
                    <img id="image_one" class="rounded w-100" height="200">
                  </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <label for="Thumbnail Two">Thumbnail Two</label>
                    <img  id="image_two" class="rounded w-100" height="200" alt="">
                  </div>
                  <div class="col-md-6">
                    <label for="Thumbnail Three">Thumbnail Three</label>
                    <img  id="image_three" class="rounded w-100" height="200" alt="">
                  </div>
                </div>
                <div class="row clearfix">
                  <label for="Thumbnail Four">Thumbnail Four</label>
                  <img id="image_four" class="w-100 rounded" height="200" alt="">
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

@stop
