
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Mobile Apps')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mobile_apps'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('apis_settings_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('apis_settings'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('Mobile Apps')); ?></h2>
            <div id="output-status"></div>
            <div class="row">
                <?php echo $__env->make('admin.mobile-apps.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="col-md-9 col-sm">
                    <?php if(hasPermission('api_setting_update')): ?>
                        <div class="card" id="settings-card">
                            <div class="card-header">
                                <h4><?php echo e(__('APIs Settings')); ?></h4>
                            </div>
                            <div class="col-md-10 middle card-body card-body-paddding">
                                <form action="<?php echo e(route('mobile.apps.settings.update')); ?>" method="post"
                                      enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('put'); ?>
                                    <div class="form-group">
                                        <label for="api_server_url"
                                               class="form-control-label"><?php echo e(__('API Server URL')); ?></label>
                                        <input type="text" name="api_server_url" value="<?php echo e(url('/api')); ?>"
                                               class="form-control" id="api_server_url" disabled>
                                        <?php if($errors->has('api_server_url')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('api_server_url')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php echo $__env->make('admin.mobile-apps.api_keys.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/dropzone.min.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.hide_key', function () {
                let id = $(this).data('id');
                $('.masked_text_' + id).addClass('d-none');
                $('.normal_text_' + id).removeClass('d-none');
                $('.clipboard_' + id).removeClass('d-none');
                $(this).addClass('d-none');
                $('.btn_show_' + id).removeClass('d-none')
            });
            $(document).on('click', '.show_key', function () {
                let id = $(this).data('id');
                $('.masked_text_' + id).removeClass('d-none');
                $('.normal_text_' + id).addClass('d-none');
                $('.clipboard_' + id).addClass('d-none');
                $(this).addClass('d-none');
                $('.btn_hide_' + id).removeClass('d-none');
            });
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/mobile-apps/apis-settings.blade.php ENDPATH**/ ?>