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

        <div class="h-100 p-2 p-md-4 p-lg-5 overflow-y-scrool">
            <div class="my-4  flex justify-center ">
                <a href="<?php echo e(route('dogs.index')); ?>" class="bg-blue-500 w-1/2 text-center hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4">Back</a>
            </div>
            <form action="<?php echo e(route('dogs.update',$dog->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <legend class="text-center font-bold text-lg mb-4">Edit Dog</legend>

                <div class="mb-2 flex gap-4 w-100 justify-center">
                    <div>
                    <label for="dogname" class="block text-gray-800 text-sm">Dog Name</label>
                    <input type="text" name="dogname" value="<?php echo e($dog->name); ?>" class="w-64 border border-gray-300 rounded-md py-1 px-2  focus:outline-none focus:border-blue-500" required >
                    <?php $__errorArgs = ['dogname'];
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
                    <div>
                    <label for="dogprice" class="block text-gray-800 text-sm">Dog Price</label>
                    <input type="number" name="dogprice" value="<?php echo e($dog->price); ?>" class="w-64 border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:border-blue-500" required >
                    <?php $__errorArgs = ['dogprice'];
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
                </div>
                <div class="mb-2 flex justify-center">
                    <div class="w-1/2">
                    <label for="dogdescription" class="block text-gray-800 text-sm">Dog Description</label>
                    <textarea name="dogdescription" rows="3" class="w-full border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:border-blue-500" required ><?php echo e($dog->description); ?></textarea>
                    <?php $__errorArgs = ['dogdescription'];
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
                </div>
                <div class="mb-1 flex gap-4 w-100 justify-center">
                    <div>
                    <label for="dogbreed" class="block text-gray-800 text-sm">Dog Breed</label>
                    <select name="dogbreed" value="<?php echo e(old('dogname')); ?>" class="w-64 border border-gray-300 rounded-md py-1 px-2  focus:outline-none focus:border-blue-500">
                        <option value="pomeranian" <?php echo e($dog->breed==='pomeranian'?'selected':''); ?>>Pomeranian</option>
                        <option value="small" <?php echo e($dog->breed==='small'?'selected':''); ?>>Small breed</option>
                        <option value="big" <?php echo e($dog->breed==='big'?'selected':''); ?>>Big breed</option>
                    </select>
                    </div>
                    <div>
                    <label for="dogimage" class="block text-gray-800 text-sm">Dog Image</label>
                    <input type="file" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])" name="dogimage" class="w-64 border border-gray-300 text-sm rounded-md py-1 px-2 focus:outline-none focus:border-blue-500" accept="image/+">
                    </div>
                </div>
                <?php $__errorArgs = ['dogimage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-center">
                    <span class="text-red-600 mb-3"><?php echo e($message); ?></span>
                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="mb-2 flex justify-center">
                    <div class="w-1/2 ">
                    <img id="previewImg" src="<?php echo e(asset('/uploads'.'/'.$dog->image_path)); ?>" class="max-w-full h-auto" alt="Dog Preview">
                    </div>
                </div>
                <div class="my-4  flex justify-center ">
                    <button type="submit" class="bg-purple-500 w-1/2 hover:bg-purple-600 text-white font-semibold rounded-md py-2 px-4">Update New</button>
                </div>
            </form>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/dashboard/editDog.blade.php ENDPATH**/ ?>