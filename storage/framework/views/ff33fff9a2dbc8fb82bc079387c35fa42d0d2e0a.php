<?php
    $countries = \App\Models\Country::with('flag')->where('status', 1)->orderBy('name')->get();
    $default_country = count($countries) > 0 ? $countries->where('id', $country_id)->first() : null;
?>
<label><?php echo e($label); ?></label>
<div class="yoori__signup--form">
    <div class="country__code--config">
        <?php if($default_country): ?>
            <div class="country__code--config-details">
                    <span class="country__code--flag">
                        <img src="<?php echo e($default_country->flag_icon); ?>" alt="Flag" class="img-fluid">
                    </span>
                <span class="country__code--number">
                        <?php echo e(str_contains($default_country->phonecode,'+') ? $default_country->phonecode : '+'.$default_country->phonecode); ?>

                    </span>
                <span class="country__dropdown"></span>
            </div>
        <?php else: ?>
            <div class="country__code--config-details">
                    <span class="country__code--flag">
                        <img src="<?php echo e(static_asset('images/flags/bd.png')); ?>" alt="Flag" class="img-fluid">
                    </span>
                <span class="country__code--number">
                        +880
                    </span>
                <span class="country__dropdown"></span>
            </div>
        <?php endif; ?>
    </div>
    <ul class="country__code--list d-none">
        <input placeholder="Search" type="text" class="country__search">
        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="country_li" data-id="<?php echo e($country->id); ?>" data-flag="<?php echo e($country->flag_icon); ?>" data-country_code="<?php echo e(str_contains($country->phonecode,'+') ? $country->phonecode : '+'.$country->phonecode); ?>">
                <span class="country__code--flag">
                    <?php if($country->flag): ?>
                        <img src="<?php echo e($country->flag_icon); ?>"
                             alt=""
                             class="img-fluid">
                    <?php else: ?>
                        <img src="<?php echo e(static_asset('images/default/default-image-40x40.png')); ?>"
                             alt="default_image" width="16" height="11"
                             class="img-fluid">
                    <?php endif; ?>
                </span>
                <span class="country__name">
                            <strong><span class="country_name_span"><?php echo e($country->name); ?></span> <span class="country__code--number"><?php echo e(str_contains($country->phonecode,'+') ? $country->phonecode : '+'.$country->phonecode); ?></span></strong></span>
                <span class="country__code--number"></span>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <input type="hidden" name="countries" value="<?php echo e($countries); ?>">
    <input type="tel" class="number" name="<?php echo e($name); ?>" value="<?php echo e($value); ?>">
    <input type="hidden" name="<?php echo e($country_id_field); ?>" class="country_id" value="<?php echo e($country_id); ?>">
</div>
<?php if($errors->has($name)): ?>
    <div class="invalid-feedback">
        <p><?php echo e($errors->first($name)); ?></p>
    </div>
<?php endif; ?><?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/partials/tel-input.blade.php ENDPATH**/ ?>