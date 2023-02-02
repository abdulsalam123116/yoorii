<div class="col-md-3 col-sm">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a href="<?php echo e(route('apis.settings')); ?>"
                                            class="nav-link <?php echo $__env->yieldContent('apis_settings'); ?>"><?php echo e(__('APIs Setting')); ?></a></li>
                <?php if(hasPermission('mobile_app_intro_read')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('app.intro.settings')); ?>"
                                            class="nav-link <?php echo $__env->yieldContent('app_intro_settings'); ?>"><?php echo e(__('App Intro')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('android_setting_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('android.settings')); ?>"
                                            class="nav-link <?php echo $__env->yieldContent('android_settings'); ?>"><?php echo e(__('Android Setting')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if(hasPermission('ios_setting_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('ios.settings')); ?>"
                                            class="nav-link <?php echo $__env->yieldContent('ios_settings'); ?>"><?php echo e(__('iOS Setting')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('download_link_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('download.link.settings')); ?>"
                                            class="nav-link <?php echo $__env->yieldContent('download_link_settings'); ?>"><?php echo e(__('Download Link')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if(hasPermission('slider_read')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('mobile.slider.settings')); ?>"
                                            class="nav-link <?php echo $__env->yieldContent('mobile_slider_settings'); ?>"><?php echo e(__('Slider')); ?></a>
                    </li>
                <?php endif; ?>
                <li class="nav-item"><a href="<?php echo e(route('mobile.banner.settings')); ?>"
                                        class="nav-link <?php echo $__env->yieldContent('banner_settings_active'); ?>"><?php echo e(__('Banner')); ?></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/mobile-apps/sidebar.blade.php ENDPATH**/ ?>