<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline <?php echo e($locale_language->text_direction == 'rtl' ? 'ml-auto' : 'mr-auto'); ?>">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="bx bx-menu"></i></a>
            </li>
        </ul>
    </form>

    <ul class="navbar-nav navbar-right">
        <li>
            <a href="<?php echo e(route('cache.clear')); ?>" class="btn btn-outline-danger" tabindex="4">
                <?php echo e(__('clear_cache')); ?>

            </a>
        </li>
        <?php if(addon_is_activated('pos_system') && authUser()->user_type != 'seller'): ?>
            <li>
                <a href="<?php echo e(route('admin.pos.system')); ?>" target="_blank" class="nav-link nav-link-lg"
                   data-toggle="tooltip" data-original-title="<?php echo e(__('POS')); ?>"><i class="bx bx-printer"></i></a>
            </li>
        <?php endif; ?>
        <?php if(addon_is_activated('pos_system') && settingHelper('is_pos_activated_for_seller') && authUser()->user_type == 'seller'): ?>
            <li>
                <a href="<?php echo e(route('seller.pos.system')); ?>" target="_blank" class="nav-link nav-link-lg"
                   data-toggle="tooltip" data-original-title="<?php echo e(__('POS')); ?>"><i class="bx bx-printer"></i></a>
            </li>
        <?php endif; ?>
        <?php if(config('app.mobile_mode') == 'off' || is_dir('resources/views/frontend')): ?>
            <li>
                <a href="<?php echo e(Sentinel::getUser()->user_type == 'seller' ? config('app.url').'/shop/'.Sentinel::getUser()->sellerProfile->slug : url('/')); ?>"
                   target="_blank" class="nav-link nav-link-lg" data-toggle="tooltip"
                   data-original-title="<?php echo e(__('Visit Store')); ?>"><i class="bx bx-globe"></i></a>
            </li>
        <?php endif; ?>
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                     class="nav-link notification-toggle nav-link-lg <?php echo e($notificationCount > 0 ? 'beep' : ''); ?> "><i
                        class="bx bx-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header"><?php echo e(__('Notifications')); ?>

                    <div class="float-right">
                        <a href="<?php echo e(route('mark.notification.seen')); ?>"><?php echo e(__('Mark All As Read')); ?></a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                    <?php
                        $user_type = sentinel::getUser()->user_type != 'customer' ? sentinel::getUser()->user_type : '';
                    ?>
                    <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($notification->url != '' || $notification->url != null ? url($user_type.'/'.$notification->url) : "javascript:void(0)"); ?>"
                           class="dropdown-item dropdown-item-unread notification-status"
                           data-notification="<?php echo e(json_encode($notification)); ?>">
                            <div class="dropdown-item-icon <?php echo e($notification->status == 'seen' ? "bg-info" : 'bg-primary'); ?> text-white">
                                <?php if($notification->status == 'seen'): ?>
                                    <i class="bx bx-check"></i>
                                <?php else: ?>
                                    <i class="bx bx-x"></i>
                                <?php endif; ?>
                            </div>
                            <div class="dropdown-item-desc">
                                <?php echo e($notification->title); ?>

                                <div class="time <?php echo e($notification->status == 'seen' ? "" : 'text-primary'); ?>"><?php echo e(Carbon\Carbon::parse($notification->created_at)->diffForHumans()); ?></div>
                            </div>
                        </a>
                        <input type="hidden" id="path" value="<?php echo e(request()->path()); ?>"/>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="<?php echo e(route('notification.all')); ?>"><?php echo e(__('View All')); ?> <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <?php if(!addon_is_activated('ishopet') || (addon_is_activated('ishopet') && authUser()->user_type != 'seller')): ?>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-flag">
                    

                    <?php
                        $curr_id = 1;
                        $curr_name = 'US Dollar';
                        $curr_code = 'USD';
                        $curr_symbol = '$';
                        $currencies = App\Utility\AppSettingUtility::currencies()->where('status',1);
                        $curr = settingHelper('default_currency');
                        $curr = $currencies->where('id',$curr)->first();
                        if ($curr)
                        {
                             $curr_id = $curr->id;
                             $curr_name = $curr->name;
                             $curr_code = $curr->code;
                             $curr_symbol = $curr->symbol;
                        }
                    ?>
                    <div class="d-sm-none d-lg-inline-block"><?php echo e($curr_name); ?> (<?php echo e($curr_symbol); ?>)</div>
                </a>
                <input type="hidden" value="<?php echo e($curr_code); ?>" id="active_currency">
                <div class="dropdown-menu dropdown-menu-right">
                    <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $active_curr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a rel="alternate"
                           class="dropdown-item has-icon <?php echo e($curr_id == $active_curr->id ? 'active' : ''); ?>"
                           href="<?php echo e(route('admin.change.currency',$active_curr->id)); ?>">
                            <?php echo e($active_curr->name); ?> (<?php echo e($active_curr->symbol); ?>)
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </li>
        <?php endif; ?>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-flag">
                <?php
                    $lang = $active_languages->where('locale',app()->getLocale())->first();
                ?>
                <img alt="image" src="<?php echo e(static_asset($lang->flag)); ?>" class="h-24 mr-1">
                <div class="d-sm-none d-lg-inline-block"><?php echo e($lang->name); ?></div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <?php $__currentLoopData = $active_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $active_lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a rel="alternate" hreflang="<?php echo e($active_lang->locale); ?>"
                       class="dropdown-item has-icon <?php echo e(App::getLocale() == $active_lang->locale ? 'active' : ''); ?>"
                       href="<?php echo e(LaravelLocalization::getLocalizedURL($active_lang->locale, null, [], true)); ?>">
                        <img alt="<?php echo e($active_lang->name); ?>" src="<?php echo e(static_asset($active_lang->flag)); ?>"
                             class="language-flag">
                        <?php echo e($active_lang->name); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </li>

        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">

                <?php if(Sentinel::getUser()->images && array_key_exists('image_40x40',Sentinel::getUser()->images) && @is_file_exists(Sentinel::getUser()->images['image_40x40'])): ?>

                    <img alt="<?php echo e(Sentinel::getUser()->first_name); ?>"
                         src="<?php echo e(static_asset(Sentinel::getUser()->images['image_40x40'])); ?>" class="rounded-circle mr-1">
                <?php else: ?>
                    <img alt="<?php echo e(Sentinel::getUser()->first_name); ?>"
                         src="<?php echo e(static_asset('images/default/user32x32.jpg')); ?>" class="rounded-circle mr-1">
                <?php endif; ?>
                <div class="d-sm-none d-lg-inline-block"><?php echo e(Sentinel::getUser()->first_name); ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <?php if(@Sentinel::getUser()->lastLogin()): ?>
                    <div class="dropdown-title"><?php echo e(__('Logged in :minutes',['minutes' => \Carbon\Carbon::parse(Sentinel::getUser()->lastLogin())->diffForHumans()])); ?></div>
                <?php endif; ?>
                <a href="<?php echo e(Sentinel::getUser()->user_type == 'seller' ? route('seller.profile') : route('admin.profile')); ?>"
                   class="dropdown-item has-icon">
                    <i class="bx bx-user"></i> <?php echo e(__('Profile')); ?>

                </a>
                <a href="<?php echo e(Sentinel::getUser()->user_type == 'seller' ? route('seller.login.activity') : route('admin.login.activity')); ?>"
                   class="dropdown-item has-icon">
                    <i class='bx bx-file'></i><?php echo e(__('Login Activities')); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo e(route('logout')); ?>" class="dropdown-item has-icon text-danger">
                    <i class="bx bx-log-out"></i> <?php echo e(__('Logout')); ?>

                </a>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/admin/partials/header.blade.php ENDPATH**/ ?>