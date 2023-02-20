<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="title" content="<?php echo e(settingHelper('meta_title')); ?>" />
    <meta name="description" content="<?php echo e(settingHelper('meta_description')); ?>" />
    <meta name="keyword" content="<?php echo e(settingHelper('keyword')); ?>" />
    <meta name="article" content="<?php echo e(settingHelper('article')); ?>" />
    <meta name="language" content="<?php echo e(settingHelper('default_language')); ?>" />
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(settingHelper('admin_panel_title') != '' ?  settingHelper('admin_panel_title') : __('Yoori')); ?></title>
<?php
    $logo = settingHelper('og_image');
?>

    <?php if($logo != [] && $logo['original_image'] != ''): ?>
        <meta property="og:image" content="<?php echo e(static_asset($logo['original_image'])); ?>" />
    <?php else: ?>
        <meta property="og:image" content="<?php echo e(static_asset('default-image/default-730x400.png')); ?>" alt="<?php echo settingHelper('meta_title'); ?>" />
    <?php endif; ?>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/bootstrap.min.css')); ?>">

    <!-- Icon -->
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/boxicons/css/boxicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('frontend/css/materialdesignicons.min.css')); ?>">

    <!-- Library -->
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/selectric.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/toastr.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/select2.min.css')); ?>">

    <?php echo $__env->yieldContent('page-style'); ?>

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/bootstrap-tagsinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/components.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/bootstrap-colorpicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/yoori.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('fonts/inter/css.css')); ?>">
    <!-- Custom CSS -->
    <?php if(request()->is('admin/pos')): ?>
        <link rel="stylesheet" href="<?php echo e(static_asset('frontend/css/vue-toastr-2.min.css')); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/custom.css')); ?>">
    <?php if($locale_language->text_direction == 'rtl'): ?>
        <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/rtl.css')); ?>">
    <?php endif; ?>

    <!-- Favicon -->
    <?php
        $icon = settingHelper('favicon');
    ?>
    <link rel="apple-touch-icon" sizes="57x57"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_57x57_url'])) ? static_asset($icon['image_57x57_url']) : static_asset('images/ico/favicon-57x57.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_60x60_url'])) ? static_asset($icon['image_60x60_url']) : static_asset('images/ico/favicon-60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_72x72_url'])) ? static_asset($icon['image_72x72_url']) : static_asset('images/ico/favicon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_76x76_url'])) ? static_asset($icon['image_76x76_url']) : static_asset('images/ico/favicon-76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_114x114_url'])) ? static_asset($icon['image_114x114_url']) : static_asset('images/ico/favicon-114x114.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_120x120_url'])) ? static_asset($icon['image_120x120_url']) : static_asset('images/ico/favicon-120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_144x144_url'])) ? static_asset($icon['image_144x144_url']) : static_asset('images/ico/favicon-144x144.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_152x152_url'])) ? static_asset($icon['image_152x152_url']) : static_asset('images/ico/favicon-152x152.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_180x180_url'])) ? static_asset($icon['image_180x180_url']) : static_asset('images/ico/favicon-180x180.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_192x192_url'])) ? static_asset($icon['image_192x192_url']) : static_asset('images/favicon-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_32x32_url'])) ? static_asset($icon['image_32x32_url']) : static_asset('images/ico/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_96x96_url'])) ? static_asset($icon['image_96x96_url']) : static_asset('images/ico/favicon-96x96.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo e(($icon != [] && @is_file_exists($icon['image_16x16_url'])) ? static_asset($icon['image_16x16_url']) : static_asset('images/ico/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(static_asset('images/ico/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
        content="<?php echo e(($icon != [] && @is_file_exists($icon['image_144x144_url'])) ? static_asset($icon['image_144x144_url']) : static_asset('images/ico/favicon-144x144.png')); ?>">
    <meta name="theme-color" content="#ffffff">
    <meta name="get-me" content="<?php echo e(Sentinel::getUser()->user_type == 'seller' ? 'seller' : 'admin'); ?>" />
    <!-- End Favicon -->
    <?php echo $__env->yieldContent('style'); ?>
    <?php echo $__env->yieldPushContent('style'); ?>
</head>
<?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/admin/partials/header-assets.blade.php ENDPATH**/ ?>