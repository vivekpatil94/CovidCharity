<div class="sidebar">
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



    <!--Widget End-->




</div>
