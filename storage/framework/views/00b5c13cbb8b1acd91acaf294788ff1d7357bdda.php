
<?php $__env->startSection('otp_setting_menu'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('otp_setting'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Otp Setting')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('SMS Providers')); ?></h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('sms_method') == '' ? 'active' : ''); ?>" id="setting-tab" data-toggle="tab" href="#setting" role="tab"
                                       aria-controls="home"
                                       aria-selected="true"><?php echo e(__('Setting')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e((old('sms_method') == 'smscountry') ? 'active' : ''); ?>" id="twilio-tab" data-toggle="tab" href="#smscountry" role="tab"
                                       aria-controls="home"
                                       aria-selected="true"><?php echo e(__('SMS Country')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e((old('sms_method') == 'twilio') ? 'active' : ''); ?>" id="twilio-tab" data-toggle="tab" href="#twilio" role="tab"
                                       aria-controls="home"
                                       aria-selected="true"><?php echo e(__('Twilio')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('sms_method') == 'fast_2' ? 'active' : ''); ?>"
                                       id="fast-sms-tab" data-toggle="tab" href="#fast-2sms" role="tab"
                                       aria-controls="contact"
                                       aria-selected="false"><?php echo e(__('Fast 2SMS')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('sms_method') == 'spagreen_sms' ? 'active' : ''); ?>"
                                       id="spagreen-sms-tab" data-toggle="tab" href="#spagreen-sms" role="tab"
                                       aria-controls="contact"
                                       aria-selected="false"><?php echo e(__('REVE Systems')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('sms_method') == 'mimo_sms' ? 'active' : ''); ?>" id="mimo-tab" data-toggle="tab" href="#mimo" role="tab"
                                       aria-controls="contact"
                                       aria-selected="false"><?php echo e(__('MIMO')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('sms_method') == 'nexmo_sms' ? 'active' : ''); ?>" id="nexmo-tab" data-toggle="tab" href="#nexmo" role="tab"
                                       aria-controls="profile"
                                       aria-selected="false"><?php echo e(__('Nexmo')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('sms_method') == 'ssl_wireless' ? 'active' : ''); ?>" id="ssl-wireless-tab" data-toggle="tab" href="#ssl-wireless"
                                       role="tab" aria-controls="contact"
                                       aria-selected="false"><?php echo e(__('SSL Wireless')); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content no-padding" id="myTab2Content">

                        
                        <div class="tab-pane fade <?php echo e(old('sms_method') == '' ? 'show active' : ''); ?>" id="setting" role="tabpanel"
                             aria-labelledby="setting-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Setting')); ?></h4>
                                </div>
                                <div class="col-md-10 middle card-body card-body-paddding">
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                    <form action="<?php echo e(route('admin.setting.otp.update')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo method_field('put'); ?>
                                        <?php echo csrf_field(); ?>
                                    <?php endif; ?>
                                        <div class="form-group">
                                            <label for="fast_2_route"><?php echo e(__('Active SMS Provider')); ?></label>
                                            <select name="active_sms_provider" class="form-control selectric" id="active_sms_provider">
                                                <option value=""><?php echo e(__('Select Provider')); ?></option>
                                                <?php if(settingHelper('is_twilio_sms_activated') == 1): ?>
                                                    <option value="twilio" <?php echo e(settingHelper('active_sms_provider') == 'twilio' ? 'selected' : ''); ?>><?php echo e(__('Twilio')); ?></option>
                                                <?php endif; ?>
                                                <?php if(settingHelper('is_smscountry_activated') == 1): ?>
                                                    <option value="smscountry" <?php echo e(settingHelper('active_sms_provider') == 'fast_2' ? 'selected' : ''); ?>><?php echo e(__('SMS Country')); ?></option>
                                                <?php endif; ?>
                                                <?php if(settingHelper('is_fast_2_activated') == 1): ?>
                                                    <option value="fast_2" <?php echo e(settingHelper('active_sms_provider') == 'fast_2' ? 'selected' : ''); ?>><?php echo e(__('Fast 2SMS')); ?></option>
                                                <?php endif; ?>
                                                <?php if(settingHelper('is_spagreen_sms_activated') == 1): ?>
                                                    <option value="spagreen" <?php echo e(settingHelper('active_sms_provider') == 'spagreen' ? 'selected' : ''); ?>><?php echo e(__('SpaGreen')); ?></option>
                                                <?php endif; ?>
                                                <?php if(settingHelper('is_mimo_sms_activated') == 1): ?>
                                                    <option value="mimo" <?php echo e(settingHelper('active_sms_provider') == 'mimo' ? 'selected' : ''); ?>><?php echo e(__('Mimo')); ?></option>
                                                <?php endif; ?>
                                                <?php if(settingHelper('is_nexmo_sms_activated') == 1): ?>
                                                    <option value="nexmo" <?php echo e(settingHelper('active_sms_provider') == 'nexmo' ? 'selected' : ''); ?>><?php echo e(__('Nexmo')); ?></option>
                                                <?php endif; ?>
                                                <?php if(settingHelper('is_ssl_wireless_sms_activated') == 1): ?>
                                                    <option value="ssl_wireless" <?php echo e(settingHelper('active_sms_provider') == 'ssl_wireless' ? 'selected' : ''); ?>><?php echo e(__('SSL Wireless')); ?></option>
                                                <?php endif; ?>
                                            </select>
                                            <?php if($errors->has('active_sms_provider')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('active_sms_provider')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        <?php if(hasPermission('otp_setting_update')): ?>
                                        <div class="form-group text-right">
                                            <button class="btn btn-icon icon-left btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                     </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade <?php echo e(old('sms_method') == 'smscountry' ? 'show active' : ''); ?>" id="smscountry" role="tabpane1" aria-labelledby="smscountry-tab">
                       <div class="card">
                           <div class="card-header extra-padding">
                               <h4><?php echo e(__('Fast 2SMS Credential')); ?></h4>
                           </div>
                           <div class="form-group">
                               <?php if(settingHelper('is_smscountry_activated') == 1): ?>
                                   <a href="<?php echo e(route('test.number','smscountry')); ?>" class="btn btn-outline-primary currency-add-btn cache-btn " type="button"><?php echo e(__('Test Number')); ?></a>
                               <?php endif; ?>
                           </div>
                           <div class="col-md-10 middle card-body card-body-paddding">
                               <div class="form-group">
                                   <label class="custom-switch mt-2 <?php echo e(hasPermission('otp_setting_update') ? '' : 'cursor-not-allowed'); ?>">
                                       <input type="checkbox" name="custom-switch-checkbox" value="sms-status-change/<?php echo e('is_smscountry_activated'); ?>"
                                               <?php echo e(hasPermission('otp_setting_update') ? '' : 'disabled'); ?>

                                              class="<?php echo e(hasPermission('otp_setting_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_smscountry_activated') == 1 ? 'checked' : ''); ?> />
                                       <span class="custom-switch-indicator"></span>
                                       <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                   </label>
                                   <?php $__currentLoopData = get_yrsetting('is_smscountry_activated'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php if(!settingHelper( $title)): ?>
                                           <label class="col-md-9 col-from-label activator-notice">
                                               <div class="invalid-feedback text-danger">
                                                   <?php echo e(__("N.B: You can active this service when you will configure SMSCountry credentials .")); ?>

                                               </div>
                                           </label>
                                           <?php break; ?>
                                       <?php endif; ?>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </div>
                               <?php if(hasPermission('otp_setting_update')): ?>
                                <form action="<?php echo e(route('admin.setting.otp.update')); ?>" method="post"
                                   enctype="multipart/form-data">
                                   <?php echo method_field('put'); ?>
                                   <?php echo csrf_field(); ?>
                               <?php endif; ?>
                                   <div class="form-group">
                                       <label for="smscountry_auth_key"><?php echo e(__('Auth Key')); ?> *</label>
                                       <input type="hidden" name="sms_method" value="smscountry">
                                       <input type="text" name="smscountry_auth_key" id="smscountry_auth_key"
                                              value="<?php echo e(old('smscountry_auth_key') ? old('smscountry_auth_key') : settingHelper('smscountry_auth_key')); ?>"
                                              placeholder="AVcDEljksadj"
                                              class="form-control">
                                       <?php if($errors->has('smscountry_auth_key')): ?>
                                           <div class="invalid-feedback">
                                               <?php echo e($errors->first('smscountry_auth_key')); ?>

                                           </div>
                                       <?php endif; ?>
                                   </div>
                               
                                   <?php if(hasPermission('otp_setting_update')): ?>
                                   <div class="form-group text-right">
                                       <button class="btn btn-icon icon-left btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                   </div>
                                   <?php endif; ?>
                               <?php if(hasPermission('otp_setting_update')): ?>
                                 </form>
                               <?php endif; ?>
                           </div>
                       </div>
                   </div>

                        <div class="tab-pane fade <?php echo e(old('sms_method') == 'fast_2' ? 'show active' : ''); ?>"
                             id="fast-2sms" role="tabpane1"
                             aria-labelledby="fast-sms-tab">
                            <div class="card">
                                <div class="card-header extra-padding">
                                    <h4><?php echo e(__('Fast 2SMS Credential')); ?></h4>
                                </div>
                                <div class="form-group">
                                    <?php if(settingHelper('is_fast_2_activated') == 1): ?>
                                        <a href="<?php echo e(route('test.number','fast2')); ?>" class="btn btn-outline-primary currency-add-btn cache-btn " type="button"><?php echo e(__('Test Number')); ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-10 middle card-body card-body-paddding">
                                    <div class="form-group">
                                        <label class="custom-switch mt-2 <?php echo e(hasPermission('otp_setting_update') ? '' : 'cursor-not-allowed'); ?>">
                                            <input type="checkbox" name="custom-switch-checkbox" value="sms-status-change/<?php echo e('is_fast_2_activated'); ?>"
                                                    <?php echo e(hasPermission('otp_setting_update') ? '' : 'disabled'); ?>

                                                   class="<?php echo e(hasPermission('otp_setting_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_fast_2_activated') == 1 ? 'checked' : ''); ?> />
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                        </label>
                                        <?php $__currentLoopData = get_yrsetting('is_fast_2_activated'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!settingHelper( $title)): ?>
                                                <label class="col-md-9 col-from-label activator-notice">
                                                    <div class="invalid-feedback text-danger">
                                                        <?php echo e(__("N.B: You can active this service when you will configure Fast2SMS credentials .")); ?>

                                                    </div>
                                                </label>
                                                <?php break; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                     <form action="<?php echo e(route('admin.setting.otp.update')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo method_field('put'); ?>
                                        <?php echo csrf_field(); ?>
                                    <?php endif; ?>
                                        <div class="form-group">
                                            <label for="fast_2_auth_key"><?php echo e(__('Auth Key')); ?> *</label>
                                            <input type="hidden" name="sms_method" value="fast_2">
                                            <input type="text" name="fast_2_auth_key" id="fast_2_auth_key"
                                                   value="<?php echo e(old('fast_2_auth_key') ? old('fast_2_auth_key') : settingHelper('fast_2_auth_key')); ?>"
                                                   placeholder="AVcDEljksadj"
                                                   class="form-control">
                                            <?php if($errors->has('fast_2_auth_key')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('fast_2_auth_key')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="fast_2_entity_id"><?php echo e(__('Entity ID')); ?> *</label>
                                            <input type="text" name="fast_2_entity_id" id="fast_2_entity_id"
                                                   value="<?php echo e(old('fast_2_entity_id') ? old('fast_2_entity_id') : settingHelper('fast_2_entity_id')); ?>"
                                                   placeholder="A912078"
                                                   class="form-control">
                                            <?php if($errors->has('fast_2_entity_id')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('fast_2_entity_id')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fast_2_route"><?php echo e(__('Route')); ?></label>
                                                <select name="fast_2_route" class="form-control selectric"
                                                        id="fast_2_route">
                                                    <option
                                                        value="dlt_manual" <?php echo e(old('fast_2_route') == 'dlt_manual' ? 'selected' : (settingHelper('fast_2_route') == 'dlt_manual' ? 'selected' : '')); ?>><?php echo e(__('DLT Menual')); ?></option>
                                                    <option
                                                        value="promotional_use" <?php echo e(old('fast_2_route') == 'promotional_use' ? 'selected' : (settingHelper('fast_2_route') == 'promotional_use' ? 'selected' : '')); ?>><?php echo e(__('Promotional Use')); ?></option>
                                                    <option
                                                        value="transactional_use" <?php echo e(old('fast_2_route') == 'transactional_use' ? 'selected' : (settingHelper('fast_2_route') == 'transactional_use' ? 'selected' : '')); ?>><?php echo e(__('Transactional Use')); ?></option>
                                                </select>
                                                <?php if($errors->has('fast_2_route')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('fast_2_route')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="fast_2_language"><?php echo e(__('Language')); ?> *</label>
                                                <select name="fast_2_language" class="form-control selectric"
                                                        id="fast_2_language">
                                                    <option
                                                        value="english" <?php echo e(old('fast_2_language') == 'english' ? 'selected' : (settingHelper('fast_2_language') == 'english' ? 'selected' : '')); ?>><?php echo e(__('English')); ?></option>
                                                    <option
                                                        value="unicode" <?php echo e(old('fast_2_language') == 'unicode' ? 'selected' : (settingHelper('fast_2_language') == 'unicode' ? 'selected' : '')); ?>><?php echo e(__('Unicode')); ?></option>
                                                </select>
                                                <?php if($errors->has('fast_2_language')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('fast_2_language')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fast_2_sender_id"><?php echo e(__('Sender ID')); ?></label>
                                            <input type="text" name="fast_2_sender_id" id="fast_2_sender_id"
                                                   value="<?php echo e(old('fast_2_sender_id') ? old('fast_2_sender_id') : settingHelper('fast_2_sender_id')); ?>"
                                                   placeholder="C1054035"
                                                   class="form-control">
                                            <?php if($errors->has('fast_2_sender_id')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('fast_2_sender_id')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(hasPermission('otp_setting_update')): ?>
                                        <div class="form-group text-right">
                                            <button class="btn btn-icon icon-left btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                      </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('sms_method') == 'spagreen_sms' ? 'show active' : ''); ?>"
                             id="spagreen-sms" role="tabpane6"
                             aria-labelledby="spagreen-sms-tab">
                            <div class="card">
                                <div class="card-header extra-padding">
                                    <h4><?php echo e(__('REVE Systems Credential')); ?></h4>
                                </div>
                                <div class="form-group">
                                    <?php if(settingHelper('is_spagreen_sms_activated') == 1): ?>
                                        <a href="<?php echo e(route('test.number','spagreen')); ?>" class="btn btn-outline-primary currency-add-btn cache-btn " type="button"><?php echo e(__('Test Number')); ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-10 middle card-body card-body-paddding">
                                    <div class="form-group">
                                        <label class="custom-switch mt-2 <?php echo e(hasPermission('otp_setting_update') ? '' : 'cursor-not-allowed'); ?>">
                                            <input type="checkbox"
                                                   name="custom-switch-checkbox"
                                                   value="sms-status-change/<?php echo e('is_spagreen_sms_activated'); ?>"
                                                   <?php echo e(hasPermission('otp_setting_update') ? '' : 'disabled'); ?>

                                                   class=" <?php echo e(hasPermission('otp_setting_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_spagreen_sms_activated') == 1 ? 'checked' : ''); ?> />
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                        </label>
                                        <?php $__currentLoopData = get_yrsetting('is_spagreen_sms_activated'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!settingHelper( $title)): ?>
                                                <label class="col-md-9 col-from-label activator-notice">
                                                    <div class="invalid-feedback text-danger">
                                                        <?php echo e(__("REVE Systems SMS credentials.")); ?>

                                                    </div>
                                                </label>
                                                <?php break; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                     <form action="<?php echo e(route('admin.setting.otp.update')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo method_field('put'); ?>
                                        <?php echo csrf_field(); ?>
                                    <?php endif; ?>
                                         <div class="form-group">
                                             <label for="spagreen_sms_api_key"><?php echo e(__('REVE Systems Api Key')); ?> *</label>
                                             <input type="text" name="spagreen_sms_api_key" id="spagreen_sms_api_key"
                                                    value="<?php echo e(old('spagreen_sms_api_key') ? old('spagreen_sms_api_key') : settingHelper('spagreen_sms_api_key')); ?>" placeholder="Wbla87d"
                                                    class="form-control">
                                             <input type="hidden" name="sms_method" value="spagreen_sms">
                                             <?php if($errors->has('spagreen_sms_api_key')): ?>
                                                 <div class="invalid-feedback">
                                                     <?php echo e($errors->first('spagreen_sms_api_key')); ?>

                                                 </div>
                                             <?php endif; ?>
                                         </div>
                                        <div class="form-group">
                                            <label for="spagreen_secret_key"><?php echo e(__('REVE Systems Secret')); ?> *</label>
                                            <input type="text" name="spagreen_secret_key" id="spagreen_secret_key"
                                                   value="<?php echo e(old('spagreen_secret_key') ? old('spagreen_secret_key') : settingHelper('spagreen_secret_key')); ?>" placeholder="A15di6"
                                                   class="form-control">
                                            <?php if($errors->has('spagreen_secret_key')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('spagreen_secret_key')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(hasPermission('otp_setting_update')): ?>
                                        <div class="form-group text-right">
                                            <button class="btn btn-icon icon-left btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                    </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('sms_method') == 'mimo_sms' ? 'show active' : ''); ?>" id="mimo" role="tabpane5"
                             aria-labelledby="mimo-tab">
                            <div class="card">
                                <div class="card-header extra-padding">
                                    <h4><?php echo e(__('MIMO Credential')); ?></h4>
                                </div>
                                <div class="form-group">
                                    <?php if(settingHelper('is_mimo_sms_activated') == 1): ?>
                                        <a href="<?php echo e(route('test.number','mimo')); ?>" class="btn btn-outline-primary currency-add-btn cache-btn " type="button"><?php echo e(__('Test Number')); ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-10 middle card-body card-body-paddding">
                                    <div class="form-group">
                                        <label class="custom-switch mt-2 <?php echo e(hasPermission('otp_setting_update') ? '' : 'cursor-not-allowed'); ?>">
                                            <input type="checkbox"
                                                   name="custom-switch-checkbox"
                                                   value="sms-status-change/<?php echo e('is_mimo_sms_activated'); ?>"
                                                   <?php echo e(hasPermission('otp_setting_update') ? '' : 'disabled'); ?>

                                                   class=" <?php echo e(hasPermission('otp_setting_update') ? 'status-change' : ''); ?> custom-switch-input" <?php echo e(settingHelper('is_mimo_sms_activated') == 1 ? 'checked' : ''); ?> />
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                        </label>
                                        <?php $__currentLoopData = get_yrsetting('is_mimo_sms_activated'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!settingHelper( $title)): ?>
                                                <label class="col-md-9 col-from-label activator-notice">
                                                    <div class="invalid-feedback text-danger">
                                                        <?php echo e(__("N.B: You can active this service when you will configure Mimo SMS credentials .")); ?>

                                                    </div>
                                                </label>
                                                <?php break; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                    <form action="<?php echo e(route('admin.setting.otp.update')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo method_field('put'); ?>
                                        <?php echo csrf_field(); ?>
                                    <?php endif; ?>
                                        <div class="form-group">
                                            <label for="mimo_username"><?php echo e(__('MIMO Username')); ?> *</label>
                                            <input type="hidden" name="sms_method" value="mimo_sms">
                                            <input type="text" name="mimo_username" id="mimo_username" value="<?php echo e(old('mimo_username') ? old('mimo_username') : settingHelper('mimo_username')); ?>" placeholder="manik1010"
                                                   class="form-control">
                                            <?php if($errors->has('mimo_username')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('mimo_username')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="mimo_sms_password"><?php echo e(__('MIMO Password')); ?> *</label>
                                            <input type="password" name="mimo_sms_password" id="mimo_sms_password" value="<?php echo e(old('mimo_sms_password') ? old('mimo_sms_password') : settingHelper('mimo_sms_password')); ?>" placeholder="********"
                                                   class="form-control">
                                            <?php if($errors->has('mimo_sms_password')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('mimo_sms_password')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="mimo_sms_sender_id"><?php echo e(__('MIMO Sender ID')); ?> *</label>
                                            <input type="text" name="mimo_sms_sender_id" id="mimo_sms_sender_id" value="<?php echo e(old('mimo_sms_sender_id') ? old('mimo_sms_sender_id') : settingHelper('mimo_sms_sender_id')); ?>" placeholder="B8h30"
                                                   class="form-control">
                                            <?php if($errors->has('mimo_sms_sender_id')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('mimo_sms_sender_id')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(hasPermission('otp_setting_update')): ?>
                                        <div class="form-group text-right">
                                            <button class="btn btn-icon icon-left btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                     </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('sms_method') == 'nexmo_sms' ? 'show active' : ''); ?>" id="nexmo" role="tabpane2"
                             aria-labelledby="nexmo-tab">
                            <div class="card">
                                <div class="card-header extra-padding">
                                    <h4><?php echo e(__('Nexmo Credential')); ?></h4>
                                </div>
                                <div class="form-group">
                                    <?php if(!blank(settingHelper('is_nexmo_sms_activated')) && settingHelper('is_nexmo_sms_activated') == 1): ?>
                                        <a href="<?php echo e(route('test.number','nexmo')); ?>" class="btn btn-outline-primary currency-add-btn cache-btn " type="button"><?php echo e(__('Test Number')); ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-10 middle card-body card-body-paddding">
                                    <div class="form-group">
                                        <label class="custom-switch mt-2 <?php echo e(hasPermission('otp_setting_update') ? '' : 'cursor-not-allowed'); ?>">
                                            <input type="checkbox"
                                                   name="custom-switch-checkbox"
                                                   value="sms-status-change/<?php echo e('is_nexmo_sms_activated'); ?>"
                                                   <?php echo e(hasPermission('otp_setting_update') ? '' : 'disabled'); ?>

                                                   class="<?php echo e(hasPermission('otp_setting_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_nexmo_sms_activated') == 1 ? 'checked' : ''); ?> />
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                        </label>
                                        <?php $__currentLoopData = get_yrsetting('is_nexmo_sms_activated'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!settingHelper( $title)): ?>
                                                <label class="col-md-9 col-from-label activator-notice">
                                                    <div class="invalid-feedback text-danger">
                                                        <?php echo e(__("N.B: You can active this service when you will configure Nexmo SMS credentials .")); ?>

                                                    </div>
                                                </label>
                                                <?php break; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                     <form action="<?php echo e(route('admin.setting.otp.update')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo method_field('put'); ?>
                                        <?php echo csrf_field(); ?>
                                    <?php endif; ?>
                                        <div class="form-group">
                                            <label for="nexmo_sms_key"><?php echo e(__('Nexmo Key')); ?> *</label>
                                            <input type="hidden" name="sms_method" value="nexmo_sms">
                                            <input type="text" name="nexmo_sms_key" id="nexmo_sms_key" value="<?php echo e(old('nexmo_sms_key') ? old('nexmo_sms_key') : settingHelper('nexmo_sms_key')); ?>" placeholder="T9lkgfjds"
                                                   class="form-control">
                                            <?php if($errors->has('nexmo_sms_key')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('nexmo_sms_key')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nexmo_sms_secret_key"><?php echo e(__('Nexmo Secret')); ?> *</label>
                                            <input type="password" name="nexmo_sms_secret_key" id="nexmo_sms_secret_key" value="<?php echo e(old('nexmo_sms_secret_key') ? old('nexmo_sms_secret_key') : settingHelper('nexmo_sms_secret_key')); ?>" placeholder="Fb9532d"
                                                   class="form-control">
                                            <input type="hidden" name="type" value="nexmo"/>
                                            <?php if($errors->has('nexmo_sms_secret_key')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('nexmo_sms_secret_key')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(hasPermission('otp_setting_update')): ?>
                                        <div class="form-group text-right">
                                            <button class="btn btn-icon icon-left btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                    </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('sms_method') == 'twilio' ? 'show active' : ''); ?>" id="twilio" role="tabpanel"
                             aria-labelledby="twilio-tab">
                            <div class="card">
                                <div class="card-header extra-padding">
                                    <h4><?php echo e(__('Twilio Credential')); ?></h4>
                                </div>
                                    <?php if(settingHelper('is_twilio_sms_activated') == 1): ?>
                                        <a href="<?php echo e(route('test.number','twilio')); ?>" class="btn btn-outline-primary currency-add-btn cache-btn " type="button"><?php echo e(__('Test Number')); ?></a>
                                    <?php endif; ?>
                                <div class="col-md-10 middle card-body card-body-paddding">
                                    <div class="form-group">
                                        <label class="custom-switch <?php echo e(hasPermission('otp_setting_update') ? '' : 'cursor-not-allowed'); ?>">
                                            <input  type="checkbox" value="sms-status-change/<?php echo e('is_twilio_sms_activated'); ?>" name="custom-switch-checkbox"
                                                    <?php echo e(hasPermission('otp_setting_update') ? '' : 'disabled'); ?>

                                                    class="<?php echo e(hasPermission('otp_setting_update') ? 'status-change' : ''); ?> custom-switch-input" <?php echo e(settingHelper('is_twilio_sms_activated') == 1 ? 'checked' : ''); ?>>
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                        </label>
                                        <?php $__currentLoopData = get_yrsetting('is_twilio_sms_activated'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!settingHelper( $title)): ?>
                                                <label class="col-md-9 col-from-label activator-notice">
                                                    <div class="invalid-feedback text-danger">
                                                        <?php echo e(__("N.B: You can active this service when you will configure Twilio credentials .")); ?>

                                                    </div>
                                                </label>
                                                <?php break; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                        <?php if(hasPermission('otp_setting_update')): ?>
                                        <form action="<?php echo e(route('admin.setting.otp.update')); ?>" method="post"
                                            enctype="multipart/form-data">
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                        <?php endif; ?>
                                        <div class="form-group">
                                            <label for="twilio_sms_sid"><?php echo e(__('Twilio SID')); ?> *</label>
                                            <input type="hidden" name="sms_method" value="twilio">
                                            <input type="text" name="twilio_sms_sid" id="twilio_sms_sid" value="<?php echo e(old('twilio_sms_sid') ? old('twilio_sms_sid') : settingHelper('twilio_sms_sid')); ?>" placeholder="Ylsdfoie"
                                                   class="form-control">
                                            <?php if($errors->has('twilio_sms_sid')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('twilio_sms_sid')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="twilio_sms_auth_token"><?php echo e(__('Twilio Auth Token')); ?> *</label>
                                            <input type="text" name="twilio_sms_auth_token" id="twilio_sms_auth_token" value="<?php echo e(old('twilio_sms_auth_token') ? old('twilio_sms_auth_token') : settingHelper('twilio_sms_auth_token')); ?>" placeholder="OlOlsdfj"
                                                   class="form-control">
                                            <?php if($errors->has('twilio_sms_auth_token')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('twilio_sms_auth_token')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>











                                        <div class="form-group">
                                            <label for="valid_twilio_sms_number"><?php echo e(__('Valid Twilio Number')); ?> *</label>
                                            <input type="text" name="valid_twilio_sms_number" id="valid_twilio_sms_number" value="<?php echo e(old('valid_twilio_sms_number') ? old('valid_twilio_sms_number') : settingHelper('valid_twilio_sms_number')); ?>" placeholder="A30531014"
                                                   class="form-control">
                                            <?php if($errors->has('valid_twilio_sms_number')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('valid_twilio_sms_number')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(hasPermission('otp_setting_update')): ?>
                                        <div class="form-group text-right">
                                            <button class="btn btn-icon icon-left btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e((old('sms_method') == 'ssl_wireless') ? 'show active' : ''); ?>"
                             id="ssl-wireless" role="tabpane3"
                             aria-labelledby="ssl-wireless-tab">
                            <div class="card">
                                <div class="card-header extra-padding">
                                    <h4><?php echo e(__('SSL Wireless Credential')); ?></h4>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <?php if(settingHelper('is_ssl_wireless_sms_activated') == 1): ?>
                                            <a href="<?php echo e(route('test.number','ssl')); ?>" class="btn btn-outline-primary currency-add-btn cache-btn " type="button"><?php echo e(__('Test Number')); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-10 middle card-body card-body-paddding tab-padding">
                                    <div class="form-group">
                                        <label class="custom-switch mt-2 <?php echo e(hasPermission('otp_setting_update') ? '' : 'cursor-not-allowed'); ?>">
                                            <input type="checkbox"
                                                   name="custom-switch-checkbox"
                                                   value="sms-status-change/<?php echo e('is_ssl_wireless_sms_activated'); ?>"
                                                   <?php echo e(hasPermission('otp_setting_update') ? '' : 'disabled'); ?>

                                                   class="<?php echo e(hasPermission('otp_setting_update') ? 'status-change' : ''); ?> custom-switch-input " <?php echo e(settingHelper('is_ssl_wireless_sms_activated') == 1 ? 'checked' : ''); ?> />
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                        </label>
                                        <?php $__currentLoopData = get_yrsetting('is_ssl_wireless_sms_activated'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!settingHelper( $title)): ?>
                                                <label class="col-md-9 col-from-label activator-notice">
                                                    <div class="invalid-feedback text-danger">
                                                        <?php echo e(__("N.B: You can active this service when you will configure SSL Wireless credentials .")); ?>

                                                    </div>
                                                </label>
                                                <?php break; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php if(hasPermission('otp_setting_update')): ?>
                                     <form action="<?php echo e(route('admin.setting.otp.update')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo method_field('put'); ?>
                                        <?php echo csrf_field(); ?>
                                    <?php endif; ?>
                                        <div class="form-group">
                                            <label for="ssl_sms_api_token"><?php echo e(__('SSL SMS API Token')); ?> *</label>
                                            <input type="hidden" name="sms_method" value="ssl_wireless">
                                            <input type="text" name="ssl_sms_api_token" id="ssl_sms_api_token" value="<?php echo e(old('ssl_sms_api_token') ? old('ssl_sms_api_token') : settingHelper('ssl_sms_api_token')); ?>" placeholder="CDfawefCAFEAWf"
                                                   class="form-control">
                                            <?php if($errors->has('ssl_sms_api_token')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('ssl_sms_api_token')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="ssl_sms_sid"><?php echo e(__('SSL SMS SID')); ?> *</label>
                                            <input type="text" name="ssl_sms_sid" id="ssl_sms_sid" value="<?php echo e(old('ssl_sms_sid') ? old('ssl_sms_sid') : settingHelper('ssl_sms_sid')); ?>" placeholder="Djkd120"
                                                   class="form-control">
                                            <?php if($errors->has('ssl_sms_sid')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('ssl_sms_sid')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="ssm_sms_url"><?php echo e(__('SSL SMS URL')); ?> *</label>
                                            <input type="text" name="ssm_sms_url" id="ssm_sms_url" value="<?php echo e(old('ssm_sms_url') ? old('ssm_sms_url') : settingHelper('ssm_sms_url')); ?>" placeholder="Jeiwrujfs"
                                                   class="form-control">
                                            <?php if($errors->has('ssm_sms_url')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('ssm_sms_url')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(hasPermission('otp_setting_update')): ?>
                                        <div class="form-group text-right">
                                            <button class="btn btn-icon icon-left btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    <?php if(hasPermission('otp_Setting_update')): ?>
                                     </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.common-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/settings/otp/index.blade.php ENDPATH**/ ?>