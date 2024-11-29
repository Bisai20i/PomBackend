


<?php $__env->startSection('content'); ?>

<?php if(session('message') && session('status')): ?>
    
    <div id="alertBox" class="absolute top-10 w-full flex justify-center">
        <div class="flex justify-between items-center w-1/2 py-2 px-6 rounded-full bg-<?php echo e(session('status')==='Success'?'green':'red'); ?>-200">
            <p><strong><?php echo e(session('status')); ?></strong> | <?php echo e(session('message')); ?> </p>
            <strong onclick="document.getElementById('alertBox').classList.add('hidden')" class="px-4 py-1 font-bold cursor-pointer hover:text-red-700">X</strong>
        </div>
    </div>

<?php endif; ?>
<!-- component -->
<div class="flex justify-center overflow-hidden items-center max-w-full h-screen">
    <!-- Left: Image -->
    <div class="w-1/2 h-screen hidden lg:block">
    <img src="https://cdn.britannica.com/42/233842-050-E64243D7/Pomeranian-dog.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
<!-- Right: Login Form -->
    <div class= "lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
    <h1 class="text-2xl font-semibold mb-4">Check your Mail for Tokken</h1>
    <hr class="mb-4">
    <form action="<?php echo e(route('updatepassword')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-4 ">
        <label for="password" class="block text-gray-800">New Password</label>
        <input type="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" >
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-sm text-red-500"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
        <label for="confirmpassword" class="block text-gray-800">Confirm Password</label>
        <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" >
        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-sm text-red-500"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
     
        <button type="submit" class="bg-purple-500 hover:bg-purple-600 text-white font-semibold rounded-md py-2 px-4 w-full">Update Password</button>
    </form>

    <div class="mt-6 text-purple-700 text-center">
        <a href="<?php echo e(route('loginpage')); ?>" class="hover:underline">Login</a>
    </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/layout/resetpassword.blade.php ENDPATH**/ ?>