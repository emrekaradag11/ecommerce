<div class="row">
    <div class="col-12">
        <form id="editVariantDetail" method="post" class="row">
            <?php echo csrf_field(); ?>
            <div class="col-12">
                <div class="row justify-content-center mb-3s">
                    <?php $__currentLoopData = $variant_dtl->getVariantNames->getOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variantName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge badge-warning text-20 mx-2 my-2 col-auto"><?php echo e($variantName->getName->title); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label>Para Birimi:</label>
                        <select name="currency_id" required class="form-control" id="">
                            <option value="">Seçiniz</option>
                            <?php $__currentLoopData = $currency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($variant_dtl->currency_id == $c->id ? " selected" : null); ?> value="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-lg-6 form-group">
                        <label>Fiyat:</label>
                        <input type="text" value="<?php echo e(priceFormat($variant_dtl->price)); ?>" name="price" maxlength="18" required class="form-control price_format">
                    </div>
                    <?php $__currentLoopData = $discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 form-group">
                            <label><?php echo e($d->title); ?> (%)</label>
                            <input type="number" value="<?php echo e(isset($d->rate) ? $d->rate : null); ?>" maxlength="2" name="product_discount[<?php echo e($d->id); ?>]" class="form-control">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 form-group">
                        <label>Stok:</label>
                        <input type="number" value="<?php echo e($variant_dtl->stock); ?>" name="stock" class="form-control">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label>Ürün Kodu:</label>
                        <input type="text" value="<?php echo e($variant_dtl->product_code); ?>" readonly required name="product_code" class="form-control">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label>Varyant Kodu:</label>
                        <input type="text" value="<?php echo e($variant_dtl->variant_code); ?>" required name="variant_code" class="form-control">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label>Barkod:</label>
                        <input type="number" value="<?php echo e($variant_dtl->barcode); ?>" name="barcode" class="form-control">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label>Teslimat Süresi (Gün):</label>
                        <input type="number" value="<?php echo e($variant_dtl->shipping_day); ?>" required name="shipping_day" class="form-control">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label>Kargo Fiyatı :</label>
                        <input type="text" value="<?php echo e($variant_dtl->shipping_price); ?>" maxlength="18" required name="shipping_price" class="form-control price_format">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label>KDV:</label>
                        <input type="number" value="<?php echo e($variant_dtl->kdv); ?>" required name="kdv" class="form-control">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label>Ürün Durumu:</label>
                        <select name="status_id" required class="form-control" id="">
                            <option value="">Seçiniz</option>
                            <option value="1" <?php echo e($variant_dtl->getVariantNames->status_id == "1" ? "selected" : null); ?>>Aktif</option>
                            <option value="2" <?php echo e($variant_dtl->getVariantNames->status_id == "2" ? "selected" : null); ?>>Pasif</option>
                        </select>
                    </div>
                    <div class="col-12 form-group text-right">
                        <input type="hidden" name="type_id" value="<?php echo e($variant_dtl->type_id); ?>">
                        <input type="hidden" name="id" value="<?php echo e($variant_dtl->id); ?>">
                        <button type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-12">
        <form class="dropzone dropzone-area form-group" enctype="multipart/form-data" method="post" id="multple-file-upload" action="<?php echo e(route("admin.product.uploadPictures")); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="product_id" value="<?php echo e($variant_dtl->id); ?>">
        </form>
    </div>
</div>


<script>
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone(".dropzone", {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 5, // MB
        clickable: true,
        addRemoveLinks: true,
        acceptedFiles: "image/jpeg,image/png,image/gif",
        removedfile: function(file)
        {

            $.ajax({
                type: 'POST',
                url: '<?php echo e(Route("admin.deleteImages")); ?>',
                data: {
                    id: file.id,
                },
                success: function (data){
                    //console.log(data);
                },
                error: function(e) {
                    //console.log(e);
                }});
            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        <?php if(isset($pictures) && !empty($pictures)): ?>
        init: function() {
            var thisDropzone = this;

            <?php $__currentLoopData = $pictures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            var mockFile = {
                id: '<?php echo e($p->id); ?>',
                name: '<?php echo e($p->img); ?>',
                size: <?php echo e(filesize(public_path("uploads/" . $p->img))); ?>,
                type: '<?php echo e(image_type_to_mime_type(exif_imagetype("uploads/" . $p->img))); ?>'
            };
            thisDropzone.emit("addedfile", mockFile);
            thisDropzone.emit("success", mockFile);
            thisDropzone.emit("complete",mockFile);
            thisDropzone.emit("thumbnail", mockFile, "<?php echo e(url("uploads/" . $p->img)); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            $(".dz-preview").each(function (){
                $(this).attr("data-content",$(this).find("[data-dz-id]").html());
            })

            this.on("maxfilesexceeded", function(file){
                this.removeFile(file);
                alert("No more files please!");
            });

        }
        <?php endif; ?>
    });


    $( ".dropzone" ).sortable({
        revert: true,
        items:'.dz-preview',
        cursor: 'move',
        opacity: 0.5,
        containment: '.dropzone',
        distance: 20,
        tolerance: 'pointer',
        stop: function (event, ui) {
            let data = $(this).sortable('toArray', {attribute: 'data-content'});
            $.ajax({
                type:"post",
                method:"post",
                data: {
                    data : data,
                },
                url: "<?php echo route('admin.img.sortable'); ?>",
                success: function (res) {
                    console.log(res)
                }
            });
        }
    });

    priceFormat();

</script>
<?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/back/product/variants/editDetail.blade.php ENDPATH**/ ?>