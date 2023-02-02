

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Media Library')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('media'); ?>
    active
<?php $__env->stopSection(); ?>
<?php

    $s              = isset($_GET['s']) ? $_GET['s'] : null;
    $q              = isset($_GET['q']) ? $_GET['q'] : null;
?>
<?php $__env->startSection('main-content'); ?>
    <!-- Main Content -->
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Media Library')); ?></h2>
                    <p class="section-lead">
                    <?php echo e(__('You have total') . ' ' . $medias->total(). ' ' . __('Medias')); ?>

                </div>
                <?php if(hasPermission('media_create')): ?>
                    <div class="text-right d-flex">
                        <?php if(!isDemoServer()): ?>
                            <div class="buttons add-button">
                                <a href="<?php echo e(route('admin.add.media')); ?>"
                                   class="btn btn-icon icon-left btn-outline-primary">
                                    <i class="bx bx-plus"></i><?php echo e(__('Upload File')); ?></a>
                            </div>
                        <?php endif; ?>
                        <div class="buttons add-button setting">
                            <a href="<?php echo e(route('storage.setting')); ?>" class="btn btn-icon icon-left btn-outline-primary"
                               data-toggle="tooltip" data-original-title="<?php echo e(__('Storage Configuration')); ?>">
                                <i class="bx bx-cog"></i></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo e(__('Media')); ?></h4>
                            <div class="card-header-form media">
                                <form class="form-inline" id="sorting">
                                    <div class="form-group">
                                        <select class="form-control selectric sorting" name="s">
                                            <option <?php echo e(@$s == "" ? "selected" : ""); ?> value=""><?php echo e(__('Sort by')); ?></option>
                                            <option <?php echo e(@$s == "latest_top" ? "selected" : ""); ?> value="latest_top"><?php echo e(__('Latest On Top')); ?></option>
                                            <option <?php echo e(@$s == "oldest_top" ? "selected" : ""); ?> value="oldest_top"><?php echo e(__('Oldest On Top')); ?></option>
                                            <option <?php echo e(@$s == "smallest_top" ? "selected" : ""); ?> value="smallest_top"><?php echo e(__('Smallest On Top')); ?></option>
                                            <option <?php echo e(@$s == "largest_top" ? "selected" : ""); ?> value="largest_top"><?php echo e(__('Largest On Top')); ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="q" value="<?php echo e(@$q); ?>" class="form-control"
                                                   placeholder="<?php echo e(__('Search')); ?>">
                                            <div class="input-group-btn">
                                                <button class="btn btn-outline-primary"><i class='bx bx-search'></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body sg-media-gallery mt-3">
                            <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="article article-style-b library" id="artilce_<?php echo e($media->id); ?>">
                                    <div class="d-flex">
                                        <div>
                                            <div class="article-header">
                                                <label class="imagecheck mb-4">
                                                    <figure class="imagecheck-figure">
                                                        <?php if($media->type == 'image' && @is_file_exists($media->image_variants['image_190x230'] , $media->storage)): ?>
                                                            <img src="<?php echo e(get_media($media->image_variants['image_190x230'], $media->storage)); ?>"
                                                                 alt="<?php echo e($media->name); ?>"
                                                                 class="imagecheck-image article-image">
                                                        <?php else: ?>
                                                            <img src="<?php echo e(static_asset('images/default/default-'.$media->type.'-190x230.png')); ?>"
                                                                 alt="<?php echo e($media->name); ?>"
                                                                 class="imagecheck-image article-image">
                                                        <?php endif; ?>
                                                    </figure>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="media__content">
                                                <span class="article-title image-size oneline title-text"><?php echo e($media->name); ?></span>
                                                <div class="article-details">
                                                    <span class="image-size d-block my-1"><?php echo e(formatBytes($media->size)); ?> | <span
                                                                class="uppercase"><?php echo e($media->extension); ?></span></span>
                                                    <span class="image-size"><?php echo e(__('At').': '. date('M d, Y g:i A', strtotime($media->created_at))); ?></span>
                                                </div>
                                                <div class="d-flex">
                                                    <span class="article-title image-size oneline"><?php echo e(__('By')); ?>: <?php echo e(@$media->user->first_name.' '.@$media->user->last_name); ?></span>
                                                    <span class="img-ext image-size">(<?php echo e(@$media->user->user_type); ?>)</span>
                                                </div>
                                                <div class="center bottom-fixing">
                                                    <div class="d-flex center">
                                                        <?php if(hasPermission('media_delete') || Sentinel::getUser()->user_type == 'seller'): ?>
                                                            <a href="javascript:void(0)"
                                                               onclick="delete_media('delete/media/', <?php echo e($media->id); ?>)"
                                                               class="dropdown-item btn btn-outline-danger btn-circle">
                                                                <i class='bx bx-trash'></i>
                                                            </a>
                                                        <?php endif; ?>
                                                        <a href="javascript:void(0)"
                                                           data-text="<?php echo e(__('Copied to Clipboard')); ?>"
                                                           data-url="<?php echo e(get_media($media->original_file, $media->storage)); ?>"
                                                           class="dropdown-item <?php echo e((hasPermission('media_delete') || Sentinel::getUser()->user_type == 'seller') ? 'ml-2' : ''); ?> copy-to-clipboard btn btn-outline-info btn-circle">
                                                            <i class='bx bx-copy'></i>
                                                        </a>
                                                    </div>
                                                    <div class="center mt-1">
                                                        <a href="<?php echo e(get_media($media->original_file, $media->storage)); ?>"
                                                           target="_blank"
                                                           download="<?php echo e($media->name); ?>.<?php echo e($media->extension); ?>"
                                                           class="dropdown-item btn btn-outline-success btn-circle">
                                                            <i class='bx bx-download'></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="card-footer">
                            <nav class="d-inline-block">
                                <?php echo e($medias->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/medias/index.blade.php ENDPATH**/ ?>