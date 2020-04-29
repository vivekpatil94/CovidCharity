<header class="wf100 header">
    <div id="closetopbar" class="topbar wf100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <p>Become a <a href="#">Volunteer</a> or Register Your <a href="#">Vote Now !</a></p>
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
                        <li> <a href="#">Council</a> </li>
                        <li> <a href="#">Vacancies</a> </li>
                        <li> <a href="#">Report It</a> </li>
                        <li> <a href="#">A-Z Index</a> </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="right-links">
                        <li> <a href="#">Toll Free: <strong>0800 12345</strong></a> </li>
                        <li> <a href="#"><i class="fas fa-street-view"></i> Explore</a> </li>
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
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
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="aboutus.html">About One</a></li>
                                        <li><a href="aboutus-two.html">About Two</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="departments.html">Departments One</a></li>
                                        <li><a href="department-two.html">Departments Two</a></li>
                                        <li><a href="department-single.html">Departments Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="news.html">News Grid</a></li>
                                        <li><a href="news-full.html">News Full</a></li>
                                        <li><a href="news-two.html">News Style Two</a></li>
                                        <li><a href="news-three.html">News Style Three</a></li>
                                        <li><a href="news-single.html">News Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="event.html">Events</a></li>
                                        <li><a href="event-listing.html">Event Listing</a></li>
                                        <li><a href="event-listing-two.html">Event Listing Two</a></li>
                                        <li><a href="event-single.html">Event Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="services-two.html">Services Two</a></li>
                                                <li><a href="services-single.html">Services Single</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">Causes</a>
                                            <ul class="sub-menu">
                                                <li><a href="causes.html">Causes Grid</a></li>
                                                <li><a href="causes-list.html">Causes List</a></li>
                                                <li><a href="causes-single.html">Causes Single</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">Team</a>
                                            <ul class="sub-menu">
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-two.html">Team Two</a></li>
                                                <li><a href="team-three.html">Team Three</a></li>
                                                <li><a href="team-single.html">Team Single</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">Gallery</a>
                                            <ul class="sub-menu">
                                                <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                                <li><a href="gallery-classic.html">Gallery Classic</a></li>
                                                <li><a href="gallery-modern.html">Gallery Modern</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="donation.html">Donation</a></li>
                                        <li><a href="myaccount.html">My Account</a></li>
                                        <li><a href="page404.html">Page 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact.html">Contact One</a></li>
                                        <li><a href="contact-two.html">Contact Two</a></li>
                                    </ul>
                                </li>
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
<?php /**PATH /shared/httpd/laravel/laravel/resources/views/include/navbar.blade.php ENDPATH**/ ?>