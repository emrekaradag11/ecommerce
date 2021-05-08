<?php $__env->startSection('content'); ?>
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün'e Varyant Ekle | <a href="" class="text-underline"><?php echo e($product->title); ?></a></h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="card mb-4">
        <div class="card-body">
            <form method="post" id="setProductVariant" class="col-lg-8 form-group">
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
                                            <option value="<?php echo e($sb->id); ?>"><?php echo e($sb->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <div class="col-12 text-right px-0">
                    <button class="btn btn-primary">Varyantları Oluştur</button>
                </div>
            </form>

            <div id="responseData" class="col-12">

            </div>
        </div>
    </div>

    <script>

        $('#setProductVariant').on('submit',function (e){
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: '<?php echo e(route('admin.product.setProductVariant')); ?>',
                data: $('#setProductVariant').serialize(),
                success: function (response) {
                    console.log(response)
                }
            });
        })

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\e-commerce\resources\views/back/product/variants/add.blade.php ENDPATH**/ ?>
