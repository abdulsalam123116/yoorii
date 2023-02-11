
<?php $__env->startSection('footer_content'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('social_link'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Social-Link')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <?php echo $__env->make('admin.store-front.footer-content-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content no-padding" id="myTab2Content">
                        <div class="tab-pane fade show active" id="about" role="tabpane1" aria-labelledby="about-tab">
                            <div class="card">
                                <div class="card-header">
                                    <?php echo e(__('Social Links')); ?>

                                </div>
                                <div class="card-body col-8 middle">
                                    <form method="post" action="<?php echo e(route('update')); ?>">
                                        <?php echo csrf_field(); ?> <?php echo method_field('put'); ?>
                                        <div class="form">
                                            <table class="table topbar-setting-switcher">
                                                <tr>
                                                    <td class="no-padding-w30"><?php echo e(__('Show Social Links')); ?></td>
                                                    <td>
                                                        <label class="custom-switch mt-2">
                                                            <input type="checkbox" name="custom-switch-checkbox" value="setting-status-change/<?php echo e('social_link_status'); ?>" <?php echo e(settingHelper('social_link_status') == 1 ? 'checked' : ''); ?>

                                                            class="custom-switch-input status-change">
                                                            <span class="custom-switch-indicator"></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="form-group">
                                                <label></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="bx bxl-facebook"></i>
                                                        </div>
                                                    </div>
                                                    <input type="url" class="form-control" value="<?php echo e(old('facebook_link') ? old('facebook_link') : settingHelper('facebook_link')); ?>" name="facebook_link" placeholder="https://" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="bx bxl-twitter"></i>
                                                        </div>
                                                    </div>
                                                    <input type="url" class="form-control" value="<?php echo e(old('twitter_link') ? old('twitter_link') : settingHelper('twitter_link')); ?>" name="twitter_link" placeholder="https://" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="bx bxl-instagram"></i>
                                                        </div>
                                                    </div>
                                                    <input type="url" class="form-control" value="<?php echo e(old('instagram_link') ? old('instagram_link') : settingHelper('instagram_link')); ?>" name="instagram_link" placeholder="https://" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="bx bxl-youtube"></i>
                                                        </div>
                                                    </div>
                                                    <input type="url" class="form-control" value="<?php echo e(old('youtube_link') ? old('youtube_link') : settingHelper('youtube_link')); ?>" name="youtube_link" placeholder="https://" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="bx bxl-linkedin"></i>
                                                        </div>
                                                    </div>
                                                    <input type="url" class="form-control" value="<?php echo e(old('linkedin_link') ? old('linkedin_link') : settingHelper('linkedin_link')); ?>" name="linkedin_link" placeholder="https://" />
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

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/social-link.blade.php ENDPATH**/ ?>