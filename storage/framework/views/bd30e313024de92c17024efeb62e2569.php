<nav  class="mt-10 pt-5">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
    <div class="mb-4">
    <a href="<?php echo e(route('dashboard.admin')); ?>" class="m-4 rounded-lg bg-blue-500 py-1.5 px-4 font-sans text-sm text-white shadow-sm shadow-blue-500/20 transition-all hover:shadow-md hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true"> Admin Page </a>
    </div>
    <?php endif; ?>
    <div id="sideNav">
    <a href="<?php echo e(route('dashboard')); ?>" id="dashboard" class="block py-2.5  px-4 hover:bg-gray-700">Dashboard</a>
    <a href="<?php echo e(route('dogs.index')); ?>" id="dogs" class="block py-2.5 px-4 text-sm hover:bg-gray-700">My Dogs</a>
    <a href="<?php echo e(route('dashboard.market')); ?>" id="market" class="block py-2.5 px-4 text-sm hover:bg-gray-700">Market</a>
    <a href="<?php echo e(route('dashboard.notice')); ?>" id="setting" class="block py-2.5 px-4 mb-4 text-sm hover:bg-gray-700">Notices</a>
    <div>
    <a href="<?php echo e(route('logout')); ?>" class="m-4 rounded-lg bg-blue-500 py-1.5 px-4 font-sans text-sm text-white shadow-sm shadow-blue-500/20 transition-all hover:shadow-md hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true"> Logout </a>

</nav>
<?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/components/navlinks.blade.php ENDPATH**/ ?>