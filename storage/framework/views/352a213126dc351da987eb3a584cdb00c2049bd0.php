<?php if(hasPermission('api_key_read_all') || hasPermission('api_key_read')): ?>
    <div class="row">
        <div class="col-sm col-md-12">
            <div class="card">
                <form action="">
                    <div class="card-header input-title">
                        <h4><?php echo e(__('api_key')); ?></h4>
                        <?php if(hasPermission('api_key_create')): ?>
                            <div class="buttons add-button mb-0">
                                <a href="<?php echo e(route('api-keys.create')); ?>"
                                   class="btn btn-icon icon-left btn-outline-primary">
                                    <i class="bx bx-plus"></i><?php echo e(__('Add Api Key')); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tbody>
                            <tr>
                                <th><?php echo e(__('#')); ?></th>
                                <th><?php echo e(__('Title')); ?></th>
                                <th><?php echo e(__('api_key')); ?></th>
                                <?php if(hasPermission('api_key_update') || hasPermission('api_key_delete')): ?>
                                    <th><?php echo e(__('Options')); ?></th>
                                <?php endif; ?>


                            </tr>
                            <?php $__currentLoopData = $apis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $api): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(hasPermission('api_key_read_all')): ?>
                                    <tr id="row_<?php echo e($api->id); ?>" class="table-data-row">
                                        <td><?php echo e($apis->firstItem() + $key); ?></td>
                                        <td><?php echo e($api->getTranslation('title',app()->getLocale())); ?></td>
                                        <td class="d-flex">
                                            <div class="mt-2 mr-2">
                                                <p class="normal_text_<?php echo e($api->id); ?> d-none"><?php echo e($api->key); ?></p>
                                                <p class="masked_text_<?php echo e($api->id); ?>"><?php echo e(Str::of($api->key)->mask('*', 0, strlen($api->key))); ?></p>
                                            </div>
                                            <div class="d-flex justify-content-space-between">
                                                <a href="javascript:void(0)"
                                                   data-text="<?php echo e(__('Copied to Clipboard')); ?>"
                                                   data-url="<?php echo e($api->key); ?>"
                                                   class="dropdown-item d-none copy-to-clipboard btn btn-outline-info btn-circle mr-2 clipboard_<?php echo e($api->id); ?>">
                                                    <i class='bx bx-copy'></i>
                                                </a>
                                                <a href="javascript:void(0)"
                                                   data-id="<?php echo e($api->id); ?>"
                                                   class="dropdown-item btn btn-outline-info btn-circle hide_key btn_hide_<?php echo e($api->id); ?>">
                                                    <i class='bx bx-show'></i>
                                                </a>

                                                <a href="javascript:void(0)"
                                                   data-id="<?php echo e($api->id); ?>"
                                                   class="dropdown-item btn btn-outline-info btn-circle show_key btn_show_<?php echo e($api->id); ?> d-none">
                                                    <i class='bx bx-low-vision'></i>
                                                </a>

                                            </div>
                                        </td>
                                        <?php if(hasPermission('api_key_update') || hasPermission('api_key_delete')): ?>
                                            <td>
                                                <?php if(hasPermission('api_key_update')): ?>
                                                    <a href="<?php echo e(route('api-keys.edit',$api->id)); ?>"
                                                       class="btn btn-outline-secondary btn-circle"
                                                       data-toggle="tooltip" title=""
                                                       data-original-title="<?php echo e(__('Edit')); ?>"><i class="bx bx-edit"></i></a>
                                                <?php endif; ?>
                                                <?php if(hasPermission('api_key_delete')): ?>
                                                    <a href="javascript:void(0)"
                                                       onclick="delete_row('delete/api_keys/',<?php echo e($api->id); ?>)"
                                                       class="btn btn-outline-danger btn-circle" data-toggle="tooltip"
                                                       title=""
                                                       data-original-title="<?php echo e(__('Delete')); ?>"><i
                                                                class="bx bx-trash"></i></a>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php elseif(hasPermission('api_key_read') && $api->user_id == authId()): ?>
                                    <tr id="row_<?php echo e($api->id); ?>" class="table-data-row">
                                        <td><?php echo e($apis->firstItem() + $key); ?></td>
                                        <td><?php echo e($api->getTranslation('title',app()->getLocale())); ?></td>
                                        <td class="d-flex">
                                            <div class="mt-2 mr-2">
                                                <p class="normal_text_<?php echo e($api->id); ?> d-none"><?php echo e($api->key); ?></p>
                                                <p class="masked_text_<?php echo e($api->id); ?>"><?php echo e(Str::of($api->key)->mask('*', 0, strlen($api->key))); ?></p>
                                            </div>
                                            <div class="d-flex justify-content-space-between">
                                                <a href="javascript:void(0)"
                                                   data-text="<?php echo e(__('Copied to Clipboard')); ?>"
                                                   data-url="<?php echo e($api->key); ?>"
                                                   class="dropdown-item d-none copy-to-clipboard btn btn-outline-info btn-circle mr-2 clipboard_<?php echo e($api->id); ?>">
                                                    <i class='bx bx-copy'></i>
                                                </a>
                                                <a href="javascript:void(0)"
                                                   data-id="<?php echo e($api->id); ?>"
                                                   class="dropdown-item btn btn-outline-info btn-circle hide_key btn_hide_<?php echo e($api->id); ?>">
                                                    <i class='bx bx-show'></i>
                                                </a>

                                                <a href="javascript:void(0)"
                                                   data-id="<?php echo e($api->id); ?>"
                                                   class="dropdown-item btn btn-outline-info btn-circle show_key btn_show_<?php echo e($api->id); ?> d-none">
                                                    <i class='bx bx-low-vision'></i>
                                                </a>

                                            </div>
                                        </td>
                                        <td>
                                            <?php if(hasPermission('api_key_update')): ?>
                                                <a href="<?php echo e(route('api-keys.edit',$api->id)); ?>"
                                                   class="btn btn-outline-secondary btn-circle"
                                                   data-toggle="tooltip" title=""
                                                   data-original-title="<?php echo e(__('Edit')); ?>"><i class="bx bx-edit"></i></a>
                                            <?php endif; ?>
                                            <?php if(hasPermission('api_key_delete')): ?>
                                                <a href="javascript:void(0)"
                                                   onclick="delete_row('delete/api_keys/',<?php echo e($api->id); ?>)"
                                                   class="btn btn-outline-danger btn-circle" data-toggle="tooltip"
                                                   title=""
                                                   data-original-title="<?php echo e(__('Delete')); ?>"><i
                                                            class="bx bx-trash"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <nav class="d-inline-block">
                        <?php echo e($apis->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/mobile-apps/api_keys/index.blade.php ENDPATH**/ ?>