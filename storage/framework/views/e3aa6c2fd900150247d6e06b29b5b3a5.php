<?php $__env->startSection('content'); ?>
    <form
        method="POST"
        action="/login"
        class="max-w-sm min-w-[80vw] p-5 rounded-lg bg-gray-200 sm:min-w-[25vw]"
    >
        <?php echo csrf_field(); ?>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-800">Your email</label>
            <input 
                type="email" 
                name="email" 
                <?php if(old('email')): ?>
                    value=<?php echo e(old('email')); ?>

                <?php endif; ?> 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@domen.com" 
                required 
            />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-800">Your password</label>
            <input 
                type="password" 
                name="password"
                <?php if(old('password')): ?>
                    value=<?php echo e(old('password')); ?>

                <?php endif; ?>
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required 
            />
        </div>
        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
                <input 
                    name="remember"
                    type="checkbox" 
                    <?php if(old('remember')): ?>
                        checked
                    <?php endif; ?>
                    value="1" 
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                />
            </div>
            <label for="remember" class="ms-2 text-sm font-medium text-gray-800">Remember me</label>
            <button 
                type="submit" 
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center ml-auto"
            >
                Submit
            </button>
        </div>
        <?php if($errors->has('invalidCredentials')): ?>
            <div class="text-red-500"><?php echo e($errors->first('invalidCredentials')); ?></div>
        <?php endif; ?>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/login.blade.php ENDPATH**/ ?>