

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Edit')); ?> <?php echo e(__('Seller')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('payment_gateway'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Payment Gateway')); ?></h2>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="row">
                        <div class="card col-md-11 middle">
                            <div class="card-header">
                                <h4><?php echo e(__('Bank Payment')); ?></h4>
                                <div class="card-header-action">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        <i class='bx bx-plus'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse" id="collapseOne">
                                        <div class="card-body">
                                            <div class="form-group row mt-2">
                                                <label
                                                    class="col-md-5 col-from-label"><?php echo e(__('Active Account')); ?></label>
                                                <div class="col-md-7">
                                                    <label class="custom-switch">
                                                        <input type="checkbox"
                                                               <?php echo e(@$bank_account->status == 1 ? 'checked' : ''); ?> value="active-method-status-change/<?php echo e(@$bank_account->id); ?>/is_bank_active"
                                                               name="active_account"
                                                               class="custom-switch-input account-active-status-change">
                                                        <input type="hidden" id="is_active" value="<?php echo e('is_bank_active'); ?>" />
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                    <?php if($errors->has('bank_payment')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('bank_payment')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-2">
                                                <label
                                                    class="col-md-5 col-from-label"><?php echo e(__('Default Account')); ?></label>
                                                <div class="col-md-7">
                                                    <label class="custom-switch <?php echo e(@$bank_account->is_default == 1 ? 'cursor-not-allowed' : ''); ?> ">
                                                        <input type="checkbox"
                                                               <?php echo e(@$bank_account->is_default == 1 ? 'checked' : ''); ?> value="default-status-change/<?php echo e(@$bank_account->id); ?>"
                                                               name="bank_payment"
                                                               class="custom-switch-input <?php echo e(@$bank_account->is_default == 1 ? '' : 'status-change'); ?>" <?php echo e(@$bank_account->is_default == 1 ? 'disabled' : ''); ?>>
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="bank-payment-details">
                                                <form action="<?php echo e(route('seller.update.payment.account')); ?>">
                                                    <div class="form-group mt-2">
                                                        <label for="bank_name"><?php echo e(__('Bank Name')); ?></label>
                                                        <input type="text" name="bank_name"
                                                               value="<?php echo e(old('account_details') ? old('account_details') : @$bank_account->account_details['bank_name']); ?>"
                                                               class="form-control"
                                                               placeholder="<?php echo e(__('Enter Bank Name')); ?>">
                                                        <input type="hidden" name="account_type" value="bank"/>
                                                        <?php if($errors->has('bank_name')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('bank_name')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="owner_name"><?php echo e(__('Owner Name')); ?></label>
                                                        <input type="text" name="owner_name"
                                                               value="<?php echo e(old('owner_name') ? old('owner_name') : @$bank_account->account_details['owner_name']); ?>"
                                                               class="form-control"
                                                               placeholder="<?php echo e(__('Enter Owner Name')); ?>">
                                                        <?php if($errors->has('owner_name')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('owner_name')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="bank_phone_no"><?php echo e(__('Phone No')); ?></label>
                                                        <input type="text" name="bank_phone_no"
                                                               value="<?php echo e(old('bank_phone_no') ? old('bank_phone_no') : @$bank_account->account_details['bank_phone_no']); ?>"
                                                               class="form-control"
                                                               placeholder="<?php echo e(__('Enter Phone Number')); ?>">
                                                        <?php if($errors->has('bank_phone_no')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('bank_phone_no')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="branch"><?php echo e(__('Branch')); ?></label>
                                                        <input type="text" name="branch"
                                                               value="<?php echo e(old('branch') ? old('branch') : @$bank_account->account_details['branch']); ?>"
                                                               class="form-control"
                                                               placeholder="<?php echo e(__('Enter Branch')); ?>">
                                                        <?php if($errors->has('branch')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('branch')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="account_number"><?php echo e(__('A/C number')); ?></label>
                                                        <input type="text" name="account_number"
                                                               value="<?php echo e(old('account_number') ? old('account_number') : @$bank_account->account_details['account_number']); ?>"
                                                               class="form-control"
                                                               placeholder="<?php echo e(__('Enter Account Number')); ?>">
                                                        <?php if($errors->has('account_number')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('account_number')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="routing_no"><?php echo e(__('Routing No')); ?></label>
                                                        <input type="text" name="routing_no"
                                                               value="<?php echo e(old('routing_no') ? old('routing_no') : @$bank_account->account_details['routing_no']); ?>"
                                                               class="form-control"
                                                               placeholder="<?php echo e(__('Enter Routing No')); ?>">
                                                        <?php if($errors->has('routing_no')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('routing_no')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="text-right">
                                                        <button
                                                            class="btn btn-outline-primary"><?php echo e(__('Update')); ?></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="card col-md-11 middle">
                            <div class="card-header">
                                <h4><?php echo e(__('Paypal Payment')); ?></h4>
                                <div class="card-header-action">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        <i class='bx bx-plus'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse" id="collapseTwo">
                                        <div class="card-body">
                                            <div class="form-group row mt-2">
                                                <label
                                                    class="col-md-5 col-from-label"><?php echo e(__('Active Account')); ?></label>
                                                <div class="col-md-7">
                                                    <label class="custom-switch">
                                                        <input type="checkbox"
                                                               <?php echo e(@$paypal->status == 1 ? 'checked' : ''); ?> value="active-method-status-change/<?php echo e(@$paypal->id); ?>/is_paypal_active"
                                                               name="active_account"
                                                               class="custom-switch-input account-active-status-change">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                    <?php if($errors->has('bank_payment')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('bank_payment')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-2">
                                                <label
                                                    class="col-md-5 col-from-label"><?php echo e(__('Default Account')); ?></label>
                                                <div class="col-md-7">
                                                    <label class="custom-switch <?php echo e(@$paypal->is_default == 1 ? 'cursor-not-allowed' : ''); ?>">
                                                        <input type="checkbox"
                                                               <?php echo e(@$paypal->is_default == 1 ? 'checked' : ''); ?> value="default-status-change/<?php echo e(@$paypal->id); ?>"
                                                               name="bank_payment"
                                                               class="custom-switch-input <?php echo e(@$paypal->is_default == 1 ? '' : 'status-change'); ?>" <?php echo e(@$paypal->is_default == 1 ? 'disabled' : ''); ?>>
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="bank-payment-details">
                                                <form action="<?php echo e(route('seller.update.payment.account')); ?>">
                                                    <div class="form-group mt-2">
                                                        <label for="bank_name"><?php echo e(__('Paypal Email')); ?></label>
                                                        <input type="text" name="paypal_email"
                                                               value="<?php echo e(old('account_details') ? old('account_details') : @$paypal->account_details['paypal_email']); ?>"
                                                               class="form-control"
                                                               placeholder="<?php echo e(__('Enter Paypal Email')); ?>">
                                                        <input type="hidden" name="account_type" value="paypal"/>
                                                        <?php if($errors->has('bank_name')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('bank_name')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="text-right">
                                                        <button
                                                            class="btn btn-outline-primary"><?php echo e(__('Update')); ?></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/seller/payment/payment.blade.php ENDPATH**/ ?>