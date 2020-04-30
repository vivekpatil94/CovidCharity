@extends('layouts.app')

@section('content')
    <section class="wf100 subheader">
        <div class="container">
            <h2>Explore Blog & Highlights</h2>
            <ul>
                <li> <a href="/">Home</a> </li>
                <li> <a href="#">Explore Blog</a> </li>

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
                       {{-- @if ($post->image_url)--}}
                        <div class="new-thumb">
                            <span class="cat c1">Economy</span>
                            <img src="{{ $post->image_url }}" alt="" href="{{ route('blog.show', $post->slug) }}">

                        </div>
                      {{--  @endif--}}
                        <div class="new-txt">
                            <ul class="news-meta">
                                <li>{{ $post->date }}</li>
                                <li>176 Comments</li>
                            </ul>
                            <h6><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h6>
                            {!! $post->excerpt_html !!}
                        </div>
                        <div class="news-box-f">
                            <a href="{{ route('author', $post->author->slug) }}">{{ $post->author->name }}</a><img src="images/user2.jpg" alt="">
                         {{--   <a href="{{ route('blog.show', $post->slug) }}"><i class="fas fa-arrow-right"></i></a>--}} </div>
                    </div>
                </div>
                <!--News Box End-->
                    @endforeach

            </div>
            <!--Sidebar Start-->
            <div class="col-md-3">

            @include('include.sidebar')

            </div>
            <!--Sidebar End-->
        </div>

    </div>
        </div>
    </div>
@endsection
