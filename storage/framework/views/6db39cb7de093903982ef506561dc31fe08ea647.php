<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href=" <?php echo e(route('addcategory')); ?> " class="btn btn-success">Add Category</a>
        <a href=" <?php echo e(route('allcategory')); ?> " class="btn btn-info">All Category</a>
        <a href=" <?php echo e(route('allpost')); ?> " class="btn btn-warning">All Post</a>
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

        <form action=" <?php echo e(url('update-post/'.$post->id)); ?> " method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Title</label>
              <input type="text" class="form-control" id="name" name="title" value="<?php echo e($post->title); ?>" required>
              <p class="help-block text-danger"></p>
            </div>
          </div><br>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Category</label>
              <select class="form-control" name="category_id"  >
                  <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($row->id); ?>" <?php if($row->id == $post->category_id) echo "selected"; ?> >
                    <?php echo e($row->name); ?> </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>

            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12">
              <label>Post Image</label>
              <input type="file" class="form-control" name="image"> <hr>
              Old Image: <img src="<?php echo e(URL::to($post->image)); ?>" style="width: 80px; height: 50px; ">
              <input type="hidden" name="old_photo" value=" <?php echo e($post->image); ?> ">
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Details</label>
              <textarea rows="5" class="form-control" placeholder="Post Details" name="details" required>
                  <?php echo e($post->details); ?>

              </textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
          <button type="reset" class="btn btn-primary">Clear</button>
        </form>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\laravel\resources\views/post/editpost.blade.php ENDPATH**/ ?>