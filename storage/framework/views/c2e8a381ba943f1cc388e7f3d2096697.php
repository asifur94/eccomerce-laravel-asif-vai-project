<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title>Mobilesentrix - <?php echo $__env->yieldContent("title"); ?></title>
  <!-- css link -->
  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/custom.css')); ?>" />
  <!--Google Fonts-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  
  <?php if(Route::currentRouteName() == 'user.account'): ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <?php endif; ?>
  
</head>


<body>

    <?php echo $__env->make("home.layouts.mobile-menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make("home.layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(Route::currentRouteName() == 'home'): ?>
      <?php echo $__env->make("home.layouts.hero-section", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->yieldContent("main-content"); ?>

    <?php echo $__env->make("home.layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\learn_laravel\ecco\resources\views/home/layouts/master-layout.blade.php ENDPATH**/ ?>