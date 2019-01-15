<p>Hello {{$data['manager']}}</p>
<p>{{$data['customer']}} has requested your expertise</p>
<h5>Details</h5>
<p>
  @if($data['company_name'] != null)
  <b>Company Name :</b> {{$data['company_name']}}<br>
  @endif
  <b>Customer Email :</b> {{$data['email']}}<br>
  <b>Customer Contact :</b> {{$data['phone']}}<br>
  <b>Message :</b> {{$data['message']}}

</p>
