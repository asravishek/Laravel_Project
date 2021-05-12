<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="jumbotron">
        <h1 class="display-4">Hello, Laravel Contact Page!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href=" <?php echo e(route('shoishob')); ?> " role="button">Learn more</a>
      </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\laravel\resources\views/pages/contact.blade.php ENDPATH**/ ?>