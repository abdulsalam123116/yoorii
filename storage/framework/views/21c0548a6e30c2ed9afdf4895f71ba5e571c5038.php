
<?php $__env->startSection('title'); ?>
    <?php echo e(__('General Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('general_setting_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('setup'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('general'); ?>
    active
<?php $__env->stopSection(); ?>
<?php
    $icon = settingHelper('favicon');
?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('Settings')); ?></h2>
            <div id="output-status"></div>
            <div class="row">
                <?php echo $__env->make('admin.system-setup.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-9 col-sm">
                    <div class="card settings-card" id="settings-card">
                        <div class="card-header">
                            <h4><?php echo e(__('General Settings')); ?></h4>
                        </div>
                        <div class="col-md-10 middle card-body card-body-paddding">
                            <form action="<?php echo e(route('admin.general.setting.update')); ?>" method="post"
                                  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="default_language"><?php echo e(__('Language')); ?></label>
                                            <select class="form-control selectric site-lang" name="site_lang"
                                                    data-title="system_name"
                                                    data-url="<?php echo e(route('system-name-by-lang')); ?>"
                                                    id="site_lang">
                                                <option value=""><?php echo e(__('Select Language')); ?></option>
                                                <?php $__currentLoopData = $available_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($language->locale); ?>"<?php echo e(App::getLocale() == $language->locale ? 'selected' : ''); ?>><?php echo e($language->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('default_language')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('default_language')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="system_name"
                                                   class="form-control-label"><?php echo e(__('System Name')); ?></label>
                                            <input type="text" name="system_name"
                                                   placeholder="<?php echo e(__('Enter site name')); ?>"
                                                   value="<?php echo e(old('system_name') ? old('system_name') : settingHelper('system_name', App::getLocale())); ?>"
                                                   class="form-control" id="system_name"/>
                                            <?php if($errors->has('system_name')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('system_name')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact_email"><?php echo e(__('contact_email')); ?> *</label>
                                            <input type="email" id="contact_email" name="contact_email"
                                                   value="<?php echo e(old('contact_email') ? old('contact_email') : (!isDemoServer() ? settingHelper('contact_email') : '')); ?>"
                                                   class="form-control" required>
                                            <?php if($errors->has('contact_email')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('contact_email')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact_phone"><?php echo e(__('contact_phone')); ?> *</label>
                                            <input type="text" id="contact_phone" name="contact_phone"
                                                   value="<?php echo e(old('contact_phone') ? old('contact_phone') : (!isDemoServer() ? settingHelper('contact_phone') : '')); ?>"
                                                   class="form-control" required>
                                            <?php if($errors->has('contact_phone')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('contact_phone')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="purchase_code"><?php echo e(__('Purchase Code')); ?> *</label>
                                            <input type="text" id="purchase_code" name="purchase_code"
                                                   value="<?php echo e(old('purchase_code') ? old('purchase_code') : (!isDemoServer() ? settingHelper('purchase_code') : '')); ?>"
                                                   class="form-control" required>
                                            <?php if($errors->has('purchase_code')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('purchase_code')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php
                                            $timezone = '';
                                            $default_timezone = \App\Utility\AppSettingUtility::settings()->where('title','default_time_zone')->first();
                                            if ($default_timezone && $default_timezone->timezone)
                                            {
                                                $timezone = $default_timezone->timezone;
                                            }
                                        ?>
                                        <div class="form-group">
                                            <label for="default_time_zone"
                                                   class="form-control-label"><?php echo e(__('Time Zone')); ?></label>
                                            <select class="timezone-by-ajax form-control select2" name="default_time_zone" id="default_time_zone" required>
                                                <option value=""><?php echo e(__('Select Time Zone')); ?></option>

                                                <?php if($timezone): ?>
                                                <option value="<?php echo e($timezone->timezone); ?>"
                                                            selected><?php echo e($timezone->gmt_offset > 0 ? "(UTC +$timezone->gmt_offset)".' '.$timezone->timezone : $timezone->gmt_offset); ?></option>
                                                <?php endif; ?>

                                            </select>
                                            <?php if($errors->has('default_time_zone')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('default_time_zone')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="default_language"><?php echo e(__('Default Language')); ?></label>
                                            <select class="form-control selectric" name="default_language"
                                                    id="default_language">
                                                <option value=""><?php echo e(__('Select Language')); ?></option>
                                                <?php
                                                    $default_language = settingHelper('default_language');
                                                ?>
                                                <?php $__currentLoopData = $available_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($language->locale); ?>"
                                                        <?php echo e($default_language == $language->locale ? 'selected' : ''); ?>><?php echo e($language->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('default_language')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('default_language')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="default_currency"
                                                   class="form-control-label"><?php echo e(__('System Default Currency')); ?></label>
                                            <select class="form-control select2" name="default_currency"
                                                    id="default_currency">
                                                <option value=""><?php echo e(__('Select Currency')); ?></option>
                                                <?php
                                                    $default_currency = settingHelper('default_currency');
                                                ?>
                                                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($value->id); ?>" <?php echo e($default_currency == $value->id ? 'selected' : ''); ?>><?php echo e($value->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('default_currency')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('default_currency')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="default_country"
                                                   class="form-control-label"><?php echo e(__('Country')); ?></label>
                                            <select class="form-control select2" name="default_country"
                                                    id="default_country">
                                                <option value=""><?php echo e(__('Select Country')); ?></option>
                                                <?php
                                                    $default_country = settingHelper('default_country');
                                                ?>
                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($value->id); ?>" <?php echo e($default_country == $value->id ? 'selected' : ''); ?>><?php echo e($value->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('default_country')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('default_country')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="site-icon"><?php echo e(__('Site Icon')); ?> (512x512)</label>
                                            <div class="form-group">
                                                <input type="file" id="site-icon"
                                                       class="custom-file-input image_pick file-select" accept="image/*"
                                                       data-image-for="profile" name="favicon" id="customFile"/>
                                                <?php if($errors->has('favicon')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('favicon')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <?php if(@$icon !=[] && @is_file_exists(@$icon['image_72x72_url'])): ?>
                                                    <img src="<?php echo e(static_asset($icon['image_72x72_url'])); ?>" alt=""
                                                         id="img_profile" class="img-thumbnail site-icon">
                                                <?php else: ?>
                                                    <img
                                                        src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                        alt="site-icon" id="img_profile"
                                                        class="img-thumbnail site-icon ">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-right btn-margin mb-3">
                                        <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                            <?php echo e(__('Update')); ?>

                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/ajax-live-search.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/admin/system-setup/general-settings.blade.php ENDPATH**/ ?>