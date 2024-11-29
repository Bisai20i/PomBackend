<?php if (isset($component)) { $__componentOriginal62829e42a493f1c79d0e8fb934654178 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal62829e42a493f1c79d0e8fb934654178 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dashboard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('navlinks', null, []); ?> 
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
            <a href="<?php echo e(route('dashboard')); ?>" class="block py-2.5  px-4  hover:bg-gray-700">Dashboard</a>
            <a href="<?php echo e(route('dashboard.category')); ?>" class="block py-2.5 px-4 text-sm hover:bg-gray-700 font-bold bg-gray-600">Category</a>
            <a href="<?php echo e(route('dogs.index')); ?>" class="block py-2.5 px-4 text-sm hover:bg-gray-700">My Dogs</a>
            <a href="<?php echo e(route('dashboard')); ?>" class="block py-2.5 px-4 text-sm hover:bg-gray-700">Analytics</a>
            <a href="<?php echo e(route('dashboard.setting')); ?>" class="block py-2.5 px-4 mb-4 text-sm hover:bg-gray-700">Settings</a>
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
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal62829e42a493f1c79d0e8fb934654178)): ?>
<?php $attributes = $__attributesOriginal62829e42a493f1c79d0e8fb934654178; ?>
<?php unset($__attributesOriginal62829e42a493f1c79d0e8fb934654178); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62829e42a493f1c79d0e8fb934654178)): ?>
<?php $component = $__componentOriginal62829e42a493f1c79d0e8fb934654178; ?>
<?php unset($__componentOriginal62829e42a493f1c79d0e8fb934654178); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/dashboard/category.blade.php ENDPATH**/ ?>