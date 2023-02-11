<?php if($type == 'banner'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__('Banner')); ?></h4>
                </a>
                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <div class="card-body mobile_banner banner-<?php echo e($content_count); ?>">
                <div class="alert alert-light alert-has-icon p-0">
                    <div class="alert-icon pl-2"><i class="bx bx-bulb"></i></div>
                    <div class="alert-body">
                        <?php
                            $banner_contetns = @$contents ? $contents['banner'] : [];
                        ?>
                        <div class="form-text"><?php echo e(__('Recommended banner ratio 16:9')); ?></div>
                    </div>
                </div>
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="banner">
                <?php if(isset($contents)): ?>
                    <?php $__currentLoopData = $banner_contetns['thumbnail']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $thumbnail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="banner-item mb-2">
                            <div class="item row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="selected-media-box">
                                                    <div class="mt-2 gallery gallery-md d-flex">
                                                        <?php
                                                            $thumb = \App\Models\Media::find($thumbnail);
                                                        ?>
                                                        <?php if($thumb): ?>
                                                            <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                                 data-id="<?php echo e($thumb->id); ?>">
                                                                <?php if(@is_file_exists($thumb->image_variants['image_72x72'], $thumb->image_variants['storage'])): ?>
                                                                    <img src="<?php echo e(get_media($thumb->image_variants['image_72x72'], $thumb->image_variants['storage'])); ?>"
                                                                         alt="img-thumbnail"
                                                                         class="img-thumbnail logo-profile">
                                                                <?php else: ?>
                                                                    <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                         alt="img-thumbnail"
                                                                         class="img-thumbnail logo-profile">
                                                                <?php endif; ?>
                                                                <div class="image-remove">
                                                                    <a href="javascript:void(0)" class="remove"><i
                                                                                class="bx bx-x"></i></a>
                                                                </div>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="selected-media mr-2 mb-2 mt-3 ml-0">
                                                                <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                     data-default="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                     alt="brand-logo"
                                                                     class="img-thumbnail logo-profile">
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="input-group gallery-modal" id="btnSubmit" data-for="image"
                                                     data-selection="single"
                                                     data-target="#galleryModal" data-dismiss="modal">
                                                    <input type="hidden" name="banner_thumbnail_<?php echo e($content_count); ?>[]"
                                                           class="image-selected" value="<?php echo e($thumbnail); ?>">
                                                    <span class="form-control"><span
                                                                class="counter">
                                                    <?php echo e($thumbnail != '' ? substr_count($thumbnail, ',') + 1 : 0); ?>

                                                </span> <?php echo e(__('file chosen')); ?></span>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <?php echo e(__('Choose File')); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if(isset($mobile) && $mobile == 1): ?>
                                                    <div class="row mt-3">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="action_type"
                                                                       class="form-control-label"><?php echo e(__('Action Type')); ?></label>
                                                                <div class="custom-file">
                                                                    <?php
                                                                        $action_type = 'product';
                                                                    ?>
                                                                    <select class="form-control selectric action_type"
                                                                            data-count="<?php echo e($content_count); ?>"
                                                                            name="action_type_<?php echo e($content_count); ?>[]">
                                                                        <option value="product" <?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'product' ? 'selected' : ''); ?>><?php echo e(__('Product')); ?></option>
                                                                        <option value="category" <?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'category' ? 'selected' : ''); ?>><?php echo e(__('Category')); ?></option>
                                                                        <option value="brand" <?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'brand' ? 'selected' : ''); ?>><?php echo e(__('Brand')); ?></option>
                                                                        <?php if(settingHelper('seller_system') == 1): ?>
                                                                            <option value="seller" <?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'seller' ? 'selected' : ''); ?>><?php echo e(__('Seller')); ?></option>
                                                                        <?php endif; ?>
                                                                        <option value="blog" <?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'blog' ? 'selected' : ''); ?>><?php echo e(__('Blog')); ?></option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="productDiv" id="product_<?php echo e($content_count); ?>"
                                                                 style="<?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'product' ? '' : 'display:none'); ?>">
                                                                <div class="form-group">
                                                                    <label><?php echo e(__('Action To')); ?></label>
                                                                    <select class="product-by-ajax product-by-ajax form-control select2"
                                                                            id="product_id_<?php echo e($content_count); ?>"
                                                                            name="product_id_<?php echo e($content_count); ?>[<?php echo e($key); ?>]"
                                                                            aria-hidden="true">
                                                                        <?php if(arrayCheck('action_to',$banner_contetns) && arrayCheck($key,$banner_contetns['action_to'][$key])): ?>
                                                                            <?php
                                                                                $product = \App\Models\Product::find($banner_contetns['action_to'][$key][$key]);
                                                                            ?>
                                                                            <?php if($product): ?>
                                                                                <option value="<?php echo e($product->id); ?>"
                                                                                        selected><?php echo e($product->getTranslation('name',app()->getLocale())); ?></option>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="categoryDiv" id="category_<?php echo e($content_count); ?>"
                                                                 style="
                                                            <?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'category' ? '' : 'display:none'); ?>">
                                                                <div class="form-group">
                                                                    <label><?php echo e(__('Action To')); ?></label>
                                                                    <select class="filter-categories-by-ajax form-control"
                                                                            name="category_id_<?php echo e($content_count); ?>[<?php echo e($key); ?>]"
                                                                            aria-hidden="true"
                                                                            id="category_id_<?php echo e($content_count); ?>">
                                                                        <?php if(arrayCheck('action_to',$banner_contetns) && arrayCheck($key,$banner_contetns['action_to'][$key])): ?>
                                                                            <?php
                                                                                $category = \App\Models\Category::find($banner_contetns['action_to'][$key][$key]);
                                                                            ?>
                                                                            <?php if($category): ?>
                                                                                <option value="<?php echo e($category->id); ?>"
                                                                                        selected><?php echo e($category->getTranslation('title',app()->getLocale())); ?></option>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="blogDiv" id="blog_<?php echo e($content_count); ?>" style="
                                                            <?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'blog' ? '' : 'display:none'); ?>">
                                                                <div class="form-group">
                                                                    <label><?php echo e(__('Action To')); ?></label>
                                                                    <select class="filter-blogs-by-ajax form-control"
                                                                            name="blog_id_<?php echo e($content_count); ?>[<?php echo e($key); ?>]"
                                                                            aria-hidden="true" id="blog_id">
                                                                        <?php if(arrayCheck('action_to',$banner_contetns) && arrayCheck($key,$banner_contetns['action_to'][$key])): ?>
                                                                            <?php
                                                                                $blog = \App\Models\Blog::find($banner_contetns['action_to'][$key][$key]);
                                                                            ?>

                                                                            <?php if($blog): ?>
                                                                                <option value="<?php echo e($blog->id); ?>"
                                                                                        selected><?php echo e($blog->getTranslation('title',app()->getLocale())); ?></option>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="brandDiv" id="brand_<?php echo e($content_count); ?>" style="<?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'brand' ? '' : 'display:none'); ?>">
                                                                <div class="form-group">
                                                                    <label><?php echo e(__('Action To')); ?></label>
                                                                    <select class="form-control select2"
                                                                            name="brand_id_<?php echo e($content_count); ?>[<?php echo e($key); ?>]"
                                                                            id="brand_id_<?php echo e($content_count); ?>">
                                                                        <option value=""><?php echo e(__('Select Brand')); ?></option>
                                                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option
                                                                                    value="<?php echo e($brand->id); ?>" <?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'brand' && $brand->id == $banner_contetns['action_to'][$key][$key] ? 'selected' : ''); ?>><?php echo e($brand->getTranslation('title', App::getLocale())); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>

                                                                    <?php if($errors->has('brand')): ?>
                                                                        <div class="invalid-feedback">
                                                                            <p><?php echo e($errors->first('brand')); ?></p>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                            <?php if(settingHelper('seller_system') == 1): ?>
                                                                <div class="sellerDiv" id="seller_<?php echo e($content_count); ?>"
                                                                     style="<?php echo e(arrayCheck('action_type',$banner_contetns) && arrayCheck($key,$banner_contetns['action_type']) && $banner_contetns['action_type'][$key] == 'seller' ? '' : 'display:none'); ?>">
                                                                    <div class="form-group">
                                                                        <label><?php echo e(__('Action To')); ?></label>
                                                                        <select class="seller-by-ajax form-control select2"
                                                                                name="sl_<?php echo e($content_count); ?>[<?php echo e($key); ?>]"
                                                                                aria-hidden="true">
                                                                            <?php if(arrayCheck('action_to',$banner_contetns) && arrayCheck($key,$banner_contetns['action_to'][$key])): ?>
                                                                                <?php
                                                                                    $seller = \App\Models\SellerProfile::find($banner_contetns['action_to'][$key][$key]);
                                                                                ?>
                                                                                <?php if($seller): ?>
                                                                                    <option value="<?php echo e($seller->id); ?>"
                                                                                            selected><?php echo e($seller->shop_name); ?></option>
                                                                                <?php endif; ?>
                                                                            <?php endif; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <input type="text" class="form-control mt-2 mr-sm-2 menu-url-input"
                                                           id="link" name="banner_url_<?php echo e($content_count); ?>[]"
                                                           value="<?php echo e($banner_contetns['url'][$key] ? $banner_contetns['url'][$key] : '/'); ?>"
                                                           placeholder="<?php echo e(__('Link/Slug')); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-danger btn-circle mb-2 remove-menu-row"
                                            data-type="banner-image">
                                        <i class="bx bx-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php
                        $type         = 'banner-image';
                        $for_content  = $content_count;
                    ?>
                    <?php echo $__env->make('admin.store-front.home-page-contents', compact('type','content_count','for_content'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

            </div>
            <div class="row">
                <div class="col-md-6 ml-4 mb-2">
                    <a href="javaScript:void(0)"
                       class="btn btn-outline-secondary add-home-content <?php echo e(@$key >= 3 ? 'd-none' : ''); ?>"
                       data-type="banner-image" data-area="banner-<?php echo e($content_count); ?>"
                       data-content="<?php echo e($content_count); ?>"
                       class="btn btn-outline-primary"><i class="bx bx-plus"></i> <?php echo e(__('Add New')); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php elseif($type == 'banner-image'): ?>
    <div class="banner-item mb-2 content-<?php echo e($content_count); ?>">
        <div class="item row">
            <div class="col-md-10">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="selected-media-box">
                                <div class="mt-2 gallery gallery-md d-flex">
                                    <div class="selected-media mr-2 mb-2 mt-3 ml-0">
                                        <img
                                                src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                data-default="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                alt="brand-logo" class="img-thumbnail logo-profile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="input-group gallery-modal" id="btnSubmit" data-for="image"
                                 data-selection="single"
                                 data-target="#galleryModal" data-dismiss="modal">
                                <input type="hidden" name="banner_thumbnail_<?php echo e($for_content); ?>[]"
                                       class="image-selected">
                                <span class="form-control"><span
                                            class="counter">0</span> <?php echo e(__('file chosen')); ?></span>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <?php echo e(__('Choose File')); ?>

                                    </div>
                                </div>
                            </div>
                            <?php if(isset($mobile) && $mobile == 1): ?>
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="action_type"
                                                   class="form-control-label"><?php echo e(__('Action Type')); ?></label>
                                            <div class="custom-file">
                                                <?php
                                                    $action_type = 'product';
                                                ?>
                                                <select class="form-control selectric action_type"
                                                        data-count="<?php echo e($content_count); ?>"
                                                        name="action_type_<?php echo e($for_content); ?>[]">
                                                    <option value="product"><?php echo e(__('Product')); ?></option>
                                                    <option value="category"><?php echo e(__('Category')); ?></option>
                                                    <option value="brand"><?php echo e(__('Brand')); ?></option>
                                                    <?php if(!isset($shop_content)): ?>
                                                        <?php if(settingHelper('seller_system') == 1): ?>
                                                            <option value="seller"><?php echo e(__('Seller')); ?></option>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <option value="blog"><?php echo e(__('Blog')); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="productDiv" id="product_<?php echo e($content_count); ?>"
                                             style="<?php echo e(old('action_type') ? (old('action_type') == 'product' ? '' : 'display:none') : (isset($edit) ? ($edit->action_type == 'product' ? '': 'display:none') : '')); ?>">
                                            <div class="form-group">
                                                <label><?php echo e(__('Action To')); ?></label>
                                                <input type="hidden" name="for_mobile" value="for_mobile"/>
                                                <select class="product-by-ajax form-control select2"
                                                        id="product_id_<?php echo e($content_count); ?>"
                                                        name="product_id_<?php echo e($for_content); ?>[]" aria-hidden="true">
                                                    <option value=""><?php echo e(__('Product')); ?></option>
                                                </select>
                                                <?php if($errors->has('product_id')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('product_id')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="categoryDiv" id="category_<?php echo e($content_count); ?>" style="<?php echo e(old('action_type') ? (old('action_type') == 'category' ? '' : 'display:none')
                                                        : (isset($edit) ? ($edit->action_type == 'category' ? '': 'display:none') : 'display:none')); ?>">
                                            <div class="form-group">
                                                <label><?php echo e(__('Action To')); ?></label>
                                                <select class="filter-categories-by-ajax form-control select2"
                                                        name="category_id_<?php echo e($for_content); ?>[]" aria-hidden="true"
                                                        id="category_id_<?php echo e($content_count); ?>">
                                                    <option value=""><?php echo e(__('Category')); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="blogDiv" id="blog_<?php echo e($content_count); ?>" style="<?php echo e(old('action_type') ? (old('action_type') == 'blog' ? '' : 'display:none')
                                                        : (isset($edit) ? ($edit->action_type == 'blog' ? '': 'display:none') : 'display:none')); ?>">
                                            <div class="form-group">
                                                <label><?php echo e(__('Action To')); ?></label>
                                                <select class="filter-blogs-by-ajax form-control select2"
                                                        name="blog_id_<?php echo e($for_content); ?>[]"
                                                        aria-hidden="true" id="blog_id">
                                                    <option value=""><?php echo e(__('Blog')); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="brandDiv" id="brand_<?php echo e($content_count); ?>" style="<?php echo e(old('action_type') ? (old('action_type') == 'brand' ? '' : 'display:none')
                                                        : (isset($edit) ? ($edit->action_type == 'brand' ? '': 'display:none') : 'display:none')); ?>">
                                            <div class="form-group">
                                                <label><?php echo e(__('Action To')); ?></label>
                                                <select class="form-control select2"
                                                        name="brand_id_<?php echo e($for_content); ?>[]"
                                                        id="brand_id_<?php echo e($content_count); ?>">
                                                    <option value=""><?php echo e(__('Select Brand')); ?></option>
                                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                                value="<?php echo e($brand->id); ?>" <?php echo e($brand->id == old('brand') ? 'selected' : ''); ?>><?php echo e($brand->getTranslation('title', App::getLocale())); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>

                                                <?php if($errors->has('brand')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('brand')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if(settingHelper('seller_system') == 1): ?>
                                            <div class="sellerDiv" id="seller_<?php echo e($content_count); ?>" style="<?php echo e(old('action_type') ? (old('action_type') == 'seller' ? '' : 'display:none')
                                                            : (isset($edit) ? ($edit->action_type == 'seller' ? '': 'display:none') : 'display:none')); ?>">
                                                <div class="form-group">
                                                    <label><?php echo e(__('Action To')); ?></label>
                                                    <select class="seller-by-ajax form-control select2"
                                                            name="sl_<?php echo e($for_content); ?>[]"
                                                            aria-hidden="true">
                                                        <option selected value=""> <?php echo e(__('seller')); ?> </option>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php else: ?>
                                <input type="text" class="form-control mt-2 mr-sm-2 menu-url-input"
                                       id="link" name="banner_url_<?php echo e($for_content); ?>[]" value="<?php echo e('/'); ?>"
                                       placeholder="<?php echo e(__('Link/Slug')); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-outline-danger btn-circle mb-2 remove-menu-row"
                        data-type="banner-image">
                    <i class="bx bx-trash"></i></button>
            </div>
        </div>
    </div>
