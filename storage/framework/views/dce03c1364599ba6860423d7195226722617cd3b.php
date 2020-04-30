<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <?php $currentUser = Auth::user() ?>
            <div class="pull-left image">
                <img src="<?php echo e($currentUser->gravatar()); ?>" class="img-circle" >
            </div>
            <div class="pull-left info">
                <p>  <?php echo e($currentUser->name); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="<?php echo e(url('/dashboard')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Blog</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(route('backend.blog.index')); ?>"><i class="fa fa-circle-o"></i> All Posts</a></li>
                    <li><a href="<?php echo e(route('backend.blog.create')); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<?php /**PATH /shared/httpd/laravel/laravel/resources/views/admin/include/sidebar.blade.php ENDPATH**/ ?>