<?php $__env->startSection("content"); ?>
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün Listesi</h1>
        <a href="<?php echo e(route("admin.product.create")); ?>" class="btn btn-primary btn-rounded">Ürün Ekle</a>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="card mb-4">
        <div class="card-body">

            <div class="filterContent mb-5">
                <form action="<?php echo e(route("admin.product.index")); ?>" method="get" class="row">
                    <div class="col-12">
                        <?php if(request()->get('filter')): ?>
                            <a href="<?php echo e(route("admin.product.index")); ?>" class="btn btn-success btn-lg btn-rounded btn-danger mr-3 btn-sm mb-4">Filtreleri Temizle</a>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-lg form-group">
                                <label class="d-block" id="">Ürün Adı</label>
                                <input class="form-control" type="text" name="product_title" value="<?php echo e(\request()->get('product_title') ?? ''); ?>" placeholder="Ürün Adı">
                            </div>
                            <div class="col-lg form-group">
                                <label class="d-block" id="">Ürün Kodu</label>
                                <input class="form-control" type="text" name="product_code" value="<?php echo e(\request()->get('product_code') ?? ''); ?>" placeholder="Ürün Kodu">
                            </div>
                            <div class="col-lg form-group">
                                <label class="d-block" id="">Ürün Barkod</label>
                                <input class="form-control" type="text" placeholder="Ürün Barkodu">
                            </div>
                            <div class="col-lg form-group">
                                <label class="d-block" id="">Varyant Durumu</label>
                                <select class="custom-select" name="variant_status_id">
                                    <option value="">Tümü</option>
                                    <option value="1" <?php echo e(\request()->get('variant_status_id') == '1' ? 'selected' : null); ?>>Varyantlı Ürünler</option>
                                    <option value="0" <?php echo e(\request()->get('variant_status_id') == '0' ? 'selected' : null); ?>>Varyantsız Ürünler</option>
                                </select>
                            </div>
                            <div class="col-lg form-group">
                                <label class="d-block" id="">/// Aktif/Pasif Durumu</label>
                                <select class="custom-select">
                                    <option value="">Tümü</option>
                                    <option value="1">Aktif Ürünler</option>
                                    <option value="2">Pasif Ürünler</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg form-group">
                                <label class="d-block" id="">Ürün Birimi</label>
                                <select name="product_unit_id" class="form-control">
                                    <option value="">Tümü</option>
                                    <?php $__currentLoopData = $product_units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  <?php echo e(\request()->get('product_unit_id') == $p->id ? 'selected' : null); ?> value="<?php echo e($p->id); ?>"><?php echo e($p->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg form-group">
                                <label class="d-block" id="">/// Stok Durumu</label>
                                <select class="custom-select">
                                    <option value="">Tümü</option>
                                    <option value="1">Stokta Olan Ürünler</option>
                                    <option value="2">Stok Biten Ürünler</option>
                                    <option value="3">Stoksuz Satış Yapılan Ürünler</option>
                                </select>
                            </div>
                            <div class="col-lg form-group">
                                <label class="d-block" id="">/// Görsel Durumu</label>
                                <select class="custom-select">
                                    <option value="">Tümü</option>
                                    <option value="1">Görseli Olan Ürünler</option>
                                    <option value="2">Görseli Olmayan Ürünler</option>
                                </select>
                            </div>
                            <div class="col-lg form-group">
                                <label class="d-block" id="">/// Kategori</label>
                                <select class="custom-select">
                                    <option value="">Tümü</option>
                                </select>
                            </div>
                            <div class="col-lg form-group">
                                <label class="d-block" id="">Marka</label>
                                <select name="brand_id" class="form-control" id="">
                                    <option value="">Tümü</option>
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e(\request()->get('brand_id') == $b->id ? 'selected' : null); ?> value="<?php echo e($b->id); ?>"><?php echo e($b->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg form-group">
                                <label class="d-block" id="">Para Birimi</label>
                                <select name="currency_id" class="form-control" id="">
                                    <option value="">Tümü</option>
                                    <?php $__currentLoopData = $currency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e(\request()->get('currency_id') == $c->id ? 'selected' : null); ?> value="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg form-group"></div>
                            <div class="col-lg form-group"></div>
                            <div class="col-lg form-group"></div>
                            <div class="col-lg form-group"></div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-5">
                        <input type="hidden" name="filter" value="1">
                        <button type="submit" class="btn btn-success btn-lg btn-rounded">Filtrele</button>
                        <hr>
                    </div>
                </form>
            </div>

            <div class="table-responsive row">
                <table class="display table table-striped datatable table-hover customDatatable">
                    <thead>
                    <tr>
                        <th>Sıra</th>
                        <th>Görsel</th>
                        <th>Ürün Adı</th>
                        <th>Kategori</th>
                        <th>Marka</th>
                        <th>Fiyat</th>
                        <th>Stok</th>
                        <th class="text-right">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="<?php echo e($p->status_id == "2" ? "bg-danger text-white" : null); ?>">
                            <td><?php echo e($loop->index + 1); ?></td>
                            <td>
                                <div class="customImg">
                                    <img src="<?php echo e(asset(isset($p->getProductDetail->image->first()->img) ? "uploads/" . $p->getProductDetail->image->first()->img : "images/no_img.jpg")); ?>" alt="" />
                                </div>
                            </td>
                            <td><?php echo e($p->title); ?></td>
                            <td><?php echo e($p->getProductCategory->title); ?></td>
                            <td><?php echo e($p->getProductBrand->title); ?></td>
                            <td><?php echo e(priceFormat($p->getProductDetail->price) . " " . $p->getProductDetail->getProductCurrency->short_code); ?></td>
                            <td><?php echo e($p->getProductDetail->stock); ?></td>
                            <td class="text-right">
                                <a href="<?php echo e(route('admin.product.addVariant',$p->id)); ?>" data-toggle="tooltip" data-placement="top" title="Varyantları Görüntüle" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook text-white<?php echo e($p->variant_status_id == '0' ? " disabled" : null); ?>"><i class="nav-icon i-Windows-2"></i></a>
                                <a href="<?php echo e(route('admin.product.edit',$p->id)); ?>" data-toggle="tooltip" data-placement="top" title="Düzenle" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit text-white"><i class="nav-icon i-Pen-2"></i></a>
                                <a tabindex="" data-toggle="tooltip" data-placement="top" title="Sil" class="btn btn-xs btn-xxs px-3 py-2 btn-danger js_delete"><i class="nav-icon i-Close-Window"></i></a>
                                <a tabindex="" data-toggle="tooltip" data-placement="top" title="Taşı" class="btn btn-xs btn-xxs px-3 py-2 btn-info list_item"><i class="nav-icon i-Arrow-Cross"></i></a>
                            </td>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("back.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/emrekaradag/Desktop/projeler/desktop/LRVLPROJECT/ecommerce/resources/views/back/product/index.blade.php ENDPATH**/ ?>