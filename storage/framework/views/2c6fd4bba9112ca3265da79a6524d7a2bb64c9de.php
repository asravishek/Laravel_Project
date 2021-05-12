<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href=" <?php echo e(route('student')); ?> " class="btn btn-success">Add Student</a>
        <a href="<?php echo e(route('allstudent')); ?>" class="btn btn-info">All Student</a>
        <hr>

        <div>
            <ul>
                <li>Student Name: <?php echo e($student->name); ?> </li>
                <li>Student Email: <?php echo e($student->email); ?> </li>
                <li>Student Phone: <?php echo e($student->phone); ?> </li>
                <li>Student At: <?php echo e($student->created_at); ?> </li>
            </ul>
        </div>



      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\laravel\resources\views/student/viewstudent.blade.php ENDPATH**/ ?>