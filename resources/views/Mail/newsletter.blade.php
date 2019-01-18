<p>Hello there</p>
<p>{{$data['product_name']}} has been uploaded, go to our website to buy product</p>
<h3>Details</h3>
<p>
  <b>Category :</b> {{$data['category']}}<br>
  <b>Price :</b> {{$data['price']}}<br>
  <b>Brand :</b> {{$data['brand']}}<br>
</p>
<p><a href="{{url($data['address'])}}"><button class="btn btn-primary">Click Here</button></a> to navigate to our website or paste this url in your address bar</p>
<p><a href="{{url($data['address'])}}">http:localhost:8000/{{$data['address']}}</a></p>
