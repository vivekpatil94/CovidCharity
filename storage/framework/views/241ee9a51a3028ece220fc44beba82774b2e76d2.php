<?php $__env->startSection('content'); ?>
    <div class="wrapper">

    <?php echo $__env->make('admin.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php echo $__env->make('admin.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    All Blog Posts
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <td>Title</td>
                                            <td>Author</td>
                                            <td>Category</td>
                                            <td>Date</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>

                                      <tbody>
                                      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                              <td>
                                                  <?php echo e($post->title); ?>

                                              </td>
                                              <td> <?php echo e($post->author->name); ?></td>
                                            <td>  N/a </td>
                                              <td><abbr title="<?php echo e($post->dateFormatted(true)); ?>"><?php echo e($post->dateFormatted()); ?></abbr> |
                                                  <?php echo $post->publicationLabel(); ?> </td>

                                              <td>
                                                  <a href="<?php echo e(route('backend.blog.edit', $post->id)); ?>" class="btn btn-xs btn-default">
                                                      <i class="fa fa-edit"></i>
                                                  </a>
                                                  <a href="<?php echo e(route('backend.blog.destroy', $post->id)); ?>" class="btn btn-xs btn-danger">
                                                      <i class="fa fa-times"></i>
                                                  </a>

                                              </td>
                                          </tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                      </tbody>


                                </table>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <div class="pull-left">
                                    <?php echo e($posts->render()); ?>

                                </div>
                                <div class="pull-right">

                                    <small><?php echo e($postCount); ?> <?php echo e(str_plural('Item', $postCount)); ?></small>
                                </div>

                            </div>

                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <!-- ./row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/laravel/laravel/resources/views/admin/blog/index.blade.php ENDPATH**/ ?>