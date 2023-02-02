
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Seller Payout Request')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sellers_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('payout_requests_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Seller Payouts')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $payouts->total() . ' ' . __('payouts')); ?>

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo e(__('Seller Payouts')); ?></h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Seller')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                        <th><?php echo e(__('Message')); ?></th>
                                        <th><?php echo e(__('Account Details')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <?php if(hasPermission('seller_payout_reject') || hasPermission('seller_payout_accept')): ?>
                                            <th><?php echo e(__('Option')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                    <?php $__currentLoopData = $payouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="<?php echo e($key); ?>">
                                            <td> <?php echo e($value->id); ?> </td>
                                            <td>
                                                <a target="<?php echo e(isAppMode() ? '_parent' : '_blank'); ?>" href="<?php echo e(isAppMode() ? '#' : route('frontend.shop', $value->user->sellerProfile->slug)); ?>">  <?php echo e(@$value->user->sellerProfile->shop_name); ?></a>
                                            </td>
                                            <td> <?php echo e($value->amount); ?> </td>
                                            <td> <?php echo e($value->message); ?></td>
                                            <td>
                                                <?php if(isset($value->payment_to['paypal_email'])): ?>
                                                    <span><?php echo e(__('Paypal Email'). ' : ' .$value->payment_to['paypal_email']); ?></span>
                                                <?php elseif(isset($value->payment_to['bank_name']) == 'cash'): ?>
                                                    <span><?php echo e($value->payment_to['bank_name']); ?></span>
                                                <?php else: ?>
                                                    <span><?php echo e(__('Bank Name'). ' : ' .@$value->payment_to['bank_name']); ?></span>
                                                    <br>
                                                    <span><?php echo e(__('Owner Name'). ' : ' .@$value->payment_to['owner_name']); ?></span>
                                                    <br>
                                                    <span><?php echo e(__('Phone No'). ' : ' .@$value->payment_to['bank_phone_no']); ?></span>
                                                    <br>
                                                    <span><?php echo e(__('Branch Name'). ' : ' .@$value->payment_to['branch']); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td style="color:<?php echo e($value->status == 'pending' ? '#FFCB31' : ($value->status == 'accepted' ? '#008000' : ($value->status == 'processed' ? '#A9A9A9' : '#ff0000'))); ?>"> <?php echo e($value->status == 'pending' ? __('Pending') : ($value->status == 'accepted' ? __('Accepted') : ($value->status == 'processed' ? __('Processed') :__('Rejected')))); ?> </td>
                                            <td>
                                                <?php if($value->status == 'accepted'): ?>
                                                    <?php if(hasPermission('seller_payout_accept')): ?>
                                                        <a href=""
                                                           class="btn btn-outline-info btn-circle" data-toggle="modal"
                                                           title="" data-target="#exampleModal"
                                                           data-original-title="<?php echo e(__('Processed Now')); ?>"><i
                                                                class='bx bx-money'></i>
                                                        </a>
                                                        <a href="<?php echo e(route('payout.reject',$value->id)); ?>"
                                                           class="btn btn-outline-danger btn-circle disabled"
                                                           data-toggle="tooltip" title=""
                                                           data-original-title="<?php echo e(__('Reject')); ?>"><i
                                                                class='bx bx-x'></i>
                                                        </a>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <?php if(hasPermission('seller_payout_accept')): ?>
                                                        <a href="<?php echo e(route('payout.accept',$value->id)); ?>"
                                                           class="btn btn-outline-primary btn-circle"
                                                           data-toggle="tooltip" title=""
                                                           data-original-title="<?php echo e(__('Accept')); ?>"><i
                                                                class='bx bx-check'></i>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if(hasPermission('seller_payout_reject')): ?>
                                                        <a href="<?php echo e(route('payout.reject',$value->id)); ?>"
                                                           class="btn btn-outline-danger btn-circle"
                                                           data-toggle="tooltip" title=""
                                                           data-original-title="<?php echo e(__('Reject')); ?>"><i
                                                                class='bx bx-x'></i>
                                                        </a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav class="d-inline-block">
                                <?php echo e($payouts->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('Processed Payout Request')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
                </div>

                <form action="<?php echo e(route('payout.processed')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body" style="overflow-y: unset">
                        <div class="form-group">
                            <label for=""><?php echo e(__('Select Account Type')); ?></label>
                            <select name="type" class="form-control selectric">
                                <option value=""><?php echo e(__('Select Account Type')); ?></option>
                                <option value="cash"><?php echo e(__('Cash')); ?></option>
                                <?php $__currentLoopData = $payment_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($type); ?>"><?php echo e($type == 'is_paypal_activated' ? 'Paypal' : ($type == 'is_stripe_activated' ? 'Stripe' :  ($type == 'is_sslcommerz_activated' ? 'SSL COMMERZE' : ($type == 'is_paytm_activated' ? 'paytm' : ($type == 'is_2checkout_activated' ? '2checkout' : ($type == 'is_paystack_activated' ? 'paystack' : ($type == 'is_razorpay_activated' ? 'razorpay' : ''))))))); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('type')): ?>
                                <div class="invalid-feedback">
                                    <p><?php echo e($errors->first('type')); ?></p>
                                </div>
                            <?php endif; ?>
                            <input type="hidden" name="payout_id" value="<?php echo e(@$value->id); ?>"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary"><?php echo e(__('Send')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/sellers/payout-request.blade.php ENDPATH**/ ?>