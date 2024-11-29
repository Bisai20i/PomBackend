


<?php $__env->startSection('content'); ?>
        <!-- component -->
<!-- component -->
<div class="flex justify-center overflow-hidden items-center max-w-full h-screen">
    <!-- Left: Image -->
    <div class="w-1/2 h-screen hidden lg:block">
    <img src="https://cdn.britannica.com/42/233842-050-E64243D7/Pomeranian-dog.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
<!-- Right: Login Form -->
    <div class= "lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
    <h1 class="text-2xl font-semibold mb-4">SignUp</h1>
    <form action="<?php echo e(route('user.create')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <!-- Username Input -->
        <div class="mb-4 ">
        <label for="username" class="block text-gray-800">Name</label>
        <input type="text" name="username" value="<?php echo e(old('username')); ?>" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required >
        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-red-600"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        </div>
        <div class="mb-4 ">
            <label for="username" class="block text-gray-800">Email</label>
            <input type="text" value="<?php echo e(old('useremail')); ?>" name="useremail" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500 " required autocomplete="off">
            <?php $__errorArgs = ['useremail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-600"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4 ">
            <label for="username" class="block text-gray-800" value="<?php echo e(old('usercontact')); ?>">Contact Number</label>
            <input type="text" name="usercontact" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500 " required autocomplete="off">
            <?php $__errorArgs = ['usercontact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-600"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!-- Password Input -->
        <div class="mb-4">
        <label for="password" class="block text-gray-800">Password</label>
        <input type="password"  name="userpassword" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required >
        <?php $__errorArgs = ['userpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-600"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="bg-purple-500 hover:bg-purple-600 text-white font-semibold rounded-md py-2 px-4 w-full">Sign Up</button>
    </form>

    <div class="mt-6 text-purple-700 text-center">
        <a href="<?php echo e(route('loginpage')); ?>" class="hover:underline">Back</a>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/layout/signup.blade.php ENDPATH**/ ?>