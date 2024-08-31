<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <title><?php echo e(config('app.name', 'SomeTitle')); ?></title>
    </head>  
    <body>
        <div class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH /var/www/resources/views/layouts/main/guest.blade.php ENDPATH**/ ?>