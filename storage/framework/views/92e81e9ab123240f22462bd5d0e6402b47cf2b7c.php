<ul class="list-group customLists sortables">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $d->route = route("admin.category.update",$d->id);
            $d->deleteRoute = route("admin.category.destroy",$d->id);
        ?>
        <li class="list-group-item list-group-item-action" id="item-<?php echo e($d->id); ?>" data-content="<?php echo e($d->id); ?>">
            <div class="d-flex align-items-center justify-content-between customListElement">
                <strong><?php echo e($d->title); ?></strong>
                <div>
                    <a tabindex data-info="<?php echo e($d); ?>" data-img="<?php echo e($d->image ? asset('uploads/' . $d->image()->first()->img) : null); ?>" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit"><i class="nav-icon i-Pen-2"></i></a>
                    <a tabindex data-info="<?php echo e($d); ?>" class="btn btn-xs btn-xxs px-3 py-2 btn-danger js_delete"><i class="nav-icon i-Close-Window"></i></a>
                    <a tabindex="" class="btn btn-xs btn-xxs px-3 py-2 btn-info list_item"><i class="nav-icon i-Arrow-Cross"></i></a>
                </div>
            </div>

            <?php if(count($d->getSubCategories)>0): ?>
                <?php echo $__env->make("back.category.sublist.subCategoryList",["data" => $d->getSubCategories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/back/category/sublist/subCategoryList.blade.php ENDPATH**/ ?>