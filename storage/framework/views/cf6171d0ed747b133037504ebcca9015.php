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
        <h2 class="text-purple-700 text-lg font-bold mb-2">Your Dogs:</h2>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <?php $__currentLoopData = $dogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($dog->user_id === Auth::id()): ?>
            <div class="bg-blue-100 shadow-md rounded-lg p-4">
                <div class="flex justify-center w-full">
                    <img src="<?php echo e(asset('/uploads'.'/'.$dog->image_path)); ?>" class="w-auto h-64">
                </div>
            
                <h2 class="text-gray-700 text-lg font-bold mt-2">NPR.<?php echo e($dog->price); ?></h2>
                <hr class="border-blue-800 my-2">
                <p class="text-blue-600 font-bold"><?php echo e($dog->name); ?>.</p>
                <p class="text-gray-600 text-sm"><?php echo e($dog->description); ?>.</p>
                <div class="w-full flex pt-2 justify-between items-center">
                    <span class="py-1 px-4 text-<?php echo e($dog->available==='yes'?'green':'red'); ?>-800 rounded-full font-bold text-sm bg-<?php echo e($dog->available==='yes'?'green':'red'); ?>-300"> <?php echo e($dog->available==='yes'?"Available":"Not Available"); ?> </span>
                    <p class="text-gray-500 text-sm font-semibold">Breed: <?php echo e(strtoupper($dog->breed)); ?></p>
                </div>
              </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
        <hr class="my-3 border-1 border-purple-600">
        <h2 class="text-purple-700 text-lg font-bold my-2">Other Dogs:</h2>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <?php $__currentLoopData = $dogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($dog->user_id !== Auth::id()): ?>
            <div class="bg-blue-100 shadow-md rounded-lg p-4">
                <div class="flex justify-center w-full">
                    <img src="<?php echo e(asset('/uploads'.'/'.$dog->image_path)); ?>" class="w-auto h-64">
                </div>
                <div class="flex justify-between items-baseline">
                    <h2 class="text-gray-700 text-lg font-bold mt-2">NPR.<?php echo e($dog->price); ?>.</h2>
                    <p class="text-gray-600 text-sm"><?php echo e(strtoupper($dog->breed)); ?></p>
                </div>
                
                <hr class="border-blue-800 my-2">
                <p class="text-blue-600 font-bold"><?php echo e($dog->name); ?>.</p>
                <p class="text-gray-600"><?php echo e($dog->description); ?>.</p>
                <div class="w-full flex pt-2 justify-between items-center">
                    <span class="py-1 px-4 text-<?php echo e($dog->available==='yes'?'green':'red'); ?>-800 rounded-full font-bold text-sm bg-<?php echo e($dog->available==='yes'?'green':'red'); ?>-300"> <?php echo e($dog->available==='yes'?"Available":"Not Available"); ?> </span>
                    <?php if($dog->available==='yes'): ?>
                    <button onclick="openModal(<?php echo e($dog->id); ?>)" class="text-sm px-2 py-1 hover:border-blue-500 border-2 border-blue-300 rounded-lg text-blue-700">Buy</button>
                    <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
        <div id="popupModal" class="hidden absolute top-0 bg-opacity-50 right-0 w-full h-full bg-blue-300 flex items-center justify-center">
            <div class="p-3 shadow-lg shadow-purple-500/50 bg-white text-end rounded-lg w-1/2">
            <button onclick="document.getElementById('popupModal').classList.add('hidden')" class="px-2 my-2 py-1 border-2 border-red-300 rounded-lg text-red-700 hover:border-red-500">Close</button>
            <form action="<?php echo e(route('buydog')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <legend class="font-bold text-purple-700 text-lg mb-2">Confirmation</legend>
                <input type="hidden" name="dogId" id="dogId">

                <input type="text" name="name" class="px-4 focus:outline-none focus:ring-2 focus:ring-purple-500 py-1.5 w-full my-1 rounded-lg bg-purple-100 border-0" placeholder="Buyer Full Name:*" required>
                <input type="email" name="email" class="px-4 focus:outline-none focus:ring-2 focus:ring-purple-500 py-1.5 w-full my-1 rounded-lg bg-purple-100 border-0" placeholder="Buyer Email:">
                <input type="number" name="contact" class="px-4 focus:outline-none focus:ring-2 focus:ring-purple-500 py-1.5 w-full my-1 rounded-lg bg-purple-100 border-0" placeholder="Buyer Contact:*" required>
                <input type="text" name="address" class="px-4 focus:outline-none focus:ring-2 focus:ring-purple-500 py-1.5 w-full my-1 rounded-lg bg-purple-100 border-0" placeholder="Buyer Address:*" required>
                <input type="submit" class="px-2 mt-2 py-1 border-2 cursor-pointer border-purple-300 rounded-lg text-purple-700 hover:border-purple-500" value="Buy">
            </form>
        </div>
        </div>
     <?php $__env->endSlot(); ?>


    <?php $__env->startPush('scripts'); ?>
    <script>
        document.getElementById('market').classList.add('bg-gray-600');

        function openModal(id){
            let idBox = document.querySelector('#dogId')
            idBox.value = id;
            document.getElementById('popupModal').classList.remove('hidden')
        }
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

<?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/dashboard/market.blade.php ENDPATH**/ ?>