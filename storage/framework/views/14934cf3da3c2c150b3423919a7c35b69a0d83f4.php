

<?php $__env->startSection('title'); ?>
    <?php echo e(__('User Rewards List')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('reward_system'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user_rewards'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Users Reward List')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $reward_users->total() . ' ' . __('Reward Users')); ?>

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-xs-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo e(__('Users')); ?></h4>
                            <div class="card-header-form">

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Customer Name')); ?></th>
                                        <th><?php echo e(__('Points')); ?></th>
                                        <th><?php echo e(__('Last Uses')); ?></th>
                                        <th><?php echo e(__('Earned At')); ?></th>
                                        <?php if(hasPermission('user_reward_update')): ?>
                                        <th><?php echo e(__('Statement')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                    <?php $__currentLoopData = $reward_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="">
                                            <td><?php echo e($key+1); ?></td>
                                            <td>
                                                <a href="#"
                                                   class="modal-menu"
                                                   data-title="<?php echo e(__('Profile')); ?>"
                                                   data-url="<?php echo e(route('edit-info', ['page_name' => 'customer-profile', 'param1' => $reward->user_id])); ?>"
                                                   data-toggle="modal" data-target="#common-modal">
                                                    <?php echo e($reward->user ? $reward->user->full_name : ''); ?>

                                                </a>
                                            </td>
                                            <td><?php echo e($reward->rewards); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($reward->last_converted)->toFormattedDateString()); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($reward->created_at)->toFormattedDateString()); ?></td>
                                            <td>
                                            <?php if(hasPermission('user_reward_update')): ?>
                                                <a href="<?php echo e(route('user.reward.view',$reward->id)); ?>" type="button" class="btn btn-sm btn-outline-info"><i class="bx bxs-show"></i></a>
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
                                <?php echo e($reward_users->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

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

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/rewards/user-rewards-index.blade.php ENDPATH**/ ?>