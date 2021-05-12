<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href=" <?php echo e(route('addcategory')); ?> " class="btn btn-success">Add Category</a>
        <a href="<?php echo e(route('allcategory')); ?>" class="btn btn-info">All Category</a>
        <hr>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action=" <?php echo e(route('storecategory')); ?> " method="post">
            <?php echo csrf_field(); ?>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Name</label>
              <input type="text" class="form-control" placeholder="Category name" name="name">
              <p class="help-block text-danger"></p>
            </div>
          </div><br>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Slug</label>
              <input type="text" class="form-control" placeholder="Category Slug" name="slug">
              <p class="help-block text-danger"></p>
            </div>
          </div><br>


          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-primary">Clear</button>
        </form>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\resources\views/post/addcategory.blade.php ENDPATH**/ ?>