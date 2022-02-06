<?php $__env->startSection("content"); ?>
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün Ekle</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="col-12 px-0">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-2">Genel Bilgiler</h4>
                <form method="post" action="<?php echo e(route("admin.product.store")); ?>" class="row">
                    <?php echo csrf_field(); ?>
                    <div class="col-xl-8 col-12">
                        <div class="row">
                            <div class="col-lg-3 form-group">
                                <label>Kategori:</label>
                                <select name="category_id" required class="form-control" id="">
                                    <option value="">Seçiniz</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Marka:</label>
                                <select name="brand_id" required class="form-control" id="">
                                    <option value="">Seçiniz</option>
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($b->id); ?>"><?php echo e($b->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Birim:</label>
                                <select name="product_unit_id" required class="form-control" id="">
                                    <option value="">Seçiniz</option>
                                    <?php $__currentLoopData = $product_units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($p->id); ?>"><?php echo e($p->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Para Birimi:</label>
                                <select name="currency_id" required class="form-control" id="">
                                    <option value="">Seçiniz</option>
                                    <?php $__currentLoopData = $currency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Varyant Durumu:</label>
                                <select name="variant_status_id" required class="form-control" id="">
                                    <option value="0" selected>Varyantsız</option>
                                    <option value="1">Varyantlı</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label>Ürün Adı:</label>
                                <input type="text" name="title" required class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Fiyat:</label>
                                <input type="text" name="price" maxlength="18" required class="form-control price_format">
                            </div>
                            <?php $__currentLoopData = $discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-6 form-group">
                                    <label><?php echo e($d->title); ?> (%)</label>
                                    <input type="number" required maxlength="2" name="product_discount[<?php echo e($d->id); ?>]" class="form-control">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6 form-group">
                                <label>Stok:</label>
                                <input type="number" name="stock" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Ürün Kodu:</label>
                                <input type="text" required name="product_code" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Barkod:</label>
                                <input type="number" name="barcode" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Teslimat Süresi (Gün):</label>
                                <input type="number" required name="shipping_day" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Kargo Fiyatı :</label>
                                <input type="text" maxlength="18" required name="shipping_price" class="form-control price_format">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>KDV:</label>
                                <input type="number" required name="kdv" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Etiketler :</label>
                                <input type="text" name="tags" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Descriptions :</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Keywords :</label>
                                <input type="text" name="keywords" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Açıklama :</label>
                                <textarea class="form-control" name="text" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-12 form-group text-right">
                                <input type="hidden" name="status_id" value="1">
                                <input type="hidden" name="type_id" value="1">
                                <button type="submit" class="btn btn-success">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="<?php echo e(asset("back/css/smart.wizard/smart_wizard.min.css")); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset("back/css/smart.wizard/smart_wizard_theme_arrows.min.css")); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset("back/css/smart.wizard/smart_wizard_theme_circles.min.css")); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset("back/css/smart.wizard/smart_wizard_theme_dots.min.css")); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="<?php echo e(asset("back/js/jquery.smartWizard.min.js")); ?>"></script>
    <script src="<?php echo e(asset("back/js/smart.wizard.script.min.js")); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("back.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/back/product/create.blade.php ENDPATH**/ ?>