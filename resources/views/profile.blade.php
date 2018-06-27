@extends('master')
@section('title', 'Profile Page')
@section('banner')
    @include('shared.small_banner')
@endsection
@section('content')
    <!--news-->
    <div class="news">
        <div class="container">
            <h1 class="hdng">Profile</h1>
            <h2 class="hdng-two">***</h2>
            <div class="news-info">
                <div class="col-md-6 news-grids">
                    <div class="news-grids-left">
                        <img src="images/default-profile.png" class="img-responsive" alt="/">
                    </div>
                    <div class="news-grids-right">
                        <h5>
                            @php
                                $user = Auth::user();
                                if ($user)
                                {
                                echo "$user->f_name"." "."$user->l_name";
                                }
                            @endphp
                        </h5>
                        <p>
                            @php
                                if ($user)
                                {
                                echo "E-mail: $user->email";
                                echo "<br/>";
                                echo "Mobile: $user->mobile";
                                echo "<br/>";
                                echo "Gender: $user->gender";
                                echo "<br/>";
                                }
                            @endphp
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//news-->
@endsection