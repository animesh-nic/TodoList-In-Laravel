

<?php $__env->startSection('content'); ?>
    <h2 class="mt-2">Todo's List</h2>
    <?php if(count($todos) > 0): ?>
		<?php 
			$n=1;
		?>
        <div class="accordion mb-3" id="accordionTodo">
		<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
		  <!-- Accordion Code -->
		  <div class="accordion-item">
            <h4 class="accordion-header" id="heading_<?php echo e($todo->id); ?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo e($todo->id); ?>" aria-expanded="false" aria-controls="collapse_<?php echo e($todo->id); ?>">
                <?php echo e($todo->title); ?>

				<div class="badge badge-danger text-end text-success">				
					<?php if($todo->is_completed == true): ?>					
						<span class="text-success">Completed</span>
					<?php else: ?>
						<span class="text-danger">Open</span>
					<?php endif; ?>
				</div>
              </button>
            </h4>
            <div id="collapse_<?php echo e($todo->id); ?>" class="accordion-collapse collapse <?php echo e(($n==1) ? 'show' : ''); ?>" aria-labelledby="heading_<?php echo e($todo->id); ?>" data-bs-parent="#accordionTodo">
              <div class="accordion-body">
                <?php echo e($todo->content); ?>

				<div>Due: <span class="badge text-danger"><?php echo e($todo->due); ?></span></div>
				<div class="row py-3">
					<div class="col-6 text-start">
						<a href="todo/<?php echo e($todo->id); ?>" class="btn btn-primary">View</a>
						<a href="todo/<?php echo e($todo->id); ?>/edit" class="btn btn-warning">Edit</a>
					</div>
					<div class="col-6 text-end">					 
					 <form method="post" action="/todo/<?php echo e($todo->id); ?>">
						<?php echo csrf_field(); ?>
						<?php echo method_field('DELETE'); ?>
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
					</div>
				</div>
				<div class="card-footer text-muted">				  
				  Created: <?php echo e($todo->created_at); ?>				  
				</div>
              </div>
            </div>
          </div>
		  <?php 
			$n++; 
		  ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\todo\resources\views/index.blade.php ENDPATH**/ ?>