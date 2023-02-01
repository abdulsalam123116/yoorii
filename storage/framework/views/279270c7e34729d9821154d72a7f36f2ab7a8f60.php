
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Seller Payout')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sellers_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('payouts_active'); ?>
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
            <?php
                $total         = App\Models\SellerPayout::count();
                $processed         = App\Models\SellerPayout::where('status','processed')->count();
                $accepted      = App\Models\SellerPayout::where('status','accepted')->count();
                $pending       = App\Models\SellerPayout::where('status','pending')->count();
                $rejected          = App\Models\SellerPayout::where('status','rejected')->count();
                $canceled          = App\Models\SellerPayout::where('status','canceled')->count();

            ?>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <form id="my_form" method="get" action="">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === null  ? 'active' : ''); ?>"
                                           href="<?php echo e(route('admin.seller.payouts')); ?>"><?php echo e(__('All')); ?> <span
                                                class="badge badge-primary"><?php echo e($total); ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === 'processed' ? 'active' : ''); ?>"
                                           href="<?php echo e(route('admin.seller.payouts','processed')); ?>"><?php echo e(__('Processed')); ?>

                                            <span class="badge badge-primary"><?php echo e($processed); ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === 'accepted' ? 'active' : ''); ?>"
                                           href="<?php echo e(route('admin.seller.payouts','accepted')); ?>"><?php echo e(__('Accepted')); ?> <span
                                                class="badge badge-primary"><?php echo e($accepted); ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === 'pending' ? 'active' : ''); ?>"
                                           href="<?php echo e(route('admin.seller.payouts','pending')); ?>"><?php echo e(__('Pending')); ?> <span
                                                class="badge badge-primary"><?php echo e($pending); ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo e($status === 'rejected' ? 'active' : ''); ?>"
                                           href="<?php echo e(route('admin.seller.payouts','rejected')); ?>"><?php echo e(__('Rejected')); ?> <span
                                                class="badge badge-primary"><?php echo e($rejected); ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === 'canceled' ? 'active' : ''); ?>"
                                           href="<?php echo e(route('admin.seller.payouts','canceled')); ?>"><?php echo e(__('Canceled')); ?> <span
                                                class="badge badge-primary"><?php echo e($canceled); ?></span></a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
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
                                        <th><?php echo e(__('Payment By')); ?></th>
                                        <th><?php echo e(__('Payment To')); ?></th>
                                        <th><?php echo e(__('Payment From')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                    </tr>
                                    <?php $__currentLoopData = $payouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($value->status != 'canceled'): ?>
                                            <tr id="<?php echo e($key); ?>">
                                                <td> <?php echo e($value->id); ?> </td>
                                                <td>
                                                    <a target="<?php echo e(isAppMode() ? '_parent' : '_blank'); ?>" href="<?php echo e(isAppMode() ? '#' : route('frontend.shop', $value->user->sellerProfile->slug)); ?>">  <?php echo e(@$value->user->sellerProfile->shop_name); ?></a>
                                                </td>
                                                <td> <?php echo e(@$value->amount); ?> </td>
                                                <td> <?php echo e(@$value->message); ?></td>
                                                <td> <?php echo e(@$value->payment_by == '' ? '...' : $value->payment_by); ?></td>
                                                <td>
                                                    <?php if(isset($value->payment_to) != ''): ?>
                                                        <?php if(isset($value->payment_to['paypal_email'])): ?>
                                                            <span><?php echo e(__('Paypal Email'). ' : ' .$value->payment_to['paypal_email']); ?></span>
                                                        <?php elseif(isset($value->payment_to['bank_name']) == 'cash'): ?>
                                                            <span><?php echo e($value->payment_to['bank_name']); ?></span>
                                                        <?php elseif(isset($value->payment_to)): ?>
                                                            <span><?php echo e(__('Bank Name'). ' : ' .@$value->payment_to['bank_name']); ?></span>
                                                            <br>
                                                            <span><?php echo e(__('Owner Name'). ' : ' .@$value->payment_to['owner_name']); ?></span>
                                                            <br>
                                                            <span><?php echo e(__('Phone No'). ' : ' .@$value->payment_to['bank_phone_no']); ?></span>
                                                            <br>
                                                            <span><?php echo e(__('Branch Name'). ' : ' .@$value->payment_to['branch']); ?></span>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php echo e('...'); ?>

                                                    <?php endif; ?>

                                                </td>
                                                <td>
                                                    <?php if(isset($value->payment_from) != ''): ?>
                                                        <?php if(isset($value->payment_from['paypal_email'])): ?>
                                                            <span><?php echo e(__('Paypal Email'). ' : ' .$value->payment_from['paypal_email']); ?></span>
                                                        <?php elseif(isset($value->payment_from['bank_name']) == 'cash'): ?>
                                                            <span><?php echo e($value->payment_from['bank_name']); ?></span>
                                                        <?php elseif(isset($value->payment_from)): ?>
                                                            <span><?php echo e(__('Bank Name'). ' : ' .@$value->payment_from['bank_name']); ?></span>
                                                            <br>
                                                            <span><?php echo e(__('Owner Name'). ' : ' .@$value->payment_from['owner_name']); ?></span>
                                                            <br>
                                                            <span><?php echo e(__('Phone No'). ' : ' .@$value->payment_from['bank_phone_no']); ?></span>
                                                            <br>
                                                            <span><?php echo e(__('Branch Name'). ' : ' .@$value->payment_from['branch']); ?></span>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php echo e('...'); ?>

                                                    <?php endif; ?>
                                                </td>

                                                <td style="color:<?php echo e($value->status == 'pending' ? '#FFCB31' : ($value->status == 'accepted' ? '#008000' : ($value->status == 'processed' ? '#A9A9A9' : '#ff0000'))); ?>"> <?php echo e($value->status == 'pending' ? __('Pending') : ($value->status == 'accepted' ? __('Accepted') : ($value->status == 'processed' ? __('Processed') :__('Rejected')))); ?> </td>
                                            </tr>
                                        <?php endif; ?>
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
<?php $__env->stopSection(); ?> <?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/sellers/payouts-index.blade.php ENDPATH**/ ?>