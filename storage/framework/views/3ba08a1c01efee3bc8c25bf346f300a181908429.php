

<?php $__env->startSection('api_key'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mobile_apps'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('api_key')); ?>

<?php $__env->stopSection(); ?>
<?php
    $title = isset($edit) ? __('Edit Api Key') : trans('Add Api Key')
?>
<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body ">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e($title); ?></h2>
                </div>
                <div class="buttons add-button">
                    <a href="<?php echo e(route('apis.settings')); ?>" class="btn btn-icon icon-left btn-outline-primary"><i
                                class="bx bx-arrow-back"></i><?php echo e(__('Back')); ?></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-xs-12 col-md-8 middle">
                    <div class="card">
                        <div class="card-header input-title">
                            <h4><?php echo e(isset($edit) ? trans('Edit Api Key') : __('Add Api Key')); ?></h4>
                        </div>
                        <div class="card-body card-body-paddding">
                            <?php
                                $route = isset($edit) ? route('api-keys.update',$edit->id) : route('api-keys.store')
                            ?>
                            <?php if(isset($edit)): ?>
                                <form id="lang">
                                    <div class="form-group">
                                        <label for=""><?php echo e(__('Language')); ?></label>
                                        <input type="hidden" value="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>" name="r">
                                        <select class="form-control selectric lang" name="lang">
                                            <option value=""><?php echo e(__('Select Language')); ?></option>
                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                        value="<?php echo e($language->locale); ?>" <?php echo e(( $lang != '' ? ($language->locale == $lang ? 'selected' : '') : ($language->locale == 'en' ? 'selected' : ''))); ?>><?php echo e($language->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </form>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo e($route); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php if(isset($edit)): ?>
                                    <?php echo method_field('put'); ?>

                                    <input type="hidden" value="<?php echo e($api_key_language->translation_null == 'not-found' ? '' : $api_key_language->id); ?>" name="translate_id">

                                    <input type="hidden" value="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>" name="r">
                                    <input type="hidden" value="<?php echo e($lang); ?>" name="lang">
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="title"><?php echo e(__('Title')); ?></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                           value="<?php echo e(isset($api_key_language) ? $api_key_language->title : old('title')); ?>"
                                           placeholder="<?php echo e(__('Title')); ?>" tabindex="1" required>
                                    <?php if($errors->has('title')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('title')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label for="api_key"><?php echo e(__('api_key')); ?></label>
                                    <div class="input-group">
                                        <input type="text" name="key" id="api_key" value="<?php echo e(isset($edit) ? $edit->key : (old('key') ? :  strtoupper(\Illuminate\Support\Str::random(16)) )); ?>" class="form-control" placeholder="<?php echo e(__('api_key')); ?>">
                                        <?php if($errors->has('key')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('key')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <div class="input-group-append barcode">
                                            <div class="input-group-text">
                                                <i class="bx bx-refresh"></i>
                                            </div>
                                        </div>
                                    </div>
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
            </div>
        </div>
    </section>
    <?php echo $__env->make('admin.common.selector-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/dropzone.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/dropzone.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>




<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/mobile-apps/api_keys/form.blade.php ENDPATH**/ ?>