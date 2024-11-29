<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PomPalace</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
    <?php echo $__env->yieldPushContent('css'); ?>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .outline{
            outline: 2px solid white;
            transition: .5s ease-out;
        }
        .outline:hover{
            outline-offset: -4px;
        }
    </style>
</head>
<body>
    <nav class="flex justify-between items-center w-full absolute top-0 py-4 px-6">
        <h1 class="font-bold text-2xl text-purple-800 lg:text-white">PomPalace</h1>
        <div class="navBtns">
            <a href="#" class="outline px-6 py-1.5 shadow-md shadow-pink-500/50 rounded-full flex items-center outline-2 gap-2 bg-purple-500 text-white font-bold text-sm"><span class="material-symbols-outlined">person</span></a>
            
        </div>
    </nav>
    
    <section>
        
        <?php echo $__env->yieldContent('content'); ?>
    </section>
</div>
</body>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</html><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/layout/template.blade.php ENDPATH**/ ?>