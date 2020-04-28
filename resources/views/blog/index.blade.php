@extends('layouts.app')

@section('content')
    <section class="wf100 subheader">
        <div class="container">
            <h2>Explore Blog & Highlights</h2>
            <ul>
                <li> <a href="index.html">Home</a> </li>
                <li> <a href="#">Explore City</a> </li>
                <li> Cityscapes & Highlights </li>
            </ul>
        </div>
    </section>
    <!--Sub Header End-->
    <div class="main-content p80">
        <!--Events Start-->
        <div class="news-wrapper news-grid">
    <div class="container">
        <!--Sub Header Start-->

        <div class="row">



            <div class="col-md-9">

                @foreach($posts as $post)
                <!--News Box Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="news-box">
                        @if ($post->image_url)
                        <div class="new-thumb">
                            <span class="cat c1">Economy</span> <img src="{{ $post->image_url}}" alt="">
                        </div>
                        @endif
                        <div class="new-txt">
                            <ul class="news-meta">
                                <li>{{ $post->date }}</li>
                                <li>176 Comments</li>
                            </ul>
                            <h6><a href="#">{{ $post->title }}</a></h6>
                            <p>{{ $post->excerpt }} </p>
                        </div>
                        <div class="news-box-f"> <img src="images/user2.jpg" alt=""> {{ $post->author->name }}<a href="#"><i class="fas fa-arrow-right"></i></a> </div>
                    </div>
                </div>
                <!--News Box End-->
                    @endforeach

            </div>
            <!--Sidebar Start-->
            <div class="col-md-3">
                <div class="sidebar">

                    <!--Widget Start-->
                    <div class="widget">
                        <h4>Categories</h4>
                        <div class="categories inner">
                            <ul>
                                <li><a href="#">Latest Updates</a></li>
                                <li><a href="#">Economical Stability</a></li>
                                <li><a href="#">Educational Institutes</a></li>
                                <li><a href="#">Speeches &amp; Videos</a></li>
                                <li><a href="#">Latest Updates</a></li>
                                <li><a href="#">Foreign Policies</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget End-->
                    <!--Widget Start-->
                    <div class="widget">
                        <h4>Recent Posts</h4>
                        <div class="recent-posts inner">
                            <ul>
                                <li>
                                    <img src="images/rp1.jpg" alt=""> <strong>28 August, 2019</strong>
                                    <h6> <a href="#">Fake News may be worrisome, but the </a> </h6>
                                </li>
                                <li>
                                    <img src="images/rp2.jpg" alt=""> <strong>28 August, 2019</strong>
                                    <h6> <a href="#">Republic Faces Political Turmoil</a> </h6>
                                </li>
                                <li>
                                    <img src="images/rp3.jpg" alt=""> <strong>28 August, 2019</strong>
                                    <h6> <a href="#">Improve Police and Justice System</a> </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget End-->


                    <!--Widget Start-->
                    <div class="widget">
                        <h4>Tags</h4>
                        <div class="tags-widget inner">

                            <a href="#">Health</a> <a href="#">City News</a> <a href="#">Vote</a> <a href="#">Election</a> <a href="#">Democratic</a> <a href="#">Press</a> <a href="#">Campaign</a>
                        </div>
                    </div>
                    <!--Widget End-->
                    <!--Widget Start-->
                    <div class="widget">
                        <h4>Archives</h4>
                        <div class="archives inner">

                            <ul>
                                <li><a href="#">May 2019</a></li>
                                <li><a href="#">April 2019</a></li>
                                <li><a href="#">March 2019</a></li>
                                <li><a href="#">February 2019</a></li>
                                <li><a href="#">January 2019</a></li>
                                <li><a href="#">March 2017</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget End-->



                </div>
            </div>
            <!--Sidebar End-->
        </div>

    </div>
        </div>
    </div>
@endsection
