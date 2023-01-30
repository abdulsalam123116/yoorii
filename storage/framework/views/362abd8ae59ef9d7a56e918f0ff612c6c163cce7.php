

<?php $__env->startSection('title'); ?>
    <?php echo e(__('POS')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('pos_services_active'); ?>
    sidebar_active
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .modal-backdrop.fade.show{
            display : none !important;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div id="app">
            <pos_system :products="<?php echo e(json_encode($products)); ?>" :vat_tax="<?php echo e($vat_tax); ?>" :vat_type="<?php echo e(json_encode($vat_type)); ?>" :walking_customer="<?php echo e($walkingCustomer); ?>"
                        :lang="<?php echo e(json_encode($lang)); ?>" :settings="<?php echo e(json_encode($currency_setting)); ?>" :active_currency="<?php echo e(json_encode($activeCurrency)); ?>" :order_tax_type="<?php echo e(json_encode($order_tax_type)); ?>"
            ></pos_system>
        </div>

        <input type="hidden" name="url" id="url" value="<?php echo e(url('/')); ?>">
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(static_asset('admin/js/app.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/pos-system/index.blade.php ENDPATH**/ ?>