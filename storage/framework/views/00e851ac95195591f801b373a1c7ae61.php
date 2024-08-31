<?php $__env->startSection('content'); ?>
<div>
    
    
    <form method="POST" action="/logout">
        <?php echo csrf_field(); ?>
        <button type="submit">Logout</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/test.blade.php ENDPATH**/ ?>