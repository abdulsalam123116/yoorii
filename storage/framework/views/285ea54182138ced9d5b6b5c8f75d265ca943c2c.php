

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Customer Lists')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('customers'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customer_list'); ?>
    active
<?php $__env->stopSection(); ?>
<?php
    if(isset($_GET['q'])){
        $q          = $_GET['q'];
    }
?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Customer Lists')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $users->total() . ' ' . __('customers')); ?>

                    </p>
                </div>
                <?php if(hasPermission('customer_create')): ?>
                    <div class="buttons add-button">
                        <a href="<?php echo e(route('customer.create')); ?>" class="btn btn-icon icon-left btn-outline-primary">
                            <i class="bx bx-plus"></i><?php echo e(__('Add Customer')); ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-sm-xs-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo e(__('Customers')); ?></h4>
                            <div class="card-header-form">
                                <form class="form-inline" id="sorting">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" value="<?php echo e(@$q); ?>"
                                               placeholder="<?php echo e(__('Search')); ?>">
                                        <div class="input-group-btn">
                                            <button class="btn btn-outline-primary"><i class="bx bx-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Phone')); ?></th>
                                        <th><?php echo e(__('Current Balance')); ?></th>
                                        <th><?php echo e(__('Last Login')); ?></th>
                                        <th><?php echo e(__('Type')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Accept Payment')); ?></th>
                                        <?php if(hasPermission('customer_update') || hasPermission('customer_delete')): ?>
                                            <th><?php echo e(__('Options')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="row_<?php echo e($user->id); ?>">
                                            <td><?php echo e($users->firstItem() + $key); ?></td>
                                            <td width="300">
                                                <a href="javascript:void(0)" class="modal-menu" data-title="<?php echo e(__('Profile')); ?>"
                                                   data-url="<?php echo e(route('edit-info', ['page_name' => 'customer-profile', 'param1' => $user->id])); ?>"
                                                   data-toggle="modal" data-target="#common-modal">
                                                    <div class="d-flex">
                                                        <figure class="avatar mr-2">
                                                            <?php if($user->images != [] && is_file_exists($user->images['image_40x40'],$user->images['storage'])): ?>
                                                                <img src="<?php echo e(get_media($user->images['image_40x40'],$user->images['storage'])); ?>"
                                                                     alt="<?php echo e($user->first_name); ?>">
                                                            <?php else: ?>
                                                                <img
                                                                        src="<?php echo e(static_asset('images/default/user40x40.jpg')); ?>"
                                                                        alt="<?php echo e($user->first_name); ?>">
                                                            <?php endif; ?>
                                                            <?php if(\Illuminate\Support\Facades\Cache::has('user-is-online-' . $user->id)): ?>
                                                                <i class="avatar-presence online"></i>
                                                            <?php else: ?>
                                                                <i class="avatar-presence offline"></i>
                                                            <?php endif; ?>
                                                        </figure>
                                                        <div class="ml-1">
                                                            <?php echo e($user->first_name . ' ' . $user->last_name); ?><br/>
                                                            <i class='bx bx-check-circle
                                                            <?php echo e(\Cartalyst\Sentinel\Laravel\Facades\Activation::completed($user) == true ? "text-success" : "text-warning"); ?> '>
                                                            </i>
                                                            <?php echo e(isDemoServer() ? emailAddressMask($user->email) : $user->email); ?>

                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td> <?php echo e(isDemoServer() ? Str::of($user->phone)->mask('*', 0, strlen($user->phone)-3) : @$user->phone); ?></td>
                                            <td><?php echo e(get_price($user->balance)); ?></td>
                                            <td><?php echo e($user->last_login != '' ? date('M d, Y h:i a', strtotime($user->last_login)) : ''); ?></td>
                                            <td><?php echo e($user->user_type); ?></td>
                                            <td>
                                                <?php if($user->is_user_banned == 1): ?>
                                                    <div class="d-flex">
                                                        <div
                                                            class="ml-1 badge badge-pill badge-danger"><?php echo e(__('Banned')); ?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <label class="custom-switch mt-2 <?php echo e(hasPermission('customer_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox" name="custom-switch-checkbox"
                                                               value="customer-status-change/<?php echo e($user->id); ?>"
                                                               <?php echo e($user->status == 1 ? 'checked' : ''); ?>  <?php echo e(hasPermission('customer_update') ? '' : 'disabled'); ?> class="<?php echo e(hasPermission('customer_update') ? 'status-change' : ''); ?> custom-switch-input">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <label class="custom-switch mt-2 <?php echo e(hasPermission('customer_update') ? '' : 'cursor-not-allowed'); ?>">
                                                    <span><?php echo e(__('COD')); ?></span>
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="customer-accept-payment-cod-change/<?php echo e($user->id); ?>"
                                                           <?php echo e($user->accept_cod == 1 ? 'checked' : ''); ?>  <?php echo e(hasPermission('customer_update') ? '' : 'disabled'); ?> class="<?php echo e(hasPermission('customer_update') ? 'status-change' : ''); ?> custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                                <label class="custom-switch mt-2 <?php echo e(hasPermission('customer_update') ? '' : 'cursor-not-allowed'); ?>">
                                                    <span><?php echo e(__('Visa')); ?></span>
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="customer-accept-payment-visa-change/<?php echo e($user->id); ?>"
                                                           <?php echo e($user->accept_visa == 1 ? 'checked' : ''); ?>  <?php echo e(hasPermission('customer_update') ? '' : 'disabled'); ?> class="<?php echo e(hasPermission('customer_update') ? 'status-change' : ''); ?> custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>

                                            </td>
                                            <td>
                                                <?php if(hasPermission('customer_update')): ?>
                                                    <a href="<?php echo e(route('customer.edit', $user->id)); ?>"
                                                       class="btn btn-outline-secondary btn-circle"
                                                       data-toggle="tooltip" title=""
                                                       data-original-title="<?php echo e(__('Edit')); ?>"><i class="bx bx-edit"></i>
                                                    </a>
                                                <?php endif; ?>
                                                <a href="javascript:void(0)" data-toggle="dropdown"
                                                   class="btn btn-outline-secondary btn-circle" title=""
                                                   data-original-title="<?php echo e(__('Options')); ?>">
                                                    <i class='bx bx-dots-vertical-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="javascript:void(0)"
                                                       class="dropdown-item has-icon modal-menu"
                                                       data-title="<?php echo e(__('Profile')); ?>"
                                                       data-url="<?php echo e(route('edit-info', ['page_name' => 'customer-profile', 'param1' => $user->id])); ?>"
                                                       data-toggle="modal" data-target="#common-modal">
                                                        <i class="bx bx-user"></i><?php echo e(__('Profile')); ?>

                                                    </a>
                                                    <?php if(hasPermission('customer_ban')): ?>
                                                      <?php if($user->is_user_banned == 0): ?>
                                                        <a href="<?php echo e(route('user.ban', $user->id)); ?>"
                                                        class="dropdown-item has-icon"><i
                                                            class='bx bx-lock'></i><?php echo e(__('Ban This customer')); ?></a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('user.ban', $user->id)); ?>"
                                                            class="dropdown-item has-icon"><i
                                                                    class='bx bx-lock-open'></i><?php echo e(__('Unban This customer')); ?>

                                                            </a>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(hasPermission('customer_update')): ?>
                                                        <?php if(\Cartalyst\Sentinel\Laravel\Facades\Activation::completed($user) == true): ?>
                                                            <a href="<?php echo e(route('customer.email.verify', $user->id)); ?>"
                                                               class="dropdown-item has-icon"><i
                                                                    class='bx bx-x-circle'></i><?php echo e(__('Unverify Account')); ?>

                                                            </a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('customer.email.verify', $user->id)); ?>"
                                                               class="dropdown-item has-icon"><i
                                                                    class='bx bx-check-circle'></i><?php echo e(__('Verify Account')); ?>

                                                            </a>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav class="d-inline-block">
                                <?php echo e($users->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.common.common-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/customers/index.blade.php ENDPATH**/ ?>