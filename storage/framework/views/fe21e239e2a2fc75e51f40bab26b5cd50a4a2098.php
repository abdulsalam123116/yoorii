
<?php $__env->startSection('reward_system'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('reward_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Rewards')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body ">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('All Rewards')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $products->total() . ' ' . __('Reward Products')); ?>

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="<?php echo e(hasPermission('reward_setting_create') ? 'col-sm-xs-12 col-md-8' : 'col-sm-xs-12 col-md-9 middle'); ?>">
                    <div class="card">
                        <form action="">
                            <div class="card-header input-title">
                                <h4><?php echo e(__('Rewards')); ?></h4>
                            </div>
                        </form>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                    <tr>
                                        <th><?php echo e(__('#')); ?></th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Seller')); ?></th>
                                        <th><?php echo e(__('Price')); ?></th>
                                        <th><?php echo e(__('Point')); ?></th>
                                        <?php if(hasPermission('reward_setting_update')): ?>
                                        <th><?php echo e(__('Options')); ?></th>
                                        <?php endif; ?>
                                    </tr>

                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="" class="table-data-row">
                                        <td><?php echo e($products->firstItem() + $key); ?></td>
                                        <td>
                                            <a href="<?php echo e(isAppMode() ? '#' : route('product-details',$product->slug)); ?>"><?php echo e($product->getTranslation('name', \App::getLocale())); ?></a>
                                        </td>
                                        <td>
                                            <?php if($product->user_id == 1): ?>
                                                <?php echo e(__('Admin Product')); ?>

                                            <?php elseif($product->sellerProfile != null): ?>



                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e(get_price($product->price,user_curr())); ?></td>
                                        <td><?php echo e($product->reward); ?></td>
                                        <td>
                                        <?php if(hasPermission('reward_setting_update')): ?>
                                            <a href="javascript:void(0)"
                                                class="btn btn-outline-secondary btn-circle modal-menu"
                                                data-url="<?php echo e(route('edit-info', ['page_name' => 'update-reward','param1'=>$product->id,'param2'=>$product->reward])); ?>"
                                                data-title="Update Reward for Product"
                                                data-toggle="modal"
                                                data-target="#common-modal"
                                                data-original-title="<?php echo e(__('Edit')); ?>">
                                                <i class="bx bx-edit"></i>
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
                                <?php echo e($products->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            <?php if(hasPermission('reward_setting_create')): ?>
                <div class="col-sm-xs-12 col-md-4">
                    <div class="card">
                        <div class="card-header input-title">
                            <h4><?php echo e(__('Set Rewards By Category')); ?></h4>
                        </div>
                        <div class="card-body card-body-paddding">
                            <form method="POST" action="<?php echo e(route('set.reward.by')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="category"><?php echo e(__('Category')); ?></label>
                                    <select class="filter-categories-by-ajax form-control select2" name="c" id="c" required>
                                        <option value=""><?php echo e(__('Category')); ?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="reward"><?php echo e(__('Reward')); ?></label>
                                    <input type="number" class="form-control" name="reward" id="reward" required
                                        value="<?php echo e(old('reward')); ?>"
                                        placeholder="<?php echo e(__('Reward')); ?>" tabindex="1"
                                        required>
                                    <input type="hidden" name="type" value="category">
                                    <?php if($errors->has('reward')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('reward')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="sub_category" name="sub_category">
                                    <label class="custom-control-label" for="sub_category"><?php echo e(__('Apply for sub category also ?')); ?></label>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                        <?php echo e(__('Save')); ?>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header input-title">
                            <h4><?php echo e(__('Set Rewards By Seller')); ?></h4>
                        </div>
                        <div class="card-body card-body-paddding">
                            <form method="POST" action="<?php echo e(route('set.reward.by')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <select class="seller-by-ajax form-control select2 sorting" name="seller_id" id="seller_id" required>
                                        <option value=""><?php echo e(__('Select Seller')); ?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="reward"><?php echo e(__('Reward')); ?></label>
                                    <input type="number" class="form-control" name="reward" id="reward"
                                        value="<?php echo e(old('reward')); ?>"
                                        placeholder="<?php echo e(__('Reward')); ?>" tabindex="1"
                                        required>
                                    <input type="hidden" name="type" value="seller">
                                <?php if($errors->has('reward')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('reward')); ?></p>
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
                    <div class="card">
                        <div class="card-header input-title">
                            <h4><?php echo e(__('Set Rewards By Customer')); ?></h4>
                        </div>
                        <div class="card-body card-body-paddding">
                            <form method="POST" action="<?php echo e(route('set.reward.by')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <select class="user-by-ajax form-control select2 sorting" name="customer_id" id="customer_id" required>
                                        <option value=""><?php echo e(__('Select Customer')); ?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="reward"><?php echo e(__('Reward')); ?></label>
                                    <input type="number" class="form-control" name="reward" id="reward"
                                        value="<?php echo e(old('reward')); ?>"
                                        placeholder="<?php echo e(__('Reward')); ?>" tabindex="1"
                                        required>
                                    <input type="hidden" name="type" value="user">
                                    <?php if($errors->has('reward')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('reward')); ?></p>
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
                    <div class="card">
                        <div class="card-header input-title">
                            <h4><?php echo e(__('Set Rewards by Products')); ?></h4>
                        </div>
                        <div class="card-body card-body-paddding">
                            <form method="POST" action="<?php echo e(route('set.reward.by')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="product_id"><?php echo e(__('Product')); ?></label>

                                    <select class="product-by-ajax form-control select2" id ="product_id" multiple="multiple" name="product_id[]" aria-hidden="true" required></select>
                                    <?php if($errors->has('product_id')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('product_id')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="reward"><?php echo e(__('Reward')); ?></label>
                                    <input type="number" class="form-control" name="reward" id="reward"
                                        value="<?php echo e(old('reward')); ?>"
                                        placeholder="<?php echo e(__('Reward')); ?>" tabindex="1"
                                        required>
                                    <input type="hidden" name="type" value="product">
                                <?php if($errors->has('reward')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('reward')); ?></p>
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
    <?php echo $__env->make('admin.common.selector-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.common.common-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/ajax-div-load.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/ajax-live-search.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/rewards/set-reward.blade.php ENDPATH**/ ?>