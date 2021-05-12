<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href=" <?php echo e(route('addcategory')); ?> " class="btn btn-success">Add Category</a>
        <a href="<?php echo e(route('allcategory')); ?>" class="btn btn-info">All Category</a>
        <hr>

        <div>
            <ol>
                <li>Category Name: <?php echo e($category->name); ?> </li>
                <li>Category Slug: <?php echo e($category->slug); ?> </li>
                <li>Created At: <?php echo e($category->created_at); ?> </li>
            </ol>
        </div>



      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\blog\resources\views/post/viewcategory.blade.php ENDPATH**/ ?>