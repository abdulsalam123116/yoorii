
<?php $__env->startSection('footer_content'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Link')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <?php echo $__env->make('admin.store-front.footer-content-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content no-padding" id="myTab2Content">
                        <div class="tab-pane fade show active" id="about" role="tabpane1"aria-labelledby="about-tab">
                            <div class="card">
                                <div class="card-header">
                                    <?php echo e(__(' Link Widget')); ?>

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
                                <form action="<?php echo e(route('footer.menu.update')); ?>" method = "POST" id="url-short" data-url="<?php echo e(route('footer.menu.update')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="card-body p-0  mb-4">
                                        <div class="form-inline">
                                            <div class="alert-body w-100 p-4">
                                                <div class="alert alert-light alert-has-icon p-0 mb-0">
                                                    <div class="alert-icon pl-2"><i class="bx bx-bulb"></i></div>
                                                    <small id="passwordHelpBlock" class="form-text">
                                                        <?php echo e(__('If you want to use others web link like (https://www.google.com/maps,https:/, www.facebook.com/profile) then insert link, otherwise insert just slug ("blogs,products,brands")')); ?>

                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-inline">
                                            <div class="drag-brop-menu" id="drag-brop-menu">
                                            <?php if( $menu_language && @count(settingHelper('footer_menu')) != 0 && settingHelper('footer_menu') != []): ?>
                                                    <?php $__currentLoopData = $menu_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="menu-item" data-id="<?php echo e($key+1); ?>">
                                                            <input type="hidden" name="lang" id="lang" value="<?php echo e($lang); ?>">
                                                            <a href="#"><i class="bx bx-menu move"></i> </a>
                                                            <label class="sr-only" for="label"><?php echo e(__('Label')); ?></label>
                                                            <input type="text" class="form-control mb-2 mr-sm-2 label-input" name="label[]" value="<?php echo e($value['label']); ?>" id="label" placeholder="<?php echo e(__('Label')); ?>">

                                                            <label class="sr-only" for="link"><?php echo e(__('Useful Links')); ?></label>
                                                            <input type="text" class="form-control mb-2 mr-sm-2 url-input" id="link" name="url[]" value="<?php echo e($value['url']); ?>" placeholder="<?php echo e(__('Link/Slug')); ?>">
                                                            <button type="button" onclick="$(this).parent().remove()" class="btn btn-outline-danger btn-circle mb-2 remove-menu-row"><i class="bx bx-trash"></i></button>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <div class="menu-item" data-id="1">
                                                        <input type="hidden" name="lang" id="lang" value="<?php echo e($lang); ?>">
                                                        <a href="#"><i class="bx bx-menu move"></i> </a>
                                                        <label class="sr-only" for="label"><?php echo e(__('Label')); ?></label>
                                                        <input type="text" class="form-control mb-2 mr-sm-2 label-input" name="label[]" id="label" placeholder="<?php echo e(__('Label')); ?>">


                                                        <label class="sr-only" for="link"><?php echo e(__('Useful Links')); ?></label>
                                                        <input type="text" class="form-control mb-2 mr-sm-2 url-input" id="link" name="url[]" placeholder="<?php echo e(__('Link/Slug')); ?>">
                                                        <button type="button" onclick="$(this).parent().remove()" class="btn btn-outline-danger btn-circle mb-2 remove-menu-row"><i class="bx bx-trash"></i></button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <a href="#" id="add-menu-item" class="btn btn-outline-primary ml-2"><?php echo e(__('Add More')); ?></a>
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
        </div>
    </section>
    <?php echo $__env->make('admin.store-front.content-append', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page-script'); ?>
    <script src="<?php echo e(static_asset('admin/js/sortable.js')); ?>"></script>
    <script src="<?php echo e(static_asset('admin/js/jquery-sortable.js')); ?>"></script>
    <script src="<?php echo e(static_asset('admin/js/ajax-sortable-menu.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/link.blade.php ENDPATH**/ ?>