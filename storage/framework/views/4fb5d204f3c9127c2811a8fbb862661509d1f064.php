<?php
    $position = null;
    for ($i=0; $i < $child_category->position; $i++){
        $position .= '¦--';
    }
?>
<option value="<?php echo e($child_category->id); ?>" <?php echo e(@$parent ? (gettype($parent) == 'array') ? (in_array($child_category->id, $parent) ? 'selected' : '') :  (@$parent == $child_category->id ? 'selected' : '') : ''); ?>>
                                                <?php echo e($position." ".$child_category->getTranslation('title'), App::getLocale()); ?></option>
<?php if($child_category->categories): ?>
    <?php if(@$product == true): ?>
        <?php $__currentLoopData = $child_category->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('admin.products.categories.child-categories', ['child_category' => $childCategory, 'parent' => @$parent], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <?php $__currentLoopData = $child_category->categories->where('position','<',2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('admin.products.categories.child-categories', ['child_category' => $childCategory, 'parent' => @$parent], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/products/categories/child-categories.blade.php ENDPATH**/ ?>