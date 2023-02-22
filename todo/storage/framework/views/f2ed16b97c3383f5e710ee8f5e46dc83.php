

<?php $__env->startSection('content'); ?>
    <h2 class="mt-2">Edit Todo</h2>
    <form method="post" action="/todo/<?php echo e($todo->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="<?php echo e($todo->title); ?>">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Enter content" value="<?php echo e($todo->content); ?>">
        </div>
        <div class="form-group">
            <label for="due">Due</label>
            <input type="text" class="form-control" name="due" id="due" placeholder="Enter due" value="<?php echo e($todo->due); ?>">
        </div>
		
		<div class="form-group">
            <label for="is_completed">
			<input type="checkbox" name="is_completed" id="is_completed" <?php echo e(($todo->is_completed == true) ? 'checked' : ''); ?> >					
			Is Completed </label>
        </div>
		<br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\todo\resources\views/edit.blade.php ENDPATH**/ ?>