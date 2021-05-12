<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href="<?php echo e(route('post')); ?>" class="btn btn-info">Write Post</a>
        <a href=" <?php echo e(route('allpost')); ?> " class="btn btn-warning">All Post</a>

        <hr>

        <div>
                <h3>Title: <?php echo e($post->title); ?> </h3>
                <img src=" <?php echo e(url($post->image)); ?> " height="270px" class="img-fluid mx-auto rounded">
                <p><strong>Category Name:</strong> <?php echo e($post->name); ?> </p>
                <p class="text-justify"> <strong>Details:</strong> <?php echo e($post->details); ?> </p>
        </div>



      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\larablog\resources\views/post/viewpost.blade.php ENDPATH**/ ?>