<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="post-preview">
        <a href="<?php echo e(URL::to('view-post/'.$row->id)); ?>">
          <h2 class="post-title">
            <?php echo e($row->title); ?>

          </h2>
          <h3 class="post-subtitle">
            <img src=" <?php echo e(url($row->image)); ?> " style="width: 620px; height:320px;" class="rounded" >
          </h3>
        </a>
        <p class="post-meta">Category Name:
          <a href="#"> <?php echo e($row->name); ?> </a>
          on Slug: <b><?php echo e($row->slug); ?></b>  </p>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



      <hr>
      <div class="clearfix">
        <?php echo e($post->links()); ?>

      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\project\resources\views/pages/index.blade.php ENDPATH**/ ?>