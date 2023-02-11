
<?php $__env->startSection('setup'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('white_level'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Admin Panel Setting')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>

    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('System Setup')); ?></h2>
            <div id="output-status"></div>
            <div class="row">
                <?php echo $__env->make('admin.system-setup.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-9 middle">
                    <div class="card email-card">
                        <div class="card-header">
                            <h4><?php echo e(__('Admin Panel Setting')); ?></h4>
                        </div>
                        <div class="card-body col-md-10 middle">
                            <form class="" id="lang">
                                <div class="form-group">
                                    <label for="name"><?php echo e(__('Language')); ?></label>
                                    <select class="form-control selectric lang" name="lang">
                                        <option value=""><?php echo e(__('Select Language')); ?></option>
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>N
                                            <option
                                                value="<?php echo e($language->locale); ?>" <?php echo e(($lang != '' ? ($language->locale == $lang ? 'selected' : '') : ($language->locale == 'en' ? 'selected' : ''))); ?>><?php echo e($language->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('lang')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('lang')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </form>
                            <form action="<?php echo e(route('admin.panel.setting.update')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                                <div class="form-group">
                                    <label for="admin_panel_title"><?php echo e(__('Title *')); ?></label>
                                    <input type="text" name="admin_panel_title" class="form-control"
                                           value="<?php echo e(old('admin_panel_title') ? old('admin_panel_title') : settingHelper('admin_panel_title', $lang)); ?>"
                                           id="admin_panel_title" placeholder="<?php echo e(__('Title')); ?>">
                                    <input type="hidden" value="<?php echo e($lang); ?>" name="site_lang">

                                </div>
                                <div class="form-group">
                                    <label for="system_short_name"><?php echo e(__('System Short Name *')); ?></label>
                                    <input type="text" name="system_short_name" class="form-control"
                                           value="<?php echo e(old('system_short_name') ? old('system_short_name') : settingHelper('system_short_name', $lang)); ?>"
                                           id="system_short_name" placeholder="<?php echo e(__('Title')); ?>">

                                </div>
                                <div class="form-group">
                                    <label for="admin_light_logo"><?php echo e(__('Light Logo') .' ('.__('100X38').')'); ?></label>
                                    <div class="form-group">
                                        <input type="file" id="admin_light_logo" class="custom-file-input image_pick file-select" accept="image/*" data-image-for="admin_light_logo" name="admin_light_logo" id="customFile" value="<?php echo e(@$user->image_id); ?>" />
                                    </div>
                                    <div>
                                        <?php if(@settingHelper('admin_light_logo') !=[] && is_file_exists(@settingHelper('admin_light_logo')['image_72x72'],@settingHelper('admin_light_logo')['storage'])): ?>
                                            <img src="<?php echo e(get_media(@settingHelper('admin_light_logo')['image_72x72'],@settingHelper('admin_light_logo')['storage'])); ?>" alt="" id="img_admin_light_logo" class="img-thumbnail site-icon" />
                                        <?php else: ?>
                                            <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>" alt="<?php echo e(@$user->first_name); ?>" id="img_admin_light_logo" class="img-thumbnail site-icon" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group seo-image-positoin">
                                    <label for="admin_dark_logo"><?php echo e(__('Dark Logo') .' ('.__('100X38').')'); ?></label>
                                    <div class="form-group">
                                        <input type="file" id="admin_dark_logo" class="custom-file-input image_pick file-select" accept="image/*" data-image-for="admin_dark_logo" name="admin_dark_logo" id="customFile" />
                                    </div>
                                    <div>
                                        <?php if(@settingHelper('admin_dark_logo') !=[] && is_file_exists(@settingHelper('admin_dark_logo')['image_72x72'],@settingHelper('admin_dark_logo')['storage'])): ?>
                                            <img src="<?php echo e(get_media(@settingHelper('admin_dark_logo')['image_72x72'],@settingHelper('admin_dark_logo')['storage'])); ?>" alt="" id="img_admin_dark_logo" class="img-thumbnail site-icon" />
                                        <?php else: ?>
                                            <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>" alt="<?php echo e(@$user->first_name); ?>" id="img_admin_dark_logo" class="img-thumbnail site-icon" />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group seo-image-positoin">
                                    <label for="invoice_logo"><?php echo e(__('Invoice Logo') .' ('.__('100X38').')'); ?></label>
                                    <div class="form-group">
                                        <input type="file" id="invoice_logo" class="custom-file-input image_pick file-select" accept="image/*" data-image-for="invoice_logo" name="invoice_logo" id="customFile" />
                                    </div>
                                    <div>
                                        <?php if(@settingHelper('invoice_logo') !=[] && is_file_exists(@settingHelper('invoice_logo')['image_72x72'],@settingHelper('invoice_logo')['storage'])): ?>
                                            <img src="<?php echo e(get_media(@settingHelper('invoice_logo')['image_72x72'],@settingHelper('invoice_logo')['storage'])); ?>" alt="" id="img_invoice_logo" class="img-thumbnail site-icon" />
                                        <?php else: ?>
                                            <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>" alt="<?php echo e(@$user->first_name); ?>" id="img_invoice_logo" class="img-thumbnail site-icon" />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group seo-image-positoin">
                                    <label for=""><?php echo e(__('Copyright Text')); ?></label>
                                    <div class="form-group row mb-12">
                                        <div class="col-sm-12 col-md-12">
                                            <textarea class="form-control"
                                                      name="admin_panel_copyright_text"><?php echo e(old('admin_panel_copyright_text') ? old('admin_panel_copyright_text') : settingHelper('admin_panel_copyright_text', $lang)); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-md-right">
                                    <button class="btn btn-outline-primary" id="save-btn"><?php echo e(__('Update')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/system-setup/admin-panel-setting.blade.php ENDPATH**/ ?>