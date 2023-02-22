

<?php $__env->startSection('content'); ?>
    <h2 class="mt-2">Create new Todo</h2>
    <form method="post" action="/todo">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="<?php echo e(old('title')); ?>">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Enter content" value="<?php echo e(old('content')); ?>">
        </div>
        <div class="form-group">
            <label for="due">Due</label>
            <input type="text" class="form-control" name="due" id="due" placeholder="Enter due" value="<?php echo e(old('due')); ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\todo\resources\views/create.blade.php ENDPATH**/ ?>