<div class="col-12 col-sm-12 col-md-4 col-lg-3">
    <div class="card">
        <div class="card-body">

            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('about'); ?>" href="<?php echo e(route('about')); ?>"><?php echo e(__('About')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('contact'); ?>" href="<?php echo e(route('contact')); ?>"><?php echo e(__('Contact')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('copyright'); ?>" href="<?php echo e(route('copyright')); ?>"><?php echo e(__('Copyright')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('link'); ?>"  href="<?php echo e(route('link')); ?>"><?php echo e(__('Footer Menu')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('social_link'); ?>"  href="<?php echo e(route('social.link')); ?>"><?php echo e(__('Social Link')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('pages_link'); ?>"  href="<?php echo e(route('page.link')); ?>"><?php echo e(__('Useful Link')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('payment_method_banner'); ?>"  href="<?php echo e(route('payment.method.banner')); ?>"><?php echo e(__('Payment Methods Banner')); ?></a>
                </li>
            </ul>

        </div>
    </div>
</div>
<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/footer-content-sidebar.blade.php ENDPATH**/ ?>