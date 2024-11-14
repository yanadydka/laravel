<?php $__env->startSection('content'); ?>
    <h1>МастерОк</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod pellentesque condimentum. Nullam eu
        pulvinar diam. Praesent eget magna sapien. Nunc sagittis laoreet faucibus. Aliquam fringilla elementum
        sollicitudin.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod pellentesque condimentum. Nullam eu
        pulvinar diam. Praesent eget magna sapien. Nunc sagittis laoreet faucibus. Aliquam fringilla elementum
        sollicitudin.</p>
    <a href="<?php echo e(route('register')); ?>">
        <button class="btn-register disp-block in-center">Регистрация</button>
    </a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Laravel\resources\views/main.blade.php ENDPATH**/ ?>