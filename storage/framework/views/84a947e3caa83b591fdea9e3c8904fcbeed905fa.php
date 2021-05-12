<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 mx-auto">
        <a href="<?php echo e(route('post')); ?>" class="btn btn-info">Write Post</a>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover">
                <tr class="text-center">
                    <th>SL</th>
                    <th>Category</th>
                    <th>Post Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                <?php
                    $i=1;
                ?>

                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center">
                    <td> <?php echo e($i++); ?> </td>
                    <td> <?php echo e($row->name); ?> </td>
                    <td> <?php echo e($row->title); ?> </td>
                    <td> <img src=" <?php echo e(URL::to($row->image)); ?>" style="width:70px; height:50px;" alt=""></td>
                    <td>
                        <div class="btn-group">
                            <a href=" <?php echo e(URL::to('edit-post/'.$row->id)); ?> " class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-user-edit"></i></a>
                            <a href=" <?php echo e(URL::to('view-post/'.$row->id)); ?> " class="btn btn-sm btn-success" title="View"><i class="fas fa-eye"></i></a>
                            <a href=" <?php echo e(URL::to('delete-post/'.$row->id)); ?> " class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fas fa-trash-alt"></i></a>
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

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\larablog\resources\views/post/allpost.blade.php ENDPATH**/ ?>