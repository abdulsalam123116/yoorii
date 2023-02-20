
<?php $__env->startSection('updater'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Update System')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Update System')); ?></h2>
                </div>
            </div>
        </div>
        <div class="alert fade show d-none alert_div" role="alert">
            <strong></strong> <span></span>
        </div>
        <div class="row block-element">
            <div class="col-sm-xs-12 col-md-6">
                <div class="card">
                    <div class="card-header input-title">
                        <h4><?php echo e(__('Update')); ?></h4>
                    </div>
                    <div class="card-body card-body-paddding">
                        <?php
                            $latest_version = $response->version;
                            $is_old         = settingHelper('current_version') < $latest_version;
                        ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <div class="alert alert-<?php echo e($is_old ? 'danger' : 'info'); ?>">
                                        <h5 class="bold">Your Version</h5>
                                        <p class="font-medium bold"><?php echo e(get_version(settingHelper('current_version'))); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="alert alert-<?php echo e($is_old ? 'success' : 'info'); ?>">
                                        <h5 class="bold">Latest Version</h5>
                                        <p class="font-medium bold"><?php echo e(get_version($latest_version)); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php if(!$is_old): ?>
                                <div class="alert alert-success center">
                                    <p><i class="bx bx-check-circle"></i> <?php echo e(__('You are using the latest version')); ?></p>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-warning center">
                                    <p><i class="bx bx-alarm-exclamation"></i> <?php echo e(__('An update is available')); ?></p>
                                </div>

                                <div class="alert alert-success center">
                                    <button type="submit" class="btn btn-outline-light text-black" tabindex="4" id="download_update"
                                            data-url="<?php echo e(route('admin.download.update')); ?>">
                                        <i class="bx bx-download"></i> <?php echo e(__('Process Update')); ?>

                                    </button>
                                    <button type="submit" class="btn btn-outline-light text-black disable_btn d-none" tabindex="4" id="preloader">
                                        <img src="<?php echo e(static_asset('images/default/preloader.gif')); ?>" alt="updater" height="22">
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-xs-12 col-md-6">
                <div class="card">
                    <div class="card-header input-title">
                        <h4><?php echo e(__('System Update Procedures')); ?></h4>
                    </div>
                    <div class="card-body">
                        <p><?php echo e(__('Please check this before hitting the update button')); ?>:</p>
                        <ol>
                            <li> It is strongly recommended to create a full backup of your current installation (files and database)</li>
                            <li> Please keep the server on maintenance mode before processing your update from here <a href="<?php echo e(route('preference')); ?>" target="_blank">Preferences</a></li>
                            <li> Review the <a href="https://codecanyon.net/item/yoori-laravel-vue-multivendor-pwa-ecommerce-cms-php-script/37142846#item-description__change-log" target="_blank">Change Log</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php echo $__env->make('admin.common.selector-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/admin/settings/updater.blade.php ENDPATH**/ ?>