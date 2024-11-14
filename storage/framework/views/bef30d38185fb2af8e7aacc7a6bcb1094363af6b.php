<?php $__env->startSection('content'); ?>
    <h2>Страница входа</h2>
    <div class="form-wrapper">
        <div class="form in-center">
            <?php if($errors->any()): ?>
                <div class="errors-block">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('auth')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group mt-10">
                    <label for="" class="form-label">Логин</label>
                    <br>
                    <input type="text" name="login" required class="form-input">
                </div>
                <div class="form-group mt-10">
                    <label for="" class="form-label">Пароль</label>
                    <br>
                    <input type="text" name="password" required class="form-input">
                </div>
                <div class="form-group mt-10">
                    <input type="submit" value="Войти" class="form-submit">
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Laravel\resources\views/user/login.blade.php ENDPATH**/ ?>