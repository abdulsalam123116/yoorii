
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Offline Payment Methods')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('offline_payment'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('offline_payment_methods'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('All Offline Payment Methods')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $methods->total() . ' ' . __('Methods')); ?>

                    </p>
                </div>
                <?php if(hasPermission('offline_payment_create')): ?>
                    <div class="buttons add-button">
                        <a href="<?php echo e(route('offline.payment.method.create')); ?>" class="btn btn-icon icon-left btn-outline-primary">
                            <i class="bx bx-plus"></i><?php echo e(__('Add Method')); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-xs-12 col-md-12">
                <div class="card">
                    <form action="">
                        <div class="card-header input-title">
                            <h4><?php echo e(__('Methods')); ?></h4>
                        </div>
                    </form>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tbody>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(__('Thumbnail')); ?></th>
                                    <th><?php echo e(__('Type')); ?></th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <?php if(hasPermission('offline_payment_update') || hasPermission('offline_payment_delete') ): ?>
                                        <th><?php echo e(__('Options')); ?></th>
                                    <?php endif; ?>
                                </tr>
                                <?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="row_<?php echo e($method->id); ?>" class="table-data-row">
                                        <td><?php echo e($methods->firstItem() + $key); ?></td>
                                        <td>
                                            <figure class="">
                                                <?php if($method->thumbnail != [] && is_file_exists($method->thumbnail['image_40x40'],$method->thumbnail['storage'])): ?>
                                                    <img src="<?php echo e(get_media($method->thumbnail['image_40x40'],$method->thumbnail['storage'])); ?>"
                                                         alt="<?php echo e($method->getTranslation('title', \App::getLocale())); ?>">
                                                <?php else: ?>
                                                    <img src="<?php echo e(static_asset('images/default/default-image-40x40.png')); ?>"
                                                         alt="<?php echo e($method->getTranslation('title', \App::getLocale())); ?>">
                                                <?php endif; ?>
                                            </figure>
                                        </td>
                                        <td>
                                            <?php echo e(__($method->type)); ?>

                                        </td>
                                        <td>
                                            <?php echo e($method->getTranslation('name', \App::getLocale())); ?>

                                        </td>
                                        <td><label class="custom-switch mt-2 <?php echo e(hasPermission('offline_payment_update') ? '' : 'cursor-not-allowed'); ?>">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                       value="offline-method-status-change/<?php echo e($method->id); ?>"
                                                       <?php echo e(hasPermission('offline_payment_update') ? '' : 'disabled'); ?>

                                                       <?php echo e($method->status == 1 ? 'checked' : ''); ?> class="<?php echo e(hasPermission('offline_payment_update') ? 'status-change' : ''); ?> custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <?php if(hasPermission('offline_payment_update')): ?>
                                                <a href="<?php echo e(route('offline.payment.method.edit',$method->id)); ?>"
                                                   class="btn btn-outline-secondary btn-circle"
                                                   data-toggle="tooltip" title="" data-original-title="<?php echo e(__('Edit')); ?>">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if(hasPermission('offline_payment_delete')): ?>
                                                <a href="javascript:void(0)"
                                                   onclick="delete_row('delete/offline_methods/',<?php echo e($method->id); ?>)"
                                                   class="btn btn-outline-danger btn-circle" data-toggle="tooltip" title=""
                                                   data-original-title="<?php echo e(__('Delete')); ?>">
                                                    <i class='bx bx-trash'></i>
                                                </a>
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
                            <?php echo e($methods->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/settings/offline-payment/index.blade.php ENDPATH**/ ?>