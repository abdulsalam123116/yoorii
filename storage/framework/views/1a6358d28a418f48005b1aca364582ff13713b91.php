<!DOCTYPE html>
<html lang="<?php echo e($active_language ? $active_language->locale : 'en'); ?>"
      dir="<?php echo e($active_language ? $active_language->text_direction : 'ltr'); ?>">
<?php
    if (isAppMode())
       {
          $version = 110;
          $version_code = "1.1.0";
       }
    else{
        $version = 160;
        $version_code = "1.6.0";
    }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?php echo e(settingHelper('author_name')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="base_url" content="<?php echo e(url('/')); ?>">
    <title><?php echo $__env->yieldContent('title',settingHelper('system_name')); ?></title>
    <!-- SEO -->
    <meta name='title' content="<?php echo $meta['meta_title']; ?>"/>
    <meta name="description" content="<?php echo $meta['meta_description']; ?>"/>
    <meta name='keywords' content="<?php echo e($meta['meta_keywords']); ?>"/>
    <meta property='article:published_time' content="<?php echo e($meta['meta_published_time']); ?>"/>
    <meta property='article:section' content="<?php echo e($meta['meta_section']); ?>"/>
    <!-- END SEO -->


    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $meta['meta_title']; ?>"/>
    <meta property="og:description" content="<?php echo $meta['meta_description']; ?>"/>
    <meta property="og:url" content="<?php echo e($meta['meta_url']); ?>"/>
    <meta property="og:type" content="<?php echo e($meta['meta_section']); ?>"/>
    <meta property="og:locale" content="<?php echo e(app()->getLocale()); ?>"/>
    <meta property="og:site_name" content="<?php echo e(settingHelper('system_name')); ?>"/>
    <meta property="og:image" content="<?php echo e($meta['meta_image']); ?>"/>
    <meta property="og:image:size" content="300"/>
    <!-- END Open Graph -->

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="<?php echo $meta['meta_title']; ?>"/>
    <meta name="twitter:site" content="<?php echo e($meta['meta_url']); ?>"/>
    <!-- END Twitter Card -->
    <!-- icons -->
    <link rel="icon" href="<?php echo e($favicon['image_16x16']); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e($favicon['image_144x144']); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e($favicon['image_114x114']); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e($favicon['image_72x72']); ?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e($favicon['image_57x57']); ?>">
    <!-- END icons -->

    <!-- Font -->
    <link href="<?php echo e(fontURL()); ?>" rel="stylesheet">
    <!-- CSS -->

    <link rel="stylesheet" href="<?php echo e(mix('frontend/css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('frontend/css/materialdesignicons.min.css')); ?>?version=<?php echo e($version); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('frontend/css/vue-toastr-2.min.css')); ?>?version=<?php echo e($version); ?>">


    <link rel="stylesheet" href="<?php echo e(static_asset('frontend/css/vue-slick-carousel.css')); ?>?version=<?php echo e($version); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('frontend/css/vue-slick-carousel-theme.css')); ?>?version=<?php echo e($version); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('frontend/css/vue-select.css')); ?>?version=<?php echo e($version); ?>">

    <?php if(isDemoServer()): ?>
        <link rel="stylesheet" href="<?php echo e(static_asset('frontend/css/color-switcher.css')); ?>?version=<?php echo e($version); ?>">
    <?php endif; ?>

    <?php if($settings['text_direction'] == 'rtl'): ?>
        <link rel="stylesheet" href="<?php echo e(static_asset('frontend/css/rtl.css')); ?>?version=<?php echo e($version); ?>">
    <?php endif; ?>
    <style>
        :root {
            --primary-color: <?php echo e(settingHelper('primary_color')); ?>;
            --menu-active-color: <?php echo e(settingHelper('menu_active_color')); ?>;
            --menu-bg-color: <?php echo e(settingHelper('menu_background_color')); ?>;
            --menu-text-color: <?php echo e(settingHelper('menu_text_color')); ?>;
            --primary-font: '<?php echo e(primaryFont()); ?>', sans-serif;
            --profile-sidebar: <?php echo e(settingHelper('menu_background_color').'10'); ?>;
            --sidebar-base-color: <?php echo e(settingHelper('primary_color').'20'); ?>;
            --btn-bg-color: <?php echo e(settingHelper('button_background_color')); ?>;
            --btn-txt-color: <?php echo e(settingHelper('button_text_color')); ?>;
            --btn-bdr-color: <?php echo e(settingHelper('button_border_color')); ?>;
            --secondary-color: #333333;
            --theme-color: #333333;
            --menu-border-bottom-color: transparent;
            --primary-bg: linear-gradient(to right, var(--primary-color), var(--theme-color));
            --vs-colors--lightest: rgba(60, 60, 60, 0.26);
            --vs-colors--light: rgba(60, 60, 60, 0.5);
            --vs-colors--dark: #333;
            --vs-colors--darkest: rgba(0, 0, 0, 0.15);
            --vs-search-input-color: inherit;
            --vs-search-input-bg: #fff;
            --vs-search-input-placeholder-color: inherit;
            --vs-font-size: 1rem;
            --vs-line-height: 1.4;
            --vs-state-disabled-bg: #f8f8f8;
            --vs-state-disabled-color: var(--vs-colors--light);
            --vs-state-disabled-controls-color: var(--vs-colors--light);
            --vs-state-disabled-cursor: not-allowed;
            --vs-border-color: var(--vs-colors--lightest);
            --vs-border-width: 1px;
            --vs-border-style: solid;
            --vs-border-radius: 4px;
            --vs-actions-padding: 4px 6px 0 3px;
            --vs-controls-color: var(--vs-colors--light);
            --vs-controls-size: 1;
            --vs-controls--deselect-text-shadow: 0 1px 0 #fff;
            --vs-selected-bg: #f0f0f0;
            --vs-selected-color: var(--vs-colors--dark);
            --vs-selected-border-color: var(--vs-border-color);
            --vs-selected-border-style: var(--vs-border-style);
            --vs-selected-border-width: var(--vs-border-width);
            --vs-dropdown-bg: #fff;
            --vs-dropdown-color: inherit;
            --vs-dropdown-z-index: 1000;
            --vs-dropdown-min-width: 160px;
            --vs-dropdown-max-height: 350px;
            --vs-dropdown-box-shadow: 0px 3px 6px 0px var(--vs-colors--darkest);
            --vs-dropdown-option-bg: #000;
            --vs-dropdown-option-color: var(--vs-dropdown-color);
            --vs-dropdown-option-padding: 3px 20px;
            --vs-dropdown-option--active-bg: #5897fb;
            --vs-dropdown-option--active-color: #fff;
            --vs-dropdown-option--deselect-bg: #fb5858;
            --vs-dropdown-option--deselect-color: #fff;
            --vs-transition-timing-function: cubic-bezier(1, 0.5, 0.8, 1);
            --vs-transition-duration: 0.15s;
            --vs-disabled-bg: var(--vs-state-disabled-bg);
            --vs-disabled-color: var(--vs-state-disabled-color);
            --vs-disabled-cursor: var(--vs-state-disabled-cursor)
        }

        <?php if(settingHelper('full_width_menu_background') !='1' && settingHelper('header_theme') == 'header_theme1'): ?>
               .header-menu.header_theme1 {
            background-color: transparent !important;
        }

        <?php endif; ?>
        <?php if(base64_decode(settingHelper('custom_css'))): ?>
            <?php echo e(base64_decode(settingHelper('custom_css'))); ?>

        <?php endif; ?>
            <?php if(settingHelper('is_tawk_messenger_activated') == 1): ?>
        .fb_dialog_content iframe {
            margin-right: 90px !important;
        }
        <?php endif; ?>
    </style>

    <?php if(request()->route()->getName() == 'product-details'): ?>
        <!-- Google Schema for Product -->
        <script TYPE="application/ld+json">
            <?php echo $meta['itemprop']; ?>

        </script>
    <?php endif; ?>

    <?php if(settingHelper('custom_header_script')): ?>

        <?php echo base64_decode(settingHelper('custom_header_script')); ?>


    <?php endif; ?>

    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
    <?php if(settingHelper('is_google_analytics_activated') && settingHelper('tracking_code')): ?>
        <?php echo base64_decode(settingHelper('tracking_code')); ?>

    <?php endif; ?>
    <?php if(settingHelper('is_facebook_pixel_activated') && settingHelper('facebook_pixel_id')): ?>
        <?php echo base64_decode(settingHelper('facebook_pixel_id')); ?>

    <?php endif; ?>
</head>

<body class="sg-active">
<div id="37142846" class="sg-37142846"></div>
<div id="app">
    <frontend_master :languages="<?php echo e(json_encode($languages)); ?>" :pages="<?php echo e(json_encode($pages)); ?>" :currencies="<?php echo e(json_encode($currencies)); ?>"
                    :active_language="<?php echo e(json_encode($active_language)); ?>"
                    :active_currency="<?php echo e(json_encode($active_currency)); ?>"
                    :categories="<?php echo e(json_encode($categories)); ?>" :sliders="<?php echo e(json_encode($sliders)); ?>"
                    :shop_follower="<?php echo e(json_encode($shop_follower)); ?>" :services="<?php echo e(json_encode($services)); ?>"
                    :settings_data="<?php echo e(json_encode($settings)); ?>"
                    :banners="<?php echo e(json_encode($banners)); ?>"
                    :viewed_products="<?php echo e(json_encode($viewed_products)); ?>"
                    :compare_list="<?php echo e(json_encode($compare_list)); ?>" :wishlists="<?php echo e($wishlists); ?>"
                    :user_wishlists="<?php echo e(json_encode($user_wishlists)); ?>"
                    <?php if($user): ?> :user="<?php echo e($user); ?>" <?php endif; ?>  <?php if(count($carts) > 0): ?> :carts="<?php echo e(json_encode($carts)); ?>"
                    <?php endif; ?> :add_ons="<?php echo e(json_encode($addons)); ?>"
                    :default_currency="<?php echo e(json_encode($default_currency)); ?>" :home_components="<?php echo e(json_encode($home_components)); ?>"
                    :default_assets="<?php echo e(json_encode($default_assets)); ?>">
    </frontend_master>
</div>

<input type="hidden" id="token" value="<?php echo e(csrf_token()); ?>">
<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" id="app_path" value="<?php echo e(config('app.app_path', '/')); ?>">

<input type="hidden" id="api_key" value="<?php echo e(settingHelper('api_key')); ?>">
<input type="hidden" id="auth_domain" value="<?php echo e(settingHelper('auth_domain')); ?>">
<input type="hidden" id="project_id" value="<?php echo e(settingHelper('project_id')); ?>">
<input type="hidden" id="storage_bucket" value="<?php echo e(settingHelper('storage_bucket')); ?>">
<input type="hidden" id="messaging_sender_id" value="<?php echo e(settingHelper('messaging_sender_id')); ?>">
<input type="hidden" id="app_id" value="<?php echo e(settingHelper('app_id')); ?>">
<input type="hidden" id="measurement_id" value="<?php echo e(settingHelper('measurement_id')); ?>">

<script src="<?php echo e(mix('frontend/js/app.js')); ?>" async></script>
<script src="<?php echo e(static_asset('frontend/js/vue-toastr-2.js')); ?>?version=<?php echo e($version); ?>"></script>

<?php if(settingHelper('is_pusher_notification_active') == 1 && Sentinel::check()): ?>
    <input type="hidden" value="<?php echo e(settingHelper('pusher_app_key')); ?>" id="f_pusher_app_key">
    <input type="hidden" value="<?php echo e(settingHelper('pusher_app_cluster')); ?>" id="f_pusher_app_cluster">
<?php endif; ?>
<script>
    let conversation_active = '<?php echo e(settingHelper('conversation')); ?>';
    let fb_object = {
        status: '<?php echo e(settingHelper('is_facebook_messenger_activated')); ?>',
        color: '<?php echo e(settingHelper('facebook_messenger_color')); ?>',
        id: '<?php echo e(settingHelper('facebook_page_id')); ?>',
    };
    let tawk_object = {
        status: '<?php echo e(settingHelper('is_tawk_messenger_activated')); ?>',
        widget_id: '<?php echo e(settingHelper('tawk_widget_id')); ?>',
        property_id: '<?php echo e(settingHelper('tawk_property_id')); ?>',
    };

    //facebook chat
    <?php if(settingHelper('is_tawk_messenger_activated') == 1): ?>
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/<?php echo e(settingHelper('tawk_property_id')); ?>/<?php echo e(settingHelper('tawk_widget_id')); ?>';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
        window.Tawk_API = window.Tawk_API || {};
        Tawk_API.customStyle = {
            visibility : {
                desktop : {
                    position : '<?php echo e($settings["text_direction"] ==  "rtl" ?  "bl" : "br"); ?>',
                    xOffset : '25px',
                    yOffset : '<?php echo e($settings["text_direction"] ==  "rtl" ?  "৪0px" : "20px"); ?>'
                },
                mobile : {
                    position : '<?php echo e($settings["text_direction"] ==  "rtl" ?  "bl" : "br"); ?>',
                    xOffset : '25px',
                    yOffset : '<?php echo e($settings["text_direction"] ==  "rtl" ?  "70px" : "70px"); ?>'
                }
            }
        };       
    })();
    <?php endif; ?>
    // "vue-fb-customer-chat": "^0.2.1"
    //fb chat

    <?php if(settingHelper('is_facebook_messenger_activated') == 1): ?>
        window.fbAsyncInit = function () {
        FB.init({
            appId: 'facebook-developer-app-id',

            autoLogAppEvents: true,
            xfbml: true,
            version: 'v3.3'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    <?php endif; ?>


        //toastr setting
    window.toastr.options.progressBar       = true;
    window.toastr.options.positionClass     = "toast-bottom-right";
    window.toastr.options.closeButton       = true;

    window.captcha = '';
    window.myCallback = function (val) {
        window.captcha = val;
    };

    <?php if(Session::has('info')): ?>
    toastr.info('<?php echo e(Session::get('info')); ?>', 'Info !!')
    <?php elseif(Session::has('success')): ?>
    toastr.success('<?php echo e(Session::get('success')); ?>', 'Success !!' )
    <?php elseif(Session::has('warning')): ?>
    toastr.warning('<?php echo e(Session::get('warning')); ?>', 'Warning !!' )
    <?php elseif(Session::has('error')): ?>
    toastr.error('<?php echo e(Session::get('error')); ?>', 'Error !!' )
    <?php endif; ?>
</script>
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="<?php echo e((int)settingHelper('facebook_page_id')); ?>"
     theme_color="<?php echo e(settingHelper('facebook_messenger_color')); ?>">
</div>

<?php if(settingHelper('custom_footer_script')): ?>
    <?php echo base64_decode(settingHelper('custom_footer_script')); ?>

<?php endif; ?>


<?php if(isDemoServer()): ?>
    <div class="sg-yoori-switcher <?php echo e(settingHelper('header_theme') == 'header_theme2' ? 'theme-color-switcher' : ''); ?>">
        <div class="sg-yoori-switcher-close"><i class="mdi mdi-cog"></i></div>
        <div class="color-switcher">
            <div class="color-switcher-title">
                <h4>Theme Options</h4>
            </div>
            <div class="color-switcher-inner">
                <div class="color-switch">
                    <div class="picker-title">
                        <h6 class="cs-title">Accent Color</h6>
                    </div>
                    <input type="color" value="#C9151B" id="colorPicker-accent">
                </div>
                <div class="color-switch <?php echo e(settingHelper('header_theme') == 'header_theme2' ? 'd-none' : ''); ?>">
                    <div class="picker-title">
                        <h6 class="cs-title">Menu BG Color</h6>
                    </div>
                    <input type="color" value="#000" id="colorPicker-bg">
                </div>
                <div class="color-switch <?php echo e(settingHelper('header_theme') == 'header_theme2' ? 'd-none' : ''); ?>">
                    <div class="picker-title">
                        <h6 class="cs-title">Menu Text Color</h6>
                    </div>
                    <input type="color" value="#fff" id="colorPicker-m-text">
                </div>
                <div class="color-switch">
                    <div class="picker-title">
                        <h6 class="cs-title">Direction</h6>
                    </div>
                    <div class="rtl-btn switcher_dir">
                        <a href="<?php echo e(route('set.text-direction','ltr')); ?>"
                           class="btn-ltr <?php echo e(@$active_language->text_direction == 'ltr' ? 'active' : ''); ?>">
                            <span></span>LTR</a>
                        <a href="<?php echo e(route('set.text-direction','rtl')); ?>"
                           class="btn-rtl <?php echo e(@$active_language->text_direction == 'rtl' ? 'active' : ''); ?>">RTL
                            <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sg-yoori-purchase-btn">
        <a href="https://1.envato.market/yoori" target="_blank" class="sg-yoori-purchase">
            <div class="sg-yoori-purchase-price"><span>$</span>
                69
            </div>
            <div class="em-logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
                <path d="M12.869.088c-.572-.281-3.474.04-5.566 2.047-3.296 3.291-3.217 7.627-3.217 7.627s-.109.446-.573-.201c-1.016-1.295-.484-4.274-.424-4.689.084-.585-.289-.602-.444-.409-3.672 5.098-.356 9.272 1.815 10.597 2.542 1.551 7.556 1.55 9.553-2.85C16.501 6.731 13.586.439 12.869.088z" fill="#ffffff"></path>
             </svg>
            </div>
        </a>
    </div>
<?php endif; ?>
</body>
</html>

<?php /**PATH /var/www/vhosts/determined-ganguly.82-165-238-229.plesk.page/httpdocs/resources/views/frontend/master.blade.php ENDPATH**/ ?>