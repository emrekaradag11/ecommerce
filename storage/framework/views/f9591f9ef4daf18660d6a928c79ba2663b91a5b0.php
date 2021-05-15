<?php $__env->startSection("content"); ?>
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Kategori Listesi</h1>
        <button tabindex data-toggle="modal" data-target="#categoryModal" class="btn btn-primary btn-rounded">Kategori Ekle</button>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="col-12">
        <div class="card text-left">
            <div class="card-body">
                <?php echo $__env->make("back.category.sublist.subCategoryList", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>


    <form action="" class="d-none js_delete_form" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    </form>



    <!-- create Modal-->
    <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" action="<?php echo e(route("admin.category.store")); ?>" class="form modal-content">
                <?php echo csrf_field(); ?>
                <?php echo method_field("POST"); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kategori Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Kategori Adı:</label>
                        <input type="text" name="title" id="title" class="form-control form-control-solid"/>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Üst Kategori</label>
                        <select name="parent_id" id="parent_id" class="form-control form-control-solid">
                            <option value="0">Üst Kategori</option>
                            <?php echo $__env->make("back.category.sublist.subOptionList",["data" => $data], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori tipi:</label>
                        <div class="radio-list d-flex flex-row align-items-center">
                            <label class="radio radio-outline-success">
                                <input type="radio" value="1" name="type_id" /><span>Tip 1</span><span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-success ml-2">
                                <input type="radio" value="2" name="type_id" /><span>Tip 2</span><span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-success ml-2">
                                <input type="radio" value="3" name="type_id" /><span>Tip 3</span><span class="checkmark"></span>
                            </label>
                        </div>
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


    <!-- edit Modal-->
    <div class="modal fade" id="categoryEditModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" action="<?php echo e(url("admin/category")); ?>" class="form modal-content">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kategori Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Kategori Adı:</label>
                        <input type="text" name="title" id="title" class="form-control form-control-solid"/>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Üst Kategori</label>
                        <select name="parent_id" id="parent_id" class="form-control form-control-solid">
                            <option value="0">Üst Kategori</option>
                            <?php echo $__env->make("back.category.sublist.subOptionList",["data" => $data], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori tipi:</label>
                        <div class="radio-list d-flex flex-row align-items-center">
                            <label class="radio radio-outline-success">
                                <input type="radio" value="1" name="type_id" /><span>Tip 1</span><span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-success ml-2">
                                <input type="radio" value="2" name="type_id" /><span>Tip 2</span><span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-success ml-2">
                                <input type="radio" value="3" name="type_id" /><span>Tip 3</span><span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-hidden d-none">
                        <input type="hidden" class="form-control form-control-solid" name="status_id" value="">
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
            let data;
            data = $(this).data("info");
            $("#categoryEditModal form")[0].reset();
            $("#categoryEditModal form").attr("action" , data.route);
            $("#categoryEditModal [name='title']").val(data.title)
            $("#categoryEditModal [name='type_id'][value='" + data.type_id + "']").prop("checked",true)
            $("#categoryEditModal [name='parent_id']").val(data.parent_id)
            $("#categoryEditModal [name='status_id']").val(data.status_id)
            $("#categoryEditModal").modal("show")
        })


        $( ".sortables" ).sortable({
            revert: true,
            handle: ".list_item",
            stop: function (event, ui) {
                let data = $(this).sortable('toArray', {attribute: 'data-content'});
                $.ajax({
                    type:"post",
                    method:"post",
                    data: {
                        data : data,
                    },
                    url: "<?php echo route('admin.categorySortable'); ?>",
                    success: function (res) {
                        console.log(res)
                    }
                });

            }
        });

    </script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make("back.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/back/category/index.blade.php ENDPATH**/ ?>