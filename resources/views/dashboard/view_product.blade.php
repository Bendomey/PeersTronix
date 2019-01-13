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
              <img src='{{asset("$product->thumb_picture")}}' class="rounded w-100" height="300" alt="">
              <form class="form">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control"value="{{$product->product_name}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <label for="price">Price</label>
                      <div class="input-group">
                          <span class="input-group-addon">Ghc</span>
                          <input type="text" class="form-control date" placeholder="Price" name="product_price" value="{{$product->product_price}}" readonly>
                      </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-6">
                      <label for="Category">Category</label>
                      <select class="form-control show-tick" name="product_category" readonly>
                        <option value="default">{{$product->product_category}}</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="Brand">Brand</label>
                          <input type="text" class="form-control" placeholder="Brand" name="product_brand" value="{{$product->product_brand}}" readonly>
                      </div>
                    </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Color"></label>
                        <input type="text" class="form-control" placeholder="Color" name="product_color" value="{{$product->product_price}}" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <label for="Rating">Rating</label>
                      <select class="form-control show-tick" name="product_rating" readonly>
                        <option value="default">{{$product->product_rating}}</option>
                      </select>
                  </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="brief">Brief Description</label>
                      <textarea name="brief_description" rows="8" cols="80" class="form-control" placeholder="Brief Description" readonly>{{$product->brief_description}}</textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="description">Specifications</label>
                      <textarea name="description" rows="8" cols="80" class="form-control" placeholder="Specifications" readonly>{{$product->description}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Additional Information">Additional Information</label>
                      <textarea name="additional_info" rows="8" cols="80" class="form-control" placeholder="Additional Information" readonly >{{$product->additional_info}}</textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="Thumbnail One">Thumbnail One</label>
                    <img src='{{asset("$product->image_one")}}' class="rounded w-100" height="200" alt="">
                  </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <label for="Thumbnail Two">Thumbnail Two</label>
                    <img src='{{asset("$product->image_two")}}' class="rounded w-100" height="200" alt="">
                  </div>
                  <div class="col-md-6">
                    <label for="Thumbnail Three">Thumbnail Three</label>
                    <img src='{{asset("$product->image_three")}}' class="rounded w-100" height="200" alt="">
                  </div>
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
