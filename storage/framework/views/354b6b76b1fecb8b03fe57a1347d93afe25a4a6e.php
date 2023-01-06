

<?php $__env->startSection('content'); ?>

<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rouded-lg">
        <form action="<?php echo e(route('register')); ?>" method="POST">
            <div class="mb-4">
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
            <div class="mb-4">
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
            <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
            <div class="mb-4">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
            <div class="mb-4">
            <label for="password_confirmation" class="sr-only">Repeat your password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\boki\Documents\github\laravel\example-app\resources\views/auth/register.blade.php ENDPATH**/ ?>