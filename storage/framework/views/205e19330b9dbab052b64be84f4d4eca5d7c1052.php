<?php $__env->startSection('content'); ?>
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

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--News Box Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="news-box">
                       
                        <div class="new-thumb">
                            <span class="cat c1">Economy</span>
                            <img src="<?php echo e($post->image_url); ?>" alt="" href="<?php echo e(route('blog.show', $post->slug)); ?>">

                        </div>
                      
                        <div class="new-txt">
                            <ul class="news-meta">
                                <li><?php echo e($post->date); ?></li>
                                <li>176 Comments</li>
                            </ul>
                            <h6><a href="<?php echo e(route('blog.show', $post->slug)); ?>"><?php echo e($post->title); ?></a></h6>
                            <?php echo $post->excerpt_html; ?>

                        </div>
                        <div class="news-box-f">
                            <a href="<?php echo e(route('author', $post->author->slug)); ?>"><?php echo e($post->author->name); ?></a><img src="images/user2.jpg" alt="">
                          </div>
                    </div>
                </div>
                <!--News Box End-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/laravel/laravel/resources/views/blog/index.blade.php ENDPATH**/ ?>