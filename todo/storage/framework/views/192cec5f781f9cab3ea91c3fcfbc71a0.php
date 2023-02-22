

<?php $__env->startSection('content'); ?>
    <a href="/" class="btn btn-secondary mt-2">Go Back</a>
    <h2 class="mt-2"><?php echo e($todo->title); ?></h2>
    <div>Due: <span class="badge badge-danger text-danger"><?php echo e($todo->due); ?></span></div>
    <hr>
    <p><?php echo e($todo->content); ?></p>
	<div>Created: <span class="badge badge-danger text-primary"><?php echo e($todo->created_at); ?></span></div>
	<div>Last Updated: <span class="badge badge-danger text-primary"><?php echo e($todo->updated_at); ?></span></div>
	<div class="row py-3">
		<div class="col-6 text-start">
			<a href="/todo/<?php echo e($todo->id); ?>/edit" class="btn btn-warning">Edit</a>
		</div>
		<div class="col-6 text-end">					 
		 <form method="post" action="/todo/<?php echo e($todo->id); ?>">
			<?php echo csrf_field(); ?>
			<?php echo method_field('DELETE'); ?>
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>
		</div>
	</div>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\todo\resources\views/show.blade.php ENDPATH**/ ?>