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
            <div class="flex justify-between mb-3">
              <h2 class="font-bold text-2xl text-purple-800">Dogs Requested for Buying:</h2>
              <a href="<?php echo e(route('dashboard.admin')); ?>" id="sellBtn" class="relative py-1 px-3 rounded-lg border-2 text-sm  hover:border-purple-600 border-purple-300 text-purple-600">Back</a>
            </div>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <?php if($count===0): ?>
                <span class="text-red-500">No any dogs Ordered at the moment.</span>
            <?php else: ?>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$order->sold): ?>
                    <div class="bg-blue-100 shadow-md rounded-lg p-3">
                        <div class="flex justify-center w-full">
                            <img src="<?php echo e(asset('/uploads'.'/'.$order->dog->image_path)); ?>" class="w-auto h-36">
                        </div>
                    
                        <h2 class="text-gray-700 text-lg font-bold mt-2">NPR.<?php echo e($order->dog->price); ?></h2>
                        <p class="text-gray-600"><?php echo e($order->dog->name); ?>.</p>
                        <hr class="border-blue-800 my-2">
                        <p class="text-blue-600 font-bold">Buyer Information:</p>
                        <p class="text-gray-600">Name: <?php echo e($order->buyer_name); ?>.</p>
                        <p class="text-gray-600">Contact: <?php echo e($order->buyer_contact); ?>.</p>
                        <p class="text-gray-600">Email: <?php echo e($order->buyer_email); ?>.</p>
                        <p class="text-gray-600">Address: <?php echo e($order->buyer_address); ?>.</p>
                        <div class="w-full flex pt-2 ">
                            <a href="<?php echo e(route('dogsold',$order->id)); ?>" class="text-sm px-2 py-1 border-2 border-blue-300 rounded-lg text-blue-700 hover:border-blue-500">Sold</a>
                        </div>
                  </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </div>
            <h2 class="font-bold text-2xl text-purple-800 my-3">All Orders:</h2>
            <table class="min-w-full mt-2 bg-white border border-gray-200">
                <thead class="bg-gray-200">
                  <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">OrderId</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">BuyerName</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">BuyerContact</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">DogId</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Order Date</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Selling Date</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b border-gray-200"> <?php echo e($order->id); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"> <?php echo e($order->buyer_name); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($order->buyer_contact); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($order->dog->id); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($order->created_at); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($order->updated_at); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/dashboard/selldogs.blade.php ENDPATH**/ ?>