<div class="col-12 col-sm-12 col-md-4 col-lg-3">
    <div class="card">
        <div class="card-body">
            <?php if(hasPermission('header_content_update')): ?>
                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('header'); ?>" href="<?php echo e(route('header')); ?>"><?php echo e(__('Header Content')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('topbar'); ?>" href="<?php echo e(route('topbar')); ?>"><?php echo e(__('Topbar')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu'); ?>"  href="<?php echo e(route('menu')); ?>"><?php echo e(__('Menu')); ?></a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/header-content-sidebar.blade.php ENDPATH**/ ?>