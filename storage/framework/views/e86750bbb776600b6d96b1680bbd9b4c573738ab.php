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
                <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><a href="<?php echo e(route('category', $category->slug)); ?>"><?php echo e($category->title); ?></a>
    <?php echo e($category->posts->count()); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <!--Widget End-->



    <!--Widget End-->




</div>
<?php /**PATH /shared/httpd/laravel/laravel/resources/views/include/sidebar.blade.php ENDPATH**/ ?>