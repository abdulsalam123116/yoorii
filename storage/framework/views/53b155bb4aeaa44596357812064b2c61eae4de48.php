<div class="tab-content" id="galleryContent">
    <div class="tab-pane fade show active" id="gallery-files" role="tabpanel"
         aria-labelledby="gallery-files-tab">
        <div class="medias-show">
            <div class="sg-media-gallery">
                <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="article media-modal article-style-b" id="artilce_<?php echo e($media->id); ?>">
                        <div class="article-header">
                            <label class="imagecheck mb-4">
                                <input name="imagecheck" type="checkbox" value="<?php echo e($media->id); ?>" class="imagecheck-input">
                                <figure class="imagecheck-figure">
                                    <?php if($media->type == 'image' && is_file_exists($media->image_variants['image_thumbnail'], $media->storage)): ?>
                                        <img src="<?php echo e(get_media($media->image_variants['image_thumbnail'], $media->storage)); ?>"
                                             alt="<?php echo e($media->name); ?>"
                                             class="imagecheck-image article-image">
                                    <?php else: ?>
                                        <img src="<?php echo e(static_asset('images/default/default-'.$media->type.'-180x120.png')); ?>"
                                             alt="<?php echo e($media->name); ?>"
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
            </div>
            <div class="buttons add-button center d-none load-button">
                <a href="javascript:void(0)" class="btn btn-icon icon-left btn-outline-primary load-more-media"><i
                        class='bx bx-refresh'></i><?php echo e(__('Load more')); ?></a>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="uploader" role="tabpanel" aria-labelledby="uploader-tab">
        <form action="<?php echo e(route('admin.store.media')); ?>" method="post" enctype="multipart/form-data" class="dropzone" id="media-upload">
            <?php echo csrf_field(); ?>
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
    </div>
</div>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/dropzone.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page-specific'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/dropzone.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/admin/common/media-modal.blade.php ENDPATH**/ ?>