<?php $__env->startSection('content'); ?>
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

                        <div class="news-box">
                            <?php if($post->image_url): ?>
                            <div class="new-thumb"> <a href="#">
                                    <i class="fas fa-link"></i></a> <span class="cat c4">BUSINESS</span>

                                <img src="<?php echo e($post->image_url); ?>" alt="<?php echo e($post->title); ?>"> </div>
                            <?php endif; ?>
                            <div class="new-txt">
                                <ul class="news-meta">
                                    <li>{ $post->category->title }</li>
                                    <li><?php echo e($post->date); ?></li>

                                </ul>
                                <h4><?php echo e($post->title); ?></h4>
                              
                               <?php echo $post->body_html; ?>



                                <!--Post Tags Start-->
                                <div class="single-post-tags"> <a href="#">Health</a> <a href="#">City News</a> <a href="#">Election</a> <a href="#">Campaign</a> <a href="#">Vote</a> <a href="#">Democratic</a> <a href="#">Press</a> </div>
                                <!--Post Tags End-->
                                <!--Post Author Start-->
                                <div class="about-post-author">
                                    <img src="<?php echo e($post->author->gravatar()); ?>" alt="<?php echo e($post->author->name); ?>">
                                   <h5><?php echo e($post->author->name); ?></h5>
                               
                                </div>
                                <!--Post Author End-->
                                <!--Post Comments Start-->
                                <div class="post-comments">
                                    <h3 class="stitle">Comments on Post (4)</h3>
                                    <ul class="comments">
                                        <li class="comment">
                                            <div class="user-thumb"><img src="images/author.jpg" alt=""></div>
                                            <div class="user-comments">
                                                <h6 class="aname">Mason Gray</h6>
                                                <ul class="post-time">
                                                    <li>Posted: 09 July, 2019 at 2:37 pm</li>
                                                    <li><a href="#"><i class="fas fa-reply"></i> reply</a></li>
                                                </ul>
                                                <p>Many communities in the disease zones have inadequate sanitation that allow frequent trash piles and open sewers to serve as mosquito breeding and feeding grounds, according to the final outcome statement from the Aedes aegypti summit last month.</p>
                                            </div>

                                        </li>

                                    </ul>
                                </div>
                                <!--Post Comments End-->
                                <!--Related Post Start-->
                                <div class="related-posts">
                                    <h3 class="stitle">Related Posts</h3>
                                    <div class="row">
                                        <ul>
                                            <li class="col-md-4 col-sm-4">
                                                <div class="rel-box">
                                                    <h6><a href="#">Social innovation of nonprofit, think tank, outcome to donate </a></h6>
                                                    <ul class="news-meta">
                                                        <li>30 MAR, 2019</li>
                                                        <li>176 Comments</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="col-md-4 col-sm-4">
                                                <div class="rel-box">
                                                    <h6><a href="#">It’s Important for Teenagers to Attend the Political Activities </a></h6>
                                                    <ul class="news-meta">
                                                        <li>30 MAR, 2019</li>
                                                        <li>176 Comments</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="col-md-4 col-sm-4">
                                                <div class="rel-box">
                                                    <h6><a href="#">Friday briefing: May turns politics into role-reversal game</a></h6>
                                                    <ul class="news-meta">
                                                        <li>30 MAR, 2019</li>
                                                        <li>176 Comments</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Related Post End-->
                                <!--Post Comment Start-->
                                <div class="post-comments-form">
                                    <h3 class="stitle">Leave a Comment</h3>
                                    <div class="row">
                                        <ul>
                                            <li class="col-md-4 p5">
                                                <input type="text" placeholder="Full Name">
                                            </li>
                                            <li class="col-md-4 p5">
                                                <input type="text" placeholder="Email">
                                            </li>
                                            <li class="col-md-4 p5">
                                                <input type="text" placeholder="Subject">
                                            </li>
                                            <li class="col-md-12 p5">
                                                <textarea placeholder="Write Comments"></textarea>
                                            </li>
                                            <li class="col-md-12 p5">
                                                <input type="submit" value="Post Comment">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Post Comment End-->
                            </div>
                        </div>

                    </div>
                    <!--Sidebar Start-->
                    <div class="col-md-3">
                        <?php echo $__env->make('include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!--Sidebar End-->
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/laravel/laravel/resources/views/blog/show.blade.php ENDPATH**/ ?>