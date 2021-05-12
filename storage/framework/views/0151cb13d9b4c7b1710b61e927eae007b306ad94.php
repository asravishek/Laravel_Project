<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href=" <?php echo e(route('student')); ?> " class="btn btn-success">Add Student</a>
        <a href=" <?php echo e(route('allstudent')); ?> " class="btn btn-info">All Student</a>
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

        <form action=" <?php echo e(url('update-student/'.$student->id)); ?> " method="post">
            <?php echo csrf_field(); ?>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Student Name</label>
              <input type="text" class="form-control" placeholder="Student Name" value="<?php echo e($student->name); ?>" name="name">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Student Email</label>
              <input type="email" class="form-control" placeholder="abcxyz@email.com" value="<?php echo e($student->email); ?>" name="email">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Student Phone</label>
              <input type="number" class="form-control" value="<?php echo e($student->phone); ?>" name="phone">
              <p class="help-block text-danger"></p>
            </div>
          </div><br>


          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-primary">Clear</button>
        </form>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\resources\views/student/editstudent.blade.php ENDPATH**/ ?>