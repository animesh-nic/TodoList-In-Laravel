
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
			<?php echo e(config('app.name', 'Laravel')); ?>

		</a>
	</div>
</nav>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
			<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<!-- Left Side Of Navbar -->
		<ul class="navbar-nav me-auto">
		  <li class="nav-item">
			<a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>" href="/">Home</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link <?php echo e(Request::is('todo/create') ? 'active' : ''); ?>" href="<?php echo e(route('todo.create')); ?>">Create</a>
		  </li>
		</ul>
		<!-- Right Side Of Navbar -->
		<ul class="navbar-nav ms-auto">
			<li class="text-white">This Todo example is create by Animesh</li>				
		</ul>
	  </div>
  </div>
</nav>
<?php /**PATH D:\xampp\htdocs\todo\resources\views/inc/navbar.blade.php ENDPATH**/ ?>