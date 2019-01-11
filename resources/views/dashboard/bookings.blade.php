@extends('layout.app')

@section('dashboard_content')


<div class="block-header">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>Proflie
            <small class="text-muted">Welcome to PeersTronix Admin Dashboard</small>
            </h2>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> PeersTronix</a></li>
                <li class="breadcrumb-item active"></li>
            </ul>
        </div>
    </div>
</div>


@stop
