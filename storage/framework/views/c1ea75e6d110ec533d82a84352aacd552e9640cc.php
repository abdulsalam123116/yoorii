
<?php
    $route = isset($clone) ? route('admin.product.clone') : route('admin.product.update');
    $route_data_form = isset($clone) ? route('get-variants') : route('get-variants-edit');
    $title = isset($clone) ? __('Clone') : __('Update');
    $button_name = isset($clone) ? __('Clone') : __('Update');

?>
<?php
    $title1 = '';
    if($product_language->product->is_digital == 1):
        $title1 =  __('Digital Product');
        $is_digital = 1;
    elseif($product_language->product->is_catalog == 1):
        $title1 =  __('Catalog Product');
        $is_catalog =  1;
    elseif($product_language->product->is_classified == 1):
       $title1 = __('Classified Product');
       $is_classified = 1;
    else:
       $title1 = __('Product');
    endif;
?>
<?php $__env->startSection('title'); ?>
    <?php echo e($title .' '. $title1); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('product'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('product_active'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title">
                        <?php echo e($title1); ?>


                    </h2>
                </div>
                <div class="buttons add-button">
                    <a href="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>"
                       class="btn btn-outline-primary"><i class='bx bx-arrow-back'></i><?php echo e(__('Back')); ?></a>
                </div>
            </div>
            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 middle">
                <div class="mb-3 bg-white px-4 py-2">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link bar active <?php echo e(has_key(['name','category','brand','unit','minimum_order_quantity','barcode','tags','slug','is_digital','product_file','external_link'],$errors) ? 'error' : ''); ?>"
                               id="product-info-tab" data-toggle="tab" href="#product-info" role="tab"
                               aria-controls="home"
                               aria-selected="true"><?php echo e(__('Product Information')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bar <?php echo e(has_key(['thumbnail','images','video_provider','video_url'],$errors) ? 'error' : ''); ?>"
                               id="images-and-videos-tab" data-toggle="tab" href="#images-and-videos" role="tab"
                               aria-controls="home"
                               aria-selected="true"><?php echo e(__('Images & Videos')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bar <?php echo e(has_key(['price','special_discount_type','special_discount','special_discount_period','vat_taxes','has_variant','low_stock_to_notify','stock_visibility',
                                                    'sku','current_stock','colors','variant_sku.*'],$errors) ? 'error' : ''); ?>"
                               id="fast-sms-tab" data-toggle="tab" href="#price-and-stock" role="tab"
                               aria-controls="contact"
                               aria-selected="false"><?php echo e(__('Product Price & Stock')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bar <?php echo e(has_key(['short_description','description','pdf_specification'],$errors) ? 'error' : ''); ?>"
                               id="description-and-specification-tab" data-toggle="tab"
                               href="#description-and-specification" role="tab"
                               aria-controls="contact"
                               aria-selected="false"><?php echo e(__('Description & Specification')); ?></a>
                        </li>
                        <?php if(!isset($is_digital) && !isset($is_catalog) && !isset($is_classified)): ?>
                            <li class="nav-item">
                                <a class="nav-link bar shipping-days  <?php echo e(has_key(['shipping_type','shipping_fee','shipping_fee_depend_on_quantity','cash_on_delivery','estimated_shipping_days'],$errors) ? 'error' : ''); ?> }}"
                                   id="shipping-tab" data-toggle="tab" href="#shipping" role="tab"
                                   aria-controls="profile"
                                   aria-selected="false"><?php echo e(__('Shipping Info')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(!isset($is_catalog) && !isset($is_classified)): ?>
                            <li class="nav-item">
                                <a class="nav-link bar <?php echo e(has_key(['campaign','campaign_discount','campaign_discount_type','is_refundable','is_featured','todays_deal'],$errors) ? 'error' : ''); ?>"
                                   id="others-tab" data-toggle="tab" href="#others"
                                   role="tab" aria-controls="contact"
                                   aria-selected="false"><?php echo e(__('Others')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(isset($is_classified)): ?>
                            <li class="nav-item">
                                <a class="nav-link bar <?php echo e(has_key(['contact_name','email','phone_no','address','others'],$errors) ? 'error' : ''); ?>"
                                   id="contact-details-tab" data-toggle="tab" href="#contact-details" role="tab"
                                   aria-controls="contact"
                                   aria-selected="false"><?php echo e(__('Contact Details')); ?></a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link bar <?php echo e(has_key(['meta_title','meta_description','meta_image','meta_keywords'],$errors) ? 'error' : ''); ?>"
                               id="seo-tab" data-toggle="tab" href="#seo" role="tab"
                               aria-controls="contact"
                               aria-selected="false"><?php echo e(__('SEO')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php if(!isset($clone)): ?>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 middle">
                    <form class="" id="lang">
                        <div class="form-group">
                            <label for="name"><?php echo e(__('Language')); ?></label>
                            <select class="form-control selectric lang" name="lang">
                                <option value=""><?php echo e(__('Select Language')); ?></option>
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                            value="<?php echo e($language->locale); ?>" <?php echo e(($lang != '' ? ($language->locale == $lang ? 'selected' : '') : ($language->locale == 'en' ? 'selected' : ''))); ?>><?php echo e($language->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <?php if($errors->has('lang')): ?>
                                <div class="invalid-feedback">
                                    <p><?php echo e($errors->first('lang')); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            <?php endif; ?>

            <form action="<?php echo e($route); ?>" method="post"
                  enctype="multipart/form-data" data-form="<?php echo e($route_data_form); ?>" id="variant">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-9 middle">
                        <div class="tab-content no-padding" id="myTabContent2">
                            <div class="tab-pane fade show active" id="product-info" role="tabpanel"
                                 aria-labelledby="product-info-tab">
                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('Product Information')); ?></h4>
                                    </div>
                                    <?php if($product_language->product->is_catalog == 1): ?>
                                        <div class="invalid-feedback text-info pl-4">
                                            <?php echo e(__("N.B: It can't be added to cart only details will be shown.")); ?>

                                        </div>
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name"><?php echo e(__('Product Name')); ?> *</label>
                                            <input type="hidden"
                                                   value="<?php echo e(old('r') !='' ? old('r') : (@$r ? $r : url()->previous() )); ?>"
                                                   name="r">
                                            <input type="text" class="form-control" name="name" id="name"
                                                   value="<?php echo e(old('name') ? old('name') : ($product_language ? $product_language->name : '')); ?>"
                                                   placeholder="<?php echo e(__('Product Name')); ?>">
                                            <?php if($errors->has('name')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('name')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="category"><?php echo e(__('Category')); ?> *</label>
                                                    <select class="form-control select2" name="category" id="category">
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                    value="<?php echo e($category->id); ?>" <?php echo e(old('category') == $category->id ? 'selected' : ($product_language->product->category_id == $category->id ? 'selected' : '')); ?>><?php echo e($category->getTranslation('title', App::getLocale())); ?></option>
                                                            <?php $__currentLoopData = $category->childCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo $__env->make('admin.products.categories.child-categories', ['child_category' => $childCategory , 'parent' => old('category') ? old('category') : $product_language->product->category_id,'product' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>

                                                    <?php if($errors->has('category')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('category')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="brand"><?php echo e(__('Brand')); ?></label>
                                                    <?php if(!isset($clone)): ?>
                                                        <input type="hidden"
                                                               value="<?php echo e($product_language->translation_null == 'not-found' ? '' : $product_language->id); ?>"
                                                               name="product_lang_id">
                                                        <input type="hidden" value="<?php echo e($lang); ?>" name="lang">
                                                        <input type="hidden" name="id"
                                                               value="<?php echo e($product_language->product_id); ?>">
                                                    <?php endif; ?>
                                                    <select class="form-control select2" name="brand" id="brand">
                                                        <option value=""><?php echo e(__('Select Brand')); ?></option>
                                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                    value="<?php echo e($brand->id); ?>" <?php echo e($brand->id == old('brand') ? 'selected' : ($product_language->product->brand_id == $brand->id ? 'selected' : '')); ?>><?php echo e($brand->getTranslation('title', App::getLocale())); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>

                                                    <?php if($errors->has('brand')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('brand')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="unit"><?php echo e(__('Unit')); ?> *</label>
                                                    <input type="text" name="unit" id="unit"
                                                           value="<?php echo e(old('unit') ? old('unit') : ($product_language ? $product_language->unit : '')); ?>"
                                                           class="form-control"
                                                           placeholder="Unit ( e.g kg. pc. etc )">
                                                    <?php if($errors->has('unit')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('unit')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="minimum_order_quantity"><?php echo e(__('Min. Order Quantity')); ?>

                                                        *</label>
                                                    <input type="number" name="minimum_order_quantity"
                                                           id="minimum_order_quantity" class="form-control"
                                                           value="<?php echo e(old('minimum_order_quantity') ? old('minimum_order_quantity') : $product_language->product->minimum_order_quantity); ?>"
                                                           placeholder="<?php echo e(__('Enter minimum order quantity')); ?>"
                                                           min="1">
                                                    <?php if($errors->has('minimum_order_quantity')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('minimum_order_quantity')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="maximum_order_quantity"><?php echo e(__('Max. Order Quantity')); ?>

                                                        *</label>
                                                    <input type="number" name="maximum_order_quantity"
                                                           id="maximum_order_quantity" class="form-control"
                                                           value="<?php echo e(old('maximum_order_quantity') ? old('maximum_order_quantity') : $product_language->product->maximum_order_quantity); ?>"
                                                           placeholder="<?php echo e(__('Enter maximum order quantity')); ?>"
                                                           min="0">
                                                    <?php if($errors->has('maximum_order_quantity')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('maximum_order_quantity')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="barcode"><?php echo e(__('Barcode')); ?></label>
                                            <div class="input-group">
                                                <input type="text" name="barcode" id="barcode"
                                                       value="<?php echo e(old('barcode') ? old('barcode') : $product_language->product->barcode); ?>"
                                                       class="form-control"
                                                       placeholder="<?php echo e(__('Enter product barcode')); ?>">
                                                <div class="input-group-append barcode">
                                                    <div class="input-group-text">
                                                        <i class="bx bx-refresh"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if($errors->has('barcode')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('barcode')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tags"><?php echo e(__('Tags')); ?></label>
                                            <input type="text" name="tags" id="tags" class="form-control inputtags"
                                                   value="<?php echo e(old('tags') ? old('tags') : $product_language->tags); ?>"
                                                   placeholder="<?php echo e(__('Write & hit enter')); ?>">
                                            <?php if($errors->has('tags')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('tags')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="slug"><?php echo e(__('Slug')); ?></label>
                                            <input type="text" name="slug" id="slug" class="form-control "
                                                   value="<?php echo e(old('slug') ? old('slug') : (isset($clone) ? '' : ($product_language ? $product_language->product->slug : ''))); ?>">
                                            <?php if($errors->has('slug')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('slug')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(!isset($is_digital) && !isset($is_catalog) && !isset($is_classified)): ?>
                                            <div class="form-group row mt-2">
                                                <label class="col-md-5 col-from-label"><?php echo e(__('Digital')); ?></label>
                                                <div class="col-md-7">
                                                    <label class="custom-switch">
                                                        <input type="checkbox" value="1" name="is_digital"
                                                               <?php echo e(old('is_digital') == 1 ? 'checked' : ($product_language->product->is_digital == 1 ? 'checked' : '')); ?>

                                                               class="custom-switch-input digital-product">
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                                class="custom-switch-description"><?php echo e(__("The product won't be shipped")); ?></span>
                                                    </label>
                                                    <?php if($errors->has('is_digital')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('is_digital')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php elseif(isset($is_digital)): ?>
                                            <input type="hidden" name="is_digital" value="1">
                                        <?php endif; ?>
                                        <div class="digital-product-div <?php echo e($product_language->product->is_digital == 1 || old('is_digital') == 1 ? '' : 'd-none'); ?>">
                                            <div class="section-title mt-0"><?php echo e(__('Product File')); ?></div>
                                            <div class="form-group">
                                                <label for="logo"><?php echo e(__('Product File')); ?></label>
                                                <div class="form-group">
                                                    <div class="input-group gallery-modal" id="btnSubmit" data-for="all"
                                                         data-selection="single" data-variant="1"
                                                         data-target="#galleryModal" data-dismiss="modal">
                                                        <input type="hidden" name="product_file"
                                                               value="<?php echo e(old('product_file') !='' ? old('product_file') : $product_language->product->product_file_id); ?>"
                                                               class="image-selected">
                                                        <span class="form-control"><span
                                                                    class="counter"><?php echo e(old('product_file') != '' ? substr_count(old('product_file'), ',') + 1  : ($product_language->product->product_file_id != '' ? substr_count($product_language->product->product_file_id, ',') + 1 : 0)); ?></span> <?php echo e(__('file chosen')); ?></span>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <?php echo e(__('Choose File')); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="selected-media-box">
                                                        <div class="mt-2 gallery gallery-md d-flex">
                                                            <?php
                                                                $product_file = old('product_file') ? old('product_file') : $product_language->product->product_file_id;
                                                                $media = \App\Models\Media::find($product_file);
                                                            ?>
                                                            <?php if($media): ?>
                                                                <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                                     data-id="<?php echo e($product_language->product->product_file_id); ?>">
                                                                    <img
                                                                            src="<?php echo e(static_asset('images/default/default-'.$media->type.'-72x72.png')); ?>"
                                                                            alt="default-<?php echo e($media->type); ?>"
                                                                            class="img-thumbnail logo-profile">
                                                                    <div class="image-remove">
                                                                        <a href="javascript:void(0)" class="remove"><i
                                                                                    class="bx bx-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if(isset($is_catalog)): ?>
                                            <input type="hidden" name="is_catalog" value="1">
                                            <div class="form-group mt-2 external-link <?php echo e(old('is_catalog') ? (old('is_catalog') == 0 ? 'd-none' : "") :($product_language->product->is_catalog == 0 ? 'd-none' : "")); ?>">
                                                <label for="external_link"><?php echo e(__('External Link')); ?></label>
                                                <input type="text" name="external_link"
                                                       value="<?php echo e(old('external_link') ? old('external_link') :$product_language->product->external_link); ?>"
                                                       id="external_link" class="form-control"
                                                       placeholder="External Link">
                                                <?php if($errors->has('external_link')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('external_link')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="images-and-videos" role="tabpanel"
                                 aria-labelledby="images-and-videos-tab">
                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('Product Images')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="thumbnail"><?php echo e(__('Thumbnail')); ?>(190X230)</label>
                                                    <div class="form-group">
                                                        <div class="input-group gallery-modal" id="btnSubmit"
                                                             data-for="image"
                                                             data-selection="single"
                                                             data-target="#galleryModal" data-dismiss="modal">
                                                            <input type="hidden" name="thumbnail"
                                                                   value="<?php echo e(old('thumbnail') !='' ? old('thumbnail') : $product_language->product->thumbnail_id); ?>"
                                                                   class="image-selected">
                                                            <span class="form-control"><span
                                                                        class="counter"><?php echo e(old('thumbnail') != '' ? substr_count(old('thumbnail'), ',') + 1  : ($product_language->product->thumbnail_id != '' ? substr_count($product_language->product->thumbnail_id, ',') + 1 : 0)); ?></span> <?php echo e(__('file chosen')); ?></span>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <?php echo e(__('Choose File')); ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="selected-media-box">
                                                            <div class="mt-2 gallery gallery-md d-flex">
                                                                <?php
                                                                    $thumb = old('thumbnail') ? old('thumbnail') : $product_language->product->thumbnail_id;
                                                                    $thumbnail = \App\Models\Media::find($thumb);
                                                                ?>
                                                                <?php if($thumbnail): ?>
                                                                    <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                                         data-id="<?php echo e($thumbnail->id); ?>">
                                                                        <?php if(is_file_exists($thumbnail->image_variants['image_72x72'], $thumbnail->image_variants['storage'])): ?>
                                                                            <img
                                                                                    src="<?php echo e(get_media($thumbnail->image_variants['image_72x72'], $thumbnail->image_variants['storage'])); ?>"
                                                                                    alt="img-thumbnail"
                                                                                    class="img-thumbnail logo-profile">
                                                                        <?php else: ?>
                                                                            <img
                                                                                    src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
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
                                                                        <img
                                                                                src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                                data-default="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                                alt="brand-logo"
                                                                                class="img-thumbnail logo-profile">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Button trigger modal -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="logo"><?php echo e(__('Gallery Image')); ?>(320X320)</label>
                                                    <div class="form-group">
                                                        <div class="input-group gallery-modal" id="btnSubmit"
                                                             data-for="image"
                                                             data-selection="multiple"
                                                             data-target="#galleryModal" data-dismiss="modal">
                                                            <input type="hidden" name="images"
                                                                   value="<?php echo e(old('images') !='' ? old('images') : $product_language->product->image_ids); ?>"
                                                                   class="image-selected">
                                                            <span class="form-control"><span
                                                                        class="counter"><?php echo e(old('images') != '' ? substr_count(old('images'), ',') + 1  : ($product_language->product->image_ids != '' ? substr_count($product_language->product->image_ids, ',') + 1 : 0)); ?></span> <?php echo e(__('file chosen')); ?></span>

                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <?php echo e(__('Choose File')); ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="selected-media-box">
                                                            <div class="mt-2 gallery gallery-md d-flex">
                                                                <?php
                                                                    $image_ids = old('images') ? explode(',', old('images')) : explode(',', $product_language->product->image_ids);
                                                                    $images = \App\Models\Media::find($image_ids);
                                                                ?>
                                                                <?php if($images): ?>
                                                                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                                             data-id="<?php echo e($media->id); ?>">
                                                                            <?php if(is_file_exists($media->image_variants['image_72x72'], $media->image_variants['storage'])): ?>
                                                                                <img
                                                                                        src="<?php echo e(get_media($media->image_variants['image_72x72'], $media->image_variants['storage'])); ?>"
                                                                                        alt="gallery_<?php echo e($key); ?>"
                                                                                        class="img-thumbnail logo-profile">
                                                                            <?php else: ?>
                                                                                <img
                                                                                        src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                                        alt="gallery_<?php echo e($key); ?>"
                                                                                        class="img-thumbnail logo-profile">
                                                                            <?php endif; ?>
                                                                            <div class="image-remove">
                                                                                <a href="javascript:void(0)"
                                                                                   class="remove"><i
                                                                                            class="bx bx-x"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('Product Video')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="video_provider"><?php echo e(__('Video Provider')); ?></label>
                                                    <select class="form-control selectric" name="video_provider"
                                                            id="video_provider">
                                                        <option value=""
                                                                selected><?php echo e(__('Select video provider')); ?></option>
                                                        <option
                                                                value="youtube" <?php echo e(old('video_provider') == 'youtube' ? 'selected' : ($product_language->product->video_provider == 'youtube' ? 'selected' : '')); ?>><?php echo e(__('Youtube')); ?></option>
                                                        <option
                                                                value="vimeo" <?php echo e(old('video_provider') == 'vimeo' ? 'selected' : ($product_language->product->video_provider == 'vimeo' ? 'selected' : '')); ?>><?php echo e(__('Vimeo')); ?></option>
                                                        <option
                                                                value="mp4" <?php echo e(old('video_provider') == 'mp4' ? 'selected' : ($product_language->product->video_provider == 'mp4' ? 'selected' : '')); ?>><?php echo e(__('Mp4')); ?></option>
                                                    </select>
                                                    <?php if($errors->has('video_provider')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('video_provider')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label for="video_url"><?php echo e(__('Video URL')); ?></label>
                                                    <input type="text" name="video_url" id="video_url"
                                                           value="<?php echo e(old('video_url') != '' ? old('video_url') : $product_language->product->video_url); ?>"
                                                           class="form-control" placeholder="https://">
                                                    <?php if($errors->has('video_url')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('video_url')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="price-and-stock" role="tabpane1"
                                 aria-labelledby="price-and-stock-tab">
                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('Product Price & Stock')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="price"><?php echo e(__('Unit Price')); ?> *</label>
                                            <input type="number" name="price" id="price"
                                                   value="<?php echo e(old('price') != '' ? old('price') : priceFormatUpdate($product_language->product->price,settingHelper('default_currency'),$type="*")); ?>"
                                                   class="form-control" placeholder="0" min="0" step="any">
                                            <?php if($errors->has('price')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('price')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="special_discount_type"><?php echo e(__('Special Discount Type')); ?></label>
                                                    <select class="form-control selectric" name="special_discount_type"
                                                            id="special_discount_type">
                                                        <option value="" selected><?php echo e(__('Select Type')); ?></option>
                                                        <option
                                                                value="flat" <?php echo e(old('special_discount_type') == 'flat' ? 'selected' : ($product_language->product->special_discount_type == 'flat' ? 'selected' : '')); ?>><?php echo e(__('Flat')); ?></option>
                                                        <option
                                                                value="percentage" <?php echo e(old('special_discount_type') == 'percentage' ? 'selected' : ($product_language->product->special_discount_type == 'percentage' ? 'selected' : '')); ?>><?php echo e(__('Percentage')); ?></option>
                                                    </select>
                                                    <?php if($errors->has('special_discount_type')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('special_discount_type')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="special_discount"><?php echo e(__('Special Discount')); ?></label>
                                                    <input type="number" name="special_discount" id="special_discount"
                                                           min="0"
                                                           step="any"
                                                           value="<?php echo e(old('special_discount') != '' ? old('special_discount') : ($product_language->product->special_discount_type == 'flat' ? priceFormatUpdate($product_language->product->special_discount,settingHelper('default_currency'),$type="*") : $product_language->product->special_discount)); ?>"
                                                           class="form-control" placeholder="<?php echo e(__('Discount')); ?>">
                                                    <?php if($errors->has('special_discount')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('special_discount')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="special_discount_period"><?php echo e(__('Special Discount Period')); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="bx bx-calendar"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="special_discount_period"
                                                       id="special_discount_period"
                                                       value="<?php echo e(old('special_discount_period') ? old('special_discount_period')
                                                        : ($product_language->product->special_discount_type != '' ? date('m-d-Y h:i A', strtotime($product_language->product->special_discount_start)).' - '.date('m-d-Y h:i A', strtotime($product_language->product->special_discount_end)) : '')); ?>"
                                                       class="form-control daterange-cus">
                                            </div>
                                            <?php if($errors->has('special_discount_period')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('special_discount_period')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(settingHelper('vat_and_tax_type') == 'product_base'): ?>
                                            <?php
                                                $vat_taxes = explode(',',$product_language->product->vat_taxes);
                                            ?>
                                            <div class="form-group">
                                                <label for="vat_taxes"><?php echo e(__('Vat & Tax')); ?></label>
                                                <select class="form-control selectric" name="vat_taxes[]" id="vat_taxes"
                                                        multiple>
                                                    <option value=""><?php echo e(__('Select')); ?></option>
                                                    <?php $__currentLoopData = \App\Models\VatTax::where('status', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vat_tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                                value="<?php echo e($vat_tax->id); ?>" <?php echo e(old('vat_taxes') != '' ? (in_array($vat_tax->id,old('vat_taxes')) ? 'selected' : '') : (in_array($vat_tax->id,$vat_taxes) ? 'selected' : '')); ?>><?php echo e($vat_tax->vat_tax); ?>

                                                            (<?php echo e($vat_tax->percentage .'%'); ?>)
                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php if($errors->has('vat_taxes')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('vat_taxes')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php else: ?>
                                            <?php echo e(__('Product base VAT & Tax is disabled.Special Price Configure your VAT & Tax here')); ?>

                                            <a href="<?php echo e(route('vat.tax')); ?>"><?php echo e(__('VAT & Tax Configuration')); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if($product_language->product->is_classified != 1): ?>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-space-between extra-padding">
                                            <h4><?php echo e(__('Product Stock')); ?></h4>
                                            <div class="text-right">
                                                <label class="custom-switch">
                                                    <input type="checkbox" value="1" name="has_variant"
                                                           class="custom-switch-input variant-product variant" <?php echo e(old('has_variant') == 1 ? 'checked' : ($product_language->product->has_variant == 1 ? 'checked' : '')); ?>>
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description"><?php echo e(__("Has Variant")); ?></span>
                                                </label>
                                                <?php if($errors->has('has_variant')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('has_variant')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <?php if(!$product_language->product->is_catalog == 1): ?>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="low_stock_to_notify"><?php echo e(__('Minimum Stock Warning')); ?></label>
                                                            <input type="number" name="low_stock_to_notify"
                                                                   class="form-control"
                                                                   value="<?php echo e(old('low_stock_to_notify') != '' ? old('low_stock_to_notify') : $product_language->product->low_stock_to_notify); ?>"
                                                                   placeholder="<?php echo e(__('Enter min stock amount to notify')); ?>">
                                                            <?php if($errors->has('low_stock_to_notify')): ?>
                                                                <div class="invalid-feedback">
                                                                    <p><?php echo e($errors->first('low_stock_to_notify')); ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="stock_visibility"><?php echo e(__('Stock Visibility')); ?>

                                                                *</label>
                                                            <select class="form-control selectric"
                                                                    name="stock_visibility"
                                                                    id="stock_visibility">
                                                                <option
                                                                        value="hide_stock" <?php echo e(old('stock_visibility') == 'hide_stock' ? 'selected' : ($product_language->product->stock_visibility == 'hide_stock' ? 'selected' : '')); ?>><?php echo e(__('Hide Stock')); ?></option>
                                                                <option
                                                                        value="visible_with_quantity" <?php echo e(old('stock_visibility') == 'visible_with_quantity' ? 'selected' : ($product_language->product->stock_visibility == 'visible_with_quantity' ? 'selected' : '')); ?>><?php echo e(__('Visible with quantity')); ?></option>
                                                                <option
                                                                        value="visible_with_text" <?php echo e(old('stock_visibility') == 'visible_with_text' ? 'selected' : ($product_language->product->stock_visibility == 'visible_with_text' ? 'selected' : '')); ?>><?php echo e(__('Visible with text')); ?></option>
                                                            </select>
                                                            <?php if($errors->has('stock_visibility')): ?>
                                                                <div class="invalid-feedback">
                                                                    <p><?php echo e($errors->first('stock_visibility')); ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="without-variant <?php echo e(old('has_variant') == 1 ? 'd-none' : ($product_language->product->has_variant == 1 ? 'd-none' : '')); ?>">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="sku"><?php echo e(__('SKU')); ?></label>
                                                            <div class="input-group">
                                                                <input type="text" name="sku" id="sku"
                                                                       value="<?php echo e(old('sku') != '' ? old('sku') : ($product_language->product->stock->first() ? $product_language->product->stock->first()->sku : '')); ?>"
                                                                       class="form-control"
                                                                       placeholder="<?php echo e(__('Enter product sku')); ?>">
                                                                <div class="input-group-append barcode">
                                                                    <div class="input-group-text">
                                                                        <i class="bx bx-refresh"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <?php if($errors->has('sku')): ?>
                                                                <div class="invalid-feedback">
                                                                    <p><?php echo e($errors->first('sku')); ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="current_stock"><?php echo e(__('Current Stock')); ?></label>
                                                            <input type="number" class="form-control"
                                                                   name="current_stock"
                                                                   value="<?php echo e(old('current_stock') != '' ? old('current_stock') : ($product_language->product->stock->first() ? $product_language->product->stock->first()->current_stock : '')); ?>"
                                                                   id="current_stock"
                                                                   placeholder="<?php echo e(__('Enter current available quantity')); ?>">
                                                            <?php if($errors->has('current_stock')): ?>
                                                                <div class="invalid-feedback">
                                                                    <p><?php echo e($errors->first('current_stock')); ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                    class="with-variant <?php echo e(old('has_variant') == 1 ? '' : ($product_language->product->has_variant == 1 ? '' : 'd-none')); ?>">
                                                <div class="form-group">
                                                    <label class="form-label"><?php echo e(__('Colors')); ?></label>
                                                    <div class="row gutters-xs">
                                                        <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-auto">
                                                                <label class="colorinput" data-toggle="tooltip" title=""
                                                                       data-original-title="<?php echo e($color->getTranslation('name', App::getLocale())); ?>">
                                                                    <input name="colors[]" type="checkbox"
                                                                           value="<?php echo e($color->id); ?>"
                                                                           <?php echo e(old('colors') ? (in_array($color->id , old('colors')) ? 'checked' : (in_array($color->id, $product_language->product->colors) ? 'checked' : '')): (in_array($color->id, $product_language->product->colors) ? 'checked' : '')); ?>

                                                                           data-url="<?php echo e(route('get-attribute-values')); ?>"
                                                                           class="colorinput-input attribute-sets"/>
                                                                    <span class="colorinput-color"
                                                                          style="background-color: <?php echo e($color->code); ?>"></span>
                                                                </label>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($errors->has('colors')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('colors')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control"
                                                               value="<?php echo e(__('Attribute Sets')); ?>" disabled>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-control select2 attribute-sets"
                                                                data-url="<?php echo e(route('get-attribute-values')); ?>"
                                                                name="attribute_sets[]" multiple>
                                                            <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                        value="<?php echo e($attribute->id); ?>" <?php echo e(old('attribute_sets') ? (in_array($attribute->id , old('attribute_sets')) ? 'selected' : (in_array($attribute->id, $product_language->product->attribute_sets) ? 'selected' : '')): (in_array($attribute->id, $product_language->product->attribute_sets) ? 'selected' : '')); ?>>
                                                                    <?php echo e($attribute->getTranslation('title', App::getLocale())); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <p class="invalid-feedback text-info"><?php echo e(__('N.B: Select Attribute sets of this product to add attribute values')); ?></p>
                                                    </div>
                                                </div>
                                                <div class="attribute-values">
                                                    <?php
                                                        $selected_attributes = old('attribute_sets') ? old('attribute_sets') : $product_language->product->attribute_sets;
                                                        $selected_attributes = $attributes->whereIn('id',$selected_attributes);
                                                    ?>
                                                    <?php $__currentLoopData = $selected_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="form-group row">
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control"
                                                                       value="<?php echo e($attribute->getTranslation('title', App::getLocale())); ?>"
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <select class="form-control select2 variant"
                                                                        name="attribute_values_<?php echo e($attribute->id); ?>[]"
                                                                        multiple>
                                                                    <?php $__currentLoopData = $attribute->attributeValue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($value->id); ?>" <?php echo e(old('attribute_values_'.$attribute->id) ? (in_array($value->id, old('attribute_values_'.$attribute->id)) ? 'selected' : '')
                                                           : ($product_language->product->selected_variants != null ? (in_array($value->id, $product_language->product->selected_variants[$attribute->id]) ? 'selected' : '') : '')); ?>>
                                                                            <?php echo e($value->value); ?>

                                                                        </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <div class="form-group row variant-table">
                                                    <?php if(session()->has('attributes')): ?>
                                                        <?php echo $__env->make('admin.products.products.session-sku', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    <?php else: ?>
                                                        <?php if($product_language->product->has_variant == 1): ?>
                                                            <table class="table table-striped table-bordered product-variant-table">
                                                                <thead>
                                                                <tr>
                                                                    <td scope="col"><?php echo e(__('Variant')); ?></td>
                                                                    <td scope="col"><?php echo e(__('Price')); ?> *</td>
                                                                    <td scope="col"><?php echo e(__('SKU')); ?> *</td>
                                                                    <td scope="col"><?php echo e(__('Current Stock')); ?> *</td>
                                                                    <td scope="col"><?php echo e(__('Image')); ?></td>
                                                                    <td><?php echo e(__('Action')); ?></td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                <?php $__currentLoopData = $product_language->product->stock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <th scope="row" width="18%"><label
                                                                                    class="font-normal"><?php echo e($stock->name); ?></label><input
                                                                                    type="hidden" lang="en"
                                                                                    name="variant_name[<?php echo e($key); ?>]"
                                                                                    value="<?php echo e($stock->name); ?>"
                                                                                    class="form-control" required="">
                                                                            <input type="hidden" lang="en"
                                                                                   name="variant_ids[<?php echo e($key); ?>]"
                                                                                   value="<?php echo e($stock->variant_ids); ?>"
                                                                                   class="form-control">
                                                                        </th>
                                                                        <td width="18%"><input type="number" lang="en"
                                                                                               name="variant_price[<?php echo e($key); ?>]"
                                                                                               value="<?php echo e(priceFormatUpdate($stock->price ,settingHelper('default_currency'),$type="*")); ?>"
                                                                                               min="0" step="any"
                                                                                               class="form-control"
                                                                                               required="">
                                                                        </td>
                                                                        <td width="18%">
                                                                            <input type="text"
                                                                                   name="variant_sku[<?php echo e($key); ?>]"
                                                                                   value="<?php echo e($stock->sku); ?>"
                                                                                   class="form-control" required>

                                                                        </td>
                                                                        <td width="18%"><input type="number" lang="en"
                                                                                               name="variant_stock[<?php echo e($key); ?>]"
                                                                                               value="<?php echo e($stock->current_stock); ?>"
                                                                                               min="0" step="1"
                                                                                               class="form-control"
                                                                                               required=""></td>
                                                                        <td>
                                                                            <div>
                                                                                <div class="form-group">
                                                                                    <div class="input-group gallery-modal"
                                                                                         id="btnSubmit" data-for="image"
                                                                                         data-variant="1"
                                                                                         data-selection="single"
                                                                                         data-target="#galleryModal"
                                                                                         data-dismiss="modal">
                                                                                        <input type="hidden"
                                                                                               name="variant_image[<?php echo e($key); ?>]"
                                                                                               value="<?php echo e($stock->image_id); ?>"
                                                                                               class="image-selected">
                                                                                        <span class="form-control"><span
                                                                                                    class="counter">0</span> <?php echo e(__('file')); ?></span>
                                                                                        <div class="input-group-prepend">
                                                                                            <div class="input-group-text">
                                                                                                <?php echo e(__('Choose')); ?>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="selected-media-box">
                                                                                        <div class="mt-2 gallery gallery-md d-flex">
                                                                                            <?php if($stock->image_id): ?>
                                                                                                <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                                                                     data-id="<?php echo e($stock->image_id); ?>">
                                                                                                    <?php
                                                                                                        $media = \App\Models\Media::find($stock->image_id);
                                                                                                    ?>
                                                                                                    <?php if($media && @is_file_exists($media->image_variants['image_72x72'], $media->image_variants['storage'])): ?>
                                                                                                        <img
                                                                                                                src="<?php echo e(get_media($media->image_variants['image_72x72'], $media->image_variants['storage'])); ?>"
                                                                                                                alt="img-thumbnail"
                                                                                                                class="img-thumbnail logo-profile">
                                                                                                    <?php else: ?>
                                                                                                        <img
                                                                                                                src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                                                                alt="img-thumbnail"
                                                                                                                class="img-thumbnail logo-profile">
                                                                                                    <?php endif; ?>
                                                                                                    <div class="image-remove">
                                                                                                        <a href="javascript:void(0)"
                                                                                                           class="remove"><i
                                                                                                                    class="bx bx-x"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            <?php endif; ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td width="6%">
                                                                            <button type="button"
                                                                                    class="btn btn-icon btn-sm btn-danger remove-menu-row"
                                                                                    onclick="$(this).closest('tr').remove();">
                                                                                <i class="bx bx-trash"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="description-and-specification" role="tabpane6"
                                 aria-labelledby="description-and-specification-tab">
                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('Product Description')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group short-des">
                                            <label for="short_description"
                                                   class="form-control-label"><?php echo e(__('Short Description')); ?></label>
                                            <div>
                                        <textarea type="text" class="form-control" name="short_description"
                                                  id="short_description"><?php echo e(old('short_description') ? old('short_description') : strip_tags($product_language->short_description)); ?></textarea>
                                            </div>
                                            <p id="total-caracteres">200</p>
                                            <?php if($errors->has('short_description')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('short_description')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="description"
                                                   class="form-control-label"><?php echo e(__('Long Description')); ?></label>
                                            <div>
                                        <textarea type="text" class="summernote" name="description"
                                                  id="description"><?php echo e(old('description') ? old('description') : $product_language->description); ?></textarea>
                                            </div>
                                            <?php if($errors->has('description')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('description')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_image"
                                                   class="form-control-label"><?php echo e(__('description_image')); ?></label>
                                            <div>
                                                <input type="file" class="form-control" id="description_images" name="description_images[]" multiple>
                                            </div>
                                            <div class="selected-media mr-2 mb-2 mt-3 ml-0" id="description_image_modal">
                                                <?php if($product_language->product->description_images && count($product_language->product->description_images)): ?>
                                                    <div class="d-flex">
                                                        <?php $__currentLoopData = $product_language->product->description_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if(is_file_exists($image['image'],$image['storage'])): ?>
                                                                <div class="position-relative">
                                                                    <img src="<?php echo e(get_media($image['image'],$image['storage'])); ?>" class="description_image" alt="<?php echo e($product_language->name); ?>">
                                                                    <a href="javascript:void(0)" data-name="<?php echo e($image['image']); ?>" data-id="<?php echo e($product_language->product_id); ?>" data-storage="<?php echo e($image['storage']); ?>" class="remove_image"><i class="bx bx-x"></i></a>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if($errors->has('description_images')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('description')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('PDF Specification')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="logo"><?php echo e(__('PDF Specification')); ?></label>
                                            <div class="form-group">
                                                <div class="input-group gallery-modal" id="btnSubmit" data-for="pdf"
                                                     data-selection="single" data-variant="1"
                                                     data-target="#galleryModal" data-dismiss="modal">
                                                    <input type="hidden" name="pdf_specification"
                                                           value="<?php echo e(old('pdf_specification') !='' ? old('pdf_specification') : $product_language->pdf_specification_id); ?>"
                                                           class="image-selected">
                                                    <span class="form-control"><span
                                                                class="counter"><?php echo e(old('pdf_specification') != '' ? substr_count(old('pdf_specification'), ',') + 1  : ($product_language->pdf_specification_id != '' ? substr_count($product_language->pdf_specification_id, ',') + 1 : 0)); ?></span> <?php echo e(__('file chosen')); ?></span>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <?php echo e(__('Choose File')); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="selected-media-box">
                                                    <div class="mt-2 gallery gallery-md d-flex">
                                                        <?php
                                                            $pdf_specification = old('pdf_specification') ? old('pdf_specification') : $product_language->pdf_specification_id;
                                                            $pdf = \App\Models\Media::find($pdf_specification);
                                                        ?>
                                                        <?php if($pdf): ?>
                                                            <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                                 data-id="<?php echo e($product_language->pdf_specification_id); ?>">
                                                                <img
                                                                        src="<?php echo e(static_asset('images/default/default-pdf-72x72.png')); ?>"
                                                                        alt="img-thumbnail"
                                                                        class="img-thumbnail logo-profile">
                                                                <div class="image-remove">
                                                                    <a href="javascript:void(0)" class="remove"><i
                                                                                class="bx bx-x"></i></a>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="shipping" role="tabpane2"
                                 aria-labelledby="shipping-tab">
                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('Shipping Info')); ?></h4>
                                    </div>
                                    <div class="card-body extra-padding">
                                        <?php if($product_language->product->is_catalog != 1): ?>
                                            <?php if($product_language->product->is_classified != 1): ?>
                                                <?php if(settingHelper('shipping_fee_type') == 'product_base'): ?>
                                                    <div class="section-title mt-0"><?php echo e(__('Shipping Fee')); ?></div>
                                                    <div class="form-group mt-2">
                                                        <label for="shipping_type"><?php echo e(__('Shipping Fee Type')); ?></label>
                                                        <select class="form-control selectric shipping-type"
                                                                name="shipping_type" id="shipping_type">
                                                            <option
                                                                    value="flat_rate" <?php echo e(old('shipping_type') == 'flat_rate' ? 'selected' : ($product_language->product->shipping_type == 'flat_rate' ? 'selected' : '')); ?>><?php echo e(__('Flat Rate')); ?></option>
                                                            <option
                                                                    value="free_shipping" <?php echo e(old('shipping_type') == 'free_shipping' ? 'selected' : ($product_language->product->shipping_type == 'free_shipping' ? 'selected' : '')); ?>><?php echo e(__('Free Shipping')); ?></option>
                                                        </select>
                                                        <?php if($errors->has('shipping_type')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('shipping_type')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div
                                                            class="shipping-cost <?php echo e(old('shipping_type') == 'free_shipping' ? 'd-none' : ($product_language->product->shipping_type == 'free_shipping' ? 'd-none' : '')); ?>">
                                                        <div class="form-group mt-2">
                                                            <label for="shipping_fee"><?php echo e(__('Shipping Fee')); ?></label>
                                                            <input type="number" name="shipping_fee"
                                                                   value="<?php echo e(old('shipping_fee') != '' ? old('shipping_fee') : priceFormatUpdate($product_language->product->shipping_fee,settingHelper('default_currency'),$type="*")); ?>"
                                                                   class="form-control" min="0" step="any"
                                                                   placeholder="<?php echo e(__('Enter Shipping fee')); ?>">
                                                            <?php if($errors->has('shipping_fee')): ?>
                                                                <div class="invalid-feedback">
                                                                    <p><?php echo e($errors->first('shipping_fee')); ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group row mt-2">
                                                            <label class="col-md-6 col-from-label"
                                                                   for="shipping_fee_depend_on_quantity"><?php echo e(__('Is Depend On Quantity')); ?></label>
                                                            <div class="col-md-6">
                                                                <label class="custom-switch">
                                                                    <input type="checkbox" value="1"
                                                                           name="shipping_fee_depend_on_quantity"
                                                                           <?php echo e(old('shipping_fee_depend_on_quantity') == 1 ? 'checked' : ($product_language->product->shipping_fee_depend_on_quantity == 1 ? 'checked' : '')); ?>

                                                                           class="custom-switch-input">
                                                                    <span class="custom-switch-indicator"></span>
                                                                    <span class="custom-switch-description"></span>
                                                                </label>
                                                                <?php if($errors->has('shipping_fee_depend_on_quantity')): ?>
                                                                    <div class="invalid-feedback">
                                                                        <p><?php echo e($errors->first('shipping_fee_depend_on_quantity')); ?></p>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <?php echo e(__('Product base shipping fee is disabled. Configure your shipping fee here')); ?>

                                                    <a href="<?php echo e(route('shipping-configuration')); ?>"><?php echo e(__('Shipping Configuration')); ?></a>
                                                <?php endif; ?>
                                                <?php if($product_language->product->is_digital != 1): ?>
                                                    <div class="section-title mt-0"><?php echo e(__('Estimated Shipping Days & COD')); ?></div>
                                                    <div
                                                            class="form-group row mt-2 shipping-days <?php echo e(old('is_digital') == 1 ? 'd-none' : ''); ?>">
                                                        <label
                                                                class="col-md-5 col-from-label"><?php echo e(__('Cash On Delivery')); ?></label>
                                                        <div class="col-md-7">
                                                            <label class="custom-switch">
                                                                <input type="checkbox" value="1" name="cash_on_delivery"
                                                                       <?php echo e(old('cash_on_delivery') == 1 ? 'checked' : ($product_language->product->cash_on_delivery == 1 ? 'checked' : '')); ?>

                                                                       class="custom-switch-input">
                                                                <span class="custom-switch-indicator"></span>
                                                                <span
                                                                        class="custom-switch-description"><?php echo e(__('Collect cash after delivery')); ?></span>
                                                            </label>
                                                            <?php if($errors->has('cash_on_delivery')): ?>
                                                                <div class="invalid-feedback">
                                                                    <p><?php echo e($errors->first('cash_on_delivery')); ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-2 shipping-days">
                                                        <label for="estimated_shipping_days"><?php echo e(__('Shipping Days')); ?></label>
                                                        <input type="text" name="estimated_shipping_days"
                                                               id="estimated_shipping_days"
                                                               value="<?php echo e(old('estimated_shipping_days') != '' ? old('estimated_shipping_days') : $product_language->product->estimated_shipping_days); ?>"
                                                               class="form-control" placeholder="0">
                                                        <?php if($errors->has('estimated_shipping_days')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('estimated_shipping_days')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade"
                                 id="others" role="tabpane3"
                                 aria-labelledby="others-tab">
                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('Add To Campaign')); ?></h4>
                                    </div>
                                    <div class="card-body extra-padding">
                                        <div class="form-group">
                                            <label for="campaign"><?php echo e(__('Select Campaign')); ?></label>
                                            <select class="form-control selectric" name="campaign" id="campaign">
                                                <option value="" selected><?php echo e(__('Select')); ?></option>
                                                <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                            value="<?php echo e($campaign->id); ?>" <?php echo e(old('campaign') == $campaign->id ? 'selected' : (($product_language->productCampaign && $product_language->productCampaign->campaign_id == $campaign->id) ? 'selected' : '')); ?>><?php echo e($campaign->getTranslation('title', App::getLocale())); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($errors->has('campaign')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('campaign')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="campaign_discount"><?php echo e(__('Discount')); ?></label>
                                                    <input type="number" class="form-control" name="campaign_discount"
                                                           value="<?php echo e(old('campaign_discount') != '' ? old('campaign_discount') : (($product_language->productCampaign) ? priceFormatUpdate($product_language->productCampaign->discount,settingHelper('default_currency'),$type="*") : '')); ?>"
                                                           id="campaign_discount" placeholder="0" step="any" min="0">
                                                    <?php if($errors->has('campaign_discount')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('campaign_discount')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="campaign_discount_type"><?php echo e(__('Discount Type')); ?></label>
                                                    <select class="form-control selectric" name="campaign_discount_type"
                                                            id="campaign_discount_type">
                                                        <option value=""
                                                                selected><?php echo e(__('Select Discount Type')); ?></option>
                                                        <option
                                                                value="flat" <?php echo e(old('campaign_discount_type') == 'flat' ? 'selected' : (($product_language->productCampaign && $product_language->productCampaign->discount_type == 'flat') ? 'selected' : '')); ?>><?php echo e(__('Flat')); ?></option>
                                                        <option
                                                                value="percent" <?php echo e(old('campaign_discount_type') == 'percentage' ? 'selected' : (($product_language->productCampaign && $product_language->productCampaign->discount_type == 'percentage') ? 'selected' : '')); ?>><?php echo e(__('Percent')); ?></option>
                                                    </select>
                                                    <?php if($errors->has('campaign_discount_type')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('campaign_discount_type')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('Statuses')); ?></h4>
                                    </div>
                                    <div class="card-body extra-padding">
                                        <?php if(addon_is_activated('refund')): ?>
                                            <div class="form-group row mt-2">
                                                <label class="col-md-5 col-from-label"><?php echo e(__('Refundable')); ?></label>
                                                <div class="col-md-7">
                                                    <label class="custom-switch">
                                                        <input type="checkbox" value="1" name="is_refundable"
                                                               <?php echo e(old('is_refundable') == 1 ? 'checked' : ($product_language->product->is_refundable == 1 ? 'checked' : '')); ?>

                                                               class="custom-switch-input">
                                                        <span class="custom-switch-indicator"></span>
                                                        <span
                                                                class="custom-switch-description"><?php echo e(__('Is Product Refundable')); ?></span>
                                                    </label>
                                                    <?php if($errors->has('is_refundable')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('is_refundable')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="form-group row mt-2">
                                            <label class="col-md-5 col-from-label"><?php echo e(__('Featured')); ?></label>
                                            <div class="col-md-7">
                                                <label class="custom-switch">
                                                    <input type="checkbox" value="1" name="is_featured"
                                                           <?php echo e(old('is_featured') == 1 ? 'checked' : ($product_language->product->is_featured == 1 ? 'checked' : '')); ?>

                                                           class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description"><?php echo e(__('Add to Featured')); ?></span>
                                                </label>
                                                <?php if($errors->has('is_featured')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('is_featured')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label class="col-md-5 col-from-label"><?php echo e(__("Today's Deal")); ?></label>
                                            <div class="col-md-7">
                                                <label class="custom-switch">
                                                    <input type="checkbox" value="1" name="todays_deal"
                                                           <?php echo e(old('todays_deal') == 1 ? 'checked' : ($product_language->product->todays_deal == 1 ? 'checked' : '')); ?>

                                                           class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                    <span
                                                            class="custom-switch-description"><?php echo e(__("Add to Today's Deal")); ?></span>
                                                </label>
                                                <?php if($errors->has('todays_deal')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('todays_deal')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="seo" role="tabpane5"
                                 aria-labelledby="seo-tab">

                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4><?php echo e(__('Product SEO')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="meta_title"><?php echo e(__('Meta Title')); ?></label>
                                            <input type="text" name="meta_title" id="meta_title" class="form-control"
                                                   value="<?php echo e(old('meta_title') ? old('meta_title') : $product_language->meta_title); ?>"
                                                   placeholder="<?php echo e(__('Meta Title')); ?>">
                                            <?php if($errors->has('meta_title')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('meta_title')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="meta_description"><?php echo e(__('Meta Description')); ?></label>
                                            <textarea class="form-control" name="meta_description"
                                                      rows="5"><?php echo e(old('meta_description') ? old('meta_description') : $product_language->meta_description); ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="meta_keywords"><?php echo e(__('Meta Keywords')); ?></label>
                                            <input type="text" class="form-control inputtags" name="meta_keywords"
                                                   value="<?php echo e(old('meta_keywords') ? old('meta_keywords') : $product_language->meta_keywords); ?>"
                                                   placeholder="<?php echo e(__('Write & hit enter')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="logo"><?php echo e(__('Meta Image') .' ('.__('Open Graph').')'); ?></label>
                                            <div class="form-group">
                                                <div class="input-group gallery-modal" id="btnSubmit" data-for="image"
                                                     data-selection="single"
                                                     data-target="#galleryModal" data-dismiss="modal">
                                                    <input type="hidden" name="meta_image"
                                                           value="<?php echo e(old('meta_image') != '' ? old('meta_image') : $product_language->product->meta_image_id); ?>"
                                                           class="image-selected">
                                                    <span class="form-control"><span
                                                                class="counter"><?php echo e(old('meta_image') != '' ? substr_count(old('meta_image'), ',') + 1  : ($product_language->product->meta_image_id != '' ? substr_count($product_language->product->meta_image_id, ',') + 1 : 0)); ?></span> <?php echo e(__('file chosen')); ?></span>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <?php echo e(__('Choose File')); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="selected-media-box">
                                                    <div class="mt-2 gallery gallery-md d-flex">
                                                        <?php
                                                            $meta_img = old('thumbnail') ? old('thumbnail') : $product_language->product->meta_image_id;
                                                            $meta_image = \App\Models\Media::find($meta_img);
                                                        ?>
                                                        <?php if($meta_image): ?>
                                                            <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                                 data-id="<?php echo e($meta_image->id); ?>">
                                                                <?php if(is_file_exists($meta_image->image_variants['image_72x72'], $meta_image->image_variants['storage'])): ?>
                                                                    <img
                                                                            src="<?php echo e(get_media($meta_image->image_variants['image_72x72'], $meta_image->image_variants['storage'])); ?>"
                                                                            alt="img-thumbnail"
                                                                            class="img-thumbnail logo-profile">
                                                                <?php else: ?>
                                                                    <img
                                                                            src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
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
                                                                <img
                                                                        src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                        data-default="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                                        alt="brand-logo"
                                                                        class="img-thumbnail logo-profile">
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if(isset($is_classified)): ?>
                                <div class="tab-pane fade"
                                     id="contact-details" role="tabpane3"
                                     aria-labelledby="contact-details-tab">
                                    <input type="hidden" name="is_classified" value="1">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between extra-padding">
                                            <h4><?php echo e(__('Contact Details')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="contact_name"><?php echo e(__('Contact Name')); ?></label>
                                                        <input type="text" class="form-control" name="contact_name"
                                                               id="contact_name"
                                                               value="<?php echo e(old('contact_name') != '' ? old('contact_name') : @$product_language->product->contact_info['contact_name']); ?>"
                                                               placeholder="<?php echo e(__('Contact Name')); ?>">
                                                        <?php if($errors->has('contact_name')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('contact_name')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone_no"><?php echo e(__('Phone No')); ?></label>
                                                        <input type="phone" class="form-control" name="phone_no"
                                                               value="<?php echo e(old('phone_no') != '' ? old('phone_no') : @$product_language->product->contact_info['phone_no']); ?>"
                                                               id="phone_no"
                                                               placeholder="<?php echo e(__('Enter Contact Phone No')); ?>">
                                                        <?php if($errors->has('phone_no')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('phone_no')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email"><?php echo e(__('Email')); ?></label>
                                                        <input type="email" class="form-control" name="email" id="email"
                                                               value="<?php echo e(old('email') != '' ? old('email') : @$product_language->product->contact_info['email']); ?>"
                                                               placeholder="<?php echo e(__('Enter Contact Email Address')); ?>">
                                                        <?php if($errors->has('email')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('email')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address"><?php echo e(__('Address')); ?></label>
                                                        <input type="address" class="form-control" name="address"
                                                               value="<?php echo e(old('address') != '' ? old('address') : @$product_language->product->contact_info['address']); ?>"
                                                               id="address"
                                                               placeholder="<?php echo e(__('Enter Contact Address')); ?>">
                                                        <?php if($errors->has('address')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('address')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="others"><?php echo e(__('Others Info')); ?></label>
                                                        <textarea type="text" class="summernote" name="others"
                                                                  id="others"><?php echo e(old('others') != '' ? old('others') : @$product_language->product->contact_info['others']); ?></textarea>

                                                        <?php if($errors->has('others')): ?>
                                                            <div class="invalid-feedback">
                                                                <p><?php echo e($errors->first('others')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="bottom-button">
                        <?php if(!isset($clone)): ?>
                            <button type="submit" class="btn btn-outline-primary">
                                <?php echo e(__('Update')); ?>

                            </button>
                        <?php else: ?>
                            <button type="submit" name="status" value="unpublished" class="btn btn-outline-info"
                                    tabindex="4">
                                <?php echo e(__('Save & Unpublish')); ?>

                            </button>
                            <button type="submit" name="status" value="published" class="btn btn-outline-primary"
                                    tabindex="4">
                                <?php echo e(__('Save & Publish')); ?>

                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php echo $__env->make('admin.common.selector-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/dropzone.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/daterangepicker.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page-script'); ?>
    <script src="<?php echo e(static_asset('admin/js/summernote-bs4.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/daterangepicker.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/dropzone.min.js')); ?>"></script>
    <script type="text/javascript">
        $(function () {
            var toAdd = $('.daterange-cus');
            toAdd.daterangepicker({
                autoUpdateInput: false,
                timePicker: true,
                locale: {
                    cancelLabel: '<?php echo e(__('Clear')); ?>',
                    format: 'M-DD-YYYY hh:mm A'
                }
            });
            toAdd.on('apply.daterangepicker', function (ev, picker) {
                $(this).val(picker.startDate.format('MM-DD-YYYY hh:mm A') + ' - ' + picker.endDate.format('MM-DD-YYYY hh:mm A'));
            });
            toAdd.on('cancel.daterangepicker', function () {
                $(this).val('');
            });
            $(document).ready(function () {
                $(document).on('change', '#description_images', function () {

                    let input = this;

                    if (input.files) {
                        $('#description_image_modal').empty();
                        var filesAmount = input.files.length;

                        for (let i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                $($.parseHTML('<img class="description_image">')).attr('src', event.target.result).appendTo('#description_image_modal');
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }
                });
                $(document).on('click','.remove_image',function (){
                    let selector = $(this);
                    let image = selector.data('name');
                    let id = selector.data('id');
                    let storage = selector.data('storage');
                    $.ajax({
                        method : 'POST',
                        url : '<?php echo e(route('delete.file')); ?>',
                        data : {
                            id : id,
                            _token : '<?php echo e(csrf_token()); ?>',
                            image : image,
                            storage : storage,
                        },
                        success : function (response){
                            if(response.success)
                            {
                                selector.closest('.position-relative').remove();
                            }
                            else{
                                toastr.error(response.error);
                            }
                        }
                    })
                })
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/products/products/edit.blade.php ENDPATH**/ ?>