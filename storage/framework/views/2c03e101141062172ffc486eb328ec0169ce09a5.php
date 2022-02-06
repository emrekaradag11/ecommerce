<?php $__env->startSection("content"); ?>
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Marka Listesi</h1>
        <button tabindex data-toggle="modal" data-target="#brandModal" class="btn btn-primary btn-rounded">Marka Ekle</button>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="display table table-striped table-bordered datatable table-hover">
                    <thead>
                    <tr>
                        <th>Sıra</th>
                        <th>Başlık</th>
                        <th>Bağlı Olduğu Ürün Sayısı</th>
                        <th class="text-right">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php
                            $d->route = route("admin.brand.update",$d->id);
                            $d->deleteRoute = route("admin.brand.destroy",$d->id);
                        ?>
                        <tr>
                            <td><?php echo e($loop->index + 1); ?></td>
                            <td><?php echo e($d->title); ?></td>
                            <td><?php echo e($d->totalProduct()); ?></td>
                            <td class="text-right">
                                <a tabindex data-info="<?php echo e($d); ?>" data-img="<?php echo e($d->image ? asset('uploads/' . $d->image()->first()->img) : null); ?>" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit"><i class="nav-icon i-Pen-2"></i></a>
                                <a tabindex data-info="<?php echo e($d); ?>" class="btn btn-xs btn-xxs px-3 py-2 btn-danger js_delete"><i class="nav-icon i-Close-Window"></i></a>
                                <a tabindex="" class="btn btn-xs btn-xxs px-3 py-2 btn-info list_item"><i class="nav-icon i-Arrow-Cross"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <form action="" class="d-none js_delete_form" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
            </form>
        </div>
    </div>




    <!-- create Modal-->
    <div class="modal fade" id="brandModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" action="<?php echo e(route("admin.brand.store")); ?>" enctype="multipart/form-data" class="form modal-content">
                <?php echo csrf_field(); ?>
                <?php echo method_field("POST"); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Marka Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Marka Adı:</label>
                        <input type="text" name="title" id="title" class="form-control form-control-solid"/>
                    </div>
                    <div class="form-group">
                        <label for="img">Görsel:</label>
                        <input type="file" name="img" id="img" class="form-control form-control-solid dropify"/>
                    </div>
                    <div class="form-hidden d-none">
                        <input type="hidden" class="form-control form-control-solid" name="status_id" value="1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>
    </div>


    <!-- update Modal-->
    <div class="modal fade" id="brandEditModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" enctype="multipart/form-data" class="form modal-content">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Marka Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Marka Adı:</label>
                        <input type="text" name="title" id="title" class="form-control form-control-solid"/>
                    </div>
                    <div class="form-group">
                        <label for="img">Görsel:</label>
                        <div class="js-img"></div>
                    </div>
                    <div class="form-hidden d-none">
                        <input type="hidden" class="form-control form-control-solid" name="status_id" value="1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>
    </div>




    <script>

        $(document).on("click",".js_delete",function () {
            $('.js_delete_form').attr("action",$(this).data("info").deleteRoute).submit();
        })

        $(document).on("click",".js-edit",function (){
            let data = $(this).data("info");
            var img = $(this).data("img");
            $("#brandEditModal form")[0].reset();
            $("#brandEditModal form").attr("action" , data.route);
            $("#brandEditModal [name='title']").val(data.title)
            $("#brandEditModal [name='status_id']").val(data.status_id)
            $(".js-img").html('<input type="file" name="img" id="img" class="form-control form-control-solid dropify"/>');
            setTimeout(function (){
                var imgElem = $("#brandEditModal .dropify");
                dropifyInit(imgElem,img)
            },100)
            $("#brandEditModal").modal("show")
        })

        $(document).ready(function (){
            $('#customDatatable').DataTable({
                responsive: true,
                lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                pageLength: 10,
            });
        })
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("back.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/emrekaradag/Desktop/projeler/LRVLPROJECT/ecommerce/resources/views/back/brand/index.blade.php ENDPATH**/ ?>