<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    
    <title>ManducoMare</title>
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg.white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="<?php echo e(route('home')); ?>" class="p-3">Home</a>
            </li>
            <li>
                <a href="<?php echo e(route('menu')); ?>" class="p-3">Menu</a>
            </li>
            <li>
                <a href="<?php echo e(route('cupon')); ?>" class="p-3">Popust</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <?php if(auth()->guard()->check()): ?>
            <li>
                <a href="" class="p-3"><?php echo e(auth()->user()->name); ?></a>
            </li>
            <li>
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="p-3 inline">
                <?php echo csrf_field(); ?>
                <button type="submit" >Logout</button>
                </form>
            </li>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
            <li>
                <a href="<?php echo e(route('login')); ?>" class="p-3">Login</a>
            </li>
            <li>
                <a href="<?php echo e(route('register')); ?>" class="p-3">Register</a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\Users\boki\Documents\github\Laravel-1\example-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>