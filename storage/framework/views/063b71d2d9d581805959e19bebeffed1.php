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
  <?php if($orderCount): ?>
  <?php $__env->startPush('css'); ?>
  <style>
    #sellBtn::after{
      content: '';
      position:absolute;
      height: 15px;
      text-align: center;
      width: 15px;
      top: -5px;
      left:-5px;
      border-radius: 50%;
      background: red;
      color: white;

    }
  </style>
<?php $__env->stopPush(); ?>
  <?php endif; ?>

     <?php $__env->slot('dashboardContent', null, []); ?> 
        <div class="p-2 p-md-4 p-lg-5 overflow-y-auto">
          <div class="flex justify-between mb-3">
            <h2 class="font-bold text-2xl text-purple-800">ALL DOGS</h2>
            <a href="<?php echo e(route('selldog')); ?>" id="sellBtn" class="relative py-1 px-3 rounded-lg border-2 text-sm  hover:border-purple-600 border-purple-300 text-purple-600">Sell Dogs </a>
          </div>
            
            <table class="min-w-full my-2 bg-white border border-gray-200">
                <thead class="bg-gray-200">
                  <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Image</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Name</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Description</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Price</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Breed</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">By User</th>
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
                            <?php echo e($dog->user->name); ?>

                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>
              <hr>
            <h2 class="font-bold text-2xl text-purple-800 my-3">ALL Users</h2>
            <table class="min-w-full mt-2 bg-white border border-gray-200">
                <thead class="bg-gray-200">
                  <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">UserId</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Name</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Email</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Contact</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Mail</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b border-gray-200"> <?php echo e($user->id); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"> <?php echo e($user->name); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($user->email); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200">+977 <?php echo e($user->contact); ?></td>
                        <td class="py-2 px-2 border-b border-gray-200">
                            <div class="flex items-center gap-2 justify-center">
                            <a href="" class="bg-blue-400 hover:bg-blue-500 px-1.5  rounded-lg  text-white">Mail</a>
        
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/dashboard/admin.blade.php ENDPATH**/ ?>