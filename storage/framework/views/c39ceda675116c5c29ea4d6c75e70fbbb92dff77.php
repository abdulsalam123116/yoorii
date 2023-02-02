
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Mobile Apps')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mobile_apps'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('ios_settings_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('ios_settings'); ?>
    active
<?php $__env->stopSection(); ?>
<?php
    $icon = settingHelper('favicon');
?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('Mobile Apps')); ?></h2>
            <div id="output-status"></div>
            <div class="row">
                <?php echo $__env->make('admin.mobile-apps.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-9 col-sm">
                    <div class="card" id="settings-card">
                            <div class="card-header">
                                <h4><?php echo e(__('iOS Settings')); ?></h4>
                            </div>
                            <div class="col-md-10 middle card-body card-body-paddding">
                            <form action="<?php echo e(route('mobile.apps.settings.update')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                                <div class="form-group">
                                    <label for="latest_ipa_version" class="form-control-label"><?php echo e(__('Latest iPA Version')); ?></label>
                                    <input type="text" name="latest_ipa_version" placeholder="<?php echo e(__('Latest iPA Version')); ?>" value="<?php echo e(old('latest_ipa_version') ? old('latest_ipa_version') : settingHelper('latest_ipa_version')); ?>" class="form-control" id="latest_ipa_version">
                                    <?php if($errors->has('latest_ipa_version')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('latest_ipa_version')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="latest_ipa_code" class="form-control-label"><?php echo e(__('Latest iPA Code')); ?></label>
                                    <input type="text" name="latest_ipa_code" placeholder="<?php echo e(__('Latest iPA Code')); ?>" value="<?php echo e(old('latest_ipa_code') ? old('latest_ipa_code') : settingHelper('latest_ipa_code')); ?>" class="form-control" id="latest_ipa_code">
                                    <?php if($errors->has('latest_ipa_code')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('latest_ipa_code')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="ipa_file_url" class="form-control-label"><?php echo e(__('iPA File URL')); ?></label>
                                    <input type="url" name="ipa_file_url" placeholder="<?php echo e(__('iPA File URL')); ?>" value="<?php echo e(old('ipa_file_url') ? old('ipa_file_url') : settingHelper('ipa_file_url')); ?>" class="form-control" id="ipa_file_url">
                                    <?php if($errors->has('ipa_file_url')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('ipa_file_url')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="whats_new_latest_ipa" class="form-control-label"><?php echo e(__("What's New On Latest iPA?")); ?></label>
                                    <textarea name="whats_new_latest_ipa" id="whats_new_latest_ipa" placeholder="<?php echo e(__("What's New On Latest iPA?")); ?>" cols="30" rows="5" class="form-control"><?php echo e(settingHelper('whats_new_latest_ipa')); ?></textarea>
                                </div>
                                <table class="table topbar-setting-switcher">
                                    <tr>
                                        <td class="no-padding-w30 coookie-marign"><?php echo e(__('Update Skippable')); ?></td>
                                        <td width="300">
                                            <label class="custom-switch mt-2">
                                                <input type="checkbox" name="ios_skippable" value="1" class="custom-switch-input " <?php echo e(settingHelper('ios_skippable') == 1 ? 'checked' : ''); ?> />
                                                <input type="hidden" value="ios" name="mobile_app">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-outline-primary" tabindex="4"><?php echo e(__('Update')); ?></button>
                                </div>
                            </form>
                            </div>
                        </div>
                     </div>
                </div>
           </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/mobile-apps/ios-settings.blade.php ENDPATH**/ ?>