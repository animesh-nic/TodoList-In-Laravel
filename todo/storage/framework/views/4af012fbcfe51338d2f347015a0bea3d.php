<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
	
	<style>
		main > .container { padding: 60px 15px 0;}
	</style>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <div id="app">  
		<?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="container">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
		
		<footer class="footer mt-auto py-3 bg-dark fixed-bottom">
		  <div class="container">
			<span class="text-muted">&copy; Copyright</span>
		  </div>
		</footer>
	</div>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\todo\resources\views/layouts/app.blade.php ENDPATH**/ ?>