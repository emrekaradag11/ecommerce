<form method="post" action="<?php echo e(route('admin.product.setProductVariant')); ?>" id="setProductVariant" class="col-lg-8 mb-5">
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(count($v->getSubVariants)): ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="col-lg-3 px-0">
                        <div class="input-group-prepend w-100 h-100"><span class="input-group-text w-100"><?php echo e($v->title); ?></span></div>
                    </div>
                    <div class="col-lg px-0">
                        <select name="<?php echo e($v->id); ?>[]" class="form-control select2" multiple="multiple">
                            <option disabled>Alt Varyant Seçiniz</option>
                            <?php $__currentLoopData = $v->getSubVariants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e((isset($avaibleVariants) && in_array($sb->id,$avaibleVariants)) ? "selected" : null); ?> value="<?php echo e($sb->id); ?>"><?php echo e($sb->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
    <div class="col-12 text-right px-0">
        <?php if(count($product->getProductVariantDetail)): ?>
            <button type="button" onclick="redirectSwal('','#setProductVariant','Dikkat','Bu düzenleme işleminde mevcut varyantlarınız silinecek ve yeni varyantlar oluşturulacaktır. Onaylıyor musunuz ?')" class="btn btn-primary">Varyantları Oluştur</button>
        <?php else: ?>
            <button type="submit" class="btn btn-primary">Varyantları Oluştur</button>
        <?php endif; ?>
    </div>
</form>

<script>

    $('#setProductVariant').on('submit',function (e){
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: '<?php echo e(route('admin.product.setProductVariant')); ?>',
            data: $('#setProductVariant').serialize(),
            success: function (response) {
                location.reload();
            }
        });
    })

</script>
<?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/back/product/variants/add.blade.php ENDPATH**/ ?>