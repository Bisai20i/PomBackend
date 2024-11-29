
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
     <?php $__env->slot('dashboardContent', null, []); ?> 
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          <!-- Card 1 -->
          <div class="bg-purple-200 shadow-md rounded-lg p-6">
            <h2 class="font-bold text-lg"><?php echo e($dog['count']); ?></h2>
            <p class="text-gray-600">Dogs in total.</p>
          </div>
          <!-- Card 2 -->
          <div class="bg-cyan-200 shadow-md rounded-lg p-6">
            <h2 class="font-bold text-lg">NPR.<?php echo e($dog['totalearn']); ?></h2>
            <p class="text-gray-600">Earned in total.</p>
          </div>
          <!-- Card 3 -->
          <div class="bg-blue-200 shadow-md rounded-lg p-6">
            <h2 class="font-bold text-lg"><?php echo e($dog['currentdogs']); ?></h2>
            <p class="text-gray-600">Dogs for Sell.</p>
          </div>
          <div class="bg-green-200 shadow-md rounded-lg p-6">
            <h2 class="font-bold text-lg"><?php echo e($dog['sold']); ?></h2>
            <p class="text-gray-600">Dogs sold.</p>
          </div>
          <!-- Add more cards as needed -->
        </div>
     <?php $__env->endSlot(); ?>
    <?php $__env->startPush('scripts'); ?>
    <script>
        document.getElementById('dashboard').classList.add('bg-gray-600');
    </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal62829e42a493f1c79d0e8fb934654178)): ?>
<?php $attributes = $__attributesOriginal62829e42a493f1c79d0e8fb934654178; ?>
<?php unset($__attributesOriginal62829e42a493f1c79d0e8fb934654178); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62829e42a493f1c79d0e8fb934654178)): ?>
<?php $component = $__componentOriginal62829e42a493f1c79d0e8fb934654178; ?>
<?php unset($__componentOriginal62829e42a493f1c79d0e8fb934654178); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/layout/dashboard.blade.php ENDPATH**/ ?>