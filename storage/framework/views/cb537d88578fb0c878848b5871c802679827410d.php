<?php $__env->startSection("content"); ?>
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Para Birimleri</h1>
        <div class="col-auto">
            <a tabindex="" data-toggle="modal" data-target="#addCurrency" class="btn btn-primary btn-rounded">Para Birimi Ekle</a>
        </div>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="col-12 px-0">
        <div class="card text-left">
            <div class="card-body">
                <ul class="list-group customLists">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $d->route = route("admin.currency.update",$d->id);
                            $d->deleteRoute = route("admin.currency.destroy",$d->id);
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
    <div class="modal fade" id="addCurrency" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="<?php echo e(route("admin.currency.store")); ?>" method="post" class="modal-content">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5 class="modal-title">Para Birimi Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Para Birim Adı <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" name="title" placeholder="Para Birim Adı Girin">
                    </div>
                    <div class="form-group">
                        <label>Kısa Ad <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" name="short_code" placeholder="Kısa Ad Girin">
                    </div>
                    <div class="form-group">
                        <label>Döviz Kuru <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" name="rate" placeholder="Döviz Kuru Girin">
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
    <div class="modal fade" id="editCurrency" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" class="form modal-content">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="modal-header">
                    <h5 class="modal-title">Para Birimi Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Para Birim Adı <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" name="title" placeholder="Para Birim Adı Girin">
                    </div>
                    <div class="form-group">
                        <label>Kısa Ad <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" name="short_code" placeholder="Kısa Ad Girin">
                    </div>
                    <div class="form-group">
                        <label>Döviz Kuru <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" name="rate" placeholder="Döviz Kuru Girin">
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
            $("#editCurrency form")[0].reset();
            $("#editCurrency form").attr("action" , data.route);
            $("#editCurrency [name='title']").val(data.title)
            $("#editCurrency [name='short_code']").val(data.short_code)
            $("#editCurrency [name='rate']").val(data.rate)
            $("#editCurrency").modal("show")
        })

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("back.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/back/currency/index.blade.php ENDPATH**/ ?>