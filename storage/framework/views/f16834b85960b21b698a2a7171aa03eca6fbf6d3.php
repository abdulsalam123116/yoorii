
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Error').' '.__('404')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1><?php echo e(__('404')); ?></h1>
            <div class="page-description">
              <?php echo e(__('The page you were looking for could not be found')); ?>

            </div>
            <div class="page-search">
              <div class="mt-3">
                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary btn-lg"><?php echo e(__('Back')); ?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="simple-footer mt-5">
            <?php echo e(settingHelper('copyright', App::getLocale())); ?>

        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/errors/404.blade.php ENDPATH**/ ?>