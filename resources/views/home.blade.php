@extends('master')
@section('title', 'Home')
@section('banner')
    @include('shared.banner')
@endsection
@section('content')
    <div class="welcome">
        <div class="container">
            <h1 class="hdng">Welcome</h1>
            <p>Welcome, Nurro to your new website.</p>
            <div class="welcome-info">
                <div class="col-md-6 welcome-grids">
                    <img src="images/img1.jpg" alt=""/>
                </div>
                <div class="col-md-6 welcome-grids">
                    <img src="images/img2.jpg" alt=""/>
                </div>
                <div class="clearfix"></div>
            </div>
            <p>********************************************************************</p>
        </div>
    </div>
@endsection