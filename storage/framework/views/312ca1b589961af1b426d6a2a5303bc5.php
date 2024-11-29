
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

        <div class="p-2 p-md-4 p-lg-5 overflow-y-auto">
            <a href="<?php echo e(route('dogs.create')); ?>" class="my-5 rounded-lg bg-blue-500 py-1.5 px-4 font-sans text-sm text-white shadow-sm shadow-blue-500/20 transition-all hover:shadow-md hover:shadow-blue-500/40"> Add New Dog </a>

            <table class="min-w-full mt-4 bg-white border border-gray-200">
                <thead class="bg-gray-200">
                  <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Image</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Name</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Description</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Price</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Breed</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $dogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-100">
                        <td class="border-b border-gray-200"><img class="h-20 w-full" src="<?php echo e(asset('/uploads'.'/'.$dog->image_path)); ?>" alt="dogimage"></td>
                        <td class="py-2 px-4 border-b border-gray-200"> <?php echo e($dog->name); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($dog->description); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200">NPR <?php echo e($dog->price); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($dog->breed); ?></td>
                        <td class="py-2 px-2 border-b border-gray-200">
                            <div class="flex items-center gap-2 justify-center">
                            <a href="<?php echo e(route('dogs.edit',$dog->id)); ?>" class="bg-blue-400 hover:bg-blue-500 px-1.5  rounded-lg  text-white">Edit</a>
                            <form action="<?php echo e(route('dogs.destroy',$dog->id)); ?>" method="POST"> 
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                            <button type="submit"class="bg-red-400 hover:bg-red-500 px-1.5  rounded-lg  text-white">Delete</button></form>
                        </div>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>
        </div>
     <?php $__env->endSlot(); ?>
    <?php $__env->startPush('scripts'); ?>
    <script>
        document.getElementById('dogs').classList.add('bg-gray-600');
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/dashboard/dogs.blade.php ENDPATH**/ ?>