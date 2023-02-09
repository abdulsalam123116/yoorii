

<?php
$route = isset($user) ? route('customer.update') : route('customer.store');
$title = isset($user) ? __('Edit') : __('Add');
$button_name = isset($user) ? __('Update') : __('Add');
?>

<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?> <?php echo e(__('Customer')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('customers'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e($title); ?> <?php echo e(__('Customer')); ?></h2>
                </div>
                <div class="buttons add-button">
                    <a href="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>" class="btn btn-icon icon-left btn-outline-primary"><i
                            class="bx bx-arrow-back"></i><?php echo e(__('Back')); ?></a>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-8 middle">
                <div class="card">
                    <form action="<?php echo e($route); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php if(isset($user)): ?>
                            <?php echo method_field('PUT'); ?>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body card-body-paddding phone-block">
                                    <div class="form-group">
                                        <label for="first_name"> <?php echo e(__('First Name')); ?> </label>
                                        <input type="hidden" value="<?php echo e(@$user->id); ?>" name="id">
                                        <input type="hidden" value="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>" name="r">
                                        <input type="text" name="first_name" id="first_name" placeholder="<?php echo e(__('First Name')); ?>"
                                               value="<?php echo e(old('first_name') ? old('first_name') : @$user->first_name); ?>"
                                               class="form-control">
                                        <?php if($errors->has('first_name')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('first_name')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name"><?php echo e(__('Last Name')); ?> </label>
                                        <input type="text" id="last_name" name="last_name"
                                               value="<?php echo e(old('last_name') ? old('last_name') : @$user->last_name); ?>" placeholder="<?php echo e(__('Last Name')); ?>"
                                               class="form-control">
                                        <?php if($errors->has('last_name')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('last_name')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <?php echo $__env->make('admin.partials.tel-input',[
                                                                                'name' => 'phone',
                                                                                'value' => old('phone') ? : @$user->phone,
                                                                                'label' => __('Phone'),
                                                                                'class' => 'form-control',
                                                                                'id' => 'phone',
                                                                                'country_id_field' => 'country_id',
                                                                                'country_id' => old('country_id') ? : (@$user->country_id ?? settingHelper('default_country'))
                                                                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="email"><?php echo e(__('Email')); ?> </label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="<?php echo e(__('Email')); ?>"
                                               value="<?php echo e(old('email') ? old('email') : (isDemoServer() && isset($user->email) ? emailAddressMask($user->email) : @$user->email)); ?>">
                                        <?php if($errors->has('email')): ?>
                                            <div class="invalid-feedback">
                                                <p><?php echo e($errors->first('email')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><?php echo e(__('Password')); ?> </label>
                                        <div class="input-group sohide_ico_pos" id="show_hide_password">
                                            <input type="password" name="password" class="form-control" placeholder="<?php echo e(__('Password')); ?>">
                                            <div class="input-group-addon">
                                                <a href=""><i class='mdi mdi-eye-off'></i></a>
                                            </div>
                                        </div>
                                        <?php if($errors->has('password')): ?>
                                            <div class="invalid-feedback"> <i class="bi bi-eye-slash" id="togglePassword"></i>
                                                <p><?php echo e($errors->first('password')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><?php echo e(__('Confirm Password')); ?> </label>
                                        <div class="input-group sohide_ico_pos" id="show_hide_confirm_password">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="<?php echo e(__('Confirm Password')); ?>">
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
                                        <?php if(@$user->images != [] && @is_file_exists(@$user->images['image_128x128'])): ?>
                                            <img src="<?php echo e(get_media($user->images['image_128x128'])); ?>"
                                                 alt="<?php echo e(@$user->first_name); ?>" id="img_profile"
                                                 class="img-thumbnail user-profile ">
                                        <?php else: ?>
                                            <img src="<?php echo e(static_asset('images/default/user.jpg')); ?>"
                                                 alt="<?php echo e(@$user->first_name); ?>" id="img_profile"
                                                 class="img-thumbnail user-profile">
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?php echo e(__('Profile Image')); ?></label>
                                        <div class="form-group">
                                                <input type="file" class="custom-file-input image_pick file-select"  data-image-for="profile" name="image" id="customFile"
                                                value="<?php echo e(@$user->image_id); ?>" accept="image/*" />
                                                <?php if($errors->has('image')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('image')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php if(isset($user)): ?>
                                        <?php if($user->user_type == 'company'): ?>
                                            <a class="btn btn-icon icon-left btn-outline-primary" href="<?php echo e(static_asset('public/'.$user->license)); ?>" target="_blank" ><i class='mdi mdi-eye' aria-hidden="true"></i> <?php echo e(__('License Trading')); ?></a>
                                            <a class="btn btn-icon icon-left btn-outline-primary" href="<?php echo e(static_asset('public/'.$user->vat)); ?>" target="_blank" ><i class='mdi mdi-eye' aria-hidden="true"></i> <?php echo e(__('Vat')); ?></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                            <?php echo e($button_name); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(static_asset('admin/js/countries.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click',"#show_hide_password a", function(event) {
                event.preventDefault();
                let selector = $('#show_hide_password input');
                let type = selector.attr("type");
                if(type == "text"){
                    $(selector).attr('type', "password");
                    $('#show_hide_password i').addClass( "mdi-eye-off" ).removeClass( "mdi-eye" );
                }else if(type == "password"){
                    $(selector).attr('type', 'text');
                    $('#show_hide_password i').removeClass( "mdi-eye-off" ).addClass( "mdi-eye" );
                }
            });
            $(document).on('click',"#show_hide_confirm_password a", function(event) {
                event.preventDefault();
                let selector = $('#show_hide_confirm_password input');
                let type = selector.attr("type");
                if(type == "text"){
                    selector.attr('type', 'password');
                    $('#show_hide_confirm_password i').addClass( "mdi-eye-off" ).removeClass( "mdi-eye" );
                }else if(type == "password"){
                    selector.attr('type', 'text');
                    $('#show_hide_confirm_password i').removeClass( "mdi-eye-off" ).addClass( "mdi-eye" );
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/customers/form.blade.php ENDPATH**/ ?>