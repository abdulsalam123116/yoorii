
<?php $__env->startSection('title'); ?>
    <?php echo e(__('States')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('shipping_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('available-states'); ?>
    active
<?php $__env->stopSection(); ?>
<?php
    $a              = null;
    $q              = null;
    if(isset($_GET['a'])){
        $a          = $_GET['a'];
    }
    if(isset($_GET['q'])){
        $q          = $_GET['q'];
    }

?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('States')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $states->total() . ' ' . __('States')); ?>

                    </p>
                </div>
                <?php if(hasPermission('state_import_create')): ?>
                <div class="mt-4">
                    <a href="javascript:void(0)" class="btn btn-outline-primary currency-add-btn modal-menu"
                       data-title="<?php echo e(__('Import States')); ?>"
                       data-url="<?php echo e(route('edit-info', ['page_name' => 'import-states'])); ?>" data-toggle="modal"
                       data-target="#common-modal">
                        <i class="bx bx-plus"></i><?php echo e(__('Import States')); ?>

                    </a>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="<?php echo e(hasPermission('state_create') ? 'col-7 col-md-7 col-lg-7' : 'col-7 col-md-7 col-lg-8 middle'); ?>">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo e(__('States')); ?></h4>
                            <div class="card-header-form">
                                <form class="form-inline" id="sorting">
                                    <div class="form-group">
                                        <select class="form-control select2 sorting" name="a">
                                            <option value=""><?php echo e(__('Filter By Country')); ?></option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e($a != null ? ($country->id == $a ? "selected" : "" ) :''); ?> value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" value="<?php echo e($q != null ? $q : ""); ?>" placeholder="<?php echo e(__('Search')); ?>">
                                        <div class="input-group-btn">
                                            <button class="btn btn-outline-primary"><i class="bx bx-search"></i></button>
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
                                        <th><?php echo e(__('Country')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <?php if(hasPermission('state_update') || hasPermission('state_delete')): ?>
                                        <th><?php echo e(__('Option')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="<?php echo e($states->firstItem() + $key); ?>">
                                            <td> <?php echo e($states->firstItem() + $key); ?> </td>
                                            <td> <?php echo e($value->name); ?> </td>
                                            <td> <?php echo e($value->country->name); ?> </td>
                                            <td> <label class="custom-switch mt-2 <?php echo e(hasPermission('state_update') ? '' : 'cursor-not-allowed'); ?>">
                                                    <input type="checkbox" name="custom-switch-checkbox" value="state-status-change/<?php echo e($value->id); ?>"
                                                            <?php echo e(hasPermission('state_update') ? '' : 'disabled'); ?>

                                                           <?php echo e($value->status == 1 ? 'checked' : ''); ?> class="<?php echo e(hasPermission('state_update') ? 'status-change' : ''); ?> custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <?php if(hasPermission('state_update')): ?>
                                                <a href="<?php echo e(route('state.edit', $value->id)); ?>" class="btn btn-outline-secondary btn-circle"
                                                    data-toggle="tooltip" title=""
                                                    data-original-title="<?php echo e(__('Edit')); ?>"><i class="bx bx-edit"></i>
                                                 </a>
                                                <?php endif; ?>
                                                <?php if(hasPermission('state_delete')): ?>
                                                  <a href="javascript:void(0)"
                                                    onclick="delete_row('delete/states/', <?php echo e($value->id); ?>)"
                                                    class="btn btn-outline-danger btn-circle" data-toggle="tooltip"
                                                    title="" data-original-title="<?php echo e(__('Delete')); ?>">
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
                                <?php echo e($states->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            <?php if(hasPermission('state_create')): ?>
                <div class="col-5 col-md-5 col-lg-5">
                    <div class="card" >
                            <div class="card-header input-title">
                                <h4><?php echo e(__('Add State')); ?></h4>
                            </div>
                            <div class="card-body card-body-paddding">
                                <form method="POST" action="<?php echo e(route('state.store')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group" >
                                        <label for="country_id"><?php echo e(__('Country')); ?></label>
                                        <select class="form-control select2" name="country_id" id ="country_id" required>
                                            <option value=""><?php echo e(__('Select Country')); ?></option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(old('country_id') ? ($country->id == old('country_id') ? "selected" : "" ) :''); ?> value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                        <?php if($errors->has('country_id')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('country_id')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="code"><?php echo e(__('Name')); ?></label>
                                        <input type="text" name="name" id="name" placeholder="<?php echo e(__('Enter state name')); ?>" value="<?php echo e(old('name')); ?>" class="form-control" required>
                                        <?php if($errors->has('name')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('name')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                            <?php echo e(__('Save')); ?>

                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.common.common-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/shipping/states.blade.php ENDPATH**/ ?>