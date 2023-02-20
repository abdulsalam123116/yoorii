<?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="article media-modal article-style-b" id="artilce_<?php echo e($media->id); ?>">
        <div class="article-header">
            <label class="imagecheck mb-4">
                <input name="imagecheck" type="checkbox" value="<?php echo e($media->id); ?>" class="imagecheck-input">
                <figure class="imagecheck-figure">
                    <?php if($media->type == 'image' && @is_file_exists($media->image_variants['image_thumbnail'] , $media->storage)): ?>
                        <img src="<?php echo e(get_media($media->image_variants['image_thumbnail'], $media->storage)); ?>" alt="<?php echo e($media->name); ?>"
                             class="imagecheck-image article-image">
                    <?php else: ?>
                        <img src="<?php echo e(static_asset('images/default/default-'.$media->type.'-180x120.png')); ?>" alt="<?php echo e($media->name); ?>"
                             class="imagecheck-image article-image">
                    <?php endif; ?>
                </figure>
            </label>
        </div>
        <div class="article-details d-flex">
            <div class="d-block article-footer">
                <div class="d-flex">
                    <span class="article-title"><?php echo e($media->name); ?></span>
                    <span class="img-ext">.<?php echo e($media->extension); ?></span>
                </div>
                <div class="d-flex">
                    <span class="image-size"><?php echo e(formatBytes($media->size)); ?> </span>
                </div>
            </div>
        </div>
    </article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/admin/common/new-medias.blade.php ENDPATH**/ ?>