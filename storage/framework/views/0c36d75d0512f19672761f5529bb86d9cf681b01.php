
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
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Test Number')); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 middle">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo e(__('Test Number')); ?></h4>
                        </div>
                        <form method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="form">
                                    <div class="form-group">
                                        <label for="test_number"><?php echo e(__('Enter Valid Number')); ?> *</label>
                                        <input type="tel" class="form-control intl-phone-input" id="txtPhone" />
                                        <input type="hidden" id="typevalue" value="<?php echo e($type); ?>" name="type"/>
                                    </div>
                                    <?php if($type == 'fast2'): ?>
                                    <div class="form-group">
                                        <label for="templateId"><?php echo e(__('Enter Template ID')); ?> *</label>
                                        <input type="number" class="form-control intl-phone-input" name="templateId" id="template_id" />
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-outline-primary" id="btnSubmit" value="Send"><?php echo e(__('Send')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(static_asset('admin/js/intlTelInput-jquery.min.js')); ?>"></script>
<script>
    $(function () {
        $('#txtPhone').intlTelInput({
            autoHideDialCode: false,
            autoPlaceholder: "polite",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            initialCountry: "<?php echo e(default_country(settingHelper('default_country'))); ?>",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['US'],
            separateDialCode: true,
            utilsScript:"<?php echo e(static_asset('admin/js/utils.js')); ?>"
        });
        $('#btnSubmit').on('click', function (event) {
            var code        = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
            var test_number = $('#txtPhone').val();
            var type        = $("#typevalue").val();
            var templateId  = $("#templateId").val();

            var formData = {
                ccode: code,
                test_number : test_number,
                type : type,
                templateId : templateId,
            }
            $.ajax({
                type: "post",
                dataType: 'json',
                data: formData,
                url:"<?php echo e(route('test.number.send')); ?>",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    var status = data.status;
                    if (status === 'success'){
                        toastr["success"](data.message);
                        return false;
                    } else {
                        toastr["error"](data.message);
                        return false;
                    }
                },
                error: function(data) {
                    toastr["error"]('<?php echo e(__("Something went wrong with ajax!")); ?>');
                    return false;
                }
            });
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/settings/otp/test-number.blade.php ENDPATH**/ ?>