
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($d->id); ?>"><?php echo $d->title; ?></option>
    <?php if(count($d->getSubCategories)>0): ?>
        <optgroup label="<?php echo e($d->title); ?>">
            <?php echo $__env->make("back.category.sublist.subOptionList",["data" => $d->getSubCategories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </optgroup>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Users/emrekaradag/Desktop/projeler/desktop/LRVLPROJECT/ecommerce/resources/views/back/category/sublist/subOptionList.blade.php ENDPATH**/ ?>