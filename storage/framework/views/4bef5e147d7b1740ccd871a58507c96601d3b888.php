
<?php $__env->startSection('preference_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('setup'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('preference'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Preference')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('Settings')); ?></h2>
            <div id="output-status"></div>
            <div class="row">
                <?php echo $__env->make('admin.system-setup.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header input-title">
                            <h4><?php echo e(__('Preference')); ?></h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md col-9 middle">
                                    <form action="<?php echo e(route('admin.preference.setting.update')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <tbody>
                                        <tr>
                                            <th colspan="2"><?php echo e(__('System')); ?></th>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('HTTPS Activation')); ?>

                                                <div class="invalid-feedback">
                                                    <?php echo e(__('N.B: Make sure you have SSL Installed before activating HTTPS')); ?>

                                                </div>
                                            </td>

                                            <td width="300">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/<?php echo e('https'); ?>"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('https') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo e(__('Maintenance Mode Activation')); ?>

                                                <?php if(settingHelper('maintenance_mode') == 1): ?>
                                                    <div class="invalid-feedback">
                                                        Access
                                                        here: <?php echo e(route('home',).'/'.settingHelper('maintenance_secret')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                            <td width="300">
                                                <?php if(settingHelper('maintenance_mode') == 0 || settingHelper('maintenance_mode') == ''): ?>
                                                    <label class="custom-switch mt-2 modal-menu" data-toggle="modal"
                                                           title="" data-original-title="Maintenance Mode"
                                                           data-url="<?php echo e(route('edit-info', ['page_name' => 'maintenance-mode'])); ?>"
                                                           data-target="#common-modal">
                                                        <input type="checkbox" name="custom-switch-checkbox"
                                                               class="custom-switch-input" <?php echo e(settingHelper('maintenance_mode') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                <?php else: ?>
                                                    <label class="custom-switch mt-2">
                                                        <input type="checkbox" name="custom-switch-checkbox"
                                                               value="setting-status-change/<?php echo e('maintenance_mode'); ?>"
                                                               class="custom-switch-input status-change" <?php echo e(settingHelper('maintenance_mode') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2"><?php echo e(__('Business Related')); ?></th>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Seller System Activation')); ?></td>
                                            <td width="300">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/<?php echo e('seller_system'); ?>"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('seller_system') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Seller Product Auto Approve')); ?></td>
                                            <td width="300">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/<?php echo e('seller_product_auto_approve'); ?>"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('seller_product_auto_approve') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Wallet System Activation')); ?></td>
                                            <td width="300">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/<?php echo e('wallet_system'); ?>"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('wallet_system') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Coupon System Activation')); ?></td>
                                            <td width="300">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/<?php echo e('coupon_system'); ?>"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('coupon_system') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Pickup Point Activation')); ?></td>
                                            <td width="300">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/<?php echo e('pickup_point'); ?>"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('pickup_point') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Pay Later Payment Activation')); ?></td>
                                            <td width="300">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/<?php echo e('pay_later_system'); ?>"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('pay_later_system') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><?php echo e(__('Stock Out Product Hide')); ?></td>
                                            <td>
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/<?php echo e('stock_out_product_hide'); ?>"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('stock_out_product_hide') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('use_live_api_for_currency')); ?></td>
                                            <td>
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/live_api_currency"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('live_api_currency') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2"><?php echo e(__('Color activation')); ?></th>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Color Filter Activation')); ?></td>
                                            <td>
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="setting-status-change/<?php echo e('color'); ?>"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('color') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.common-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/system-setup/preference.blade.php ENDPATH**/ ?>