
<?php $__env->startSection('available_addon_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('addon_utility'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Available Addons')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <?php if(@$curl_info["http_code"] == "200"): ?>
                    <?php $__currentLoopData = $decodedResponse->plugins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <?php if($addon->is_new == true): ?>
                                <span class="btn btn-danger btn-sm addon-badge card-badge"><?php echo e(__('New')); ?></span>
                            <?php endif; ?>
                            <div class="card addon-card">
                                <img class="card-img" src="<?php echo e($addon->inline_image_url); ?>" alt="Bologna">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($addon->name); ?></h5>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4><?php echo e($addon->price); ?></h4>
                                        </div>
                                        <div>
                                            <a target="_blank" href="<?php echo e($addon->preview_link); ?>" class="btn btn-info btn-sm"><?php echo e(__('Preview')); ?></a>
                                            <a href="<?php echo e($addon->affiliate_link); ?>" class="btn btn-primary btn-sm"><?php echo e(__('Purchase')); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer plugin-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                                    <div class="views"><?php echo e(__('Released')); ?>: <?php echo e($addon->release_date); ?></div>
                                    <div class="stats"> <?php echo e(__('Version')); ?>: <?php echo e($addon->version); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 error-connection">
                        <div class="center text-danger ">
                            <h6><?php echo e(__("There is a problem to connect with server.Please make sure your internet connection!")); ?></h6>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/addons/available-addons.blade.php ENDPATH**/ ?>