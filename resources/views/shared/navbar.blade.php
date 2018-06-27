<div class="header">
    <div class="container">
        <div class="header-left">
            <ul>
                @if (Auth::check())
                    <li>
                        <a href="profile">
                            @php
                                $user = Auth::user();
                                if ($user)
                                {
                                echo "$user->f_name"." "."$user->l_name";
                                }
                            @endphp
                        </a>
                    </li>
                    <li><a href="logout">LOGOUT</a></li>
                @else
                    <li><a href="#">ACCOUNT</a></li>
                    <li class="login">
                        <div id="loginContainer"><a href="#" id="loginButton"><span>LOGIN</span></a>
                            <div id="loginBox">
                                <form id="loginForm" method="post">
                                    @foreach ($errors->all() as $error)
                                        <p class="alert alert-danger">{{ $error }}</p>
                                    @endforeach
                                    {!! csrf_field() !!}
                                    <fieldset id="body">
                                        <fieldset>
                                            <label for="email">Email Address</label>
                                            <input type="text" name="email" id="email" value="{{ old('email') }}">
                                        </fieldset>
                                        <fieldset>
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password">
                                        </fieldset>
                                        <input type="submit" id="login" value="Sign in">
                                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember
                                                me</i></label>
                                    </fieldset>
                                    <span><a href="#">Forgot your password?</a></span>
                                    <fieldset>
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <a href="google_signin">
                                                <img src="signin-assets\google\1x\btn_google_signin_light_pressed_web.png"
                                                     style="height: 40px;">
                                            </a>
                                            <a href="facebook_signin">
                                                <img src="signin-assets\facebook\facebook-login.png"
                                                     style="height: 40px;">
                                            </a>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
        <div class="logo">
            <a href="index"> <img src="images/logo.png" alt=""/></a>
        </div>
        <div class="top-nav">
            <span class="menu"><img src="images/menu.png" alt=""/></span>
            <ul>
                <li><a class="active" href="index">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href="gallery">Gallery</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <!-- script-for-menu -->
            <script>
                $("span.menu").click(function () {
                    $(".top-nav ul").slideToggle("slow", function () {
                    });
                });
            </script>
            <!-- script-for-menu -->
        </div>
        <div class="search-box">
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="search term..." type="search" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"> </span>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- search-scripts -->
        <script src="js/classie.js"></script>
        <script src="js/uisearch.js"></script>
        <script>
            new UISearch(document.getElementById('sb-search'));
        </script>
        <!-- //search-scripts -->
    </div>
</div>