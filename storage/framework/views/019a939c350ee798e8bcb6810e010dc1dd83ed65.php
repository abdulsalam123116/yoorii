

<?php
    $route = isset($method_language) ? route('offline.payment.method.update') : route('offline.payment.method.store');
    $title = isset($method_language) ? __('Offline Method Edit') : __('Offline Method Add');
    $button_name = isset($method_language) ? __('Update') : __('Add');
?>

<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('offline_payment'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('offline_payment_methods'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e($title); ?></h2>
                </div>
                <div class="buttons add-button">
                    <a href="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>"
                       class="btn btn-icon icon-left btn-outline-primary"><i
                            class="bx bx-arrow-back"></i><?php echo e(__('Back')); ?></a>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-xs-12 col-md-8 middle">
                <div class="card">
                    <div class="card-header input-title">
                        <h4><?php echo e(__('Information')); ?></h4>
                    </div>
                    <div class="card-body card-body-paddding">
                        <?php if(isset($method_language)): ?>
                            <form class="" id="lang">
                                <div class="form-group">
                                    <label for="name"><?php echo e(__('Language')); ?></label>
                                    <input type="hidden" value="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>" name="r">
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
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e($route); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php if(isset($method_language)): ?>
                                <?php echo method_field('put'); ?>
                            <?php endif; ?>
                            <div class="form-group">
                                <label for="name"><?php echo e(__('Name')); ?></label>
                                <?php if(isset($method_language)): ?>
                                    <input type="hidden" value="<?php echo e($method_language->translation_null == 'not-found' ? '' : $method_language->id); ?>"
                                           name="offline_method_lang_id">
                                    <input type="hidden" value="<?php echo e($method_language->offlineMethod->id); ?>" name="offline_method_id">
                                    <input type="hidden" value="<?php echo e($lang); ?>" name="lang">
                                <?php endif; ?>
                                <input type="text" name="name" id="name"
                                       placeholder="<?php echo e(__('Enter method name')); ?>" value="<?php echo e(old('name') ? old('name') : (@$method_language->name)); ?>"
                                       class="form-control" required>
                                <input type="hidden"
                                       value="<?php echo e(old('r') ? old('r') : (@$r ? $r : url()->previous() )); ?>"
                                       name="r">
                                <?php if($errors->has('name')): ?>
                                    <div class="invalid-feedback">
                                        <p><?php echo e($errors->first('name')); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="couponType"><?php echo e(__('Payment Type')); ?> *</label>
                                <div class="custom-file">
                                    <select class="form-control selectric payment-type" name="type" required>
                                        <option
                                            <?php echo e(old('type') == "custom_payment" || @$method_language->offlineMethod->type == "custom_payment" ? 'selected' : ""); ?>

                                            value="custom_payment"><?php echo e(__('Custom Payment')); ?>

                                        </option>
                                        <option
                                            <?php echo e(old('type') == "bank_payment" || @$method_language->offlineMethod->type == "bank_payment" ? 'selected' : ""); ?>

                                            value="bank_payment"><?php echo e(__('Bank Payment')); ?>

                                        </option>
                                        <option
                                            <?php echo e(old('type') == "c" || @$method_language->offlineMethod->type == "cheque_payment" ? 'selected' : ""); ?>

                                            value="cheque_payment"><?php echo e(__('Cheque Payment')); ?>

                                        </option>
                                    </select>
                                </div>
                                <?php if($errors->has('type')): ?>
                                    <div class="invalid-feedback">
                                        <p><?php echo e($errors->first('type')); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail"><?php echo e(__('Thumbnail')); ?> (80X40)</label>
                                <div class="form-group">
                                    <div class="input-group gallery-modal" id="btnSubmit" data-for="image"
                                         data-selection="single"
                                         data-target="#galleryModal" data-dismiss="modal">
                                        <input type="hidden" name="thumbnail"
                                               value="<?php echo e(old('thumbnail') !='' ? old('thumbnail') : @$method_language->offlineMethod->thumbnail_id); ?>"
                                               class="image-selected">
                                        <span class="form-control"><span
                                                class="counter"><?php echo e(old('thumbnail') != '' ? substr_count(old('thumbnail'), ',') + 1  : (@$method_language->offlineMethod->thumbnail_id != '' ? 1 : 0)); ?></span> <?php echo e(__('file chosen')); ?></span>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <?php echo e(__('Choose File')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="selected-media-box">
                                        <div class="mt-2 gallery gallery-md d-flex">
                                            <?php
                                                $thumbnail = old('thumbnail') != null ? old('thumbnail') : @$method_language->offlineMethod->thumbnail_id;
                                            ?>
                                            <?php if( $thumbnail != ''): ?>
                                                <div class="selected-media mr-2 mb-2 mt-3 ml-0"
                                                     data-id="<?php echo e($thumbnail); ?>">
                                                    <?php
                                                        $media = \App\Models\Media::find($thumbnail);
                                                    ?>
                                                    <?php if($media && is_file_exists($media->image_variants['image_72x72'], $media->image_variants['storage'])): ?>
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
                                                        <a href="javascript:void(0)" class="remove"><i
                                                                class="bx bx-x"></i></a>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="selected-media mr-2 mb-2 mt-3 ml-0">
                                                    <img
                                                        src="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                        data-default="<?php echo e(static_asset('images/default/default-image-72x72.png')); ?>"
                                                        alt="brand-logo" class="img-thumbnail logo-profile">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bank_payment <?php echo e(old('type') == "bank_payment" || @$method_language->offlineMethod->type == 'bank_payment' ? '' : 'd-none'); ?> form-group">
                                <div class="d-flex justify-content-between mt-1">
                                    <label for="thumbnail"><?php echo e(__('Bank Information')); ?></label>
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-outline-primary mb-2" id="add-item" data-area="content-area">
                                            <i class="bx bx-plus"></i><?php echo e(__('Add More')); ?>

                                        </a>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <td scope="col" width="18%"><?php echo e(__('Bank Name')); ?> *</td>
                                            <td scope="col" width="18%"><?php echo e(__('Branch')); ?> *</td>
                                            <td scope="col" width="18%"><?php echo e(__('AC Holder Name')); ?> *</td>
                                            <td scope="col" width="18%"><?php echo e(__('AC Number')); ?> *</td>
                                            <td scope="col" width="18%"><?php echo e(__('Routing Number')); ?> *</td>
                                            <td width="6%"><?php echo e(__('Action')); ?></td>
                                        </tr>
                                    </thead>
                                    <tbody id="content-area">
                                        <?php if(old('bank_name') || @$method_language->offlineMethod->type == 'bank_payment'): ?>
                                            <?php
                                                $banks = old('bank_name') ?  old('bank_name') : @$method_language->offlineMethod->bank_details;
                                            ?>
                                            <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="item">
                                                    <th scope="row" width="18%">
                                                        <input type="text" name="bank_name[]" value="<?php echo e(old('bank_name')[$key] ?? $method_language->offlineMethod->bank_details[$key]['bank_name']); ?>" class="form-control">
                                                    </th>
                                                    <td width="18%">
                                                        <input type="text" name="bank_branch[]" value="<?php echo e(old('bank_branch')[$key] ?? $method_language->offlineMethod->bank_details[$key]['bank_branch']); ?>" class="form-control">
                                                    </td>
                                                    <td width="18%">
                                                        <input type="text" name="account_holder_name[]" value="<?php echo e(old('account_holder_name')[$key] ?? $method_language->offlineMethod->bank_details[$key]['account_holder_name']); ?>" class="form-control">
                                                    </td>
                                                    <td width="18%">
                                                        <input type="text" name="account_number[]" value="<?php echo e(old('account_number')[$key] ?? $method_language->offlineMethod->bank_details[$key]['account_number']); ?>" class="form-control">
                                                    </td>
                                                    <td width="18%">
                                                        <input type="number" name="routing_number[]" value="<?php echo e(old('routing_number')[$key] ?? $method_language->offlineMethod->bank_details[$key]['routing_number']); ?>" class="form-control">
                                                    </td>
                                                    <td width="6%">
                                                        <?php if($key > 0): ?>
                                                            <button type="button" class="btn btn-icon btn-sm btn-danger remove-menu-row" onclick="$(this).closest('tr').remove();"><i class="bx bx-trash"></i></button>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr class="item">
                                                <th scope="row" width="18%">
                                                    <input type="text" name="bank_name[]" value="" class="form-control">
                                                </th>
                                                <td width="18%">
                                                    <input type="text" name="bank_branch[]" value="" class="form-control">
                                                </td>
                                                <td width="18%">
                                                    <input type="text" name="account_holder_name[]" value="" class="form-control">
                                                </td>
                                                <td width="18%">
                                                    <input type="text" name="account_number[]" value="" class="form-control">
                                                </td>
                                                <td width="18%">
                                                    <input type="number" name="routing_number[]" value="" class="form-control">
                                                </td>
                                                <td width="6%"></td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <label for="instructions"><?php echo e(__('Instructions')); ?></label>
                                <textarea name="instructions" class="summernote" id="instructions" placeholder="<?php echo e(__('About Description')); ?>">
                                    <?php echo e(old('instructions') ? old('instructions') : (@$method_language->instructions)); ?>

                                </textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                    <?php echo e($button_name); ?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <?php echo $__env->make('admin.common.selector-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.settings.offline-payment.bank-row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/dropzone.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/dropzone.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page-script'); ?>
    <script src="<?php echo e(static_asset('admin/js/summernote-bs4.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/settings/offline-payment/form.blade.php ENDPATH**/ ?>