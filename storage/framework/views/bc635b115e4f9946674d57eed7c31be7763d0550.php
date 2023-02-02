
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Seller Setting')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sellers_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seller_settings_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Seller Settings')); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-xs-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-xs-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Seller Products Commission')); ?></h4>
                                </div>
                                <div class="card-body col-sm-xs-12">
                                    <div class="table-responsive">
                                        <table class="table col-sm-xs-12">
                                            <tbody>
                                            <form action="<?php echo e(route('admin.preference.setting.update')); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('put'); ?>
                                                <tr>
                                                    <td><?php echo e(__('Category Based Commission')); ?></td>
                                                    <td width="300">
                                                        <label class="custom-switch mt-2 <?php echo e(hasPermission('seller_commission_update') ? '' : 'cursor-not-allowed'); ?>">
                                                            <input type="checkbox" name="custom-switch-checkbox"
                                                                   value="setting-status-change/<?php echo e('category_commission_status'); ?>"
                                                                   class="custom-switch-input <?php echo e(hasPermission('seller_commission_update') ? 'status-change' : ''); ?> category_commission"
                                                                <?php echo e(hasPermission('seller_commission_update') ? '' : 'disabled'); ?>

                                                                <?php echo e(settingHelper('category_commission_status') == 1 ? 'checked' : ''); ?> />
                                                            <span class="custom-switch-indicator"></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                    <tr class="seller_commission_rate <?php echo e(settingHelper('category_commission_status') == 1 ? 'd-none' : ''); ?>">
                                                        <td><?php echo e(__('Seller Based Commission')); ?></td>
                                                        <td width="300">
                                                            <label class="custom-switch mt-2 <?php echo e(hasPermission('seller_commission_update') ? '' : 'cursor-not-allowed'); ?>">
                                                                <input type="checkbox" name="custom-switch-checkbox"
                                                                       value="setting-status-change/<?php echo e('seller_commission_status'); ?>"
                                                                       <?php echo e(hasPermission('seller_commission_update') ? '' : 'disabled'); ?>

                                                                       class="<?php echo e(hasPermission('seller_commission_update') ? 'status-change': ''); ?> custom-switch-input seller_commission" <?php echo e(settingHelper('seller_commission_status') == 1 ? 'checked' : ''); ?> />
                                                                <span class="custom-switch-indicator"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                            </form>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="seller_commission_field <?php echo e(settingHelper('category_commission_status') == 1 ? 'd-none' : ''); ?> <?php echo e(settingHelper('seller_commission_status') == 0 ? 'd-none' : ''); ?>">
                                                        <?php if(hasPermission('seller_commission_update')): ?>
                                                            <form action="<?php echo e(route('admin.seller.commission')); ?>" method="post"
                                                                  enctype="multipart/form-data" class="">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('put'); ?>
                                                                <?php endif; ?>

                                                                <div class="form-group">
                                                                    <label for="seller_commission"><?php echo e(__('Seller Commission')); ?> *</label>
                                                                    <div class="input-group">
                                                                        <input type="number" step="any" name="seller_commission"
                                                                               value="<?php echo e(old('seller_commission') ? old('seller_commission') : settingHelper('seller_commission')); ?>" class="form-control"
                                                                               placeholder="<?php echo e(__('Enter Seller Commission')); ?>">
                                                                        <div class="input-group-append barcode">
                                                                            <div class="input-group-text">
                                                                                %
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php if($errors->has('seller_commission')): ?>
                                                                        <div class="invalid-feedback">
                                                                            <?php echo e($errors->first('seller_commission')); ?>

                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <div class="form-group text-right">
                                                                    <?php if(hasPermission('seller_commission_update')): ?>
                                                                        <button type="submit" class=" btn btn-outline-primary" tabindex="1">
                                                                            <?php echo e(__('Update')); ?>

                                                                        </button>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <?php if(hasPermission('seller_commission_update')): ?>
                                                            </form>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-xs-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Seller Page Contact message to seller mail')); ?></h4>
                                </div>
                                <div class="card-body col-sm-xs-12">
                                    <div class="table-responsive">
                                        <table class="table col-sm-xs-12">
                                            <tbody>
                                            <tr>

                                                <td><?php echo e(__('Message to seller mail')); ?></td>
                                                <td width="300">
                                                    <label class="custom-switch mt-2">
                                                        <input type="checkbox" name="custom-switch-checkbox" value="setting-status-change/<?php echo e('contact_message_to_seller_mail'); ?>" class="custom-switch-input status-change" <?php echo e(settingHelper('contact_message_to_seller_mail') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-xs-12 col-md-6">
                    <div class="card">
                        <div class="card-header input-title">
                            <h4><?php echo e(__('Commission Info')); ?></h4>
                        </div>
                        <div class="card-body card-body-paddding">
                            <div class="contents mt-2">
                                Type Details:
                                <ul class="text-justify">
                                    <li>
                                        1. Category Based Commission: If Category Based Commission is enbaled, Seller product based commission will not be applicable.
                                    </li>
                                    <li>
                                        2. Seller Based Commission: Given Seller Based Commission percentage amount will be will be deducted from seller earnings.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?> <?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/sellers/seller-setting.blade.php ENDPATH**/ ?>