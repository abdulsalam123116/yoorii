
<?php $__env->startSection('footer_content'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('about'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('About')); ?>

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
                                    <?php echo e(__('About Widget')); ?>

                                </div>
                                <div class="card-body col-md-10 middle">
                                    <form method="post" action="<?php echo e(route('update')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <div class="form-group">
                                            <div class="row gutters-sm imagecheck-margin">
                                                <div class="col-6 col-sm-4">
                                                    <label class="imagecheck mb-4">
                                                        <input name="footer_theme" type="checkbox" id="footer_theme1" value="footer_theme1" class="footer_theme1 imagecheck-input"  <?php if(old('footer_theme') ? old('footer_theme') : settingHelper('footer_theme') == 'footer_theme1'): ?> checked <?php endif; ?>/>
                                                        <div class="imagecheck-figure theme">
                                                            <img src="<?php echo e(static_asset('images/default/footer_1.png')); ?>" class="imagecheck-image imagecheck-height">
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="footer_logo"><?php echo e(__('Footer Logo')); ?> <?php echo e(__('(90X34)')); ?></label>
                                            <div class="form-group">
                                                <input type="file" id="footer_logo" class="custom-file-input image_pick file-select" accept="image/*" data-image-for="footer_logo" name="footer_logo" id="customFile"
                                                       value="<?php echo e(@$user->image_id); ?>"/>
                                            </div>
                                            <div>
                                                <?php if(@settingHelper('footer_logo') !=[] && @is_file_exists(@settingHelper('footer_logo')['image_72x72'],@settingHelper('footer_logo')['storage'])): ?>
                                                    <img src="<?php echo e(get_media(@settingHelper('footer_logo')['image_72x72'],@settingHelper('footer_logo')['storage'])); ?>" alt="" id="img_footer_logo"class="img-thumbnail site-icon">
                                                <?php else: ?>
                                                    <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>" alt="<?php echo e(@$user->first_name); ?>" id="img_footer_logo" class="img-thumbnail site-icon ">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group seo-image-positoin">
                                            <div class="d-flex justify-content-between">
                                                <label for="about_description" class="about-desc">
                                                    <?php echo e(__('About Description')); ?>

                                                </label>
                                                <div>
                                                    <select class="form-control selectric about-select-lang site-lang" name="site_lang" data-title="about_description" data-url="<?php echo e(route('about-description-by-lang')); ?>">
                                                        <option value=""><?php echo e(__('Select Language')); ?></option>
                                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                value="<?php echo e($language->locale); ?>" <?php echo e(App::getLocale() == $language->locale ? 'selected' : ''); ?>><?php echo e($language->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php if($errors->has('lang')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('lang')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-12">
                                                <div class="col-sm-12 col-md-12">
                                                    <textarea name="about_description" class="summernote" id="about_description" placeholder="<?php echo e(__('About Description')); ?>"><?php echo e(old('about_description') ? old('about_description') : settingHelper('about_description', App::getLocale())); ?></textarea>
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
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page-script'); ?>
    <script src="<?php echo e(static_asset('admin/js/summernote-bs4.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/about.blade.php ENDPATH**/ ?>