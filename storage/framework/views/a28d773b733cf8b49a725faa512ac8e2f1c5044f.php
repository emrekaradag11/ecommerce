<form action="<?php echo e(route('admin.product.editProductVariant')); ?>" method="post" class="col-12 px-0">
    <?php echo csrf_field(); ?>

    <table class="display table table-striped table-hover">
        <thead>
        <tr>
            <th>Sıra</th>
            <th>Görsel</th>
            <th>Ürün Kodu</th>
            <th>Varyant Kodu</th>
            <th>Varyantlar</th>
            <th>Fiyat</th>
            <th>Stok</th>
            <th>Durum</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $product_variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->index + 1); ?></td>
                <td>
                    <div class="customImg">
                        <img src="<?php echo e(asset(isset($p->image->first()->img) ? 'uploads/' . $p->image->first()->img : 'images/no_img.jpg')); ?>" alt="" />
                    </div>
                </td>
                <td>
                    <input type="text" name="<?php echo e($p->id); ?>[product_code]" class="form-control" value="<?php echo e($p->product_code); ?>" readonly disabled placeholder="Ürün Kodu">
                </td>
                <td>
                    <input type="text" name="<?php echo e($p->id); ?>[variant_code]" class="form-control" value="<?php echo e($p->variant_code); ?>" placeholder="Varyant Kodu">
                </td>
                <td>
                    <?php $__currentLoopData = $p->getVariantNames->getOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variantName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge badge-warning text-12 mr-2 my-2"><?php echo e($variantName->getName->title); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <input type="text" name="<?php echo e($p->id); ?>[price]" class="form-control price_format" value="<?php echo e($p->price ?? priceFormat($p->price)); ?>" placeholder="Fiyat" name="price" maxlength="18" required >
                </td>
                <td>
                    <input type="text" name="<?php echo e($p->id); ?>[stock]" class="form-control" value="<?php echo e($p->stock ?? $p->stock); ?>" placeholder="Stok">
                </td>
                <td>
                    <label class="switch switch-success mr-3 mb-3 d-block">
                        <span>Aktif </span>
                        <input type="radio" name="<?php echo e($p->id); ?>[status_id]" value="1" checked ><span class="slider"></span>
                    </label>
                    <label class="switch switch-danger mr-3 d-block">
                        <span>Pasif </span>
                        <input type="radio" name="<?php echo e($p->id); ?>[status_id]" <?php echo e($p->status_id == '3' ? 'checked' : null); ?> value="3" ><span class="slider"></span>
                    </label>
                    <input type="hidden" name="<?php echo e($p->id); ?>[variant_id]" value="<?php echo e($p->variant_id); ?>">
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="col-12 form-group text-right">
        <button type="submit" class="btn btn-success">Kaydet</button>
    </div>
</form>
<?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/back/product/variants/list.blade.php ENDPATH**/ ?>