<?php elseif($type == 'campaign'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__('Campaigns')); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <div class="card-body campaign-<?php echo e($content_count); ?>">
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="campaign">
                <select class="form-control select2" name="campaign_<?php echo e($content_count); ?>[]" required multiple>
                    <option value="" disabled><?php echo e(__('Select Campaigns')); ?></option>
                    <?php
                        $date = date('Y-m-d h:i:s');
                        $campaigns = \App\Models\Campaign::latest()->where('status', 1)->where('start_date','<=',now())->where('end_date','>=',now())->get();
                    ?>
                    <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                                value="<?php echo e($campaign->id); ?>" <?php echo e(@$contents ? (in_array($campaign->id, $contents['campaign']) ? 'selected' : '') : ''); ?>><?php echo e($campaign->getTranslation('title', \App::getLocale())); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>
<?php elseif($type == 'popular_category'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__('Popular Categories')); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <div class="card-body campaign-<?php echo e($content_count); ?>">
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="popular_category">
                <select class="form-control select2 lang" name="popular_category_<?php echo e($content_count); ?>[]" multiple
                        required>
                    <option value=""><?php echo e(__('Select Category')); ?></option>
                    <?php
                        $categories = \App\Models\Category::with('childCategories.categories')->where('parent_id', null)->where('status',1)->get();
                    ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                                value="<?php echo e($category->id); ?>" <?php echo e(@$contents ? (in_array($category->id, $contents['popular_category']) ? 'selected' : '') : ''); ?>><?php echo e($category->getTranslation('title', \App::getLocale())); ?></option>
                        <?php $__currentLoopData = $category->childCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('admin.products.categories.child-categories', ['child_category' => $childCategory, 'parent' => @$contents ? @$contents['popular_category'] : array()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>
<?php elseif($type == 'top_category'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__('Top Categories')); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <div class="card-body campaign-<?php echo e($content_count); ?>">
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="top_category">
                <select class="form-control select2 lang" name="top_category_<?php echo e($content_count); ?>[]" multiple required>
                    <option value=""><?php echo e(__('Select Category')); ?></option>
                    <?php
                        $categories = \App\Models\Category::with('childCategories.categories')->where('parent_id', null)->where('status',1)->get();
                    ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e(@$contents ? (in_array($category->id, $contents['top_category']) ? 'selected' : '') : ''); ?>><?php echo e($category->getTranslation('title', \App::getLocale())); ?></option>
                        <?php $__currentLoopData = $category->childCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('admin.products.categories.child-categories', ['child_category' => $childCategory, 'parent' => @$contents ? @$contents['top_category'] : array()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>
<?php elseif($type == 'todays_deal'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between border-0">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__("Today's Deal")); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
            <input type="hidden" name="contents[]" value="todays_deal">
            <input type="hidden" name="todays_deal_<?php echo e($content_count); ?>" value="<?php echo e($content_count); ?>">
        </div>
    </div>
<?php elseif($type == 'latest_product'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between border-0">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__("Latest Products")); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
            <input type="hidden" name="contents[]" value="latest_product">
            <input type="hidden" name="latest_product_<?php echo e($content_count); ?>" value="<?php echo e($content_count); ?>">
        </div>
    </div>
<?php elseif($type == 'flash_deal'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between border-0">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__("Flash Deal")); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
            <input type="hidden" name="contents[]" value="flash_deal">
            <input type="hidden" name="flash_deal_<?php echo e($content_count); ?>" value="<?php echo e($content_count); ?>">
        </div>
    </div>
<?php elseif($type == 'best_selling_products'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between border-0">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__("Best Selling Products")); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
            <input type="hidden" name="contents[]" value="best_selling_products">
            <input type="hidden" name="best_selling_products_<?php echo e($content_count); ?>[]" value="<?php echo e($content_count); ?>">
        </div>
    </div>
<?php elseif($type == 'category_section'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__("Category Sections")); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <div class="card-body campaign-<?php echo e($content_count); ?>">
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="category_section">
                <input type="hidden" name="category_section_<?php echo e($content_count); ?>[]" value="<?php echo e($content_count); ?>">
                <div class="form-group">
                    <select class="form-control select2 lang" name="category_section_<?php echo e($content_count); ?>_category"
                            required>
                        <option value=""><?php echo e(__('Select Category')); ?></option>
                        <?php
                            $categories = \App\Models\Category::with('childCategories.categories')->where('parent_id', null)->where('status',1)->get();
                        ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php echo e(@$contents ? ($category->id ==  $contents['category_section']['category'] ? 'selected' : '') : ''); ?>>
                                <?php echo e($category->getTranslation('title', \App::getLocale())); ?>

                            </option>
                            <?php $__currentLoopData = $category->childCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('admin.products.categories.child-categories', ['child_category' => $childCategory, 'parent' => @$contents ? $contents['category_section']['category'] : ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="banner-item mb-2">
                    <div class="item row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="selected-media-box">
                                            <div class="mt-2 gallery gallery-md d-flex">
                                                <?php
                                                    $thumb = '';
                                                        if (isset($contents)):
                                                            $thumb = \App\Models\Media::find($contents['category_section']['banner']);
                                                        endif;
                                                ?>
                                                <?php if($thumb): ?>
                                                    <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                         data-id="<?php echo e($thumb->id); ?>">
                                                        <?php if(@is_file_exists($thumb->image_variants['image_72x72'], $thumb->image_variants['storage'])): ?>
                                                            <img src="<?php echo e(get_media($thumb->image_variants['image_72x72'], $thumb->image_variants['storage'])); ?>"
                                                                 alt="img-thumbnail"
                                                                 class="img-thumbnail logo-profile">
                                                        <?php else: ?>
                                                            <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                 alt="img-thumbnail"
                                                                 class="img-thumbnail logo-profile">
                                                        <?php endif; ?>
                                                        <div class="image-remove">
                                                            <a href="javascript:void(0)" class="remove"><i
                                                                        class="bx bx-x"></i></a>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="selected-media mr-2 mb-2 mt-3 ml-0">
                                                        <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                             data-default="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                             alt="brand-logo" class="img-thumbnail logo-profile">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="banner"><?php echo e(__('Banner')); ?> (405 * 745)</label>
                                        <div class="input-group gallery-modal" id="btnSubmit" data-for="image"
                                             data-selection="single"
                                             data-target="#galleryModal" data-dismiss="modal">
                                            <input type="hidden" name="category_section_<?php echo e($content_count); ?>_banner"
                                                   id="banner"
                                                   class="image-selected"
                                                   value="<?php echo e(@$contents ? $contents['category_section']['banner'] : ''); ?>">
                                            <span class="form-control"><span
                                                        class="counter">
                                                    <?php echo e(@$contents['category_section']['banner'] != '' ? substr_count($contents['category_section']['banner'], ',') + 1 : 0); ?>

                                                </span> <?php echo e(__('file chosen')); ?></span>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <?php echo e(__('Choose File')); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <label for="banner_url" class="mt-2"><?php echo e(__('Banner URL')); ?></label>
                                        <input type="text" class="form-control mr-sm-2 menu-url-input"
                                               id="banner_url" name="category_section_<?php echo e($content_count); ?>_banner_url"
                                               value="<?php echo e(@$contents ? $contents['category_section']['banner_url'] : '/'); ?>"
                                               placeholder="<?php echo e(__('Link/Slug')); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php elseif($type == 'offer_ending_soon'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between border-0">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__("Offer Ending Soon")); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <div class="card-body campaign-<?php echo e($content_count); ?>">
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="offer_ending_soon">
                <input type="hidden" name="offer_ending_soon_<?php echo e($content_count); ?>[]" value="<?php echo e($content_count); ?>">
                <div class="banner-item mb-2">
                    <div class="item row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="selected-media-box">
                                            <div class="mt-2 gallery gallery-md d-flex">
                                                <?php
                                                    $thumb = '';
                                                        if (isset($contents['offer_ending_soon']['banner'])):
                                                            $thumb = \App\Models\Media::find($contents['offer_ending_soon']['banner']);
                                                        endif;
                                                ?>
                                                <?php if($thumb): ?>
                                                    <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                         data-id="<?php echo e($thumb->id); ?>">
                                                        <?php if(@is_file_exists($thumb->image_variants['image_72x72'], $thumb->image_variants['storage'])): ?>
                                                            <img src="<?php echo e(get_media($thumb->image_variants['image_72x72'], $thumb->image_variants['storage'])); ?>"
                                                                 alt="img-thumbnail"
                                                                 class="img-thumbnail logo-profile">
                                                        <?php else: ?>
                                                            <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                 alt="img-thumbnail"
                                                                 class="img-thumbnail logo-profile">
                                                        <?php endif; ?>
                                                        <div class="image-remove">
                                                            <a href="javascript:void(0)" class="remove"><i
                                                                        class="bx bx-x"></i></a>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="selected-media mr-2 mb-2 mt-3 ml-0">
                                                        <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                             data-default="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                             alt="brand-logo" class="img-thumbnail logo-profile">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="banner"><?php echo e(__('Banner')); ?> (405 * 745)</label>
                                        <div class="input-group gallery-modal" id="btnSubmit" data-for="image"
                                             data-selection="single"
                                             data-target="#galleryModal" data-dismiss="modal">
                                            <input type="hidden" name="offer_ending_soon_<?php echo e($content_count); ?>_banner"
                                                   id="banner"
                                                   class="image-selected"
                                                   value="<?php echo e(@$contents ? @$contents['offer_ending_soon']['banner'] : ''); ?>">
                                            <span class="form-control"><span
                                                        class="counter">
                                                    <?php echo e(@$contents['offer_ending_soon']['banner'] != '' ? substr_count($contents['offer_ending_soon']['banner'], ',') + 1 : 0); ?>

                                                </span> <?php echo e(__('file chosen')); ?></span>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <?php echo e(__('Choose File')); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <label for="banner_url" class="mt-2"><?php echo e(__('Banner URL')); ?></label>
                                        <input type="text" class="form-control mr-sm-2 menu-url-input"
                                               id="banner_url" name="offer_ending_soon_<?php echo e($content_count); ?>_banner_url"
                                               value="<?php echo e(@$contents ? @$contents['offer_ending_soon']['banner_url'] : '/'); ?>"
                                               placeholder="<?php echo e(__('Link/Slug')); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php elseif($type == 'latest_news'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between border-0">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__("Latest News")); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
            <input type="hidden" name="contents[]" value="latest_news">
            <input type="hidden" name="latest_news_<?php echo e($content_count); ?>[]" value="<?php echo e($content_count); ?>">
        </div>
    </div>
<?php elseif($type == 'popular_brands'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between border-0">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__("Popular Brands")); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
            <input type="hidden" name="contents[]" value="popular_brands">
            <input type="hidden" name="popular_brands_<?php echo e($content_count); ?>[]" value="<?php echo e($content_count); ?>">
        </div>
    </div>
<?php elseif($type == 'top_sellers'): ?>
    <?php if(settingHelper('seller_system') == 1): ?>
        <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
            <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
                <div class="card-header d-flex justify-content-between border-0">
                    <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                        <h4><?php echo e(__("Top Shops")); ?></h4>
                    </a>

                    <button type="button" onclick="$(this).parent().parent().remove()"
                            class="btn remove-menu-row">
                        <i class="bx bx-trash"></i></button>
                </div>
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="top_sellers">
                <input type="hidden" name="top_sellers_<?php echo e($content_count); ?>[]" value="<?php echo e($content_count); ?>">
            </div>
        </div>
    <?php endif; ?>
<?php elseif($type == 'featured_sellers'): ?>
    <?php if(settingHelper('seller_system') == 1): ?>
        <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
            <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
                <div class="card-header d-flex justify-content-between">
                    <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                        <h4><?php echo e(__('Featured Shops')); ?></h4>
                    </a>

                    <button type="button" onclick="$(this).parent().parent().remove()"
                            class="btn remove-menu-row">
                        <i class="bx bx-trash"></i></button>
                </div>
                <div class="card-body campaign-<?php echo e($content_count); ?>">
                    <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                    <input type="hidden" name="contents[]" value="featured_sellers">
                    <div class="limit-2-custom-message">
                        <select class="select2" style="width: 100%;" name="featured_sellers_<?php echo e($content_count); ?>[]"
                                multiple required>
                            <?php
                                $sellers = \App\Models\User::with('sellerProfile')->whereHas('sellerProfile',function ($query){
                                    $query->Available();
                                })->where('user_type', 'seller')->get();
                            ?>
                            <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($seller->id); ?>" <?php echo e(@$contents ? (in_array($seller->id, $contents['featured_sellers']) ? 'selected' : '') : ''); ?>>
                                    <?php echo e(@$seller->sellerProfile->shop_name.' ('.$seller->first_name.' '.$seller->last_name.')'); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php elseif($type == 'express_sellers'): ?>
    <?php if(settingHelper('seller_system') == 1): ?>
        <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
            <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
                <div class="card-header d-flex justify-content-between">
                    <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                        <h4><?php echo e(__('Express Shops')); ?></h4>
                    </a>

                    <button type="button" onclick="$(this).parent().parent().remove()"
                            class="btn remove-menu-row">
                        <i class="bx bx-trash"></i></button>
                </div>
                <div class="card-body campaign-<?php echo e($content_count); ?>">
                    <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                    <input type="hidden" name="contents[]" value="express_sellers">
                    <div class="limit-4-custom-message">
                        <select class="select2" style="width: 100%;" name="express_sellers_<?php echo e($content_count); ?>[]"
                                multiple required>
                            <?php
                                $sellers = \App\Models\User::with('sellerProfile')->whereHas('sellerProfile',function ($query){
                                    $query->Available();
                                })->where('user_type', 'seller')->get();
                            ?>
                            <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($seller->id); ?>" <?php echo e(@$contents ? (in_array($seller->id, $contents['express_sellers']) ? 'selected' : '') : ''); ?>>
                                    <?php echo e(@$seller->sellerProfile->shop_name.' ('.$seller->first_name.' '.$seller->last_name.')'); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php elseif($type == 'best_sellers'): ?>
    <?php if(settingHelper('seller_system') == 1): ?>
        <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
            <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
                <div class="card-header d-flex justify-content-between border-0">
                    <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                        <h4><?php echo e(__("Best Shops")); ?></h4>
                    </a>

                    <button type="button" onclick="$(this).parent().parent().remove()"
                            class="btn remove-menu-row">
                        <i class="bx bx-trash"></i></button>
                </div>
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="best_sellers">
                <input type="hidden" name="best_sellers_<?php echo e($content_count); ?>[]" value="<?php echo e($content_count); ?>">
            </div>
        </div>
    <?php endif; ?>
<?php elseif($type == 'download_section'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between border-0">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__("App Download Section")); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>
            <div class="card-body download_section-<?php echo e($content_count); ?>">
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="download_section">
                <input type="hidden" name="download_section_<?php echo e($content_count); ?>[]" value="<?php echo e($content_count); ?>">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="selected-media-box">
                                        <div class="mt-2 gallery gallery-md d-flex">
                                            <?php
                                                $thumb = '';
                                                    if (isset($contents)):
                                                        $thumb = \App\Models\Media::find($contents['download_section']['banner']);
                                                    endif;
                                            ?>
                                            <?php if($thumb): ?>
                                                <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                     data-id="<?php echo e($thumb->id); ?>">
                                                    <?php if(@is_file_exists($thumb->image_variants['image_72x72'], $thumb->image_variants['storage'])): ?>
                                                        <img src="<?php echo e(get_media($thumb->image_variants['image_72x72'], $thumb->image_variants['storage'])); ?>"
                                                             alt="img-thumbnail"
                                                             class="img-thumbnail logo-profile">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                             alt="img-thumbnail"
                                                             class="img-thumbnail logo-profile">
                                                    <?php endif; ?>
                                                    <div class="image-remove">
                                                        <a href="javascript:void(0)" class="remove"><i
                                                                    class="bx bx-x"></i></a>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="selected-media mr-2 mb-2 mt-3 ml-0">
                                                    <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                         data-default="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                         alt="brand-logo" class="img-thumbnail logo-profile">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label for="banner"><?php echo e(__('Banner')); ?> (405 * 745)</label>
                                    <div class="input-group gallery-modal" id="btnSubmit" data-for="image"
                                         data-selection="single"
                                         data-target="#galleryModal" data-dismiss="modal">
                                        <input type="hidden" name="download_section_<?php echo e($content_count); ?>_banner"
                                               id="banner"
                                               class="image-selected"
                                               value="<?php echo e(@$contents ? $contents['download_section']['banner'] : ''); ?>">
                                        <span class="form-control"><span
                                                    class="counter">
                                                    <?php echo e(@$contents['download_section']['banner'] != '' ? substr_count($contents['download_section']['banner'], ',') + 1 : 0); ?>

                                                </span> <?php echo e(__('file chosen')); ?></span>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <?php echo e(__('Choose File')); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text"><?php echo e(__('Text')); ?> *</label>
                        <input type="text" name="download_section_<?php echo e($content_count); ?>_text" id="text" required
                               value="<?php echo e(@$contents ? $contents['download_section']['text'] : ''); ?>"
                               class="form-control" placeholder="<?php echo e(__('Text')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="sub_text"><?php echo e(__('Sub-Text')); ?></label>
                        <textarea name="download_section_<?php echo e($content_count); ?>_sub_text" id="sub_text"
                                  value="<?php echo e(old('sub_text')); ?>"
                                  class="form-control"><?php echo e(@$contents ? $contents['download_section']['sub_text'] : ''); ?></textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php elseif($type == 'video_shopping'): ?>
    <?php if(addon_is_activated('video_shopping')): ?>
        <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
            <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
                <div class="card-header d-flex justify-content-between border-0">
                    <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                        <h4><?php echo e(__("Video Shopping")); ?></h4>
                    </a>

                    <button type="button" onclick="$(this).parent().parent().remove()"
                            class="btn remove-menu-row">
                        <i class="bx bx-trash"></i></button>
                </div>
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="video_shopping">
                <input type="hidden" name="video_shopping_<?php echo e($content_count); ?>[]" value="<?php echo e($content_count); ?>">
            </div>
        </div>
    <?php endif; ?>

<?php elseif($type == 'custom_products'): ?>
    <div class="drag-brop-menu content-<?php echo e($content_count); ?>">
        <div class="menu-item card" data-id="<?php echo e($content_count); ?>">
            <div class="card-header d-flex justify-content-between">
                <a href="javaScript:void(0)" class="d-flex"><i class="bx bx-menu move"></i>
                    <h4><?php echo e(__('weekly_best_products')); ?></h4>
                </a>

                <button type="button" onclick="$(this).parent().parent().remove()"
                        class="btn remove-menu-row">
                    <i class="bx bx-trash"></i></button>
            </div>

            <div class="card-body campaign-<?php echo e($content_count); ?>">
                <input type="hidden" name="content_numbers[]" value="<?php echo e($content_count); ?>">
                <input type="hidden" name="contents[]" value="custom_products">
                <select class="product-by-ajax product-by-ajax form-control select2"
                        id="custom_products_<?php echo e($content_count); ?>" multiple
                        name="custom_products_<?php echo e($content_count); ?>[]"
                        aria-hidden="true">
                    <?php if(@arrayCheck('custom_products', $contents)): ?>
                        <?php
                            $custom_products = \App\Models\Product::whereIn('id', $contents['custom_products'])->get();
                        ?>
                        <?php $__currentLoopData = $custom_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->id); ?>" selected><?php echo e($product->getTranslation('name',app()->getLocale())); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/home-page-contents.blade.php ENDPATH**/ ?>