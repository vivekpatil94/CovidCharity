<div class="sidebar">

    <!--Widget Start-->
    <div class="widget">
        <h4>Categories</h4>
        <div class="categories inner">

            <ul>
                @foreach ($errors as $category)
<li><a href="{{ route('category', $category->slug) }}">{{ $category->title }}</a>
    {{ $category->posts->count() }}</li>
                @endforeach
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
