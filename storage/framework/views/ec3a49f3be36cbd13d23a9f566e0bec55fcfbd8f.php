<div class="col-md-3 col-sm">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-pills flex-column">
                <?php if(hasPermission('general_setting_update')): ?>
                <li class="nav-item"><a href="<?php echo e(route('general.setting')); ?>" class="nav-link <?php echo $__env->yieldContent('general'); ?>"><?php echo e(__('General')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('preference_setting_update')): ?>
                <li class="nav-item"><a href="<?php echo e(route('preference')); ?>" class="nav-link <?php echo $__env->yieldContent('preference'); ?>"><?php echo e(__('Preference')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('email_setting_update')): ?>
                <li class="nav-item"><a href="<?php echo e(route('email.setting')); ?>" class="nav-link <?php echo $__env->yieldContent('email.setting'); ?>"><?php echo e(__('Email Setting')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('currency_setting_update')): ?>
                <li class="nav-item"><a href="<?php echo e(route('currency')); ?>" class="nav-link <?php echo $__env->yieldContent('currency'); ?>"><?php echo e(__('Currency')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('vat_tax_setting_update')): ?>
                <li class="nav-item"><a href="<?php echo e(route('vat.tax')); ?>" class="nav-link <?php echo $__env->yieldContent('vat.tax'); ?>"><?php echo e(__('VAT & Tax')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('storage_setting_update')): ?>
                <li class="nav-item"><a href="<?php echo e(route('storage.setting')); ?>" class="nav-link <?php echo $__env->yieldContent('storage.setting'); ?>"><?php echo e(__('Storage')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('cache_update')): ?>
                <li class="nav-item"><a href="<?php echo e(route('cache')); ?>" class="nav-link <?php echo $__env->yieldContent('cache'); ?>"><?php echo e(__('Cache')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('admin_panel_setting_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('admin.panel.setting')); ?>" class="nav-link <?php echo $__env->yieldContent('white_level'); ?>"><?php echo e(__('Admin Panel Setting')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('google_service_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('settings.google.recaptcha')); ?>" class="nav-link <?php echo $__env->yieldContent('google_recaptcha_active'); ?>"><?php echo e(__('Google reCaptcha')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('pusher_notification_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('settings.pusher.notification')); ?>" class="nav-link <?php echo $__env->yieldContent('pusher_notification_active'); ?>"><?php echo e(__('Pusher Notification')); ?></a></li>
                <?php endif; ?>

                <?php if(hasPermission('miscellaneous_setting_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('miscellaneous')); ?>" class="nav-link <?php echo $__env->yieldContent('miscellaneous'); ?>"><?php echo e(__('Miscellaneous')); ?></a></li>
                <?php endif; ?>
                <?php if(true && !isAppMode()): ?>
                    <li class="nav-item"><a href="<?php echo e(route('settings.firebase')); ?>" class="nav-link <?php echo $__env->yieldContent('firebase_update'); ?>"><?php echo e(__('Firebase')); ?></a></li>
                <?php endif; ?>
                <?php if(hasPermission('miscellaneous_setting_update')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('admin.get.fonts')); ?>" class="nav-link <?php echo $__env->yieldContent('pdf_font'); ?>"><?php echo e(__('Pdf Font')); ?></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/admin/system-setup/sidebar.blade.php ENDPATH**/ ?>