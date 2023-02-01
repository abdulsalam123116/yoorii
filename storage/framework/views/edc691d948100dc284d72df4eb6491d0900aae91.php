

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Seller Lists')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sellers_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sellers'); ?>
    active
<?php $__env->stopSection(); ?>
<?php
    if(isset($_GET['a'])){
        $a          = $_GET['a'];
    }
    if(isset($_GET['q'])){
        $q          = $_GET['q'];
    }
?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Seller Lists')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $users->total() . ' ' . __('sellers')); ?>

                    </p>
                </div>
                <?php if(hasPermission('seller_create')): ?>
                    <div class="buttons add-button">
                        <a href="<?php echo e(route('admin.seller.create')); ?>" class="btn btn-icon icon-left btn-outline-primary">
                            <i class="bx bx-plus"></i><?php echo e(__('Add Seller')); ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-sm-xs-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo e(__('Sellers')); ?></h4>
                            <div class="card-header-form">
                                <form class="form-inline" id="sorting">
                                    <div class="form-group">
                                        <select class="form-control selectric sorting" name="a">
                                            <option
                                                    <?php echo e(@$a == "" ? "selected" : ""); ?> value=""><?php echo e(__('Filter by')); ?></option>
                                            <option
                                                    <?php echo e(@$a == "verified" ? "selected" : ""); ?> value="verified"><?php echo e(__('Verified Shop')); ?></option>
                                            <option
                                                    <?php echo e(@$a == "unverified" ? "selected" : ""); ?> value="unverified"><?php echo e(__('Unverified Shop')); ?></option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" value="<?php echo e(@$q); ?>"
                                               placeholder="<?php echo e(__('Search')); ?>">
                                        <div class="input-group-btn">
                                            <button class="btn btn-outline-primary"><i class="bx bx-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Shop Name')); ?></th>
                                        <th><?php echo e(__('Author')); ?></th>
                                        <th><?php echo e(__('Info')); ?></th>
                                        <th><?php echo e(__('Shop Publish')); ?></th>
                                        <th><?php echo e(__('Options')); ?></th>
                                    </tr>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr id="row_<?php echo e($user->id); ?>">
                                            <td><?php echo e($users->firstItem() + $key); ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <figure class="avatar mr-2">
                                                        <?php if(@$user->sellerProfile->logo != [] && @is_file_exists($user->sellerProfile->logo['image_72x72'],$user->sellerProfile->logo['storage'])): ?>
                                                            <a target="<?php echo e(isAppMode() ? '_parent' : '_blank'); ?>"
                                                               href="<?php echo e(isAppMode() ? '#' : route('frontend.shop', $user->sellerProfile->slug)); ?>">
                                                                <img src="<?php echo e(get_media($user->sellerProfile->logo['image_72x72'],$user->sellerProfile->logo['storage'])); ?>"
                                                                     alt="<?php echo e($user->sellerProfile->shop_name); ?>">
                                                            </a>
                                                        <?php else: ?>
                                                            <a target="<?php echo e(isAppMode() ? '_parent' : '_blank'); ?>"
                                                               href="<?php echo e(isAppMode() ? '#' : route('frontend.shop', $user->sellerProfile->slug)); ?>">
                                                                <img src="<?php echo e(static_asset('images/default/default-image-40x40.png')); ?>"
                                                                     alt="<?php echo e(@$user->sellerProfile->shop_name); ?>">
                                                            </a>
                                                        <?php endif; ?>
                                                    </figure>
                                                    <div class="ml-1">
                                                        <a target="<?php echo e(isAppMode() ? '_parent' : '_blank'); ?>"
                                                           href="<?php echo e(isAppMode() ? '#' : route('frontend.shop', $user->sellerProfile->slug)); ?>"> <?php echo e(!blank(@$user->sellerProfile->shop_name) ? $user->sellerProfile->shop_name : ''); ?></a>
                                                        <?php if(@$user->sellerProfile->verified_at != null): ?>
                                                            <i class="text-success "><?php echo e(__('(Verified)')); ?></i></br>
                                                        <?php else: ?>
                                                            <i class="text-warning "> <?php echo e(__('(Unverified)')); ?></i></br>
                                                        <?php endif; ?>
                                                        <?php echo e(isDemoServer() && !blank(@$user->sellerProfile->phone_no) ? Str::of($user->sellerProfile->phone_no)->mask('*', 0, strlen($user->sellerProfile->phone_no)-3) : $user->sellerProfile->phone_no); ?>

                                                        <br/>
                                                        <?php echo e(__('Total Products').': '.$user->products->count()); ?>

                                                    </div>
                                                </div>
                                            </td>
                                            <td width="300">
                                                <div class="d-flex">
                                                    <figure class="avatar mr-2">
                                                        <?php if($user->images != [] && array_key_exists('image_40x40',$user->images)): ?>
                                                            <img src="<?php echo e(get_media($user->images['image_40x40'],$user->images['storage'])); ?>"
                                                                 alt="<?php echo e($user->first_name); ?>">
                                                        <?php else: ?>
                                                            <img
                                                                    src="<?php echo e(static_asset('images/default/user40x40.jpg')); ?>"
                                                                    alt="<?php echo e($user->first_name); ?>">
                                                        <?php endif; ?>
                                                        <?php if(\Illuminate\Support\Facades\Cache::has('user-is-online-' . $user->id)): ?>
                                                            <i class="avatar-presence online"></i>
                                                        <?php else: ?>
                                                            <i class="avatar-presence offline"></i>
                                                        <?php endif; ?>
                                                    </figure>
                                                    <div class="ml-1">
                                                        <a href="<?php echo e(route('admin.seller.edit', $user->id)); ?>"
                                                           data-toggle="tooltip" title=""
                                                           data-original-title="<?php echo e(__('Edit')); ?>">
                                                            <?php echo e($user->first_name . ' ' . $user->last_name); ?>

                                                        </a>
                                                        <br/>
                                                        <i class='bx bx-check-circle
                                                            <?php echo e(\Cartalyst\Sentinel\Laravel\Facades\Activation::completed($user) == true ? "text-success" : "text-warning"); ?> '>
                                                        </i>
                                                        <?php echo e(isDemoServer() ? emailAddressMask($user->email) : $user->email); ?>

                                                        <?php echo e(isDemoServer() ? Str::of($user->phone)->mask('*', 0, strlen($user->phone)-3) : $user->phone); ?>

                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <?php echo e(__('Current Balance')); ?>: <?php echo e($user->balance); ?></br>
                                                <?php echo e(__('Last Login')); ?>

                                                : <?php echo e($user->last_login != '' ? date('M d, Y h:i a', strtotime($user->last_login)) : ''); ?>

                                            </td>
                                            <td>
                                                <?php if($user->is_user_banned == 1): ?>
                                                    <div class="d-flex">
                                                        <div
                                                                class="ml-1 badge badge-pill badge-danger"><?php echo e(__('Banned')); ?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <label class="custom-switch mt-2 <?php echo e(hasPermission('seller_update') ? '' : 'cursor-not-allowed'); ?>">
                                                        <input type="checkbox" name="custom-switch-checkbox"
                                                               value="customer-status-change/<?php echo e($user->id); ?>"
                                                               <?php echo e($user->status == 1 ? 'checked' : ''); ?>  <?php echo e(hasPermission('seller_update') ? '' : 'disabled'); ?> class="<?php echo e(hasPermission('seller_update') ? 'status-change' : ''); ?> custom-switch-input">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(hasPermission('seller_update')): ?>
                                                    <a href="<?php echo e(route('admin.seller.edit', $user->id)); ?>"
                                                       class="btn btn-outline-secondary btn-circle"
                                                       data-toggle="tooltip" title=""
                                                       data-original-title="<?php echo e(__('Edit')); ?>"><i
                                                                class="bx bx-edit"></i>
                                                    </a>
                                                <?php endif; ?>
                                                <a href="javascript:void(0)" data-toggle="dropdown"
                                                   class="btn btn-outline-secondary btn-circle" title=""
                                                   data-original-title="<?php echo e(__('Options')); ?>">
                                                    <i class='bx bx-dots-vertical-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <?php if($user->sellerProfile->verified_at && $user->status == 1 && $user->is_user_banned == 0): ?>
                                                        <?php if(isAppMode()): ?>
                                                            <a href="#"><?php echo e(@$user->sellerProfile->shop_name); ?>

                                                            </a>
                                                        <?php else: ?>
                                                            <a target="_blank"
                                                               href="<?php echo e(route('frontend.shop', $user->sellerProfile->slug)); ?>"><?php echo e(@$user->sellerProfile->shop_name); ?>

                                                            </a>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <a href="<?php echo e(route('login.by.user', $user->id)); ?>"
                                                       class="dropdown-item has-icon"><i
                                                                class="bx bx-log-in"></i> <?php echo e(__('Login as Seller')); ?>

                                                    </a>
                                                    <?php if(hasPermission('seller_ban')): ?>
                                                        <?php if($user->is_user_banned == 0): ?>
                                                            <a href="<?php echo e(route('user.ban', $user->id)); ?>"
                                                               class="dropdown-item has-icon"><i
                                                                        class='bx bx-lock'></i><?php echo e(__('Ban This Seller')); ?>

                                                            </a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('user.ban', $user->id)); ?>"
                                                               class="dropdown-item has-icon"><i
                                                                        class='bx bx-lock-open'></i><?php echo e(__('Unban This Seller')); ?>

                                                            </a>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if(hasPermission('seller_verify')): ?>
                                                        <?php if(@$user->sellerProfile->verified_at == null): ?>
                                                            <a href="<?php echo e(route('admin.seller.verify', ['id' => @$user->sellerProfile->id != null ? $user->sellerProfile->id : 0 ,'user_id' => $user->id] )); ?>"
                                                               class="dropdown-item has-icon"><i
                                                                        class='bx bx-check-shield'></i><?php echo e(__('Verify This Shop')); ?>

                                                            </a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('admin.seller.verify', ['id' => $user->sellerProfile->id != null ? $user->sellerProfile->id : 0 ,'user_id' => $user->id] )); ?>"
                                                               class="dropdown-item has-icon"><i
                                                                        class='bx bx-shield-x'></i><?php echo e(__('Unverify This Shop')); ?>

                                                            </a>
                                                        <?php endif; ?>
                                                        <?php if(hasPermission('seller_update')): ?>
                                                            <?php if(\Cartalyst\Sentinel\Laravel\Facades\Activation::completed($user) == true): ?>
                                                                <a href="<?php echo e(route('admin.seller.email.verify', $user->id)); ?>"
                                                                   class="dropdown-item has-icon"><i
                                                                            class='bx bx-x-circle'></i><?php echo e(__('Unverify Account')); ?>

                                                                </a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('admin.seller.email.verify', $user->id)); ?>"
                                                                   class="dropdown-item has-icon"><i
                                                                            class='bx bx-check-circle'></i><?php echo e(__('Verify Account')); ?>

                                                                </a>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav class="d-inline-block">
                                <?php echo e($users->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.common.common-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/sellers/index.blade.php ENDPATH**/ ?>