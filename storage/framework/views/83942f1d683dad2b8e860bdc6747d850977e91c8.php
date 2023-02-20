
<?php $__env->startSection('store_front_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('theme-options'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('theme-options'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Theme-Options')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('Store Front')); ?></h2>
            <div class="row">
                <?php echo $__env->make('admin.store-front.theme-options-sitebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content no-padding" id="myTab2Content">
                        <div class="tab-pane fade show active" id="themeoption" role="tabpane1"
                             aria-labelledby="themeoption-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Theme Options')); ?></h4>
                                </div>
                                <div class="col-md-10 middle card-body">
                                    <form method="POST" action="<?php echo e(route('update')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="primary_color"><?php echo e(__('Primary Color')); ?>*</label>
                                                <div class="input-group colorpickerinput">
                                                    <input type="text" class="form-control" name="primary_color"
                                                           value="<?php echo e(old('primary_color') ? old('primary_color') : settingHelper('primary_color')); ?>"
                                                           id="primary_color" placeholder="<?php echo e(__('Primary Color')); ?>">
                                                    <input type="hidden" name="id" value=""/>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <i class='bx bxs-color-fill'></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($errors->has('primary_color')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('primary_color')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(settingHelper('header_theme') == 'header_theme1'): ?>
                                                <div class="form-group col-md-4">
                                                    <label for="fonts"><?php echo e(__("Full-Width Menu Background")); ?>*</label>
                                                    <select id="fonts" name="full_width_menu_background"
                                                            class="form-control selectric">
                                                        <option value="1"
                                                                <?php if(old('full_width_menu_background') ? old('full_width_menu_background') : settingHelper('full_width_menu_background') == '1'): ?> selected <?php endif; ?>> <?php echo e(__('Yes')); ?></option>
                                                        <option value="0"
                                                                <?php if(old('full_width_menu_background') ? old('full_width_menu_background') : settingHelper('full_width_menu_background') == '0'): ?> selected <?php endif; ?>> <?php echo e(__('No')); ?></option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="menu_background_color"><?php echo e(__('Menu Background Color')); ?>

                                                        *</label>
                                                    <div class="input-group colorpickerinput">
                                                        <input type="text" class="form-control"
                                                               name="menu_background_color"
                                                               value="<?php echo e(old('menu_background_color') ? old('menu_background_color') : settingHelper('menu_background_color')); ?>"
                                                               id="menu_background_color"
                                                               placeholder="<?php echo e(__('Menu Background Color')); ?>">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <i class='bx bxs-color-fill'></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if($errors->has('menu_background_color')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('menu_background_color')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="menu_background_color"><?php echo e(__('Menu Text Color')); ?>

                                                        *</label>
                                                    <div class="input-group colorpickerinput">
                                                        <input type="text" class="form-control" name="menu_text_color"
                                                               value="<?php echo e(old('menu_text_color') ? old('menu_text_color') : settingHelper('menu_text_color')); ?>"
                                                               id="menu_text_color"
                                                               placeholder="<?php echo e(__('Menu Text Color')); ?>">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <i class='bx bxs-color-fill'></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if($errors->has('menu_text_color')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('menu_text_color')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="menu_active_color"><?php echo e(__('Menu Active Color')); ?>

                                                        *</label>
                                                    <div class="input-group colorpickerinput">
                                                        <input type="text" class="form-control" name="menu_active_color"
                                                               value="<?php echo e(old('menu_active_color') ? old('menu_active_color') : settingHelper('menu_active_color')); ?>"
                                                               id="menu_active_color"
                                                               placeholder="<?php echo e(__('Menu Active Color')); ?>">
                                                        <input type="hidden" name="id" value="" require/>
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <i class='bx bxs-color-fill'></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if($errors->has('menu_active_color')): ?>
                                                        <div class="invalid-feedback">
                                                            <p><?php echo e($errors->first('menu_active_color')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="form-group col-md-4">
                                                <label for="menu_background_color"><?php echo e(__('Button Background Color')); ?>

                                                    *</label>
                                                <div class="input-group colorpickerinput">
                                                    <input type="text" class="form-control" required
                                                           name="button_background_color"
                                                           value="<?php echo e(old('button_background_color') ? old('button_background_color') : settingHelper('button_background_color')); ?>"
                                                           id="button_background_color"
                                                           placeholder="<?php echo e(__('Button Background Color')); ?>">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <i class='bx bxs-color-fill'></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($errors->has('button_background_color')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('button_background_color')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="menu_background_color"><?php echo e(__('Button Text Color')); ?>

                                                    *</label>
                                                <div class="input-group colorpickerinput">
                                                    <input type="text" class="form-control" required
                                                           name="button_text_color"
                                                           value="<?php echo e(old('button_text_color') ? old('button_text_color') : settingHelper('button_text_color')); ?>"
                                                           id="button_text_color"
                                                           placeholder="<?php echo e(__('Button Text Color')); ?>">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <i class='bx bxs-color-fill'></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($errors->has('button_text_color')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('button_text_color')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="menu_background_color"><?php echo e(__('Button Border Color')); ?>

                                                    *</label>
                                                <div class="input-group colorpickerinput">
                                                    <input type="text" class="form-control" required
                                                           name="button_border_color"
                                                           value="<?php echo e(old('button_border_color') ? old('button_border_color') : settingHelper('button_border_color')); ?>"
                                                           id="button_border_color"
                                                           placeholder="<?php echo e(__('Button Border Color')); ?>">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <i class='bx bxs-color-fill'></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($errors->has('button_border_color')): ?>
                                                    <div class="invalid-feedback">
                                                        <p><?php echo e($errors->first('button_border_color')); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="fonts"><?php echo e(__("Fonts")); ?>*</label>
                                            <select id="fonts" name="fonts" class="form-control selectric">
                                                <option value="Poppins"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Poppins'): ?> selected <?php endif; ?>> <?php echo e(__('Poppins')); ?></option>
                                                <option value="Roboto"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Roboto'): ?> selected <?php endif; ?>> <?php echo e(__('Roboto')); ?></option>
                                                <option value="Open Sans"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Open Sans'): ?> selected <?php endif; ?>><?php echo e(__('Open Sans')); ?></option>
                                                <option value="Inter"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Inter'): ?> selected <?php endif; ?>> <?php echo e(__('Inter')); ?></option>
                                                <option value="Nunito"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Nunito'): ?> selected <?php endif; ?>> <?php echo e(__('Nunito')); ?></option>
                                                <option value="Lato"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Lato'): ?> selected <?php endif; ?>> <?php echo e(__('Lato')); ?></option>
                                                <option value="Montserrat"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Montserrat'): ?> selected <?php endif; ?>> <?php echo e(__('Montserrat')); ?></option>
                                                <option value="Oswald"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Oswald'): ?> selected <?php endif; ?>> <?php echo e(__('Oswald')); ?></option>
                                                <option value="Rubik"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Rubik'): ?> selected <?php endif; ?>> <?php echo e(__('Rubik')); ?></option>
                                                <option value="Fredoka"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Fredoka'): ?> selected <?php endif; ?>> <?php echo e(__('Fredoka')); ?></option>
                                                <option value="Ubuntu"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Ubuntu'): ?> selected <?php endif; ?>> <?php echo e(__('Ubuntu')); ?></option>
                                                <option value="Raleway"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Raleway'): ?> selected <?php endif; ?>> <?php echo e(__('Raleway')); ?></option>
                                                <option value="Playfair Display"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Playfair Display'): ?> selected <?php endif; ?>> <?php echo e(__('Playfair Display')); ?></option>
                                                <option value="Mukta"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Mukta'): ?> selected <?php endif; ?>> <?php echo e(__('Mukta')); ?></option>
                                                <option value="Lora"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Lora'): ?> selected <?php endif; ?>> <?php echo e(__('Lora')); ?></option>
                                                <option value="Hind"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Hind'): ?> selected <?php endif; ?>> <?php echo e(__('Hind')); ?></option>
                                                <option value="Exo 2"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Exo 2'): ?> selected <?php endif; ?>> <?php echo e(__('Exo 2')); ?></option>
                                                <option value="Exo"
                                                        <?php if(old('fonts') ? old('fonts') : settingHelper('fonts') == 'Exo'): ?> selected <?php endif; ?>> <?php echo e(__('Exo')); ?></option>
                                            </select>
                                        </div>
                                        <div class="text-md-right">
                                            <button class="btn btn-outline-primary"
                                                    id="save-btn"><?php echo e(__('Update')); ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        $(".inputtags").tagsinput('items');
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/store-front/theme-options.blade.php ENDPATH**/ ?>