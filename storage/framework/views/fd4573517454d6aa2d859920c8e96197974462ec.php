<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">-->

    <!-- External Styles -->
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/color.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/all.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

</head>
<body>
    <div id="app">
        <div class="wrapper">
        <?php echo $__env->make('include.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                 <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

<!-- Scripts
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>-->

<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.prettyPhoto.js')); ?>"></script>
<script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>


</html>
<?php /**PATH /shared/httpd/laravel/laravel/resources/views/layouts/app.blade.php ENDPATH**/ ?>