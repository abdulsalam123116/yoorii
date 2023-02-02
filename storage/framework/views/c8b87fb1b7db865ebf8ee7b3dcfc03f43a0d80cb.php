
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Mobile Apps')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mobile_apps'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('app_intro_settings_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('app_intro_settings'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('Mobile Apps')); ?></h2>
            <div id="output-status"></div>
            <div class="row">
                <?php echo $__env->make('admin.mobile-apps.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-sm-xs-12 col-md-9">
                    <div class="card">
                        <?php if(hasPermission('mobile_app_intro_create')): ?>
                        <div class="card-body">
                                <div class="add-intro">
                                    <a data-toggle="collapse" class="intro" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        + <?php echo e(__('Add Intro')); ?>

                                    </a>
                                </div>
                            <div class="collapse" id="collapseExample">
                                <form action="<?php echo e(route('app.intro.store')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-body modal-padding-bottom">
                                        <div class="form-group align-items-center">
                                            <label for="title" class="form-control-label"><?php echo e(__('Title')); ?></label>
                                            <input type="text" name="title" id="title" value="<?php echo e(old('title')); ?>" class="form-control" required />
                                            <?php if($errors->has('title')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('title')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group align-items-center">
                                            <label for="order" class="form-control-label"><?php echo e(__('Order By')); ?></label>
                                            <input type="text" name="order" id="order" value="<?php echo e(old('order')); ?>" class="form-control" required />
                                            <?php if($errors->has('order')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('order')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="image"><?php echo e(__('Image')); ?></label>
                                            <div class="form-group">
                                                <div class="input-group gallery-modal" id="btnSubmit"  data-for="image" data-selection="single"
                                                     data-target="#galleryModal" data-dismiss="modal">
                                                    <input type="hidden" name="image" value="" class="image-selected">
                                                    <span class="form-control"><span class="counter">0</span> <?php echo e(__('file chosen')); ?></span>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <?php echo e(__('Choose File')); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="selected-media-box">
                                                    <div class="mt-4 gallery gallery-md d-flex">
                                                        <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>" data-default="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                             alt="image" class="img-thumbnail logo-profile">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group align-items-center">
                                            <label for="description" class="form-control-label"><?php echo e(__('Description')); ?></label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                            <?php if($errors->has('description')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('description')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer modal-padding-bottom">
                                        <button type="submit" class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card" id="settings-card">
                        <div class="card-header input-title">
                            <h4><?php echo e(__('App Intro')); ?></h4>
                        </div>
                            <div class="col-sm-xs-12 col-md-12 card-body card-body-paddding">
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <thead>
                                        <tr>
                                            <th><?php echo e(__('#')); ?></th>
                                            <th><?php echo e(__('Image')); ?></th>
                                            <th><?php echo e(__('Title')); ?></th>
                                            <th><?php echo e(__('Description')); ?></th>
                                            <th><?php echo e(__('Status')); ?></th>
                                            <?php if(hasPermission('mobile_app_intro_update') || hasPermission('mobile_app_intro_delete')): ?>
                                            <th><?php echo e(__('Options')); ?></th>
                                            <?php endif; ?>
                                        </tr>
                                        </thead>
                                        <tbody>
                                 <?php $__currentLoopData = $appIntros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$app_intro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="row_<?php echo e($app_intro->id); ?>" class="table-data-row">
                                        <input type="hidden" value="<?php echo e($app_intro->id); ?>" id="id">
                                        <td><?php echo e($appIntros->firstItem() + $key); ?></td>
                                        <td>
                                            <?php if($app_intro->image != [] && @is_file_exists($app_intro->image['image_40x40'], $app_intro->image['storage'])): ?>
                                                <img src="<?php echo e(get_media($app_intro->image['image_40x40'], $app_intro->image['storage'])); ?>"
                                                     alt="<?php echo e(@$app_intro->title); ?>"
                                                     class="mr-3 rounded">
                                            <?php else: ?>
                                                <img src="<?php echo e(static_asset('images/default/default-image-40x40.png')); ?>"
                                                     alt="<?php echo e(@$title); ?>"
                                                     class="mr-3 rounded">
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="ml-1"><?php echo e($title = $app_intro->getTranslation('title', \App::getLocale())); ?></div>
                                        </td>
                                        <td><?php echo e($title = $app_intro->getTranslation('description', \App::getLocale())); ?></td>
                                        <td>
                                            <label class="custom-switch mt-2 <?php echo e(hasPermission('mobile_app_intro_update') ? '' : 'cursor-not-allowed'); ?>">
                                                <input  type="checkbox" value="app-intro-status-change/<?php echo e($app_intro->id); ?>" <?php echo e($app_intro->status==1 ? 'checked' : ''); ?>

                                                <?php echo e(hasPermission('mobile_app_intro_update') ? '' : 'disabled'); ?>

                                                 name="custom-switch-checkbox" class="<?php echo e(hasPermission('mobile_app_intro_update') ? 'status-change' : ''); ?> custom-switch-input ">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </td>

                                        <td>
                                            <?php if(hasPermission('mobile_app_intro_update')): ?>
                                                <a href="<?php echo e(route('app.intro.edit',$app_intro->id)); ?>" class="btn btn-outline-secondary btn-circle" data-url=""data-toggle="tooltip" title="" data-original-title="<?php echo e(__('Edit')); ?>">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if(hasPermission('mobile_app_intro_delete')): ?>
                                            <a href="javaScript:void(0)" onclick="delete_row('delete/app_intros/',<?php echo e($app_intro->id); ?>)"class="btn btn-outline-danger btn-circle" data-toggle="tooltip" title=""data-original-title="<?php echo e(__('Delete')); ?>">
                                                <i class='bx bx-trash'></i>
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
                                    <?php echo e($appIntros->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                                </nav>
                            </div>
                        </div>
                     </div>
                </div>
           </div>
    </section>
    <!-- Modal -->
<?php echo $__env->make('admin.common.selector-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/dropzone.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/dropzone.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/mobile-apps/app-intro.blade.php ENDPATH**/ ?>