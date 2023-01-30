

<?php
    $route = isset($user) ? route('admin.seller.update') : route('admin.seller.store');
    $title = isset($user) ? __('Edit') : __('Add');
    $button_name = isset($user) ? __('Update') : __('Add');
?>

<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?> <?php echo e(__('Seller')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sellers_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sellers'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e($title); ?> <?php echo e(__('seller')); ?></h2>
                </div>
                <div class="buttons add-button">
                    <a href="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>"
                       class="btn btn-icon icon-left btn-outline-primary"><i
                                class="bx bx-arrow-back"></i><?php echo e(__('Back')); ?></a>
                </div>
            </div>
            <form action="<?php echo e($route); ?>" enctype="multipart/form-data" method="POST">
                <?php echo csrf_field(); ?>
                <?php if(isset($user)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>
                <div class="row">
                    <div class="col-sm-xs-12 col-md-6">
                        <div class="card">
                            <div class="card-header input-title" id="Add">
                                <h4><?php echo e(__('Seller Info')); ?></h4>
                            </div>
                            <div class="card-body card-body-paddding phone-block">
                                <div class="form-row">
                                    <div class="form-group col-sm-xs-12 col-md-6">
                                        <label for="first_name"> <?php echo e(__('First Name')); ?> *</label>
                                        <input type="hidden"
                                               value="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>"
                                               name="r">
                                        <input type="hidden" value="<?php echo e(@$user->id); ?>" name="id">
                                        <input type="text" name="first_name" id="first_name"
                                               placeholder="<?php echo e(__('First Name')); ?>"
                                               value="<?php echo e(old('first_name') ? old('first_name') : @$user->first_name); ?>"
                                               class="form-control">
                                        <?php if($errors->has('first_name')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('first_name')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group col-sm-xs-12 col-md-6">
                                        <label for="last_name"><?php echo e(__('Last Name')); ?> *</label>
                                        <input type="text" id="last_name" name="last_name"
                                               placeholder="<?php echo e(__('Last Name')); ?>"
                                               value="<?php echo e(old('last_name') ? old('last_name') : @$user->last_name); ?>"
                                               class="form-control">
                                        <?php if($errors->has('last_name')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('last_name')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo $__env->make('admin.partials.tel-input',[
                                                                            'name' => 'phone',
                                                                            'value' => old('phone') ? : @$user->phone,
                                                                            'label' => __('Phone'),
                                                                            'class' => 'form-control',
                                                                            'id' => 'txtPhone',
                                                                            'country_id_field' => 'country_id',
                                                                            'country_id' => old('country_id') ? : (@$user->country_id ?? settingHelper('default_country'))
                                                                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                                <div class="form-group">
                                    <label for="email"><?php echo e(__('Email')); ?> *</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                           placeholder="<?php echo e(__('Email')); ?>"
                                           value="<?php echo e(old('email') ? old('email') : (isDemoServer() && isset($user->email) ? emailAddressMask($user->email) : @$user->email)); ?>">
                                    <?php if($errors->has('email')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('email')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php if(addon_is_activated('ishopet')): ?>
                                    <div class="form-group align-items-center">
                                        <label class="form-control-label"><?php echo e(__('Currency code')); ?></label>
                                        <select class="form-control select2" id="code" name="currency_code"
                                                value="<?php echo e(old('currency_code')); ?>" required>
                                            <option value=""><?php echo e(__("Select currency code")); ?></option>
                                            <?php if(count($currency_list) > 0): ?>
                                                <?php $__currentLoopData = $currency_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e(isset($user) && $user->currency_code == $key ? "selected" : ""); ?> value="<?php echo e($key); ?>"><?php echo e($key); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <option value="USD">USD</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="password"><?php echo e(__('Password')); ?> <?php echo e(!isset($user) ? '*' : ''); ?></label>
                                    <div class="input-group sohide_ico_pos" id="show_hide_password">
                                        <input type="password" id="password" name="password" class="form-control"
                                               placeholder="<?php echo e(__('Password')); ?>"
                                        <?php echo e(isset($user) ? '' : 'required'); ?>">
                                        <div class="input-group-addon">
                                            <a href=""><i class='mdi mdi-eye-off' aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <?php if($errors->has('password')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('password')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="password"><?php echo e(__('Confirm Password')); ?> </label>
                                    <div class="input-group sohide_ico_pos" id="show_hide_confirm_password">
                                        <input type="password" name="password_confirmation" class="form-control"
                                               placeholder="<?php echo e(__('Confirm Password')); ?>">
                                        <div class="input-group-addon">
                                            <a href=""><i class='mdi mdi-eye-off' aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <?php if($errors->has('password_confirmation')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('password_confirmation')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mt-4 text-center">
                                    <?php if(@$user->images != [] && is_file_exists(@$user->images['image_128x128'])): ?>
                                        <img src="<?php echo e(static_asset($user->images['image_128x128'])); ?>"
                                             alt="<?php echo e(@$user->first_name); ?>" id="img_profile"
                                             class="img-thumbnail user-profile ">
                                    <?php else: ?>
                                        <img src="<?php echo e(static_asset('images/default/user.jpg')); ?>"
                                             alt="<?php echo e(@$user->first_name); ?>" id="img_profile"
                                             class="img-thumbnail user-profile ">
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Profile Image')); ?></label>
                                    <div class="form-group">
                                        <input type="file" class="custom-file-input image_pick file-select"
                                               data-image-for="profile" name="image" id="customFile"
                                               value="<?php echo e(@$user->image_id); ?>" accept="image/*"/>
                                        <?php if($errors->has('image')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('image')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-xs-12 col-md-6">
                        <div class="card">
                            <div class="card-header input-title" id="Add">
                                <h4><?php echo e(__('Shop Details')); ?></h4>
                            </div>
                            <div class="card-body card-body-paddding">
                                <div class="form-group">
                                    <label for="shop_name"><?php echo e(__('Shop Name')); ?> </label>
                                    <input type="text" id="shop_name" name="shop_name" placeholder="<?php echo e(__('Shop Name')); ?>"
                                           value="<?php echo e(old('shop_name') ? old('shop_name') : @$user->sellerProfile->shop_name); ?>"
                                           class="form-control">
                                    <?php if($errors->has('shop_name')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('shop_name')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="slug"><?php echo e(__('Slug')); ?></label>
                                    <input type="text" id="slug" name="slug" placeholder="<?php echo e(__('Slug')); ?>"
                                           value="<?php echo e(old('slug') ? old('slug') : @$user->sellerProfile->slug); ?>"
                                           class="form-control">
                                    <?php if($errors->has('slug')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('slug')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $__env->make('admin.partials.tel-input',[
                                                                            'name' => 'phone_no',
                                                                            'value' => old('phone_no') ? : (isset($user) && $user->sellerProfile ? $user->sellerProfile->phone_no : ''),
                                                                            'label' => __('Phone'),
                                                                            'class' => 'form-control',
                                                                            'id' => 'txtPhone',
                                                                            'country_id_field' => 'seller_country_id',
                                                                            'country_id' => old('seller_country_id') ? : (isset($user) && $user->sellerProfile ? $user->sellerProfile->seller_country_id : settingHelper('default_country'))
                                                                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                </div>
                                <div class="form-group">
                                    <label for="address"><?php echo e(__('Address')); ?> </label>
                                    <input type="text" id="address" name="address" placeholder="<?php echo e(__('Address')); ?>"
                                           value="<?php echo e(old('address') ? old('address') : @$user->sellerProfile->address); ?>"
                                           class="form-control">
                                    <?php if($errors->has('address')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('address')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="shop_logo"><?php echo e(__('Logo')); ?> (<?php echo e(__('72*72')); ?>)</label>
                                    <div class="form-group">
                                        <input type="file" id="shop_logo"
                                               class="custom-file-input image_pick file-select" data-image-for="logo"
                                               name="logo" id="customFile"
                                               value="" accept="image/*"/>
                                    </div>

                                    <div>
                                        <?php if(@$user->sellerProfile->logo !=[] && is_file_exists(@$user->sellerProfile->logo['image_72x72'])): ?>
                                            <img src="<?php echo e(static_asset(@$user->sellerProfile->logo['image_72x72'])); ?>"
                                                 alt="" id="img_logo" class="img-thumbnail site-icon">
                                        <?php else: ?>
                                            <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                 alt="<?php echo e(@$user->first_name); ?>" id="img_logo"
                                                 class="img-thumbnail site-icon ">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group seo-image-positoin">
                                    <label for="shop_banner"><?php echo e(__('Banner')); ?> (<?php echo e(__('297*203')); ?>)</label>
                                    <div class="form-group">
                                        <input type="file" id="shop_banner"
                                               class="custom-file-input image_pick file-select" data-image-for="banner"
                                               name="banner"
                                               value="<?php echo e(@$user->image_id); ?>" accept="image/*"/>
                                    </div>
                                    <div>
                                        <?php if(@$user->sellerProfile->banner !=[] && is_file_exists(@$user->sellerProfile->banner['image_72x72'])): ?>
                                            <img src="<?php echo e(static_asset(@$user->sellerProfile->banner['image_72x72'])); ?>"
                                                 id="img_banner" alt="" class="img-thumbnail site-icon">
                                        <?php else: ?>
                                            <img src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                 alt="<?php echo e(@$user->first_name); ?>" id="img_banner"
                                                 class="img-thumbnail site-icon ">
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group seo-image-positoin">
                                    <label for="thumbnail"><?php echo e(__('Shop Page Banner')); ?>(<?php echo e(__('1905*350')); ?>)</label>
                                    <div class="form-group">
                                        <div class="input-group gallery-modal" id="btnSubmit"
                                             data-for="image" data-selection="single"
                                             data-target="#galleryModal" data-dismiss="modal">
                                            <input type="hidden" name="shop_banner"
                                                   value="<?php echo e(old('shop_banner') !='' ? old('shop_banner') :  @$user->sellerProfile->shop_banner_id); ?>"
                                                   class="image-selected">
                                            <span class="form-control"><span
                                                        class="counter"><?php echo e(old('shop_banner') != '' ? substr_count(old('shop_banner'), ',') + 1  : ( @$user->sellerProfile->shop_banner_id != '' ? substr_count( @$user->sellerProfile->shop_banner_id, ',') + 1 : 0)); ?></span> <?php echo e(__('file chosen')); ?></span>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <?php echo e(__('Choose File')); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="selected-media-box">
                                            <div class="mt-2 gallery gallery-md d-flex">
                                                <?php
                                                    $thumb = old('shop_banner') ? old('shop_banner') :  @$user->sellerProfile->shop_banner_id;
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

                                <div class="form-group">
                                    <label for="meta_title"><?php echo e(__('Meta Title')); ?></label>
                                    <input type="text" id="meta_title" name="meta_title"
                                           value="<?php echo e(old('meta_title') ? old('meta_title') : @$user->sellerProfile->meta_title); ?>"
                                           class="form-control">
                                    <?php if($errors->has('meta_title')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('meta_title')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="meta_description"><?php echo e(__('Meta Description')); ?></label>
                                    <textarea class="form-control" name="meta_description" id="meta_description"
                                              value="<?php echo e(old('meta_description')); ?>"
                                              placeholder="<?php echo e(__('Description')); ?>"><?php echo e(@$user->sellerProfile->meta_description); ?></textarea>
                                    <?php if($errors->has('meta_description')): ?>
                                        <div class="invalid-feedback">
                                            <p><?php echo e($errors->first('meta_description')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                        <?php echo e($button_name); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
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
<?php $__env->startPush('page-script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/dropzone.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('admin/js/countries.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', "#show_hide_password a", function (event) {
                event.preventDefault();
                let selector = $('#show_hide_password input');
                let type = selector.attr('type');
                if (type == "text") {
                    selector.attr('type', 'password');
                    $('#show_hide_password i').addClass("mdi-eye-off").removeClass("mdi-eye");
                } else if (type == "password") {
                    selector.attr('type', 'text');
                    $('#show_hide_password i').removeClass("mdi-eye-off").addClass("mdi-eye");
                }
            });
            $(document).on('click', "#show_hide_confirm_password a", function (event) {
                event.preventDefault();
                let selector = $('#show_hide_confirm_password input');
                let type = selector.attr('type');
                if (type == "text") {
                    selector.attr('type', 'password');
                    $('#show_hide_confirm_password i').addClass("mdi-eye-off").removeClass("mdi-eye");
                } else if (type == "password") {
                    selector.attr('type', 'text');
                    $('#show_hide_confirm_password i').removeClass("mdi-eye-off").addClass("mdi-eye");
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/sellers/form.blade.php ENDPATH**/ ?>