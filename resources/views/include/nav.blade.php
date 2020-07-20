<!-- start header -->
            <header>
                <div class="top">
                    <div class="container">
                    <div class="row">
                        <div class="span6">
                        <p class="topcontact"><i class="icon-phone"></i> +62 088 999 123</p>
                        </div>
                        <div class="span6">

                        <ul class="social-network">
                            <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Dribbble"><i class="icon-dribbble icon-white"></i></a></li>
                        </ul>

                        </div>
                    </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row nomargin">
                    <div class="span4">
                        <div class="logo">
                        <a href="/"><img src="img/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                        <div class="navigation">
                            <nav>
                            <ul class="nav topnav">
                                <li class="dropdown active">
                                <a href="/blog/public"><i class="icon-home"></i> Home </a>
                                <ul class=""></ul>
                                </li>
                                <li class="dropdown">
                                <a href="{{ url('/about') }}">About Us</a>
                                </li>
                                <li class="dropdown">
                                <a href="{{ url('/portfolio') }}">Portfolio </a>
                                </li>
                                <li class="dropdown">
                                <a href="{{ url('/blogs') }}">Blog </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                        <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                                    </ul> -->
                                </li>
                                <li>
                                <a href="/blog/public/categories">Categories </a>
                                </li>
                                <li>
                                <a href="/blog/public/contact">Contact </a>
                                </li>
                                @if (Route::has('login'))
                                @auth
                                <li>
                                    <a href="{{ url('/home') }}">Home</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">Register</a>
                                </li>
                                    @endif
                                @endauth
                            @endif
                            </ul>
                            </nav>
                        </div>
                        <!-- end navigation -->
                        </div>
                    </div>
                    </div>
                </div>
            </header>
    <!-- end header -->