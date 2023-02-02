<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo e(route('seller.dashboard')); ?>"><?php echo e(settingHelper('system_short_name') ? settingHelper('system_short_name',app()->getLocale()) : 'Yoori'); ?></a>
        </div>
        <div class="sidebar-brand">
            <a href="<?php echo e(route('seller.dashboard')); ?>">
                <?php
                    $logo = settingHelper('light_logo');
                ?>
                <img src="<?php echo e(($logo != [] && is_file_exists($logo['original_image'])) ? static_asset($logo['original_image']) : static_asset('images/default/logo.png')); ?>"
                     alt="Logo"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="<?php echo $__env->yieldContent('dashboard'); ?>"><a class="nav-link" href="<?php echo e(route('seller.dashboard')); ?>"><i
                            class="bx bxs-dashboard"></i>
                    <span><?php echo e(__('Dashboard')); ?></span></a>
            </li>
            <li class="<?php echo $__env->yieldContent('orders'); ?>"><a class="nav-link" href="<?php echo e(route('seller.orders')); ?>"><i
                            class="bx bx-trending-up"></i>
                    <span><?php echo e(__('Orders')); ?></span></a>
            </li>
            <?php if(addon_is_activated('pos_system') && settingHelper('is_pos_activated_for_seller')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('pos_services_active'); ?>">
                    <a href="<?php echo e(route('seller.pos.system')); ?>">
                        <i class="bx bx-printer <?php echo e(\Config::get('app.demo_mode') == 'yes' ? 'beep' : ''); ?>"></i>
                        <span><?php echo e(__('POS Manager')); ?></span>
                        <?php if(\Config::get('app.demo_mode') == 'yes'): ?>
                            <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endif; ?>
            <li class="nav-item dropdown <?php echo $__env->yieldContent('product_active'); ?>">
                <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="bx bx-cart"></i>
                    <span><?php echo e(__('Products')); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $__env->yieldContent('product-create'); ?>"><a class="nav-link"
                                                            href="<?php echo e(route('seller.product.create')); ?>"><?php echo e(__('Add New Product')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('product'); ?>"><a class="nav-link"
                                                     href="<?php echo e(route('seller.products')); ?>"><?php echo e(__('All Products')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('digital-product'); ?>"><a class="nav-link"
                                                             href="<?php echo e(route('seller.digital.products')); ?>"><?php echo e(__('Digital Products')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('catalog-product'); ?>"><a class="nav-link"
                                                             href="<?php echo e(route('seller.catalog.products')); ?>"><?php echo e(__('Catalog Products')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('classified-product'); ?>"><a class="nav-link"
                                                                href="<?php echo e(route('seller.classified.products')); ?>"><?php echo e(__('Classified Products')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('product_import'); ?>"><a class="nav-link"
                                                            href="<?php echo e(route('seller.product.import')); ?>"><?php echo e(__('Import Products')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('product_review'); ?>"><a class="nav-link"
                                                            href="<?php echo e(route('seller.product.reviews')); ?>"><?php echo e(__('Product Reviews')); ?></a>
                    </li>
                </ul>
            </li>
            <?php if(settingHelper('seller_can_create_wholesale') && addon_is_activated('wholesale')): ?>
                <li class="<?php echo $__env->yieldContent('wholesale_product_active'); ?>">
                    <a class="nav-link" href="<?php echo e(route('seller.wholesale.products')); ?>"><i
                                class="bx bx-building-house <?php echo e(\Config::get('app.demo_mode') == 'yes' ? 'beep' : ''); ?>"></i>
                        <span><?php echo e(__('Wholesale Product')); ?></span>
                        <?php if(\Config::get('app.demo_mode') == 'yes'): ?>
                            <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endif; ?>
            <li class="<?php echo $__env->yieldContent('media'); ?>">
                <a class="nav-link" href="<?php echo e(route('seller.media.library')); ?>"><i
                            class="bx bx-file"></i><span><?php echo e(__('Media Library')); ?></span>
                </a>
            </li>
            <?php if(addon_is_activated('seller_subscription')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('seller_subscription'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bxs-report"></i>
                        <span><?php echo e(__('packages')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo $__env->yieldContent('seller_package'); ?>"><a class="nav-link"
                                                                href="<?php echo e(route('seller.packages')); ?>"><?php echo e(__('packages')); ?></a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('subscribed_packages'); ?>"><a class="nav-link"
                                                                     href="<?php echo e(route('seller.stock.product.report')); ?>"><?php echo e(__('subscribed_packages')); ?></a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
            <li class="nav-item dropdown <?php echo $__env->yieldContent('report'); ?>">
                <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="bx bxs-report"></i>
                    <span><?php echo e(__('Reports')); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $__env->yieldContent('seller_report_active'); ?>"><a class="nav-link"
                                                                  href="<?php echo e(route('seller.product.sale')); ?>"><?php echo e(__('Product Sale')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('product_stock'); ?>"><a class="nav-link"
                                                           href="<?php echo e(route('seller.stock.product.report')); ?>"><?php echo e(__('Products Stock')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('product_wishlist'); ?>"><a class="nav-link"
                                                              href="<?php echo e(route('seller.product.wishlist')); ?>"><?php echo e(__('Product Wishlist')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('commission_history'); ?>"><a class="nav-link"
                                                                href="<?php echo e(route('seller.commission.history')); ?>"><?php echo e(__('Commission History')); ?></a>
                    </li>
                </ul>
            </li>
            <?php if(addon_is_activated('refund')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('refund_active'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bx-credit-card-alt <?php echo e(\Config::get('app.demo_mode') == 'yes' ? 'beep' : ''); ?>"></i>
                        <span><?php echo e(__('Refund')); ?></span>
                        <?php if(\Config::get('app.demo_mode') == 'yes'): ?>
                            <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo $__env->yieldContent('refunds'); ?>"><a class="nav-link"
                                                         href="<?php echo e(route('seller.refunds')); ?>"><?php echo e(__('All Request')); ?></a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('approved_refunds'); ?>"><a class="nav-link"
                                                                  href="<?php echo e(route('seller.all.approved.refund')); ?>"><?php echo e(__('Approved Refunds')); ?></a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('processed_refunds'); ?>"><a class="nav-link"
                                                                   href="<?php echo e(route('seller.all.processed.refund')); ?>"><?php echo e(__('Processed Refunds')); ?></a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('rejected_refunds'); ?>"><a class="nav-link"
                                                                  href="<?php echo e(route('seller.all.rejected.refund')); ?>"><?php echo e(__('Rejected Refund')); ?></a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>

            <li class="nav-item dropdown <?php echo $__env->yieldContent('marketing_active'); ?>">
                <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="bx bx-paper-plane"></i>
                    <span><?php echo e(__('Marketing')); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $__env->yieldContent('campaign'); ?>"><a class="nav-link"
                                                      href="<?php echo e(route('seller.campaign')); ?>"><?php echo e(__('Campaigns')); ?></a>
                    </li>
                    <?php if(settingHelper('coupon_system')): ?>
                        <li class="<?php echo $__env->yieldContent('coupon'); ?>"><a class="nav-link"
                                                        href="<?php echo e(route('seller.coupons')); ?>"><?php echo e(__('Coupons')); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>

            <?php if(settingHelper('seller_video_shopping') == 1): ?>
                <?php if(addon_is_activated('video_shopping')): ?>
                    <li class="<?php echo $__env->yieldContent('video_shopping'); ?>"><a class="nav-link"
                                                            href="<?php echo e(route('seller.video.shopping')); ?>"><i
                                    class="bx bx-video <?php echo e(\Config::get('app.demo_mode') == 'yes' ? 'beep' : ''); ?>"></i>
                            <span><?php echo e(__('Video Shopping')); ?></span>
                            <?php if(\Config::get('app.demo_mode') == 'yes'): ?>
                                <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>

            <li class="nav-item dropdown <?php echo $__env->yieldContent('tickets_active'); ?>">
                <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="bx bx-support"></i>
                    <span><?php echo e(__('Support')); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $__env->yieldContent('tickets'); ?>"><a class="nav-link" href="<?php echo e(route('seller.support')); ?>">
                            <span><?php echo e(__('Support')); ?></span></a></li>
                    <li class="<?php echo $__env->yieldContent('contact_us'); ?>"><a class="nav-link"
                                                        href="<?php echo e(route('seller.contact.us')); ?>"><?php echo e(__('Contact Messages')); ?></a>
                    </li>
                </ul>
            </li>

            <li class="<?php echo $__env->yieldContent('payment_gateway'); ?>"><a class="nav-link" href="<?php echo e(route('seller.payment')); ?>"><i
                            class="bx bx-dollar" aria-hidden="true"></i> <span><?php echo e(__('Payment Accounts')); ?></span></a>
            </li>
            <li class="<?php echo $__env->yieldContent('seller_wallet'); ?>"><a class="nav-link" href="<?php echo e(route('seller.wallet')); ?>"><i
                            class="bx bx-wallet" aria-hidden="true"></i> <span><?php echo e(__('My Wallet')); ?></span></a></li>
            <li class="<?php echo $__env->yieldContent('payouts'); ?>"><a class="nav-link" href="<?php echo e(route('seller.payouts')); ?>"><i
                            class="bx bx-dollar" aria-hidden="true"></i> <span><?php echo e(__('Payouts')); ?></span></a></li>

            <li class="nav-item dropdown <?php echo $__env->yieldContent('shop_active'); ?>">
                <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="bx bx-slider-alt"></i>
                    <span><?php echo e(__('Shop Setting')); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $__env->yieldContent('shop_setup'); ?>"><a class="nav-link"
                                                        href="<?php echo e(route('seller.shop.setup')); ?>"><?php echo e(__('Shop Page')); ?></a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('shop_details'); ?>"><a class="nav-link"
                                                          href="<?php echo e(route('seller.shop.details')); ?>"><?php echo e(__('Shop Details')); ?></a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $__env->yieldContent('mobile_app_contents'); ?>"><a class="nav-link" href="<?php echo e(route('seller.mobile.home.page')); ?>"><i
                            class="bx bx-mobile" aria-hidden="true"></i>
                    <span><?php echo e(__('Mobile App Shop Page')); ?></span></a></li>
        </ul>
    </aside>
</div>
<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/seller/partials/sidebar.blade.php ENDPATH**/ ?>