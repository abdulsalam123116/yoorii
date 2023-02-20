<div class="col-12 col-sm-12 col-md-4 col-lg-3">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                <?php if(hasPermission('theme_option_update')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('theme-options'); ?>"
                           href="<?php echo e(route('get.theme.options')); ?>"><?php echo e(__('Theme Options')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if(hasPermission('website_seo_update')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('website-seo'); ?>"
                           href="<?php echo e(route('website.seo')); ?>"><?php echo e(__('Website SEO')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if(hasPermission('website_popup_update')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('website-popup'); ?>"
                           href="<?php echo e(route('website.popup')); ?>"><?php echo e(__('Website Popup')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if(hasPermission('custom_css_update')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('custom-css'); ?>"
                           href="<?php echo e(route('custom.css')); ?>"><?php echo e(__('Custom CSS')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if(hasPermission('custom_js_update')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('custom-js'); ?>"
                           href="<?php echo e(route('custom.js')); ?>"><?php echo e(__('Custom JS')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if(hasPermission('gdpr_update')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('gdpr'); ?>" href="<?php echo e(route('gdpr')); ?>"><?php echo e(__('GDPR')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if(hasPermission('facebook_service_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('settings.facebook.services')); ?>"
                                            class="nav-link <?php echo $__env->yieldContent('facebook_services'); ?>"><?php echo e(__('Facebook Pixel')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if(hasPermission('google_service_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('settings.google.services')); ?>"
                                            class="nav-link <?php echo $__env->yieldContent('google_services'); ?>"><?php echo e(__('Google Service')); ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/theme-options-sitebar.blade.php ENDPATH**/ ?>