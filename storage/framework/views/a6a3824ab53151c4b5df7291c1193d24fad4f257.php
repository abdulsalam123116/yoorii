
<?php $__env->startSection('pos_services_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('setup'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pos_services'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('POS Configuration')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('POS')); ?></h2>
            <div id="output-status"></div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card email-card">
                        <div class="card-header">
                            <h4><?php echo e(__('POS Configuration')); ?></h4>
                        </div>
                        <div class="col-md-10 middle card-body card-body-paddding">
                            <div class="card-body col-md-10 middle">
                                <div class="section-title mt-0"><?php echo e(__('POS activate for seller')); ?></div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox"
                                                           name="custom-switch-checkbox"
                                                           class="custom-switch-input status-change" <?php echo e(settingHelper('is_pos_activated_for_seller') == 1 ? 'checked' : ''); ?> value="pos-seller-status-change/<?php echo e('is_pos_activated_for_seller'); ?>"/>
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 middle card-body card-body-paddding">
                            <div class="card-body col-md-10 middle">
                                <div class="section-title mt-0"><?php echo e(__('POS Invoice Configuration')); ?></div>
                                <form method="post" action="<?php echo e(route('invoice.config')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div class="col-12">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="default_language"><?php echo e(__('Language')); ?></label>
                                            <select class="form-control selectric pos_invoice_lang" name="site_lang"
                                                    data-title="pos_invoice_title"
                                                    data-address="pos_invoice_address"
                                                    data-condition="pos_invoice_terms_condition"
                                                    data-phone="pos_invoice_phone"
                                                    data-powered_by="pos_invoice_powered_by"
                                                    data-url="<?php echo e(route('pos.invoice.by.lang')); ?>"
                                                    id="site_lang">
                                                <option value=""><?php echo e(__('Select Language')); ?></option>
                                                <?php $__currentLoopData = $available_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($language->locale); ?>"<?php echo e(App::getLocale() == $language->locale ? 'selected' : ''); ?>><?php echo e($language->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('default_language')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('default_language')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="pos_invoice_title"><?php echo e(__('Title')); ?></label>
                                                <input id="pos_invoice_title" type="text" class="form-control" value="<?php echo e(old('pos_invoice_title') ? old('pos_invoice_title') : settingHelper('pos_invoice_title', App::getLocale())); ?>" name="pos_invoice_title" placeholder="<?php echo e(__('title')); ?>" tabindex="1"
                                                        autofocus>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="pos_invoice_address"><?php echo e(__('Address')); ?></label>
                                                <input id="pos_invoice_address" type="text" class="form-control" value="<?php echo e(old('pos_invoice_address') ? old('pos_invoice_address') : settingHelper('pos_invoice_address', App::getLocale())); ?>"  name="pos_invoice_address" placeholder="<?php echo e(__('address')); ?>" tabindex="1"
                                                        autofocus>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="pos_invoice_phone"><?php echo e(__('Phone')); ?></label>
                                                <input id="pos_invoice_phone" type="text" class="form-control" value="<?php echo e(settingHelper('pos_invoice_phone')); ?>" name="pos_invoice_phone" placeholder="<?php echo e(__('phone')); ?>"  tabindex="1"
                                                        autofocus>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="pos_invoice_terms_condition"><?php echo e(__('Term and Conditions')); ?></label>
                                                <input id="pos_invoice_terms_condition" type="text" class="form-control" name="pos_invoice_terms_condition" value="<?php echo e(settingHelper('pos_invoice_terms_condition')); ?>" placeholder="<?php echo e(__('invoice Terms & conditions')); ?>" tabindex="1"
                                                        autofocus>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="pos_invoice_powered_by"><?php echo e(__('Powered By')); ?></label>
                                                <input id="pos_invoice_powered_by" type="text" class="form-control" name="pos_invoice_powered_by" value="<?php echo e(settingHelper('pos_invoice_powered_by')); ?>" placeholder="<?php echo e(__('Powered by')); ?>" value="<?php echo e(old('pos_invoice_powered_by')); ?>" tabindex="1"
                                                        autofocus>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                            <?php echo e(__('Update')); ?>

                                        </button>
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

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/pos-system/pos-config.blade.php ENDPATH**/ ?>