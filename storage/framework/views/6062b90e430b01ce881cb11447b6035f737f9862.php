<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS Libraries -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo e(__('Login')); ?>

        | <?php echo e(settingHelper('admin_panel_title') != '' ?  settingHelper('admin_panel_title') : __('Yoori')); ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/toastr.min.css')); ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/yoori.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/custom.css')); ?>">

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
</head>
<?php
    $path_check = request()->path();
?>
<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <?php
                            $logo = settingHelper('admin_dark_logo')
                        ?>
                        <img src="<?php echo e(($logo != [] && @is_file_exists($logo['image_100x38'])) ? static_asset($logo['image_100x38']) : static_asset('images/default/dark-logo.png')); ?>"
                             alt="logo" width="100">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header"><h4><?php echo e(__('Login')); ?></h4></div>
                        <div class="card-body">
                            <form method="POST" class="login_form" action="<?php echo e(route('admin.seller.login')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="email"><?php echo e(__('Email')); ?></label>
                                    <input id="email" type="email" class="form-control"
                                           value="<?php echo e(isDemoServer() ? request()->path() == 'admin/login' ? 'admin@spagreen.net' : (request()->path() == 'seller/login' ? 'seller@spagreen.net' : old('email')) : ''); ?>"
                                           name="email" tabindex="1"
                                           required autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('email')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label"><?php echo e(__('Password')); ?></label>
                                    </div>
                                    <input id="password"
                                           value="<?php echo e(isDemoServer() ? request()->path() == 'admin/login' ? '123456' : (request()->path() == 'seller/login' ? '123456' : old('password')) : ''); ?>"
                                           type="password" class="form-control" name="password"
                                           tabindex="2" required>
                                    <input type="hidden" value="<?php echo e($path_check); ?>" name="request_path" />
                                    <?php if($errors->has('password')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('password')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>

                                <?php if( settingHelper('is_recaptcha_activated') == 1 ): ?>
                                    <div class="g-recaptcha mb-2" data-callback="myCallback"
                                         data-sitekey="<?php echo e(settingHelper('recaptcha_Site_key')); ?>"></div>
                                    <input name="recaptcha_check" type="hidden">
                                <?php endif; ?>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                               id="remember-me">
                                        <label class="custom-control-label"
                                               for="remember-me"><?php echo e(__('Remember Me')); ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block login_btn" tabindex="4">
                                        <?php echo e(__('Login')); ?>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<script src="<?php echo e(static_asset('admin/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(static_asset('admin/js/bootstrap.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(static_asset('admin/js/toastr.min.js')); ?>"></script>
<?php echo Toastr::message(); ?>

<!-- Template JS File -->
<script src="<?php echo e(static_asset('admin/js/scripts.js')); ?>"></script>
<?php echo $__env->make('admin.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Page Specific JS File -->
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    window.myCallback = function (val) {
        // window.captcha = val;
        $('input[name="recaptcha_check"]').val(val);
    };
</script>
</body>
</html>
<?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>