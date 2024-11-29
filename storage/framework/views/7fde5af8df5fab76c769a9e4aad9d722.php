 


<?php $__env->startSection('content'); ?>
<?php if(session('message') && session('status')): ?>   
<div id="alertBox" class="absolute top-0 w-full flex justify-center z-10 p-4">
    <div class="flex justify-between items-center w-1/2 py-2 px-6 rounded-full bg-<?php echo e(session('status')==='Success'?'green':'red'); ?>-200">
        <p><strong><?php echo e(session('status')); ?></strong> | <?php echo e(session('message')); ?></p>
        <strong onclick="document.getElementById('alertBox').classList.add('hidden')" class="px-4 py-1 font-bold cursor-pointer hover:text-red-700">X</strong>
    </div>
</div>
<?php endif; ?>
<div class="flex lg:max-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 pt-6 text-white h-screen hidden lg:block">
      <?php if (isset($component)) { $__componentOriginal5eb041833bcc47a9d9c1f9ed41d56877 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5eb041833bcc47a9d9c1f9ed41d56877 = $attributes; } ?>
<?php $component = App\View\Components\Navlinks::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navlinks'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navlinks::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5eb041833bcc47a9d9c1f9ed41d56877)): ?>
<?php $attributes = $__attributesOriginal5eb041833bcc47a9d9c1f9ed41d56877; ?>
<?php unset($__attributesOriginal5eb041833bcc47a9d9c1f9ed41d56877); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5eb041833bcc47a9d9c1f9ed41d56877)): ?>
<?php $component = $__componentOriginal5eb041833bcc47a9d9c1f9ed41d56877; ?>
<?php unset($__componentOriginal5eb041833bcc47a9d9c1f9ed41d56877); ?>
<?php endif; ?>
    </aside>

    <!-- Main Content -->
    <div class="mt-10 pt-6 flex-1 flex flex-col">
        <hr>
      <!-- Content Area -->
      <main class="flex-1 p-4 overflow-y-auto">
        
        <?php echo $dashboardContent??"<h1 class='font-bold text-2xl mt-3 text-center'>Welcome to dashboard</h1>"; ?>

        
      </main>
    </div>
</div>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/components/dashboard.blade.php ENDPATH**/ ?>