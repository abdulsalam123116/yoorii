
<?php $__env->startSection('header_content'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Menu')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <?php echo $__env->make('admin.store-front.header-content-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content no-padding" id="myTab2Content">
                        <div class="card">
                            <div class="card-header">
                                <?php echo e(__(' Navigation Menu')); ?>

                            </div>

                            <div class="w-100 p-4">
                                <form id="lang">
                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('Language')); ?></label>
                                        <input type="hidden" value="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>" name="r">

                                        <select class="form-control selectric lang" name="lang">
                                            <option value=""><?php echo e(__('Select Language')); ?></option>
                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($language->locale); ?>" <?php echo e($language->locale == $lang ? 'selected' : ''); ?>><?php echo e($language->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                        <?php if($errors->has('lang')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('lang')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </form>
                            </div>
                            <form action="<?php echo e(route('header.menu.update')); ?>" method="POst" id="url-short" data-url="<?php echo e(route('header.menu.update')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="card-body p-0  mb-4">
                                    <div class="alert-body w-100 p-4">
                                        <div class="alert alert-light alert-has-icon p-0 mb-0">
                                            <div class="alert-icon pl-2"><i class="bx bx-bulb"></i></div>
                                            <small id="passwordHelpBlock" class="form-text">
                                                <?php echo e(__('If you want to use others web link like (https://www.google.com/maps,https:/, www.facebook.com/profile) then insert link, otherwise insert just slug ("blogs,products,brands")')); ?>

                                            </small>
                                        </div>
                                    </div>
                                    <div class="form-inline">
                                        <div class="cf nestable-lists">
                                            <div class="dd" id="nestable3">
                                                <ol class="dd-list">
                                                    <?php if($menu_language && @count(settingHelper('header_menu')) != 0 && settingHelper('header_menu') != []): ?>
                                                        <?php $__currentLoopData = $menu_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="dd-item dd3-item">
                                                                <input type="hidden" name="menu_lenght[]" id="menu_lenght" value="1">
                                                                <input type="hidden" name="lang" id="lang" value="<?php echo e($lang); ?>">
                                                                <div class="dd-handle dd3-handle move"><i class="bx bx-menu move"></i></div>
                                                                <div class="dd3-content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <input type="text" class="form-control mb-1 mr-sm-2 test" name="label[]" id="label" value="<?php echo e(@$value['label']); ?>" required placeholder="<?php echo e(__('Label')); ?>">
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            <input type="text" class="form-control mb-1 mr-sm-2 test" id="link" name="url[]" value="<?php echo e(@$value['url'] == 'javascript:void(0)' ? '#' : @$value['url']); ?>" required placeholder="<?php echo e(__('Link')); ?>">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <button type="button" onclick="$(this).closest('.dd-item').remove()" class="btn btn-outline-danger btn-circle mb-1 remove-menu-row"><i class="bx bx-trash"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php if(count($value) > 2): ?>
                                                            <ol class="dd-list">
                                                                <?php if(@is_array($value[0])): ?>
                                                                    <?php $__currentLoopData = array_splice($value, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li class="dd-item dd3-item">
                                                                                <input type="hidden" name="lang" id="lang" value="<?php echo e($lang); ?>">
                                                                                <input type="hidden" name="menu_lenght[]" id="menu_lenght" value="2">
                                                                                <div class="dd-handle dd3-handle move"><i class="bx bx-menu move"></i></div>
                                                                                <div class="dd3-content">
                                                                                    <div class="row">
                                                                                        <div class="col-md-3">
                                                                                            <input type="text" class="form-control mb-1 mr-sm-2 test" name="label[]" id="label" value="<?php echo e(@$sub['label']); ?>" required placeholder="<?php echo e(__('Label')); ?>">
                                                                                        </div>
                                                                                        <div class="col-md-7">
                                                                                            <input type="text" class="form-control mb-1 mr-sm-2 test" id="link" name="url[]" value="<?php echo e(@$sub['url'] == 'javascript:void(0)' ? '#' : @$sub['url']); ?>" required placeholder="<?php echo e(__('Link')); ?>">
                                                                                        </div>
                                                                                        <div class="col-md-2">
                                                                                            <button type="button" onclick="$(this).closest('.dd-item').remove()" class="btn btn-outline-danger btn-circle mb-1 remove-menu-row"><i class="bx bx-trash"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </li>
                                                            </ol>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php else: ?>
                                                        <li class="dd-item dd3-item">
                                                            <input type="hidden" name="lang" id="lang" value="<?php echo e($lang); ?>">
                                                            <input type="hidden" name="menu_lenght[]" id="menu_lenght" value="1">
                                                            <div class="dd-handle dd3-handle move"><i class="bx bx-menu move"></i></div>
                                                            <div class="dd3-content">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control mb-1 mr-sm-2 test" name="label[]" id="label" placeholder="<?php echo e(__('Label')); ?>">
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <input type="text" class="form-control mb-1 mr-sm-2 test" id="link" name="url[]" placeholder="<?php echo e(__('Link')); ?>">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <button type="button" onclick="$(this).closest('.dd-item').remove()" class="btn btn-outline-danger btn-circle mb-1 remove-menu-row"><i class="bx bx-trash"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php endif; ?>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <a href="javascript:void(0)" id="add-menu-item" class="btn btn-outline-primary ml-2"><?php echo e(__('Add More')); ?></a>
                                        </div>
                                        <div class="col-md-6 float-right">
                                            <button type="submit" class="btn btn-outline-primary float-right menu-update-btn"><?php echo e(__('Update')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php echo $__env->make('admin.store-front.new-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/nestable.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page-script'); ?>
    <script src="<?php echo e(static_asset('admin/js/jquery.nestable.js')); ?>"></script>
    <script src="<?php echo e(static_asset('admin/js/custom-nested.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/menu.blade.php ENDPATH**/ ?>