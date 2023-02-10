
<?php $__env->startSection('product'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('product_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('All Products')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Products')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $products->total() . ' ' . __('product_s')); ?>

                    </p>
                </div>
                <?php if(hasPermission('product_create')): ?>
                    <div class="buttons add-button">
                        <a href="<?php echo e(route('product.create')); ?>" class="btn btn-icon icon-left btn-outline-primary">
                            <i class='bx bx-plus'></i><?php echo e(__('Add new Product')); ?>

                        </a>
                        <button class="btn btn-icon icon-left btn-outline-primary menu-button" type="button"
                                data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-dots-horizontal'></i>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start"
                             style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item has-icon" href="<?php echo e(route('digital.product.create')); ?>"><i
                                        class='bx bx-plus'></i> <?php echo e(__("Add Digital Product")); ?></a>
                            <a class="dropdown-item has-icon" href="<?php echo e(route('catalog.product.create')); ?>"><i
                                        class='bx bx-plus'></i> <?php echo e(__("Add Catalog Product")); ?></a>
                            <a class="dropdown-item has-icon" href="<?php echo e(route('classified.product.create')); ?>"><i
                                        class='bx bx-plus'></i><?php echo e(__("Add Classified Product")); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php
                $all =  DB::table('products')->where('is_deleted',0)
                                        ->when(settingHelper('seller_system') != 1, function ($q) {
                                            $q->where('user_id',1);
                                        })->get();
                $total          = $all->count();
                $published      = $all->where('status','published')->where('is_approved', 1)->count();
                $unpublished    = $all->where('status','unpublished')->where('is_approved', 1)->count();
                $pending        = $all->where('is_approved', 0)->count();
                $trash          = $all->where('status','trash')->count();

                $c              = isset($_GET['c']) ? $_GET['c'] : null;
                $sl             = isset($_GET['sl']) ? $_GET['sl'] : null;
                $s              = isset($_GET['s']) ? $_GET['s'] : null;
                $q              = isset($_GET['q']) ? $_GET['q'] : null;
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <form id="my_form" method="get" action="">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === null  ? 'active' : ''); ?>"
                                           href="<?php echo e(route('products')); ?>"><?php echo e(__('All')); ?> <span
                                                    class="badge badge-primary"><?php echo e($total - $trash); ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === 'published' && $status != 'trash' ? 'active' : ''); ?>"
                                           href="<?php echo e(route('products','published')); ?>"><?php echo e(__('Published')); ?> <span
                                                    class="badge badge-primary"><?php echo e($published); ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === 'unpublished' && $status != 'trash' ? 'active' : ''); ?>"
                                           href="<?php echo e(route('products','unpublished')); ?>"><?php echo e(__('Unpublished')); ?> <span
                                                    class="badge badge-primary"><?php echo e($unpublished); ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === 'pending' && $status != 'trash'? 'active' : ''); ?>"
                                           href="<?php echo e(route('products','pending')); ?>"><?php echo e(__('Pending')); ?> <span
                                                    class="badge badge-primary"><?php echo e($pending); ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e($status === 'trash' ? 'active' : ''); ?>"
                                           href="<?php echo e(route('products','trash')); ?>"><?php echo e(__('Trash')); ?> <span
                                                    class="badge badge-primary"><?php echo e($trash); ?></span></a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-xs-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo e(__('Products')); ?></h4>
                            <div class="card-header-form">
                                <form class="form-inline">
                                    <?php if(settingHelper('seller_system') == 1): ?>
                                        <div class="form-group">
                                            <select class="seller-by-ajax form-control select2" name="sl" id="seller_id"
                                                    aria-hidden="true">
                                                <?php if(isset($sl)): ?>
                                                    <option selected
                                                            value="<?php echo e($selected_seller->id); ?>"> <?php echo e($selected_seller->shop_name); ?> </option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <?php
                                            $position = '';
                                                if(isset($selected_category)):
                                                    if($selected_category->position == 2):
                                                        $position = '¦--¦--';
                                                    elseif($selected_category->position == 1):
                                                        $position = '¦--';
                                                    else:
                                                        $position = '';
                                                    endif;
                                                endif;
                                        ?>
                                        <select class="filter-categories-by-ajax form-control select2" name="c" id="c">
                                            <option value=""><?php echo e(__('All Category')); ?></option>
                                            <?php if(isset($c)): ?>
                                                <?php if($selected_category != null): ?>
                                                    <option selected
                                                            value="<?php echo e(@$c); ?>"> <?php echo e($position.@$selected_category->getTranslation('title', App::getLocale())); ?> </option>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control selectric" name="s">
                                            <option
                                                    value="latest_on_top" <?php echo e($s == 'latest_on_top' ? 'selected' : ''); ?>><?php echo e(__('Latest On Top')); ?></option>
                                            <option
                                                    value="oldest_on_top" <?php echo e($s == 'oldest_on_top' ? 'selected' : ''); ?>><?php echo e(__('Oldest On Top')); ?></option>
                                            <option
                                                    value="sale_high" <?php echo e($s == 'sale_high' ? 'selected' : ''); ?>><?php echo e(__('Sale(High > Low)')); ?></option>
                                            <option
                                                    value="sale_low" <?php echo e($s == 'sale_low' ? 'selected' : ''); ?>><?php echo e(__('Sale(Low > High)')); ?></option>
                                            <option
                                                    value="rating_high" <?php echo e($s == 'rating_high' ? 'selected' : ''); ?>><?php echo e(__('Rating(High > Low)')); ?></option>
                                            <option
                                                    value="rating_low" <?php echo e($s == 'rating_low' ? 'selected' : ''); ?>><?php echo e(__('Rating(Low > High)')); ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="q" value="<?php echo e($q); ?>" class="form-control"
                                                   placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-outline-primary"><i class='bx bx-search'></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <thead>
                                    <tr>
                                        <th><?php echo e(__('#')); ?></th>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <?php if(settingHelper('seller_system') == 1): ?>
                                            <th><?php echo e(__('Seller')); ?></th>
                                        <?php endif; ?>
                                        <th><?php echo e(__('Detail')); ?></th>
                                        <th><?php echo e(__('Current Stock')); ?></th>
                                        <th><?php echo e(__('Published')); ?></th>
                                        <th><?php echo e(__('Catalog')); ?></th>
                                        <th><?php echo e(__("Today's Deal")); ?></th>
                                        <th><?php echo e(__('Featured')); ?></th>
                                        <?php if(hasPermission('product_update') || hasPermission('product_delete') || hasPermission('product_restore') || hasPermission('product_clone')): ?>
                                            <th><?php echo e(__('Option')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="row_<?php echo e($product->id); ?>">
                                            <td><?php echo e($products->firstItem() + $key); ?></td>
                                            <td width="300">
                                                <div class="d-flex">
                                                    <div class="text-left">
                                                        <?php if($product->thumbnail != [] && is_file_exists($product->thumbnail['image_40x40'], $product->thumbnail['storage'])): ?>
                                                            <img
                                                                    src="<?php echo e(get_media($product->thumbnail['image_40x40'], $product->thumbnail['storage'])); ?>"
                                                                    alt="<?php echo e($product->name); ?>"
                                                                    class="mr-3 rounded">
                                                        <?php else: ?>
                                                            <img
                                                                    src="<?php echo e(static_asset('images/default/default-image-40x40.png')); ?>"
                                                                    alt="<?php echo e($product->name); ?>"
                                                                    class="mr-3 rounded">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="ml-1">
                                                        <?php if(isAppMode()): ?>
                                                            <a href="#"><?php echo e($product->getTranslation('name', \App::getLocale())); ?></a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('product-details',$product->slug)); ?>" target="_blank"><?php echo e($product->getTranslation('name', \App::getLocale())); ?></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <?php if(settingHelper('seller_system') == 1): ?>
                                                <td>
                                                    <?php if($product->user_id != 1): ?>
                                                        <?php if(isset($product->sellerProfile)): ?>
                                                            <?php echo e($product->sellerProfile->shop_name); ?>

                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <div class="badge badge-warning"><?php echo e(__('Admin Product')); ?></div>
                                                    <?php endif; ?>
                                                </td>
                                            <?php endif; ?>
                                            <td>
                                                <span>
                                                    <?php echo e(__('Base Price').': ' .get_price($product->price,user_curr()).' /'.$product->getTranslation('unit', \App::getLocale())); ?></span>
                                                    <br>
                                                <span><?php echo e(__('Total Sale').': '.$product->total_sale); ?></span><br>
                                                <span><?php echo e(__('Rating').': '.$product->rating); ?></span>
                                                <span><?php echo e(__('Current Stock').': '.$product->current_stock); ?></span><br>

                                            </td>
                                            <td>
                                                <?php $__currentLoopData = $product->stock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span><?php echo e($stock->sku != '' ? $stock->sku.': '.$stock->current_stock : $stock->current_stock); ?></span>
                                                    <br>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td>
                                                <?php if($product->is_approved == 0): ?>
                                                    <div class="d-flex">
                                                        <div
                                                                class="ml-1 badge badge-pill badge-warning"><?php echo e(__('Pending')); ?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <label class="custom-switch mt-2 <?php echo e((hasPermission('product_update') && $product->status != 'trash') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox"
                                                               <?php if(hasPermission('product_update') && $product->status != 'trash'): ?> value="product-status-change/<?php echo e($product->id); ?>/status"
                                                               <?php endif; ?>
                                                               <?php echo e($product->status == 'published' ? 'checked' : ''); ?> name="custom-switch-checkbox"
                                                               <?php echo e((hasPermission('product_update') && $product->status != 'trash') ? '' : 'disabled'); ?>

                                                               class="<?php echo e(hasPermission('product_update') ? 'product-status-change' : ''); ?> custom-switch-input">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <label class="custom-switch mt-2 <?php echo e((hasPermission('product_update') && $product->status != 'trash') ? '' : 'cursor-not-allowed'); ?>">
                                                    <input type="checkbox"
                                                           <?php if(hasPermission('product_update') && $product->status != 'trash'): ?> value="product-status-change/<?php echo e($product->id); ?>/is_catalog"
                                                           <?php endif; ?>
                                                           <?php echo e($product->is_catalog == 1 ? 'checked' : ''); ?> name="custom-switch-checkbox"
                                                           <?php echo e((hasPermission('product_update') && $product->status != 'trash') ? '' : 'disabled'); ?>

                                                           class="<?php echo e((hasPermission('product_update') && $product->status != 'trash') ? 'product-status-change' : ''); ?> custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="custom-switch mt-2 <?php echo e((hasPermission('product_update') && $product->status != 'trash') ? '' : 'cursor-not-allowed'); ?>">
                                                    <input type="checkbox"
                                                           <?php if(hasPermission('product_update') && $product->status != 'trash'): ?> value="product-status-change/<?php echo e($product->id); ?>/todays_deal"
                                                           <?php endif; ?>
                                                           <?php echo e($product->todays_deal == 1 ? 'checked' : ''); ?> name="custom-switch-checkbox"
                                                           <?php echo e((hasPermission('product_update') && $product->status != 'trash') ? '' : 'disabled'); ?>

                                                           class="<?php echo e((hasPermission('product_update') && $product->status != 'trash') ? 'product-status-change' : ''); ?> custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="custom-switch mt-2 <?php echo e((hasPermission('product_update') && $product->status != 'trash') ? '' : 'cursor-not-allowed'); ?>">
                                                    <input type="checkbox"
                                                           <?php if(hasPermission('product_update') && $product->status != 'trash'): ?> value="product-status-change/<?php echo e($product->id); ?>/is_featured"
                                                           <?php endif; ?>
                                                           <?php echo e($product->is_featured == 1 ? 'checked' : ''); ?> name="custom-switch-checkbox"
                                                           <?php echo e((hasPermission('product_update') && $product->status != 'trash') ? '' : 'disabled'); ?>

                                                           class="<?php echo e((hasPermission('product_update') && $product->status != 'trash') ? 'product-status-change' : ''); ?> custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <?php if($product->status != 'trash'): ?>
                                                    <?php if(hasPermission('product_update')): ?>
                                                        <a href="<?php echo e($product->is_wholesale ? route('wholesale.product.edit', $product->id) : route('admin.product.edit', $product->id)); ?>"
                                                           class="btn btn-outline-secondary btn-circle"
                                                           data-toggle="tooltip" title=""
                                                           data-original-title="<?php echo e(__('Edit')); ?>"><i
                                                                    class="bx bx-edit"></i></a>
                                                    <?php endif; ?>
                                                    <?php if(hasPermission('product_clone')): ?>
                                                        <a href="<?php echo e(route('product.clone', $product->id)); ?>"
                                                           class="btn btn-outline-primary btn-circle"
                                                           data-toggle="tooltip"
                                                           title="" data-original-title="<?php echo e(__('Clone')); ?>"><i
                                                                    class='bx bx-copy'></i>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if(hasPermission('product_delete')): ?>
                                                        <a href="#"
                                                           onclick="delete_row('delete/products/', <?php echo e($product->id); ?>)"
                                                           class="btn btn-outline-danger btn-circle"
                                                           data-toggle="tooltip" title=""
                                                           data-original-title="<?php echo e(__('Delete')); ?>"><i
                                                                    class="bx bx-trash"></i></a>
                                                    <?php endif; ?>
                                                    <a href="javascript:void(0)" data-toggle="dropdown"
                                                       class="btn btn-outline-secondary btn-circle" title=""
                                                       data-original-title="<?php echo e(__('Options')); ?>">
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="<?php echo e(isAppMode() ? '#' : route('product-details',$product->slug)); ?>" target="<?php echo e(isAppMode() ? '_parent' : '_blank'); ?>"
                                                           class="dropdown-item has-icon"><i
                                                                    class='bx bx-show'></i><?php echo e(__('Show')); ?></a>
                                                        <a href="<?php echo e(url("admin/product-reviews?product_id=$product->id")); ?>" target="_blank"
                                                           class="dropdown-item has-icon"><i
                                                                    class='bx bx-star'></i><?php echo e(__('Reviews')); ?></a>
                                                        <?php if(hasPermission('product_update')): ?>
                                                            <?php if($product->is_approved == 1): ?>
                                                                <a href="<?php echo e(route('product.status.change', ['status'=>'pending','id'=>$product->id])); ?>"
                                                                   class="dropdown-item has-icon"><i
                                                                            class='bx bx-block'></i><?php echo e(__('Pending')); ?>

                                                                </a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('product.status.change', ['status'=>'approve','id'=>$product->id])); ?>"
                                                                   class="dropdown-item has-icon"><i
                                                                            class='bx bx-check-shield'></i><?php echo e(__('Approve')); ?>

                                                                </a>
                                                            <?php endif; ?>
                                                            <?php if(addon_is_activated('wholesale') == true && !$product->is_wholesale): ?>
                                                                <a href="<?php echo e(route('wholesale.product.clone', $product->id)); ?>"
                                                                   class="dropdown-item has-icon"><i
                                                                            class='bx bx-copy'></i><?php echo e(__('Clone As Wholesale')); ?>

                                                                </a>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php else: ?>
                                                    <?php if(hasPermission('product_restore')): ?>
                                                        <a href="<?php echo e(route('product.restore', $product->id)); ?>"
                                                           class="btn btn-outline-primary btn-circle"
                                                           data-toggle="tooltip" title=""
                                                           data-original-title="<?php echo e(__('Restore')); ?>"><i
                                                                    class="bx bx-reset"></i></a>

                                                        <a href="javascript:void(0)"
                                                           onclick="delete_row('delete/products/', <?php echo e($product->id); ?>)"
                                                           class="btn btn-outline-danger btn-circle"
                                                           data-toggle="tooltip" title=""
                                                           data-original-title="<?php echo e(__('Permanent Delete')); ?>">
                                                            <i class='bx bx-trash'></i>
                                                        </a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav class="d-inline-block">
                                <?php echo e($products->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/ajax-live-search.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/products/products/index.blade.php ENDPATH**/ ?>