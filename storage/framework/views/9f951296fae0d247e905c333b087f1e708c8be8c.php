<div class="mt-2 gallery gallery-md d-flex">
    <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="selected-media mr-2 mb-2 mt-3 ml-0" data-id="<?php echo e($media->id); ?>">
            <?php if($media->type == 'image' && @is_file_exists(@$media->image_variants['image_72x72'], $media->storage)): ?>
                <img src="<?php echo e(get_media($media->image_variants['image_72x72'], $media->storage)); ?>" alt="<?php echo e($media->name); ?>"
                     class="img-thumbnail logo-profile">
            <?php else: ?>
                <img src="<?php echo e(static_asset('images/default/default-'.$media->type.'-72x72.png')); ?>" alt="<?php echo e($media->name); ?>"
                     class="img-thumbnail logo-profile">
            <?php endif; ?>
            <div class="image-remove">
                <a href="javascript:void(0)" class="remove"><i class="bx bx-x"></i></a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if(blank($medias) && $selection == 'single'): ?>
        <div class="selected-media mr-2 mb-2 mt-3 ml-0">
            <img src="<?php echo e(static_asset('images/default/default-'.$type.'-72x72.png')); ?>" alt="default-<?php echo e($type); ?>"
                 class="img-thumbnail logo-profile">
        </div>
    <?php endif; ?>
</div>
<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/common/selected-medias.blade.php ENDPATH**/ ?>