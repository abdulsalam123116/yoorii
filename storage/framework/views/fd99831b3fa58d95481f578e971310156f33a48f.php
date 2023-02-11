
<?php $__env->startSection('header_content'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('topbar'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Topbar')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <?php echo $__env->make('admin.store-front.header-content-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content no-padding" id="myTab2Content">
                        <div class="card">
                            <div class="card-header">
                                <?php echo e(__('Topbar Section')); ?>

                            </div>
                            <div class="card-body col-md-10 middle">
                                <form action="<?php echo e(route('update')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('put'); ?>
                                    <div class="form">
                                        <div class="form-group">
                                            <label for="contact_phone"><?php echo e(__('Header Contact Phone')); ?></label>
                                            <div class="custom-file">
                                                <input type="number" class="form-control" value="<?php echo e(old('header_contact_phone') ? old('header_contact_phone') : settingHelper('header_contact_phone')); ?>" name="header_contact_phone" id="header_contact_phone" placeholder="<?php echo e(__('Phone')); ?>"/>
                                            </div>
                                        </div>
                                        <table class="table topbar-setting-switcher">
                                            <tr>
                                                <td class="no-padding-w30 coookie-marign"><?php echo e(__('Language Switcher')); ?></td>
                                                <td>
                                                    <label class="custom-switch mt-2">
                                                        <input type="checkbox" name="" value="setting-status-change/<?php echo e('language_switcher'); ?>" <?php echo e(settingHelper('language_switcher') == 1 ? 'checked' : ''); ?> class="custom-switch-input
                                                    status-change">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="no-padding-w30 coookie-marign"><?php echo e(__('Currency Switcher')); ?></td>
                                                <td>
                                                    <label class="custom-switch mt-2">
                                                        <input type="checkbox" name="" class="custom-switch-input status-change" value="setting-status-change/<?php echo e('currency_switcher'); ?>" <?php echo e(settingHelper('currency_switcher') == 1 ? 'checked' :
                                                    ''); ?>>
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="no-padding-w30 coookie-marign"><?php echo e(__('Play Store')); ?></td>
                                                <td>
                                                    <label class="custom-switch mt-2">
                                                        <input type="checkbox" name="" class="custom-switch-input status-change" value="setting-status-change/<?php echo e('topbar_play_store_link'); ?>" <?php echo e(settingHelper('topbar_play_store_link') == 1 ? 'checked' :
                                                    ''); ?>>
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="no-padding-w30 coookie-marign"><?php echo e(__('App Store')); ?></td>
                                                <td>
                                                    <label class="custom-switch mt-2">
                                                        <input type="checkbox" name="" class="custom-switch-input status-change" value="setting-status-change/<?php echo e('topbar_app_store_link'); ?>" <?php echo e(settingHelper('topbar_app_store_link') == 1 ? 'checked' :
                                                    ''); ?>>
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="text-md-right">
                                        <button class="btn btn-outline-primary" id="save-btn"><?php echo e(__('Save')); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/topbar.blade.php ENDPATH**/ ?>