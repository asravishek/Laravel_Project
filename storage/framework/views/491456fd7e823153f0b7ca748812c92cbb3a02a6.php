<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 mx-auto">

        <a href=" <?php echo e(route('addcategory')); ?> " class="btn btn-success">Add Category</a>
        <a href=" <?php echo e(route('allcategory')); ?>" class="btn btn-info">All Category</a>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover">
                <tr class="text-center">
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Category Slug</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                <?php
                    $i=1;
                ?>

                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center">
                    <td> <?php echo e($i++); ?> </td>
                    <td> <?php echo e($row->name); ?> </td>
                    <td> <?php echo e($row->slug); ?> </td>
                    <td> <?php echo e($row->created_at); ?> </td>
                    <td>
                        <div class="btn-group">
                            <a href=" <?php echo e(URL::to('edit-category/'.$row->id)); ?> " class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-user-edit"></i></a>
                            <a href=" <?php echo e(URL::to('view-category/'.$row->id)); ?> " class="btn btn-sm btn-success" title="View"><i class="fas fa-eye"></i></a>
                            <a href=" <?php echo e(URL::to('delete-category/'.$row->id)); ?> " class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>

        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\laravel\resources\views/post/allcategory.blade.php ENDPATH**/ ?>