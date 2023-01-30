<?php
    $logo       = settingHelper('admin_light_logo');
?>

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(settingHelper('system_short_name') != '' ? settingHelper('system_short_name',app()->getLocale()) :  "Yoori"); ?></a>
        </div>
        <div class="sidebar-brand">
            <a href="<?php echo e(route('dashboard')); ?>">
                <img
                        src="<?php echo e(($logo != [] && is_file_exists($logo['image_100x38'])) ? static_asset($logo['image_100x38']) : static_asset('images/default/logo.png')); ?>"
                        alt="Logo"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="<?php echo $__env->yieldContent('dashboard'); ?>"><a class="nav-link" href="<?php echo e(route('dashboard')); ?>"><i
                            class="bx bxs-dashboard"></i>
                    <span><?php echo e(__('Dashboard')); ?></span></a>
            </li>
            <?php if(hasPermission('order_read') || hasPermission('pickup_hub_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('order_active'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bx-trending-up"></i>
                        <span><?php echo e(__('Orders')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('order_read')): ?>
                            <li class="<?php echo $__env->yieldContent('orders'); ?>"><a class="nav-link"
                                                            href="<?php echo e(route('orders')); ?>"><?php echo e(__('All Orders')); ?></a></li>
                            <?php if(settingHelper('seller_system') == 1): ?>
                                <li class="<?php echo $__env->yieldContent('admins'); ?>"><a class="nav-link"
                                                                href="<?php echo e(route('admin.orders')); ?>"><?php echo e(__('Admin Orders')); ?></a>
                                </li>
                                <li class="<?php echo $__env->yieldContent('seller-orders'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('admin.seller.orders')); ?>"><?php echo e(__('Seller Orders')); ?></a>
                                </li>
                            <?php endif; ?>
                            <li class="<?php echo $__env->yieldContent('pickup-hub-order'); ?>"><a class="nav-link"
                                                                      href="<?php echo e(route('pickup.hub.orders')); ?>"><?php echo e(__('Pickup Hub Orders')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('pickup_hub_read')): ?>
                            <li class="<?php echo $__env->yieldContent('pickup-hubs'); ?>"><a class="nav-link"
                                                                 href="<?php echo e(route('pickup.hub.index')); ?>"><?php echo e(__('Pickup Hub')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(addon_is_activated('pos_system') && (hasPermission('pos_order') || hasPermission('pos_config_update'))): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('pos_services_active'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bx-printer <?php echo e(isDemoServer() ? 'beep' : ''); ?>"></i>
                        <span><?php echo e(__('pos_system')); ?></span>
                        <?php if(isDemoServer()): ?>
                            <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('pos_order')): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.pos.system')); ?>"><?php echo e(__('POS')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('pos_config_update')): ?>
                            <li class="<?php echo $__env->yieldContent('pos_services'); ?>"><a class="nav-link"
                                                                  href="<?php echo e(route('admin.pos.config')); ?>"><?php echo e(__('POS Configuration')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>


            <?php if(hasPermission('product_read') || hasPermission('color_read') || hasPermission('attribute_set_read') || hasPermission('brand_read') || hasPermission('category_read') || hasPermission('attribute_value_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('product_active'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bx-cart"></i>
                        <span><?php echo e(__('Products')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('product_create')): ?>
                            <li class="<?php echo $__env->yieldContent('product-create'); ?>"><a class="nav-link"
                                                                    href="<?php echo e(route('product.create')); ?>"><?php echo e(__('Add New Product')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('product_read')): ?>
                            <li class="<?php echo $__env->yieldContent('product'); ?>"><a class="nav-link"
                                                             href="<?php echo e(route('products')); ?>"><?php echo e(__('All Product')); ?></a>
                            </li>
                            <?php if(settingHelper('seller_system') == 1): ?>
                                <li class="<?php echo $__env->yieldContent('admin-product'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('admin.products')); ?>"><?php echo e(__('Admin Products')); ?></a>
                                </li>
                                <li class="<?php echo $__env->yieldContent('seller-product'); ?>"><a class="nav-link"
                                                                        href="<?php echo e(route('admin.seller.products')); ?>"><?php echo e(__('Seller Products')); ?></a>
                                </li>
                            <?php endif; ?>
                            <li class="<?php echo $__env->yieldContent('digital-product'); ?>"><a class="nav-link"
                                                                     href="<?php echo e(route('digital.products')); ?>"><?php echo e(__('Digital Products')); ?></a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('catalog-product'); ?>"><a class="nav-link"
                                                                     href="<?php echo e(route('catalog.products')); ?>"><?php echo e(__('Catalog Products')); ?></a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('classified-product'); ?>"><a class="nav-link"
                                                                        href="<?php echo e(route('classified.products')); ?>"><?php echo e(__('Classified Products')); ?></a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('product_review'); ?>"><a class="nav-link"
                                                                    href="<?php echo e(route('admin.product.reviews')); ?>"><?php echo e(__('Product Reviews')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('color_read')): ?>
                            <li class="<?php echo $__env->yieldContent('color_active'); ?>"><a class="nav-link"
                                                                  href="<?php echo e(route('colors')); ?>"><?php echo e(__('Colors')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('attribute_set_read')): ?>
                            <li class="<?php echo $__env->yieldContent('attribute_active'); ?>"><a class="nav-link"
                                                                      href="<?php echo e(route('attributes')); ?>"><?php echo e(__('Attribute Sets')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('attribute_value_read')): ?>
                            <li class="<?php echo $__env->yieldContent('attribute_value_active'); ?>"><a class="nav-link"
                                                                            href="<?php echo e(route('all.attributes.values')); ?>"><?php echo e(__('Attribute Values')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('brand_read')): ?>
                            <li class="<?php echo $__env->yieldContent('brands'); ?>"><a class="nav-link"
                                                            href="<?php echo e(route('brands')); ?>"><?php echo e(__('Brands')); ?></a></li>
                        <?php endif; ?>
                        <?php if(hasPermission('category_read')): ?>
                            <li class="<?php echo $__env->yieldContent('category_active'); ?>"><a class="nav-link"
                                                                     href="<?php echo e(route('categories')); ?>"><?php echo e(__('Categories')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('product_create')): ?>
                            <li class="<?php echo $__env->yieldContent('product_import'); ?>"><a class="nav-link"
                                                                    href="<?php echo e(route('admin.product.import')); ?>"><?php echo e(__('Import Products')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(hasPermission('wholesale_product_read') && addon_is_activated('wholesale')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('wholesale'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bx-credit-card-alt <?php echo e(isDemoServer() ? 'beep' : ''); ?>"></i>
                        <span><?php echo e(__('Wholesale Product')); ?></span>
                        <?php if(isDemoServer()): ?>
                            <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('wholesale_product_create')): ?>
                            <li class="<?php echo $__env->yieldContent('wholesale_product_create'); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(route('wholesale.product.create')); ?>"><?php echo e(__('Add New Product')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('wholesale_product_read')): ?>
                            <li class="<?php echo $__env->yieldContent('wholesale_products'); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(route('wholesale.products')); ?>"><?php echo e(__('All Products')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('wholesale_product_setting')): ?>
                            <li class="<?php echo $__env->yieldContent('wholesale_setting'); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(route('wholesale.setting')); ?>"><?php echo e(__('Wholesale Setting')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(hasPermission('customer_read') || hasPermission('user_reward_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('customers'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bxs-user-detail"></i>
                        <span><?php echo e(__('Customers')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('customer_read')): ?>
                            <li class="<?php echo $__env->yieldContent('customer_list'); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(route('customers')); ?>"><?php echo e(__('All Customer')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('customer_create')): ?>
                            <li class="<?php echo $__env->yieldContent('customer_import'); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(route('admin.customer.import')); ?>"><?php echo e(__('Import Customers')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(settingHelper('wallet_system') == 1): ?>
                <?php if(hasPermission('recharge_request_read')): ?>
                    <li class="<?php echo $__env->yieldContent('wallet_recharge_request'); ?>">
                        <a class="nav-link" href="<?php echo e(route('admin.wallet.recharge.request')); ?>"><i
                                    class="bx bxs-wallet"></i>
                            <span><?php echo e(__('Wallet Requests')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>

            <?php if(settingHelper('seller_system') == 1): ?>
                <?php if(hasPermission('seller_read') || hasPermission('payout_read') || hasPermission('seller_commission_read') || hasPermission('seller_payout_read')): ?>
                    <li class="nav-item dropdown <?php echo $__env->yieldContent('sellers_active'); ?>">
                        <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class='bx bx-store-alt'></i>
                            <span><?php echo e(__('Sellers')); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(hasPermission('seller_read')): ?>
                                <li class="<?php echo $__env->yieldContent('sellers'); ?>"><a class="nav-link"
                                                                 href="<?php echo e(route('sellers')); ?>"><?php echo e(__('All Seller')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('seller_payout_read')): ?>
                                <li class="<?php echo $__env->yieldContent('payouts_active'); ?>"><a class="nav-link"
                                                                        href="<?php echo e(route('admin.seller.payouts')); ?>"><?php echo e(__('Payouts')); ?></a>
                                </li>
                                <li class="<?php echo $__env->yieldContent('payout_requests_active'); ?>"><a class="nav-link"
                                                                                href="<?php echo e(route('admin.seller.payout.request')); ?>"><?php echo e(__('Payout Requests')); ?></a>
                            <?php endif; ?>
                            <?php if(hasPermission('seller_commission_read')): ?>
                                <li class="<?php echo $__env->yieldContent('seller_settings_active'); ?>"><a class="nav-link"
                                                                                href="<?php echo e(route('admin.seller.settings')); ?>"><?php echo e(__('Seller Settings')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('seller_create')): ?>
                                <li class="<?php echo $__env->yieldContent('seller_import'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('admin.seller.import')); ?>"><?php echo e(__('Import Sellers')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(addon_is_activated('seller_subscription')): ?>
                                <li class="<?php echo $__env->yieldContent('packages'); ?>"><a class="nav-link"
                                                                  href="<?php echo e(route('seller_packages.index')); ?>"><?php echo e(__('Packages')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(hasPermission('delivery_hero_read') || hasPermission('delivery_hero_create') || hasPermission('delivery_hero_commission_history') || hasPermission('delivery_hero_deposit_history') || hasPermission('delivery_hero_collection_history') || hasPermission('delivery_hero_cancel_request') || hasPermission('delivery_hero_configuration_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('delivery_hero_active'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class='bx bx-cycling'></i>
                        <span><?php echo e(__('Delivery Mans')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('delivery_hero_create')): ?>
                            <li class="<?php echo $__env->yieldContent('add_delivery_hero'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('delivery.hero.create')); ?>"><?php echo e(__('Add New Delivery Man')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('delivery_hero_read')): ?>
                            <li class="<?php echo $__env->yieldContent('delivery_hero'); ?>"><a class="nav-link"
                                                                   href="<?php echo e(route('delivery.hero')); ?>"><?php echo e(__('Delivery Man')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('delivery_hero_commission_history')): ?>
                            <li class="<?php echo $__env->yieldContent('delivery_hero_commission_history'); ?>"><a class="nav-link"
                                                                                      href="<?php echo e(route('delivery_hero.commission.history')); ?>"><?php echo e(__('Commission History')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('delivery_hero_deposit_history')): ?>
                            <li class="<?php echo $__env->yieldContent('deposit_history'); ?>"><a class="nav-link"
                                                                     href="<?php echo e(route('delivery_hero.deposit.history')); ?>"><?php echo e(__('Deposit History')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('delivery_hero_collection_history')): ?>
                            <li class="<?php echo $__env->yieldContent('collection_history'); ?>"><a class="nav-link"
                                                                        href="<?php echo e(route('collection.history')); ?>"><?php echo e(__('Collection History')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('delivery_hero_cancel_request')): ?>
                            <li class="<?php echo $__env->yieldContent('cancel_request'); ?>"><a class="nav-link"
                                                                    href="<?php echo e(route('cancel.request')); ?>"><?php echo e(__('Cancel Orders')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('delivery_hero_configuration_read')): ?>
                            <li class="<?php echo $__env->yieldContent('configuration'); ?>"><a class="nav-link"
                                                                   href="<?php echo e(route('configuration')); ?>"><?php echo e(__('Configuration')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(hasPermission('media_read')): ?>
                <li class="<?php echo $__env->yieldContent('media'); ?>">
                    <a class="nav-link" href="<?php echo e(route('media.library')); ?>"><i
                                class="bx bx-file"></i><span><?php echo e(__('Media Library')); ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(hasPermission('admin_product_sale_read') || hasPermission('seller_product_sale_read') || hasPermission('product_stock_read') || hasPermission('product_wishlist_read') || hasPermission('user_searches_read') || hasPermission('commission_history_read') || hasPermission('wallet_recharge_history_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('report'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bxs-report"></i>
                        <span><?php echo e(__('Reports')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('admin_product_sale_read')): ?>
                            <li class="<?php echo $__env->yieldContent('admin_report_active'); ?>"><a class="nav-link"
                                                                         href="<?php echo e(route('admin.product.sale')); ?>"><?php echo e(__('Admin Product Sale')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(settingHelper('seller_system') == 1): ?>
                            <?php if(hasPermission('seller_product_sale_read')): ?>
                                <li class="<?php echo $__env->yieldContent('seller_report_active'); ?>"><a class="nav-link"
                                                                              href="<?php echo e(route('admin.seller.product.sale')); ?>"><?php echo e(__('Seller Product Sale')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(settingHelper('seller_system') == 1): ?>
                            <?php if(hasPermission('commission_history_read')): ?>
                                <li class="<?php echo $__env->yieldContent('commission_history'); ?>"><a class="nav-link"
                                                                            href="<?php echo e(route('commission.history')); ?>"><?php echo e(__('Commission History')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(hasPermission('wallet_recharge_history_read')): ?>
                            <li class="<?php echo $__env->yieldContent('wallet_recharge_history'); ?>"><a class="nav-link"
                                                                             href="<?php echo e(route('wallet.recharge.history')); ?>"><?php echo e(__('Wallet Recharge History')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('product_stock_read')): ?>
                            <li class="<?php echo $__env->yieldContent('product_stock'); ?>"><a class="nav-link"
                                                                   href="<?php echo e(route('stock.product.report')); ?>"><?php echo e(__('Products Stock')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('product_wishlist_read')): ?>
                            <li class="<?php echo $__env->yieldContent('product_wishlist'); ?>"><a class="nav-link"
                                                                      href="<?php echo e(route('product.wishlist')); ?>"><?php echo e(__('Product Wishlist')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('user_searches_read')): ?>
                            <li class="<?php echo $__env->yieldContent('user_searches'); ?>"><a class="nav-link"
                                                                   href="<?php echo e(route('user.searches')); ?>"><?php echo e(__('User Searches')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(addon_is_activated('refund')): ?>
                <?php if(hasPermission('refund_read') || hasPermission('refund_setting_read') && addon_is_activated('refund')): ?>
                    <li class="nav-item dropdown <?php echo $__env->yieldContent('refund_active'); ?>">
                        <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="bx bx-credit-card-alt <?php echo e(isDemoServer() ? 'beep' : ''); ?>"></i>
                            <span><?php echo e(__('Refund')); ?></span>
                            <?php if(isDemoServer()): ?>
                                <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(hasPermission('refund_read')): ?>
                                <li class="<?php echo $__env->yieldContent('refunds'); ?>"><a class="nav-link"
                                                                 href="<?php echo e(route('refunds')); ?>"><?php echo e(__('All Request')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('refund_read')): ?>
                                <li class="<?php echo $__env->yieldContent('approved_refunds'); ?>"><a class="nav-link"
                                                                          href="<?php echo e(route('all.approved.refund')); ?>"><?php echo e(__('Approved Refunds')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('refund_read')): ?>
                                <li class="<?php echo $__env->yieldContent('processed_refunds'); ?>"><a class="nav-link"
                                                                           href="<?php echo e(route('all.processed.refund')); ?>"><?php echo e(__('Processed Refunds')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('refund_read')): ?>
                                <li class="<?php echo $__env->yieldContent('rejected_refunds'); ?>"><a class="nav-link"
                                                                          href="<?php echo e(route('all.rejected.refund')); ?>"><?php echo e(__('Rejected Refund')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('refund_setting_read')): ?>
                                <li class="<?php echo $__env->yieldContent('refund_setting'); ?>"><a class="nav-link"
                                                                        href="<?php echo e(route('refund.setting')); ?>"><?php echo e(__('Refund Setting')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>

            <?php if(hasPermission('campaign_read') ||  hasPermission('bulk_sms_read') || hasPermission('subscriber_read') || hasPermission('coupon_read') || hasPermission('campaign_request_read') || hasPermission('otp_setting_read') || hasPermission('sms_template_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('marketing_active'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bx-paper-plane"></i>
                        <span><?php echo e(__('Marketing')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('campaign_read')): ?>
                            <li class="<?php echo $__env->yieldContent('campaign'); ?>"><a class="nav-link"
                                                              href="<?php echo e(route('campaign')); ?>"><?php echo e(__('Campaigns')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(settingHelper('seller_system') == 1): ?>
                            <?php if(hasPermission('campaign_product_read')): ?>
                                <li class="<?php echo $__env->yieldContent('campaign_request'); ?>"><a class="nav-link"
                                                                          href="<?php echo e(route('campaign.requests')); ?>"><?php echo e(__('Campaign Requests')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(addon_is_activated('otp_system') == 1): ?>
                            <?php if(hasPermission('bulk_sms_read')): ?>
                                <li class="<?php echo $__env->yieldContent('bulk_sms'); ?>"><a class="nav-link"
                                                                  href="<?php echo e(route('bulk.sms')); ?>"><?php echo e(__('Bulk SMS')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(hasPermission('subscriber_read')): ?>
                            <li class="<?php echo $__env->yieldContent('subscriber'); ?>"><a class="nav-link"
                                                                href="<?php echo e(route('subscribers')); ?>"><?php echo e(__('Subscriber')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(settingHelper('coupon_system') == 1): ?>
                            <?php if(hasPermission('coupon_read')): ?>
                                <li class="<?php echo $__env->yieldContent('coupon'); ?>"><a class="nav-link"
                                                                href="<?php echo e(route('coupons')); ?>"><?php echo e(__('Coupons')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(hasPermission('blog_read') || hasPermission('blog_category_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('blogs_active'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bxs-news"></i>
                        <span><?php echo e(__('Blog')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('blog_read')): ?>
                            <li class="<?php echo $__env->yieldContent('blog_post'); ?>"><a class="nav-link"
                                                               href="<?php echo e(route('blogs')); ?>"><?php echo e(__('All Post')); ?></a></li>
                        <?php endif; ?>
                        <?php if(hasPermission('blog_category_read')): ?>
                            <li class="<?php echo $__env->yieldContent('blog_category'); ?>"><a class="nav-link"
                                                                   href="<?php echo e(route('blogs.categories')); ?>"><?php echo e(__('Post Category')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(settingHelper('seller_system') == 1): ?>
                <?php if(hasPermission('support_read') || hasPermission('support_department_read')): ?>
                    <li class="nav-item dropdown <?php echo $__env->yieldContent('support_active'); ?>">
                        <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="bx bx-support"></i>
                            <span><?php echo e(__('Support')); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(hasPermission('support_read')): ?>
                                <li class="<?php echo $__env->yieldContent('tickets'); ?>"><a class="nav-link"
                                                                 href="<?php echo e(route('support')); ?>"><?php echo e(__('All Tickets')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('support_department_read')): ?>
                                <li class="<?php echo $__env->yieldContent('support_department_active'); ?>"><a class="nav-link"
                                                                                   href="<?php echo e(route('support.department')); ?>"><?php echo e(__('Departments')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('support_department_read')): ?>
                                <li class="<?php echo $__env->yieldContent('Contact_us'); ?>"><a class="nav-link"
                                                                    href="<?php echo e(route('contact.us')); ?>"><?php echo e(__('Contact Messages')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(addon_is_activated('affiliate_system')): ?>
                <li class="nav-item dropdown">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bx-repeat <?php echo e(isDemoServer() ? 'beep' : ''); ?>"></i>
                        <span><?php echo e(__('Affiliate')); ?></span>
                        <?php if(isDemoServer()): ?>
                            <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#"><?php echo e(__('Affiliate Setting')); ?></a></li>
                        <li><a class="nav-link" href="#"><?php echo e(__('Affiliate Form')); ?></a></li>
                        <li><a class="nav-link" href="#"><?php echo e(__('Affiliate Users')); ?></a></li>
                        <li><a class="nav-link" href="#"><?php echo e(__('Referral Users')); ?></a></li>
                        <li><a class="nav-link" href="#"><?php echo e(__('Withdraw Requests')); ?></a></li>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(addon_is_activated('offline_payment')): ?>
                <?php if(hasPermission('offline_payment_read') || hasPermission('wallet_recharge_read')): ?>
                    <li class="nav-item dropdown <?php echo $__env->yieldContent('offline_payment'); ?>">
                        <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="bx bx-credit-card-front <?php echo e(isDemoServer() ? 'beep' : ''); ?>"></i>
                            <span><?php echo e(__('Offline Payment')); ?></span>
                            <?php if(isDemoServer()): ?>
                                <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(hasPermission('offline_payment_read')): ?>
                                <li class="<?php echo $__env->yieldContent('offline_payment_methods'); ?>"><a class="nav-link"
                                                                                 href="<?php echo e(route('offline.payment.methods')); ?>"><?php echo e(__('Payment Methods')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('wallet_recharge_read')): ?>
                                <li class="<?php echo $__env->yieldContent('offline_wallet_recharge'); ?>"><a class="nav-link"
                                                                                 href="<?php echo e(route('offline.wallet.recharge.history')); ?>"><?php echo e(__('Wallet Recharge')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(addon_is_activated('reward')): ?>
                <?php if(hasPermission('reward_configuration_read') || hasPermission('reward_setting_read') || hasPermission('user_reward_read')): ?>
                    <li class="nav-item dropdown <?php echo $__env->yieldContent('reward_system'); ?>">
                        <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="bx bx-collection <?php echo e(isDemoServer() ? 'beep' : ''); ?>"></i>
                            <span><?php echo e(__('Reward System')); ?></span>
                            <?php if(isDemoServer()): ?>
                                <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(hasPermission('user_reward_read')): ?>
                                <li class="<?php echo $__env->yieldContent('user_rewards'); ?>"><a class="nav-link"
                                                                      href="<?php echo e(route('user.rewards')); ?>"><?php echo e(__('User Rewards')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('reward_configuration_read')): ?>
                                <li class="<?php echo $__env->yieldContent('reward_config'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('reward.config')); ?>"><?php echo e(__('Reward Configuration')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('reward_setting_read')): ?>
                                <li class="<?php echo $__env->yieldContent('reward_active'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('set.reward')); ?>"><?php echo e(__('Set Reward')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(addon_is_activated('affiliate')): ?>

                    <li class="nav-item dropdown <?php echo $__env->yieldContent('affiliate'); ?>">
                        <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="bx bx-collection <?php echo e(isDemoServer() ? 'beep' : ''); ?>"></i>
                            <span><?php echo e(__('Affiliate Marketing')); ?></span>
                            <?php if(isDemoServer()): ?>
                                <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu">

                                <li class="<?php echo $__env->yieldContent('user_rewards'); ?>"><a class="nav-link"
                                                                      href="<?php echo e(route('user.rewards')); ?>"><?php echo e(__('User Rewards')); ?></a>
                                </li>


                                <li class="<?php echo $__env->yieldContent('reward_config'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('reward.config')); ?>"><?php echo e(__('Reward Configuration')); ?></a>
                                </li>


                                <li class="<?php echo $__env->yieldContent('affiliate_configure_active'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('affiliate.configuration')); ?>"><?php echo e(__('Affiliate Configuration')); ?></a>
                                </li>

                        </ul>
                    </li>

            <?php endif; ?>
            <?php if(addon_is_activated('otp_system')): ?>
                <?php if(hasPermission('otp_setting_read') || hasPermission('sms_template_read')): ?>
                    <li class="nav-item dropdown <?php echo $__env->yieldContent('otp_setting_menu'); ?>">
                        <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="bx bx-comment <?php echo e(isDemoServer() ? 'beep' : ''); ?>"></i>
                            <span><?php echo e(__('OTP System')); ?></span>
                            <?php if(isDemoServer()): ?>
                                <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(hasPermission('otp_setting_read')): ?>
                                <li class="<?php echo $__env->yieldContent('otp_setting'); ?>"><a class="nav-link"
                                                                     href="<?php echo e(route('otp-settings')); ?>"><?php echo e(__('OTP Setting')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(hasPermission('sms_template_read')): ?>
                                <li class="<?php echo $__env->yieldContent('sms_templates'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('sms-templates')); ?>"><?php echo e(__('SMS Templates')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>

            <?php if(hasPermission('chat_messenger_read') && !isAppMode()): ?>
                <li class="<?php echo $__env->yieldContent('chat-messenger'); ?>"><a class="nav-link" href="<?php echo e(route('chat.messenger')); ?>"><i
                                class="bx bx-chat"></i>
                        <span><?php echo e(__('Chat Messenger')); ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(addon_is_activated('video_shopping')): ?>
                <?php if(hasPermission('video_shopping_read')): ?>
                    <li class="nav-item dropdown <?php echo $__env->yieldContent('video_shopping_menu'); ?>">
                        <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="bx bx-video <?php echo e(isDemoServer() ? 'beep' : ''); ?>"></i>
                            <span><?php echo e(__('Video Shopping')); ?></span>
                            <?php if(isDemoServer()): ?>
                                <p class="badge badge-addon"><?php echo e(__('Addon')); ?></p>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(hasPermission('video_shopping_read')): ?>
                                <li class="<?php echo $__env->yieldContent('video_shopping'); ?>"><a class="nav-link"
                                                                        href="<?php echo e(route('admin.video.shopping')); ?>"><?php echo e(__('Video Shopping')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(settingHelper('seller_system') == 1): ?>
                                <?php if(hasPermission('video_shopping_update')): ?>
                                    <li class="<?php echo $__env->yieldContent('video_shopping_config'); ?>"><a class="nav-link"
                                                                                   href="<?php echo e(route('admin.video.shopping.config')); ?>"><?php echo e(__('Video Shopping Config')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(hasPermission('payment_gateway_read')): ?>
                <li class="<?php echo $__env->yieldContent('payment-gateway'); ?>"><a class="nav-link" href="<?php echo e(route('payment.gateway')); ?>"><i
                                class="bx bx-dollar" aria-hidden="true"></i>
                        <span><?php echo e(__('Payment Gateway')); ?></span></a>
                </li>
            <?php endif; ?>
            <?php if(hasPermission('shipping_configuration_read') || hasPermission('country_read') || hasPermission('state_read') || hasPermission('city_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('shipping_active'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="bx bxs-truck"></i><span><?php echo e(__('Shipping')); ?></span></a>
                    <ul class="dropdown-menu <?php echo $__env->yieldContent('shipping'); ?>">
                        <?php if(hasPermission('shipping_configuration_read')): ?>
                            <li class="<?php echo $__env->yieldContent('shipping-configuration'); ?>"><a class="nav-link"
                                                                            href="<?php echo e(route('shipping-configuration')); ?>"> <?php echo e(__('Shipping Configuration')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('country_read')): ?>
                            <li class="<?php echo $__env->yieldContent('available-countries'); ?>"><a class="nav-link"
                                                                         href="<?php echo e(route('countries')); ?>"> <?php echo e(__('Available Countries')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('state_read')): ?>
                            <li class="<?php echo $__env->yieldContent('available-states'); ?>"><a class="nav-link"
                                                                      href="<?php echo e(route('states')); ?>"> <?php echo e(__('Available States')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('city_read')): ?>
                            <li class="<?php echo $__env->yieldContent('available-cities'); ?>"><a class="nav-link"
                                                                      href="<?php echo e(route('cities')); ?>"> <?php echo e(__('Available Cities')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if((hasPermission('theme_option_update') || hasPermission('header_content_update') || hasPermission('footer_content_update') || hasPermission('home_page_update') || hasPermission('website_seo_update') ||
                hasPermission('website_popup_update') || hasPermission('custom_css_update') || hasPermission('custom_js_update') || hasPermission('gdpr_update') || hasPermission('slider_read') ||
                hasPermission('service_read') || hasPermission('all_page_read') || hasPermission('login_singup_read')) && config('app.mobile_mode') == 'off'): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('store_front_active'); ?> <?php echo $__env->yieldContent('header_content'); ?> <?php echo $__env->yieldContent('footer_content'); ?> <?php echo $__env->yieldContent('slider_active'); ?> <?php echo $__env->yieldContent('service_active'); ?>  <?php echo $__env->yieldContent('banners'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="bx bx-cog"></i><span><?php echo e(__('Store Front')); ?></span></a>
                    <ul class="dropdown-menu <?php echo $__env->yieldContent('store-front'); ?>">
                        <?php if(hasPermission('theme_option_update')): ?>
                            <li class="<?php echo $__env->yieldContent('theme-options'); ?>"><a class="nav-link"
                                                                   href="<?php echo e(route('get.theme.options')); ?>"> <?php echo e(__('Theme Options')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('header_content_update')): ?>
                            <li class="<?php echo $__env->yieldContent('header_content'); ?>"><a class="nav-link"
                                                                    href="<?php echo e(route('header')); ?>"><?php echo e(__('Header Content')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('footer_content_update')): ?>
                            <li class="<?php echo $__env->yieldContent('footer_content'); ?>"><a class="nav-link"
                                                                    href="<?php echo e(route('about')); ?>"><?php echo e(__('Footer Content')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('home_page_update')): ?>
                            <li class="<?php echo $__env->yieldContent('home_page'); ?>"><a class="nav-link"
                                                               href="<?php echo e(route('admin.home.page')); ?>"><?php echo e(__('Home Page Builder')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(hasPermission('website_seo_update')): ?>
                            <li class="<?php echo $__env->yieldContent('website-seo'); ?>"><a class="nav-link"
                                                                 href="<?php echo e(route('website.seo')); ?>"><?php echo e(__('Website SEO')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('website_popup_update')): ?>
                            <li class="<?php echo $__env->yieldContent('website-popup'); ?>"><a class="nav-link"
                                                                   href="<?php echo e(route('website.popup')); ?>"><?php echo e(__('Website Popup')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('custom_css_update')): ?>
                            <li class="<?php echo $__env->yieldContent('custom-css'); ?>"><a class="nav-link"
                                                                href="<?php echo e(route('custom.css')); ?>"><?php echo e(__('Custom CSS')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('custom_js_update')): ?>
                            <li class="<?php echo $__env->yieldContent('custom-js'); ?>"><a class="nav-link"
                                                               href="<?php echo e(route('custom.js')); ?>"><?php echo e(__('Custom JS')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(hasPermission('gdpr_update')): ?>
                            <li class="<?php echo $__env->yieldContent('gdpr'); ?>"><a class="nav-link"
                                                          href="<?php echo e(route('gdpr')); ?>"><?php echo e(__('GDPR')); ?></a></li>
                        <?php endif; ?>
                        <?php if(hasPermission('facebook_service_update')): ?>
                            <li class="<?php echo $__env->yieldContent('facebook_services'); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(route('settings.facebook.services')); ?>"><?php echo e(__('Facebook Pixel')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('google_service_update')): ?>
                            <li class="<?php echo $__env->yieldContent('google_services'); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(route('settings.google.services')); ?>"><?php echo e(__('Google Services')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('slider_read')): ?>
                            <li class="<?php echo $__env->yieldContent('slider_active'); ?>">
                                <a class="nav-link" href="<?php echo e(route('sliders.index')); ?>"><span><?php echo e(__('Slider')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('service_read')): ?>
                            <li class="<?php echo $__env->yieldContent('service_active'); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(route('services.index')); ?>"><span><?php echo e(__('Benefits')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="<?php echo $__env->yieldContent('banners'); ?>">
                            <a class="nav-link"
                               href="<?php echo e(route('admin.banners')); ?>"><span><?php echo e(__('Banners')); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
            <li class="<?php echo $__env->yieldContent('other_page'); ?>"><a class="nav-link"
                                                href="<?php echo e(route('other.pages')); ?>"><i class='bx bx-detail'></i><span><?php echo e(__('All Pages')); ?></span></a>
            </li>
            <?php if(hasPermission('general_setting_update') || hasPermission('preference_setting_update') || hasPermission('email_setting_update') || hasPermission('currency_setting_update') || hasPermission('vat_tax_setting_update') || hasPermission('storage_setting_update') || hasPermission('cache_update') || hasPermission('miscellaneous_setting_update') || hasPermission('admin_panel_setting_update') || hasPermission('third_party_update')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('setup'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="bx bx-slider-alt"></i><span><?php echo e(__('System Setup')); ?></span></a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('general_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('general_setting_active'); ?>"><a class="nav-link"
                                                                            href="<?php echo e(route('general.setting')); ?>"><?php echo e(__('General Settings')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('preference_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('preference_active'); ?>"><a class="nav-link"
                                                                       href="<?php echo e(route('preference')); ?>"><?php echo e(__('Preference')); ?></a>
                            </li>
                        <?php endif; ?>
                        
                        <?php if(hasPermission('email_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('email_setting_active'); ?>"><a class="nav-link"
                                                                          href="<?php echo e(route('email.setting')); ?>"><?php echo e(__('Email Setting')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('language_read')): ?>
                            <li class="<?php echo $__env->yieldContent('languages'); ?>"><a class="nav-link"
                                                               href="<?php echo e(route('language')); ?>"><?php echo e(__('Languages')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('currency_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('currency_active'); ?>"><a class="nav-link"
                                                                     href="<?php echo e(route('currency')); ?>"><?php echo e(__('Currency')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('vat_tax_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('vat_tax_active'); ?>"><a class="nav-link"
                                                                    href="<?php echo e(route('vat.tax')); ?>"><?php echo e(__('VAT & Tax')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('storage_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('storage_setting_active'); ?>"><a class="nav-link"
                                                                            href="<?php echo e(route('storage.setting')); ?>"><?php echo e(__('Storage')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('cache_update')): ?>
                            <li class="<?php echo $__env->yieldContent('cache_active'); ?>"><a class="nav-link"
                                                                  href="<?php echo e(route('cache')); ?>"><?php echo e(__('Cache')); ?></a></li>
                        <?php endif; ?>
                        <?php if(hasPermission('google_service_update')): ?>
                            <li class="<?php echo $__env->yieldContent('google_recaptcha_active'); ?>"><a
                                        href="<?php echo e(route('settings.google.recaptcha')); ?>"
                                        class="nav-link"><?php echo e(__('Google reCaptcha')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('admin_panel_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('white_level'); ?>"><a class="nav-link"
                                                                 href="<?php echo e(route('admin.panel.setting')); ?>"><?php echo e(__('Admin Panel Setting')); ?></a>
                            </li>
                        <?php endif; ?>


                        <?php if(hasPermission('pusher_notification_update')): ?>
                            <li class="<?php echo $__env->yieldContent('pusher_notification'); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(route('settings.pusher.notification')); ?>"><?php echo e(__('Pusher Notification')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(true): ?>
                            <li class="<?php echo $__env->yieldContent('firebase_update'); ?>"><a
                                        href="<?php echo e(route('settings.firebase')); ?>"
                                        class="nav-link"><?php echo e(__('Firebase')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('miscellaneous_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('miscellaneous_active'); ?>"><a class="nav-link"
                                                                          href="<?php echo e(route('miscellaneous')); ?>"><?php echo e(__('Misc')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('font_update')): ?>
                            <li class="<?php echo $__env->yieldContent('pdf_font'); ?>"><a class="nav-link"
                                                              href="<?php echo e(route('admin.get.fonts')); ?>"><?php echo e(__('Pdf Font')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(hasPermission('staff_read') || hasPermission('role_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('staff_active'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="bx bx-group"></i>
                        <span><?php echo e(__('Staffs')); ?></span></a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('staff_read')): ?>
                            <li class="<?php echo $__env->yieldContent('staffs'); ?>"><a class="nav-link"
                                                            href="<?php echo e(route('staffs')); ?>"> <?php echo e(__('Manage Staffs')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('role_read')): ?>
                            <li class="<?php echo $__env->yieldContent('roles'); ?>"><a class="nav-link"
                                                           href="<?php echo e(route('roles')); ?>"> <?php echo e(__('Roles')); ?></a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(hasPermission('android_setting_update') || hasPermission('ios_setting_update') || hasPermission('app_config_update') || hasPermission('ads_config_update')
                || hasPermission('api_setting_update') || hasPermission('api_key_read_all') || hasPermission('api_key_read')
                 || hasPermission('api_key_update') || hasPermission('api_key_delete') || hasPermission('all_page_read')): ?>
                <li class="nav-item dropdown <?php echo $__env->yieldContent('mobile_apps'); ?>">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="bx bxl-flutter"></i>
                        <?php if(isAppMode()): ?>
                            <span><?php echo e(__('app_setting')); ?></span>
                        <?php else: ?>
                            <span><?php echo e(__('Mobile App')); ?></span>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(hasPermission('api_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('apis_settings_active'); ?>"><a class="nav-link"
                                                                          href="<?php echo e(route('apis.settings')); ?>"><?php echo e(__('APIs Setting')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(hasPermission('android_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('android_settings_active'); ?>"><a class="nav-link"
                                                                             href="<?php echo e(route('android.settings')); ?>"><?php echo e(__('Android Setting')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('ios_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('ios_settings_active'); ?>"><a class="nav-link"
                                                                         href="<?php echo e(route('ios.settings')); ?>"><?php echo e(__('iOS Setting')); ?></a>
                            </li>
                        <?php endif; ?>
                     
                        <?php if(hasPermission('download_link_update')): ?>
                            <li class="<?php echo $__env->yieldContent('download_link_settings_active'); ?>"><a class="nav-link"
                                                                                   href="<?php echo e(route('download.link.settings')); ?>"><?php echo e(__('Download Link')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('android_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('mobile_slider_active'); ?>"><a class="nav-link"
                                                                          href="<?php echo e(route('mobile.slider.settings')); ?>"><?php echo e(__('Slider')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(hasPermission('all_page_read') && isAppMode()): ?>
                            <li class="<?php echo $__env->yieldContent('other_page'); ?>"><a class="nav-link" href="<?php echo e(route('other.pages')); ?>"><?php echo e(__('All Pages')); ?></a></li>
                        <?php endif; ?>
                        <?php if(hasPermission('android_setting_update')): ?>
                            <li class="<?php echo $__env->yieldContent('home_page_setting_active'); ?>"><a class="nav-link"
                                                                              href="<?php echo e(route('mobile.home.page')); ?>"><?php echo e(__('home_screen_builder')); ?></a>
                            </li>
                        <?php endif; ?>
                                <li class="<?php echo $__env->yieldContent('gdpr_settings_active'); ?>"><a class="nav-link"
                                                                                  href="<?php echo e(route('mobile.gdpr.settings')); ?>"><?php echo e(__('GDPR')); ?></a>
                                </li>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(hasPermission('addon_read')): ?>
                <?php if(settingHelper('current_version') != '1.0.0'): ?>
                    <li class="nav-item dropdown <?php echo $__env->yieldContent('addon_utility'); ?>">
                        <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="bx bx-extension"
                                    aria-hidden="true"></i><span><?php echo e(__('Addons')); ?></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo $__env->yieldContent('installed_addon'); ?>"><a class="nav-link"
                                                                     href="<?php echo e(route('admin.installed.addon')); ?>"><?php echo e(__('Installed Addons')); ?></a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('available_addon'); ?>"><a class="nav-link"
                                                                     href="<?php echo e(route('admin.available.addons')); ?>"><?php echo e(__('Available Addons')); ?></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <li class="<?php echo $__env->yieldContent('updater'); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.system.update.form')); ?>">
                    <i class="bx bx-wrench"></i>
                    <span><?php echo e(__('System Update')); ?></span>
                </a>
            </li>
            <li class="<?php echo $__env->yieldContent('server-info'); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.server.info')); ?>">
                    <i class="bx bx-server"></i>
                    <span><?php echo e(__('Server Info')); ?></span>
                </a>
            </li>
            
            
            
            
            
            
        </ul>
    </aside>
</div>
<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>