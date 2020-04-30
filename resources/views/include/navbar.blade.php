<header class="wf100 header">
    <div id="closetopbar" class="topbar wf100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <p>Register Your <a href="#">Now !</a></p>
                </div>
                <div class="col-md-6 col-sm-5"> <a id="closebtn" href="#" class="cross-btn"><i class="fas fa-times"></i></a> <a href="#" class="become-vol">Become a Volunteer</a> </div>
            </div>
        </div>
    </div>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <ul class="left-links">
                        <li> <a href="#">Request Help</a> </li>
                        <li> <a href="#">Support</a> </li>


                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="right-links">
                        <li> <a href="#">Toll Free: <strong>1075</strong></a> </li>
                        <li> <a href="#"><i class="fas fa-street-view"></i> Your Locality</a> </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>


                </div>
            </div>
        </div>
    </div>
    <div class="logo-nav-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a class="navbar-brand" href="/"><img src="images/h2logo.png" alt=""></a> </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="/"> Organisation</a></li>
                                <li><a href="/"> What We Do</a></li>
                                <li><a href="/"> How To Help</a></li>
                                <li><a href="/"> Stories</a></li>
                                <li><a href="/"> Memorial Wall</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>


                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="search-btn"><a class="search-icon" href="#search"> <i class="fas fa-search"></i> </a></li>
                                <li class="bars-btn"><a href="#" id="sidebarCollapse"><img src="images/bars.png" alt=""></a></li>
                            </ul>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                <form class="search-overlay-form">
                                    <input type="search" value="" placeholder="type keyword(s) here" />
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header End-->
