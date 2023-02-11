
<?php $__env->startSection('footer_content'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('copyright'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Copyright')); ?>

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
                                    <?php echo e(__(' Copyright Widget')); ?>

                                </div>
                                <div class="card-body col-8 middle">
                                    <form class="" id="lang">
                                        <div class="form-group">
                                            <label for="name"><?php echo e(__('Language')); ?></label>
                                            <select class="form-control selectric lang" name="lang">
                                                <option value=""><?php echo e(__('Select Language')); ?></option>
                                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <form method="post" action="<?php echo e(route('update')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <div class="form-group">
                                            <label for="copyright"><?php echo e(__('Copyright Text')); ?></label>
                                            <div class="form-group row mb-12">
                                                <div class="col-sm-12 col-md-12">
                                                    <textarea id="copyright" name="copyright" class="form-control"><?php echo e(old('copyright') ? old('copyright') : settingHelper('copyright',$lang)); ?></textarea>
                                                    <input type="hidden" value="<?php echo e($lang); ?>" name="site_lang">

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


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/copyright.blade.php ENDPATH**/ ?>