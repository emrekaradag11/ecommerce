<?php $__env->startSection("content"); ?>
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">İndirim Tipleri</h1>
        <div class="col-auto">
            <a tabindex="" data-toggle="modal" data-target="#addDiscountType" class="btn btn-primary btn-rounded">İndirim Tipi Ekle</a>
        </div>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <label for="" class="text-white rounded px-4 py-1 bg-danger">Buradaki bazı indirim tipleri silinemez</label>

    <div class="col-12 px-0">
        <div class="card text-left">
            <div class="card-body">
                <ul class="list-group customLists">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $d->route = route("admin.discount.update",$d->id);
                            $d->deleteRoute = route("admin.discount.destroy",$d->id);
                        ?>
                        <li class="list-group-item list-group-item-action" id="item-<?php echo e($d->id); ?>" data-content="<?php echo e($d->id); ?>">
                            <div class="d-flex align-items-center justify-content-between customListElement">
                                <div class="col-auto">
                                    <span class="customListNumber"><?php echo e($d->id); ?></span>
                                    <strong><?php echo e($d->title); ?></strong>
                                </div>
                                <div class="col-auto">
                                    <a tabindex data-info="<?php echo e($d); ?>" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit"><i class="nav-icon i-Pen-2"></i></a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>


    <!-- create Modal-->
    <div class="modal fade" id="addDiscountType" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="<?php echo e(route("admin.discount.store")); ?>" method="post" class="modal-content">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5 class="modal-title">İndirim Tipi Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>İndirim Adı <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" name="title" placeholder="İndirim Adı Girin">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="1" name="status_id">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>
    </div>

    <!-- update Modal-->
    <div class="modal fade" id="editDiscountType" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" class="form modal-content">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="modal-header">
                    <h5 class="modal-title">İndirim Tipi Güncelle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>İndirim Adı <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" name="title" placeholder="İndirim Adı Girin">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="1" name="status_id">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>
    </div>

    <script>

        $(document).on("click",".js-edit",function (){
            let data;
            data = $(this).data("info");
            $("#editDiscountType form")[0].reset();
            $("#editDiscountType form").attr("action" , data.route);
            $("#editDiscountType [name='title']").val(data.title)
            $("#editDiscountType").modal("show")
        })

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("back.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/emrekaradag/Desktop/projeler/LRVLPROJECT/ecommerce/resources/views/back/discount/index.blade.php ENDPATH**/ ?>