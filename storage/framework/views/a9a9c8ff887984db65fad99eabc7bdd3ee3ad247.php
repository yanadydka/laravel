<?php $__env->startSection('content'); ?>
    <h2>Регистрация</h2>
    <div class="form-wrapper">
        <div class="form in-center">
            <form id="form-register" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="" class="form-label">ФИО</label>
                    <br>
                    <input type="text" name="fio" class="form-input">
                </div>
                <div class="form-group mt-10">
                    <label for="" class="form-label">Логин</label>
                    <br>
                    <input type="text" name="login" class="form-input">
                </div>
                <div class="form-group mt-10">
                    <label for="" class="form-label">Email</label>
                    <br>
                    <input type="email" name="email" class="form-input">
                </div>
                <div class="form-group mt-10">
                    <label for="" class="form-label">Пароль</label>
                    <br>
                    <input type="password" name="password" class="form-input">
                </div>
                <div class="form-group mt-10">
                    <label for="" class="form-label">Повторите пароль</label>
                    <br>
                    <input type="password" name="password_confirmation" class="form-input">
                </div>
                <div class="form-group mt-10">
                    <input type="checkbox" name="agreement" required id="">
                    <span class="privacy-agreement-text">
                    Я согласен на обработку персональных данных
                </span>
                </div>
                <div class="form-group mt-10">
                    <input type="submit" value="Зарегистрироваться" class="form-submit">
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\localhost\resources\views/user/register.blade.php ENDPATH**/ ?>