@extends('layout.dashboard')

@section('dashboard_content')

<section class="content home">

  <div class="block-header">
      <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
              <h2>Add New Product
              <small class="text-muted">Welcome to PeersTronix Admin Dashboard</small>
              </h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
              <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> PeersTronix</a></li>
                  <li class="breadcrumb-item"><a href="{{route('dashboard/view_products')}}"><i class="zmdi zmdi-eye"></i> Product</a></li>
                  <li class="breadcrumb-item active">Add New Product</li>
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
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Add </strong> Product</h2>
                </div>
                <div class="body">
                  <form class="form" action="{{route('dashboard/add_product/phase_1')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Product Name" name="product_name" autofocus required>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                              <span class="input-group-addon">Ghc</span>
                              <input type="text" class="form-control date" placeholder="Price" name="product_price" required>
                          </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                          <select class="form-control show-tick" name="product_category" required>
                            <option value="default">Category</option>
                            <option value="laptop">Laptop</option>
                            <option value="phone">Phone</option>
                            <option value="computer part">Computer Part</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Brand" name="product_brand" required>
                          </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                      <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Color" name="product_color">
                        </div>
                      </div>
                      <div class="col-md-6">
                          <select class="form-control show-tick" name="product_rating" required>
                            <option value="default">Rating</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                      </div>
                    </div>
                    <div class="row clearfix">
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea name="brief_description" rows="8" cols="80" class="form-control" placeholder="Brief Description" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea name="description" rows="8" cols="80" class="form-control" placeholder="Specifications" required></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row clearfix">
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea name="additional_info" rows="8" cols="80" class="form-control" placeholder="Additional Information"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="thumb picture">Thumb Picture</label>
                          <input type="file" name="thumb_picture" class="form-control mb-1" required>
                          <label for="thumb picture">Other Pictures</label>
                          <input type="file" name="image_one" class="form-control mb-1" required>
                          <input type="file" name="image_two" class="form-control mb-1" required>
                          <input type="file" name="image_three" class="form-control mb-1" required>
                          <input type="file" name="image_four" class="form-control mb-1" required>
                        </div>
                      </div>
                    </div>
                    <div class="row clearfix d-flex justify-content-start">
                      <button type="reset" class="btn btn-info ml-2">Reset</button>
                      <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                  </form>
              </div>
            </div>
        </div>
      </div>
    </div>
</section>


@stop
