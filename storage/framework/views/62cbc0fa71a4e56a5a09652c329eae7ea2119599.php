
<?php $__env->startSection('payment-gateway'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('payment-gateway'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Payment-Gateway')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('Payment Methods')); ?> (19)</h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="card payment_method">
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == '' || old('payment_method') == 'paypal' ? 'active' : ''); ?>"
                                       id="paypal-tab" data-toggle="tab" href="#paypal" role="tab"
                                       aria-controls="contact" aria-selected="false"><?php echo e(__('Paypal')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'stripe' ? 'active' : ''); ?>"
                                       id="stripe-tab" data-toggle="tab" href="#stripe" role="tab"
                                       aria-controls="contact" aria-selected="false"><?php echo e(__('Stripe')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method')  == 'sslcommerz' ? 'active' : ''); ?>"
                                       id="sslcommerz-tab" data-toggle="tab" href="#sslcommerz" role="tab"
                                       aria-controls="contact" aria-selected="false"><?php echo e(__('SSLCOMMERZ')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'paytm' ? 'active' : ''); ?>"
                                       id="paytm-tab" data-toggle="tab" href="#paytm" role="tab" aria-controls="profile"
                                       aria-selected="false"><?php echo e(__('Paytm')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'jazz_cash' ? 'active' : ''); ?>"
                                       id="jazz_cash-tab" data-toggle="tab" href="#jazz_cash" role="tab"
                                       aria-controls="profile" aria-selected="false"><?php echo e(__('JazzCash')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'razorpay' ? 'active' : ''); ?>"
                                       id="razorpay-tab" data-toggle="tab" href="#razorpay" role="tab"
                                       aria-controls="profile" aria-selected="false"><?php echo e(__('Razorpay')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'mollie' ? 'active' : ''); ?>"
                                       id="mollie-tab" data-toggle="tab" href="#mollie" role="tab"
                                       aria-controls="profile" aria-selected="false"><?php echo e(__('Mollie')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'paystack' ? 'active' : ''); ?>"
                                       id="paystack-tab" data-toggle="tab" href="#paystack" role="tab"
                                       aria-controls="profile" aria-selected="false"><?php echo e(__('Paystack')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'flutterwave' ? 'active' : ''); ?>"
                                       id="flutterwave-tab" data-toggle="tab" href="#flutterwave" role="tab"
                                       aria-controls="profile" aria-selected="false"><?php echo e(__('Flutter Wave')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'mercado_pago' ? 'active' : ''); ?>"
                                       id="mercado_pago-tab" data-toggle="tab" href="#mercado_pago" role="tab"
                                       aria-controls="profile" aria-selected="false"><?php echo e(__('mercado_pago')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'mid_trans' ? 'active' : ''); ?>"
                                       id="mid_trans-tab" data-toggle="tab" href="#mid_trans" role="tab"
                                       aria-controls="profile" aria-selected="false"><?php echo e(__('mid_trans')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'telr' ? 'active' : ''); ?>"
                                       id="telr-tab" data-toggle="tab" href="#telr" role="tab"
                                       aria-controls="profile" aria-selected="false"><?php echo e(__('telr')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method') == 'google_pay' ? 'active' : ''); ?>"
                                       id="google_pay-tab" data-toggle="tab" href="#google_pay" role="tab"
                                       aria-controls="profile" aria-selected="false"><?php echo e(__('google_pay')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method')  == 'amarpay' ? 'active' : ''); ?>"
                                       id="amarpay-tab" data-toggle="tab" href="#amarpay" role="tab"
                                       aria-controls="contact" aria-selected="false"><?php echo e(__('amarpay')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method')  == 'bkash' ? 'active' : ''); ?>"
                                       id="bkash-tab" data-toggle="tab" href="#bkash" role="tab"
                                       aria-controls="contact" aria-selected="false"><?php echo e(__('bkash')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method')  == 'nagad' ? 'active' : ''); ?>"
                                       id="nagad-tab" data-toggle="tab" href="#nagad" role="tab"
                                       aria-controls="contact" aria-selected="false"><?php echo e(__('nagad')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method')  == 'skrill' ? 'active' : ''); ?>"
                                       id="skrill-tab" data-toggle="tab" href="#skrill" role="tab"
                                       aria-controls="contact" aria-selected="false"><?php echo e(__('skrill')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method')  == 'iyzico' ? 'active' : ''); ?>"
                                       id="iyzico-tab" data-toggle="tab" href="#iyzico" role="tab"
                                       aria-controls="contact" aria-selected="false"><?php echo e(__('iyzico')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('payment_method')  == 'kkiapay' ? 'active' : ''); ?>"
                                       id="kkiapay-tab" data-toggle="tab" href="#kkiapay" role="tab"
                                       aria-controls="kkiapay" aria-selected="false"><?php echo e(__('kkiapay')); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content no-padding" id="myTab2Content">
                        <div class="tab-pane fade <?php echo e(old('payment_method') == '' || old('payment_method') == 'paypal' ? 'show active' : ''); ?>"
                            id="paypal" role="tabpane1" aria-labelledby="paypal-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Paypal Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_paypal_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_paypal_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="paypal_client_id"><?php echo e(__('Client ID ')); ?></label>
                                                <input type="hidden" name="payment_method" value="paypal">
                                                <input type="text" class="form-control" name="paypal_client_id"
                                                       id="paypal_client_id"
                                                       value="<?php echo e(old('paypal_client_id') ? old('paypal_client_id') : settingHelper('paypal_client_id')); ?>"
                                                       placeholder="<?php echo e(__('Paypal Client ID')); ?>">
                                                <?php if($errors->has('paypal_client_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('paypal_client_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'stripe' ? 'show active' : ''); ?>"
                             id="stripe" role="tab" aria-labelledby="stripe-tab">
                            <div class="card">
                                <div class="card-header extra-padding">
                                    <h4><?php echo e(__('Stripe Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_stripe_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class=" <?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_stripe_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="stripe_key"><?php echo e(__('Stripe Key')); ?></label>
                                                <input type="hidden" name="payment_method" value="stripe">
                                                <input type="text" class="form-control" name="stripe_key"
                                                       id="stripe_key"
                                                       value="<?php echo e(old('stripe_key') ? old('stripe_key') : settingHelper('stripe_key')); ?>"
                                                       placeholder="<?php echo e(__('Stripe Client Key')); ?>">
                                                <?php if($errors->has('stripe_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('stripe_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="stripe_secret"><?php echo e(__('Stripe Secret')); ?></label>
                                                <input type="text" class="form-control" id="stripe_secret"
                                                       name="stripe_secret"
                                                       value="<?php echo e(old('stripe_secret') ? old('stripe_secret') : settingHelper('stripe_secret')); ?>"
                                                       placeholder="<?php echo e(__('Stripe Client Secret')); ?>">
                                                <?php if($errors->has('stripe_secret')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('stripe_secret')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method')  == 'sslcommerz' ? 'show active' : ''); ?>"
                             id="sslcommerz" role="tab" aria-labelledby="sslcommerz-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('SSLCOMMERZ Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invalid-feedback text-danger">
                                                    <?php echo e(__("N.B: Before activating :name, please make sue you have Bangladeshi currency BDT activated",['name' => __('SSLCOMMERZ')])); ?>

                                                </div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_sslcommerz_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_sslcommerz_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_sslcommerz_sandbox_mode_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_sslcommerz_sandbox_mode_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Sandbox Mode')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="sslcommerz_id"><?php echo e(__('SSLCOMMERZ ID')); ?></label>
                                                <input type="hidden" name="payment_method" value="sslcommerz">
                                                <input type="text" class="form-control" id="sslcommerz_id"
                                                       name="sslcommerz_id"
                                                       value="<?php echo e(old('sslcommerz_id') ? old('sslcommerz_id') : settingHelper('sslcommerz_id')); ?>"
                                                       placeholder="<?php echo e(__('SSLCOMMERZ Store Id')); ?>">
                                                <?php if($errors->has('sslcommerz_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('sslcommerz_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="sslcommerz_password"><?php echo e(__('SSLCOMMERZ Password')); ?></label>
                                                <input type="password" class="form-control" id="sslcommerz_password"
                                                       name="sslcommerz_password"
                                                       value="<?php echo e(old('sslcommerz_password') ? old('sslcommerz_password')  : settingHelper('sslcommerz_password')); ?>"
                                                       placeholder="<?php echo e(__('SSLCOMMERZ Store Password')); ?>">
                                                <?php if($errors->has('sslcommerz_password')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('sslcommerz_password')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'paytm' ? 'show active' : ''); ?>"
                             id="paytm" role="tab" aria-labelledby="paytm-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Paytm Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invalid-feedback text-danger">
                                                    <?php echo e(__("N.B: Before activating Paytm, please make sue you have Indian Rupee currency INR activated")); ?>

                                                </div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_paytm_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_paytm_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="merchant_id"><?php echo e(__('MarChant ID')); ?></label>
                                                <input type="hidden" name="payment_method" value="paytm">
                                                <input type="text" class="form-control" id="merchant_id"
                                                       name="merchant_id"
                                                       value="<?php echo e(old('merchant_id') ? old('merchant_id') : settingHelper('merchant_id')); ?>"
                                                       placeholder="<?php echo e(__('Merchant Id')); ?>">
                                                <?php if($errors->has('merchant_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('merchant_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="merchant_key"><?php echo e(__('MarChant Key')); ?></label>
                                                <input type="text" class="form-control" id="merchant_key"
                                                       name="merchant_key"
                                                       value="<?php echo e(old('merchant_key') ? old('merchant_key') : settingHelper('merchant_key')); ?>"
                                                       placeholder="<?php echo e(__('Merchant Key')); ?>">
                                                <?php if($errors->has('merchant_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('merchant_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="merchant_website"><?php echo e(__('MarChant Website')); ?></label>
                                                <input type="text" class="form-control" id="merchant_website"
                                                       name="merchant_website"
                                                       value="<?php echo e(old('merchant_website') ? old('merchant_website') : settingHelper('merchant_website')); ?>"
                                                       placeholder="<?php echo e(__('Merchant Website')); ?>">
                                                <?php if($errors->has('merchant_website')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('merchant_website')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="channel"><?php echo e(__('Channel')); ?></label>
                                                <input type="text" class="form-control" id="'channel" name="channel"
                                                       value="<?php echo e(old('channel') ? old('channel') : settingHelper('channel')); ?>"
                                                       placeholder="<?php echo e(__('Channel')); ?>">
                                                <?php if($errors->has('channel')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('channel')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="industry_type"><?php echo e(__('Industry Type')); ?></label>
                                                <input type="text" class="form-control" id="industry_type"
                                                       name="industry_type"
                                                       value="<?php echo e(old('industry_type') ? old('industry_type') : settingHelper('industry_type')); ?>"
                                                       placeholder="<?php echo e(__('Industry Type')); ?>">
                                                <?php if($errors->has('industry_type')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('industry_type')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'jazz_cash' ? 'show active' : ''); ?>"
                             id="jazz_cash" role="tab" aria-labelledby="jazz_cash">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('JazzCash Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_jazz_cash_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_jazz_cash_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="jazz_cash_merchant_id"><?php echo e(__('Merchant Id')); ?></label>
                                                <input type="hidden" name="payment_method" value="jazz_cash">
                                                <input type="text" class="form-control" name="jazz_cash_merchant_id"
                                                       id="jazz_cash_merchant_id"
                                                       value="<?php echo e(old('jazz_cash_merchant_id') ? old('jazz_cash_merchant_id') : settingHelper('jazz_cash_merchant_id')); ?>"
                                                       placeholder="<?php echo e(__('JazzCash Merchant Id')); ?>">
                                                <?php if($errors->has('jazz_cash_merchant_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('jazz_cash_merchant_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="jazz_cash_password"><?php echo e(__('JazzCash Password')); ?></label>
                                                <input type="text" class="form-control" name="jazz_cash_password"
                                                       id="jazz_cash_password"
                                                       value="<?php echo e(old('jazz_cash_password') ? old('jazz_cash_password') : settingHelper('jazz_cash_password')); ?>"
                                                       placeholder="<?php echo e(__('JazzCash Password')); ?>">
                                                <?php if($errors->has('jazz_cash_password')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('jazz_cash_password')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="jazz_cash_integrity_salt"><?php echo e(__('Integrity Salt')); ?></label>
                                                <input type="text" class="form-control" name="jazz_cash_integrity_salt"
                                                       id="jazz_cash_integrity_salt"
                                                       value="<?php echo e(old('jazz_cash_integrity_salt') ? old('jazz_cash_integrity_salt') : settingHelper('jazz_cash_integrity_salt')); ?>"
                                                       placeholder="<?php echo e(__('Integrity Salt')); ?>">
                                                <?php if($errors->has('jazz_cash_integrity_salt')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('jazz_cash_integrity_salt')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'razorpay' ? 'show active' : ''); ?>"
                             id="razorpay" role="tab" aria-labelledby="razorpay-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Razorpay Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_razorpay_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_razorpay_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form method="post" action="<?php echo e(route('payment.gateway.update')); ?>"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="razorpay_key"><?php echo e(__('Razorpay  Key')); ?></label>
                                                <input type="hidden" name="payment_method" value="razorpay">
                                                <input type="text" class="form-control" id="razorpay_key"
                                                       name="razorpay_key"
                                                       value="<?php echo e(old('razorpay_key') ? old('razorpay_key') :settingHelper('razorpay_key')); ?>"
                                                       placeholder="<?php echo e(__('Razorpay Key')); ?>">
                                                <?php if($errors->has('razorpay_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('razorpay_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="razorpay_secret"><?php echo e(__('Razorpay  Secret')); ?></label>
                                                <input type="text" class="form-control" id="razorpay_secret"
                                                       name="razorpay_secret"
                                                       value="<?php echo e(old('razorpay_secret') ? old('razorpay_secret') :settingHelper('razorpay_secret')); ?>"
                                                       placeholder="<?php echo e(__('Razorpay Secret')); ?>">
                                                <?php if($errors->has('razorpay_secret')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('razorpay_secret')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'mollie' ? 'show active' : ''); ?>"
                             id="mollie" role="tab" aria-labelledby="razorpay-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Mollie Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invalid-feedback text-danger">
                                                    <?php echo e(__("N.B: Before activating Mollie, please make sue you have Europe currency EUR activated")); ?>

                                                </div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_mollie_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_mollie_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form method="post" action="<?php echo e(route('payment.gateway.update')); ?>"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="mollie_api_key"><?php echo e(__('Api  Key')); ?></label>
                                                <input type="hidden" name="payment_method" value="mollie">
                                                <input type="text" class="form-control" id="mollie_api_key"
                                                       name="mollie_api_key"
                                                       value="<?php echo e(old('mollie_api_key') ? old('mollie_api_key') :settingHelper('mollie_api_key')); ?>"
                                                       placeholder="<?php echo e(__('Api  Key')); ?>">
                                                <?php if($errors->has('mollie_api_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('mollie_api_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="mollie_partner_id"><?php echo e(__('Partner Id')); ?></label>
                                                <input type="text" class="form-control" id="mollie_partner_id"
                                                       name="mollie_partner_id"
                                                       value="<?php echo e(old('mollie_partner_id') ? old('mollie_partner_id') :settingHelper('mollie_partner_id')); ?>"
                                                       placeholder="<?php echo e(__('Partner Id')); ?>">
                                                <?php if($errors->has('mollie_partner_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('mollie_partner_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="mollie_profile_id"><?php echo e(__('Profile Id')); ?></label>
                                                <input type="text" class="form-control" id="mollie_profile_id"
                                                       name="mollie_profile_id"
                                                       value="<?php echo e(old('mollie_profile_id') ? old('mollie_profile_id') :settingHelper('mollie_profile_id')); ?>"
                                                       placeholder="<?php echo e(__('Profile Id')); ?>">
                                                <?php if($errors->has('mollie_profile_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('mollie_profile_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'paystack' ? 'show active' : ''); ?>"
                             id="paystack" role="tab" aria-labelledby="razorpay-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Paystack Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invalid-feedback text-danger">
                                                    <?php echo e(__("N.B: Before activating Paystack, please make sue you have NGN currency activated")); ?>

                                                </div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_paystack_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_paystack_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form method="post" action="<?php echo e(route('payment.gateway.update')); ?>"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="paystack_secret_key"><?php echo e(__('Secret  Key')); ?></label>
                                                <input type="hidden" name="payment_method" value="paystack">
                                                <input type="text" class="form-control" id="paystack_secret_key"
                                                       name="paystack_secret_key"
                                                       value="<?php echo e(old('paystack_secret_key') ? old('paystack_secret_key') :settingHelper('paystack_secret_key')); ?>"
                                                       placeholder="<?php echo e(__('Secret  Key')); ?>">
                                                <?php if($errors->has('paystack_secret_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('paystack_secret_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="paystack_public_key"><?php echo e(__('Public Key')); ?></label>
                                                <input type="text" class="form-control" id="paystack_public_key"
                                                       name="paystack_public_key"
                                                       value="<?php echo e(old('paystack_public_key') ? old('paystack_public_key') :settingHelper('paystack_public_key')); ?>"
                                                       placeholder="<?php echo e(__('Public Key')); ?>">
                                                <?php if($errors->has('paystack_public_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('paystack_public_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'flutterwave' ? 'show active' : ''); ?>"
                             id="flutterwave" role="tab" aria-labelledby="razorpay-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Flutter Wave Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/<?php echo e('is_flutterwave_activated'); ?>"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_flutterwave_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form method="post" action="<?php echo e(route('payment.gateway.update')); ?>"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="flutterwave_secret_key"><?php echo e(__('Secret  Key')); ?></label>
                                                <input type="hidden" name="payment_method" value="flutterwave">
                                                <input type="text" class="form-control" id="flutterwave_secret_key"
                                                       name="flutterwave_secret_key"
                                                       value="<?php echo e(old('flutterwave_secret_key') ? old('flutterwave_secret_key') :settingHelper('flutterwave_secret_key')); ?>"
                                                       placeholder="<?php echo e(__('Secret  Key')); ?>">
                                                <?php if($errors->has('flutterwave_secret_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('flutterwave_secret_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="flutterwave_public_key"><?php echo e(__('Public Key')); ?></label>
                                                <input type="text" class="form-control" id="flutterwave_public_key"
                                                       name="flutterwave_public_key"
                                                       value="<?php echo e(old('flutterwave_public_key') ? old('flutterwave_public_key') :settingHelper('flutterwave_public_key')); ?>"
                                                       placeholder="<?php echo e(__('Public Key')); ?>">
                                                <?php if($errors->has('flutterwave_public_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('flutterwave_public_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'mercado_pago' ? 'show active' : ''); ?>"
                             id="mercado_pago" role="tab" aria-labelledby="mercado_pago-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('mercado_pago_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_mercado_pago_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_mercado_pago_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form method="post" action="<?php echo e(route('payment.gateway.update')); ?>"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="mercado_pago_secret_key"><?php echo e(__('Access  Key')); ?></label>
                                                <input type="hidden" name="payment_method" value="mercado_pago">
                                                <input type="text" class="form-control" id="mercadopago_access_key"
                                                       name="mercadopago_access_key"
                                                       value="<?php echo e(old('mercadopago_access_key') ? old('mercadopago_access_key') :settingHelper('mercadopago_access_key')); ?>"
                                                       placeholder="<?php echo e(__('Access  Key')); ?>">
                                                <?php if($errors->has('mercadopago_access_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('mercadopago_access_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="mercadopago_key"><?php echo e(__('API Key')); ?></label>
                                                <input type="text" class="form-control" id="mercadopago_key"
                                                       name="mercadopago_key"
                                                       value="<?php echo e(old('mercadopago_key') ? old('mercadopago_key') :settingHelper('mercadopago_key')); ?>"
                                                       placeholder="<?php echo e(__('API Key')); ?>">
                                                <?php if($errors->has('mercadopago_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('mercadopago_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'mid_trans' ? 'show active' : ''); ?>"
                             id="mid_trans" role="tab" aria-labelledby="mid_trans-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('mid_trans_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invalid-feedback text-danger">
                                                    <?php echo e(__("mid_trans_currency")); ?>

                                                </div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_mid_trans_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_mid_trans_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form method="post" action="<?php echo e(route('payment.gateway.update')); ?>"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="mid_trans_client_id"><?php echo e(__('Client ID')); ?></label>
                                                <input type="hidden" name="payment_method" value="mid_trans">
                                                <input type="text" class="form-control" id="mid_trans_client_id"
                                                       name="mid_trans_client_id"
                                                       value="<?php echo e(old('mid_trans_client_id') ? old('mid_trans_client_id') :settingHelper('mid_trans_client_id')); ?>"
                                                       placeholder="<?php echo e(__('Client ID')); ?>">
                                                <?php if($errors->has('mid_trans_client_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('mid_trans_client_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="mid_trans_server_key"><?php echo e(__('server_key')); ?></label>
                                                <input type="text" class="form-control" id="mid_trans_server_key"
                                                       name="mid_trans_server_key"
                                                       value="<?php echo e(old('mid_trans_server_key') ? old('mid_trans_server_key') :settingHelper('mid_trans_server_key')); ?>"
                                                       placeholder="<?php echo e(__('server_key')); ?>">
                                                <?php if($errors->has('mid_trans_server_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('mid_trans_server_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'telr' ? 'show active' : ''); ?>"
                             id="telr" role="tab" aria-labelledby="mid_trans-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('telr_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_telr_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_telr_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form method="post" action="<?php echo e(route('payment.gateway.update')); ?>"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="telr_store_id"><?php echo e(__('store_id')); ?></label>
                                                <input type="hidden" name="payment_method" value="telr">
                                                <input type="text" class="form-control" id="telr_store_id"
                                                       name="telr_store_id"
                                                       value="<?php echo e(old('telr_store_id') ? old('telr_store_id') :settingHelper('telr_store_id')); ?>"
                                                       placeholder="<?php echo e(__('store_id')); ?>">
                                                <?php if($errors->has('telr_store_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('telr_store_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="telr_auth_key"><?php echo e(__('auth_key')); ?></label>
                                                <input type="text" class="form-control" id="telr_auth_key"
                                                       name="telr_auth_key"
                                                       value="<?php echo e(old('telr_auth_key') ? old('telr_auth_key') : settingHelper('telr_auth_key')); ?>"
                                                       placeholder="<?php echo e(__('auth_key')); ?>">
                                                <?php if($errors->has('telr_auth_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('telr_auth_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method') == 'google_pay' ? 'show active' : ''); ?>"
                             id="google_pay" role="tab" aria-labelledby="mid_trans-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('google_pay_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                        class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_google_pay_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_google_pay_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                            class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form method="post" action="<?php echo e(route('payment.gateway.update')); ?>"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="google_pay_merchant_name"><?php echo e(__('merchant_name')); ?></label>
                                                <input type="hidden" name="payment_method" value="google_pay">
                                                <input type="text" class="form-control" id="google_pay_merchant_name"
                                                       name="google_pay_merchant_name"
                                                       value="<?php echo e(old('google_pay_merchant_name') ? : settingHelper('google_pay_merchant_name')); ?>"
                                                       placeholder="<?php echo e(__('merchant_name')); ?>">
                                                <?php if($errors->has('google_pay_merchant_name')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('google_pay_merchant_name')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="google_pay_merchant_id"><?php echo e(__('merchant_id')); ?></label>
                                                <input type="text" class="form-control" id="google_pay_merchant_id"
                                                       name="google_pay_merchant_id"
                                                       value="<?php echo e(old('google_pay_merchant_id') ? : settingHelper('google_pay_merchant_id')); ?>"
                                                       placeholder="<?php echo e(__('merchant_id')); ?>">
                                                <?php if($errors->has('google_pay_merchant_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('google_pay_merchant_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="google_pay_gateway"><?php echo e(__('gateway')); ?></label>
                                                <input type="text" class="form-control" id="google_pay_gateway"
                                                       name="google_pay_gateway"
                                                       value="<?php echo e(old('google_pay_gateway') ? : settingHelper('google_pay_gateway')); ?>"
                                                       placeholder="<?php echo e(__('gateway')); ?>">
                                                <?php if($errors->has('google_pay_gateway')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('google_pay_gateway')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="google_pay_gateway_merchant_id"><?php echo e(__('gateway_merchant_id')); ?></label>
                                                <input type="text" class="form-control" id="google_pay_gateway_merchant_id"
                                                       name="google_pay_gateway_merchant_id"
                                                       value="<?php echo e(old('google_pay_gateway_merchant_id') ? : settingHelper('google_pay_gateway_merchant_id')); ?>"
                                                       placeholder="<?php echo e(__('gateway_merchant_id')); ?>">
                                                <?php if($errors->has('google_pay_gateway_merchant_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('google_pay_gateway_merchant_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method')  == 'amarpay' ? 'show active' : ''); ?>"
                             id="amarpay" role="tab" aria-labelledby="amarpay-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('amarpay_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invalid-feedback text-danger">
                                                    <?php echo e(__("N.B: Before activating :name, please make sue you have Bangladeshi currency BDT activated", ['name' => __('amarpay')])); ?>

                                                </div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                            class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_amarpay_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_amarpay_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                                class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label
                                                            class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_amarpay_sandbox_mode_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_amarpay_sandbox_mode_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                                class="custom-switch-description"><?php echo e(__('Sandbox Mode')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="amrapay_store_id"><?php echo e(__('store_id')); ?></label>
                                                <input type="hidden" name="payment_method" value="amarpay">
                                                <input type="text" class="form-control" id="amrapay_store_id"
                                                       name="amrapay_store_id"
                                                       value="<?php echo e(old('amrapay_store_id') ? old('amrapay_store_id') : settingHelper('amrapay_store_id')); ?>"
                                                       placeholder="<?php echo e(__('store_id')); ?>">
                                                <?php if($errors->has('amrapay_store_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('amrapay_store_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="amarpay_signature_key"><?php echo e(__('signature_key')); ?></label>
                                                <input type="text" class="form-control" id="amarpay_signature_key"
                                                       name="amarpay_signature_key"
                                                       value="<?php echo e(old('amarpay_signature_key') ? old('amarpay_signature_key')  : settingHelper('amarpay_signature_key')); ?>"
                                                       placeholder="<?php echo e(__('signature_key')); ?>">
                                                <?php if($errors->has('amarpay_signature_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('amarpay_signature_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method')  == 'bkash' ? 'show active' : ''); ?>"
                             id="bkash" role="tab" aria-labelledby="bkash-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('bkash_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invalid-feedback text-danger">
                                                    <?php echo e(__("N.B: Before activating :name, please make sue you have Bangladeshi currency BDT activated", ['name' => __('bkash')])); ?>

                                                </div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                            class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_bkash_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_bkash_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                                class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label
                                                            class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_bkash_sandbox_mode_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_bkash_sandbox_mode_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                                class="custom-switch-description"><?php echo e(__('Sandbox Mode')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="bkash_app_key"><?php echo e(__('app_key')); ?></label>
                                                <input type="hidden" name="payment_method" value="bkash">
                                                <input type="text" class="form-control" id="bkash_app_key"
                                                       name="bkash_app_key"
                                                       value="<?php echo e(old('bkash_app_key') ? old('bkash_app_key') : settingHelper('bkash_app_key')); ?>"
                                                       placeholder="<?php echo e(__('app_key')); ?>">
                                                <?php if($errors->has('bkash_store_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('bkash_store_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="bkash_app_secret"><?php echo e(__('app_secret')); ?></label>
                                                <input type="text" class="form-control" id="bkash_app_secret"
                                                       name="bkash_app_secret"
                                                       value="<?php echo e(old('bkash_app_secret') ? old('bkash_app_secret')  : settingHelper('bkash_app_secret')); ?>"
                                                       placeholder="<?php echo e(__('app_secret')); ?>">
                                                <?php if($errors->has('bkash_app_secret')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('bkash_app_secret')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="bkash_username"><?php echo e(__('Username')); ?></label>
                                                <input type="text" class="form-control" id="bkash_username"
                                                       name="bkash_username"
                                                       value="<?php echo e(old('bkash_username') ? old('bkash_username')  : settingHelper('bkash_username')); ?>"
                                                       placeholder="<?php echo e(__('Username')); ?>">
                                                <?php if($errors->has('bkash_username')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('bkash_username')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="bkash_password"><?php echo e(__('Password')); ?></label>
                                                <input type="text" class="form-control" id="bkash_password"
                                                       name="bkash_password"
                                                       value="<?php echo e(old('bkash_password') ? old('bkash_password')  : settingHelper('bkash_password')); ?>"
                                                       placeholder="<?php echo e(__('Password')); ?>">
                                                <?php if($errors->has('bkash_password')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('bkash_password')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method')  == 'nagad' ? 'show active' : ''); ?>"
                             id="nagad" role="tab" aria-labelledby="nagad-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('nagad_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invalid-feedback text-danger">
                                                    <?php echo e(__("N.B: Before activating :name, please make sue you have Bangladeshi currency BDT activated", ['name' => __('nagad')])); ?>

                                                </div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                            class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_nagad_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_nagad_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                                class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label
                                                            class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_nagad_sandbox_mode_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_nagad_sandbox_mode_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                                class="custom-switch-description"><?php echo e(__('Sandbox Mode')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="nagad_mode"><?php echo e(__('nagad_mode')); ?></label>
                                                <input type="hidden" name="payment_method" value="nagad">
                                                <input type="text" class="form-control" id="nagad_mode"
                                                       name="nagad_mode"
                                                       value="<?php echo e(old('nagad_mode') ? old('nagad_mode') : settingHelper('nagad_mode')); ?>"
                                                       placeholder="<?php echo e(__('nagad_mode')); ?>">
                                                <?php if($errors->has('nagad_mode')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('nagad_mode')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="nagad_merchant_id"><?php echo e(__('nagad_merchant_id')); ?></label>
                                                <input type="text" class="form-control" id="nagad_merchant_id"
                                                       name="nagad_merchant_id"
                                                       value="<?php echo e(old('nagad_merchant_id') ? old('nagad_merchant_id')  : settingHelper('nagad_merchant_id')); ?>"
                                                       placeholder="<?php echo e(__('nagad_merchant_id')); ?>">
                                                <?php if($errors->has('nagad_merchant_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('nagad_merchant_id')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="nagad_merchant_no"><?php echo e(__('nagad_merchant_no')); ?></label>
                                                <input type="text" class="form-control" id="nagad_merchant_no"
                                                       name="nagad_merchant_no"
                                                       value="<?php echo e(old('nagad_merchant_no') ? old('nagad_merchant_no')  : settingHelper('nagad_merchant_no')); ?>"
                                                       placeholder="<?php echo e(__('nagad_merchant_no')); ?>">
                                                <?php if($errors->has('nagad_merchant_no')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('nagad_merchant_no')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="public_key"><?php echo e(__('public_key')); ?></label>
                                                <input type="text" class="form-control" id="public_key"
                                                       name="nagad_public_key"
                                                       value="<?php echo e(old('nagad_public_key') ? old('nagad_public_key')  : settingHelper('nagad_public_key')); ?>"
                                                       placeholder="<?php echo e(__('public_key')); ?>">
                                                <?php if($errors->has('nagad_public_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('nagad_public_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="private_key"><?php echo e(__('private_key')); ?></label>
                                                <input type="text" class="form-control" id="private_key"
                                                       name="nagad_private_key"
                                                       value="<?php echo e(old('nagad_private_key') ? old('nagad_private_key')  : settingHelper('nagad_private_key')); ?>"
                                                       placeholder="<?php echo e(__('private_key')); ?>">
                                                <?php if($errors->has('nagad_private_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('nagad_private_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method')  == 'skrill' ? 'show active' : ''); ?>"
                             id="skrill" role="tab" aria-labelledby="skrill-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('skrill_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                            class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_skrill_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_skrill_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                                class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="skrill_merchant_email"><?php echo e(__('merchant_email')); ?></label>
                                                <input type="hidden" name="payment_method" value="skrill">
                                                <input type="text" class="form-control" id="skrill_merchant_email"
                                                       name="skrill_merchant_email"
                                                       value="<?php echo e(old('skrill_merchant_email') ? old('skrill_merchant_email') : settingHelper('skrill_merchant_email')); ?>"
                                                       placeholder="<?php echo e(__('merchant_email')); ?>">
                                                <?php if($errors->has('skrill_merchant_email')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('skrill_merchant_email')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method')  == 'iyzico' ? 'show active' : ''); ?>"
                             id="iyzico" role="tab" aria-labelledby="iyzico-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('iyzico_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                            class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_iyzico_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_iyzico_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_iyzico_sandbox_enabled"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_iyzico_sandbox_enabled') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="custom-switch-description"><?php echo e(__('Sandbox Mode')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="iyzico_api_key"><?php echo e(__('app_key')); ?></label>
                                                <input type="hidden" name="payment_method" value="iyzico">
                                                <input type="text" class="form-control" id="iyzico_api_key"
                                                       name="iyzico_api_key"
                                                       value="<?php echo e(old('iyzico_api_key') ? old('iyzico_api_key') :settingHelper('iyzico_api_key')); ?>"
                                                       placeholder="<?php echo e(__('app_key')); ?>">
                                                <?php if($errors->has('iyzico_api_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('iyzico_api_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="iyzico_secret_key"><?php echo e(__('app_secret')); ?></label>
                                                <input type="text" class="form-control" id="iyzico_secret_key"
                                                       name="iyzico_secret_key"
                                                       value="<?php echo e(old('iyzico_secret_key') ? old('iyzico_secret_key') :settingHelper('iyzico_secret_key')); ?>"
                                                       placeholder="<?php echo e(__('app_secret')); ?>">
                                                <?php if($errors->has('iyzico_secret_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('iyzico_secret_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('payment_method')  == 'kkiapay' ? 'show active' : ''); ?>"
                             id="kkiapay" role="tab" aria-labelledby="kkiapay-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('kkiapay_setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invalid-feedback text-danger">
                                                    <?php echo e(__("xof_activate")); ?>

                                                </div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <div class="form-group">
                                                    <label
                                                            class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_kkiapay_activated"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_kkiapay_activated') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="custom-switch mt-2 <?php echo e(hasPermission('payment_gateway_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               name="custom-switch-checkbox"
                                                               value="admin-payment-status-change/is_kkiapay_sandbox_enabled"
                                                               <?php echo e(hasPermission('payment_gateway_update') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('payment_gateway_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_kkiapay_sandbox_enabled') == 1 ? 'checked' : ''); ?> />
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="custom-switch-description"><?php echo e(__('Sandbox Mode')); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(hasPermission('payment_gateway_update')): ?>
                                        <form action="<?php echo e(route('payment.gateway.update')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <?php endif; ?>
                                            <input type="hidden" name="payment_method" value="kkiapay">
                                            <div class="form-group">
                                                <label for="kkiapay_public_api_key"><?php echo e(__('public_api_key')); ?></label>
                                                <input type="hidden" name="payment_method" value="kkiapay">
                                                <input type="text" class="form-control" id="kkiapay_public_api_key"
                                                       name="kkiapay_public_api_key"
                                                       value="<?php echo e(old('kkiapay_public_api_key') ? old('kkiapay_public_api_key') :settingHelper('kkiapay_public_api_key')); ?>"
                                                       placeholder="<?php echo e(__('public_api_key')); ?>">
                                                <?php if($errors->has('kkiapay_public_api_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('kkiapay_public_api_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="kkiapay_private_api_key"><?php echo e(__('private_api_key')); ?></label>
                                                <input type="text" class="form-control" id="kkiapay_public_api_key"
                                                       name="kkiapay_private_api_key"
                                                       value="<?php echo e(old('kkiapay_private_api_key') ? old('kkiapay_private_api_key') :settingHelper('kkiapay_private_api_key')); ?>"
                                                       placeholder="<?php echo e(__('private_api_key')); ?>">
                                                <?php if($errors->has('kkiapay_private_api_key')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('kkiapay_private_api_key')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="kkiapay_secret"><?php echo e(__('secret')); ?></label>
                                                <input type="text" class="form-control" id="kkiapay_secret"
                                                       name="kkiapay_secret"
                                                       value="<?php echo e(old('kkiapay_secret') ? old('kkiapay_secret') :settingHelper('kkiapay_secret')); ?>"
                                                       placeholder="<?php echo e(__('secret')); ?>">
                                                <?php if($errors->has('kkiapay_secret')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('kkiapay_secret')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                                <div class="text-md-right">
                                                    <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(hasPermission('payment_gateway_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/settings/payment-gateway/index.blade.php ENDPATH**/ ?>