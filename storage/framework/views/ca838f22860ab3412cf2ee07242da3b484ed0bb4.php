
<?php $__env->startSection('installed_addon'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('addon_utility'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Available Addons')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Installed Addons')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $addons->total() . ' ' . __('Addon installed')); ?>

                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-xs-12 col-md-7">
                <div class="card">
                    <form action="">
                        <div class="card-header input-title">
                            <h4><?php echo e(__('Installed Addons')); ?></h4>
                        </div>
                    </form>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tbody>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Image')); ?></th>
                                    <th><?php echo e(__('Version')); ?></th>
                                    <?php if(hasPermission('addon_update')): ?>
                                        <th><?php echo e(__('Status')); ?></th>
                                    <?php endif; ?>
                                </tr>
                                <?php $__currentLoopData = $addons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="row_<?php echo e($addon->id); ?>" class="table-data-row">
                                        <input type="hidden" value="<?php echo e($addon->id); ?>" id="id">
                                        <td><?php echo e($addons->firstItem() + $key); ?></td>
                                        <td><?php echo e($addon->name); ?></td>
                                        <td>
                                            <?php if($addon->image != '' && @is_file_exists($addon->image,$addon->storage)): ?>
                                                <img
                                                    src="<?php echo e(get_media($addon->image,$addon->storage)); ?>"
                                                    alt="<?php echo e(@$addon->title); ?>"
                                                    class="mr-3 rounded">
                                            <?php else: ?>
                                                <img src="<?php echo e(static_asset('images/default/default-image-40x40.png')); ?>"
                                                     alt="<?php echo e(@$title); ?>"
                                                     class="mr-3 rounded">
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($addon->version); ?></td>
                                        <?php if(hasPermission('addon_update')): ?>
                                        <td>
                                            <label class="custom-switch mt-2">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                       value="addon-status-change/<?php echo e($addon->id); ?>"
                                                       <?php echo e($addon->status == 1 ? 'checked' : ''); ?> class="status-change custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </td>
                                        <?php endif; ?>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <nav class="d-inline-block">
                            <?php echo e($addons->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-sm-xs-12 col-md-5">
                <div class="card">
                    <div class="card-header input-title">
                        <h4><?php echo e(__('Install/Update')); ?></h4>
                    </div>
                    <div class="card-body card-body-paddding">
                        <?php if(Session::has('response')): ?>
                            <div class="mb-2">
                                <?php $__currentLoopData = Session::get('response'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="invalid-feedback">
                                        * <?php echo e($error); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e(route('install.new.addon')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="purchase_code"><?php echo e(__('Purchase code')); ?> *</label>
                                <input type="text" name="purchase_code" id="purchase_code"
                                       placeholder="<?php echo e(__('Enter your purchase code')); ?>"
                                       value="<?php echo e(old('purchase_code')); ?>" class="form-control" required>
                                <?php if($errors->has('purchase_code')): ?>
                                    <div class="invalid-feedback">
                                        <p><?php echo e($errors->first('purchase_code')); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="file"><?php echo e(__('Addon')); ?> <small><?php echo e(__('(Zip File)')); ?></small></label>
                                <div class="form-group">
                                    <input type="file" class="custom-file-input image_pick file-select"
                                           accept=".zip,.rar,.7zip" name="addon_zip_file" id="customFile"/>
                                    <?php if($errors->has('addon_zip_file')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('addon_zip_file')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if(hasPermission('addon_update')): ?>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                    <?php echo e(__('Save')); ?>

                                </button>
                            </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/addons/installed-addons.blade.php ENDPATH**/ ?>