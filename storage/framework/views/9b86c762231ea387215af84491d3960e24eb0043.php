<?php $__env->startSection("content"); ?>
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2"><?php echo e($product->title); ?> | Görsel Ekle</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="col-12 px-0">
        <div class="card text-left">
            <div class="card-body">
                <form class="dropzone form-group" id="multple-file-upload" action="<?php echo e(route("admin.product.uploadPictures")); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="fallback">
                        <input name="img" type="file" multiple="multiple" />
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo e($product->getProductDetail->id); ?>">
                </form>
                <div class="form-group text-right">
                    <a href="<?php echo e(route("admin.product.create")); ?>" class="btn btn-success">Tamamla</a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("back.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/back/product/upload.blade.php ENDPATH**/ ?>