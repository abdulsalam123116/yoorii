
<?php $__env->startSection('footer_content'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contact'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Contact')); ?>

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
                                    <?php echo e(__(' Contact Widget')); ?>

                                </div>
                                <div class="card-body col-8 middle">
                                    <form method="post" action="<?php echo e(route('update')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <div class="form">
                                            <div class="form-group">
                                                <label for="contact_phone"><?php echo e(__('Footer Contact Phone')); ?></label>
                                                <div class="custom-file">
                                                    <input type="phone" placeholder="<?php echo e(__('Contact Phone')); ?>" value="<?php echo e(old('footer_contact_phone') ? old('footer_contact_phone') : settingHelper('footer_contact_phone')); ?>" class="form-control" name="footer_contact_phone" id="footer_contact_phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_email"><?php echo e(__('Footer Contact Email')); ?></label>
                                                <div class="custom-file">
                                                    <input type="email" placeholder="<?php echo e(__('Footer Contact Email')); ?>" value="<?php echo e(old('footer_contact_email') ? old('footer_contact_email') : settingHelper('footer_contact_email')); ?>" name="footer_contact_email" class="form-control" id="footer_contact_email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_address"><?php echo e(__('Footer Contact Address')); ?></label>
                                                <textarea name="footer_contact_address" placeholder="<?php echo e(__('Footer Contact Address')); ?>" id="footer_contact_address" cols="30" rows="5" class="form-control h-130"><?php echo e(old('footer_contact_address') ? old('footer_contact_address') : settingHelper('footer_contact_address')); ?></textarea>
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



<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/contact.blade.php ENDPATH**/ ?>