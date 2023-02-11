
<?php $__env->startSection('store_front_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('home_page'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Home Page')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="card-body p-0  mb-4 bg-white">
            <div class="form-inline">
                <div class="alert-body w-100 p-4">
                    <div class="alert alert-light alert-has-icon p-0 mb-0">
                        <div class="alert-icon pl-2"><i class="bx bx-bulb"></i></div>
                        <small id="passwordHelpBlock" class="form-text">
                            <?php echo e(__('If you want to use others web link like (https://www.google.com/maps,https://www.facebook.com/profile) then insert link, otherwise insert just slug ("/all-blogs")')); ?>

                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <form action="<?php echo e(route('admin.home.page.update')); ?>" method="post" enctype="multipart/form-data"
                  id="home_page_contents">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                        <div class="home-content" id="dragger-brop-menu">
                            <?php
                                $content_count = 0;
                            ?>
                            <?php if(settingHelper('home_page_contents')): ?>
                                <?php $__currentLoopData = settingHelper('home_page_contents'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $type = array_key_first($contents);
                                        $content_count++;
                                        $update = true;
                                    ?>
                                    <?php echo $__env->make('admin.store-front.home-page-contents', compact('type', 'contents','update','content_count'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>

                        <div class="static-content content-<?php echo e($content_count + 1); ?>" id="home-page-content">
                            <div class="menu-item card" data-id="<?php echo e($content_count + 1); ?>">
                                <div class="card-header d-flex justify-content-between">
                                    <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-54 move"></i>
                                        <h4><?php echo e(__("Article")); ?></h4>
                                    </a>

                                    <div>
                                        <select class="form-control selectric about-select-lang site-lang"
                                                name="site_lang" data-title="home_page_article"
                                                data-url="<?php echo e(route('about-description-by-lang')); ?>">
                                            <option value=""><?php echo e(__('Select Language')); ?></option>
                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                        value="<?php echo e($language->locale); ?>" <?php echo e(App::getLocale() == $language->locale ? 'selected' : ''); ?>><?php echo e($language->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if($errors->has('lang')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('lang')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card-body article-<?php echo e($content_count + 1); ?>">
                                    <div class="form-group">
                                        <textarea name="home_page_article" class="summernote" id="home_page_article"
                                                  placeholder="<?php echo e(__('About Description')); ?>"><?php echo e(old('about_description') ? old('about_description') : settingHelper('home_page_article', App::getLocale())); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h4><?php echo e(__("Add Sections")); ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="sg-builder-content text-center builder-content">
                                    <div class="card builder add-home-content" data-type="banner"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-image-rollover"></i>
                                        </div>
                                        <p class="title"><?php echo e(__('Banner ')); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="campaign"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-call-to-action"></i>
                                        </div>
                                        <p class="title"><?php echo e(__('Campaigns')); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="popular_category"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-time-line"></i>
                                        </div>
                                        <p class="title"><?php echo e(__('Popular Categories')); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="top_category"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-time-line"></i>
                                        </div>
                                        <p class="title"><?php echo e(__('Top Categories')); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="todays_deal"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-clock-o"></i>
                                        </div>
                                        <p class="title"><?php echo e(__("Today's Deal")); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="flash_deal"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-flash"></i>
                                        </div>
                                        <p class="title"><?php echo e(__("Flash Deal")); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="category_section"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-thumbnails-right"></i>
                                        </div>
                                        <p class="title"><?php echo e(__("Product Category")); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="best_selling_products"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-star-o"></i>
                                        </div>
                                        <p class="title"><?php echo e(__("Best Selling")); ?></p>
                                    </div>

                                    <?php if(addon_is_activated('video_shopping')): ?>
                                        <div class="card builder add-home-content" data-type="video_shopping"
                                             data-area="home-content">
                                            <div class="card-overlay">
                                                <a href="#"><i class="eicon-plus"></i></a>
                                            </div>
                                            <div class="icon">
                                                <i class="eicon-play"></i>
                                            </div>
                                            <p class="title"><?php echo e(__("Video Shopping")); ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <div class="card builder add-home-content" data-type="offer_ending_soon"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-countdown"></i>
                                        </div>
                                        <p class="title"><?php echo e(__("Offer Ending")); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="latest_product"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-products"></i>
                                        </div>
                                        <p class="title"><?php echo e(__("Latest Products")); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="latest_news"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-single-post"></i>
                                        </div>
                                        <p class="title"><?php echo e(__("Latest News")); ?></p>
                                    </div>

                                    <div class="card builder add-home-content" data-type="popular_brands"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-favorite"></i>
                                        </div>
                                        <p class="title"><?php echo e(__("Popular Brands")); ?></p>
                                    </div>
                                    <div class="card builder add-home-content" data-type="custom_products"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="bx bxl-product-hunt"></i>
                                        </div>
                                        <p class="title"><?php echo e(__('weekly_best_product')); ?></p>
                                    </div>
                                    <?php if(settingHelper('seller_system') == 1): ?>
                                        <div class="card builder add-home-content" data-type="top_sellers"
                                             data-area="home-content">
                                            <div class="card-overlay">
                                                <a href="#"><i class="eicon-plus"></i></a>
                                            </div>
                                            <div class="icon">
                                                <i class="eicon-cart"></i>
                                            </div>
                                            <p class="title"><?php echo e(__("Top Shops")); ?></p>
                                        </div>

                                        <div class="card builder add-home-content" data-type="featured_sellers"
                                             data-area="home-content">
                                            <div class="card-overlay">
                                                <a href="#"><i class="eicon-plus"></i></a>
                                            </div>
                                            <div class="icon">
                                                <i class="eicon-cart"></i>
                                            </div>
                                            <p class="title"><?php echo e(__("Featured Shops")); ?></p>
                                        </div>

                                        <div class="card builder add-home-content" data-type="best_sellers"
                                             data-area="home-content">
                                            <div class="card-overlay">
                                                <a href="#"><i class="eicon-plus"></i></a>
                                            </div>
                                            <div class="icon">
                                                <i class="eicon-cart"></i>
                                            </div>
                                            <p class="title"><?php echo e(__("Best Shops")); ?></p>
                                        </div>

                                        <div class="card builder add-home-content" data-type="express_sellers"
                                             data-area="home-content">
                                            <div class="card-overlay">
                                                <a href="#"><i class="eicon-plus"></i></a>
                                            </div>
                                            <div class="icon">
                                                <i class="eicon-cart"></i>
                                            </div>
                                            <p class="title"><?php echo e(__("Express Shops")); ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <div class="card builder add-home-content" data-type="download_section"
                                         data-area="home-content">
                                        <div class="card-overlay">
                                            <a href="#"><i class="eicon-plus"></i></a>
                                        </div>
                                        <div class="icon">
                                            <i class="eicon-download-kit"></i>
                                        </div>
                                        <p class="title"><?php echo e(__("App Download")); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4><?php echo e(__("Preferences")); ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mt-2">
                                    <label class="custom-switch">
                                        <input type="checkbox" value="1" name="show_subscription_section"
                                               <?php echo e(settingHelper('show_subscription_section') == 1 ? 'checked' :  ''); ?>

                                               class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo e(__('Subscription Section')); ?></span>
                                    </label>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="custom-switch">
                                        <input type="checkbox" value="1" name="show_blog_section"
                                               <?php echo e(settingHelper('show_blog_section') == 1 ? 'checked' :  ''); ?>

                                               class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo e(__('Article')); ?></span>
                                    </label>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="custom-switch">
                                        <input type="checkbox" value="1" name="show_service_info_section"
                                               <?php echo e(settingHelper('show_service_info_section') == 1 ? 'checked' :  ''); ?>

                                               class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo e(__('Benefit Section Under Slider')); ?></span>
                                    </label>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="custom-switch">
                                        <input type="checkbox" value="1" name="show_recent_viewed_products"
                                               <?php echo e(settingHelper('show_recent_viewed_products') == 1 ? 'checked' :  ''); ?>

                                               class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo e(__('Recent Viewed Products')); ?></span>
                                    </label>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="custom-switch">
                                        <input type="checkbox" value="1" name="show_categories_section"
                                               <?php echo e(settingHelper('show_categories_section') == 1 ? 'checked' :  ''); ?>

                                               class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo e(__('All Categories Section')); ?></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-button">
                        <button type="submit" name="status" class="btn btn-outline-primary"
                                tabindex="4">
                            <?php echo e(__('Update')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <input type="hidden" value="<?php echo e($content_count); ?>" id="content_number">
    <?php echo $__env->make('admin.common.selector-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/dropzone.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/eicon/css/elementor-icons.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page-script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/dropzone.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('admin/js/sortable.js')); ?>"></script>
    <script src="<?php echo e(static_asset('admin/js/jquery-sortable.js')); ?>"></script>
    <script src="<?php echo e(static_asset('admin/js/ajax-sortable-menu.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/ajax-div-load.js')); ?>"></script>
    <script src="<?php echo e(static_asset('admin/js/summernote-bs4.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/home-page.blade.php ENDPATH**/ ?>