@extends("back.layout")
@section("content")
    <div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Kategoriler Listesi</h5>
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Toplam ({{count(\App\Models\categories::where("status_id" , "<>" , "2")->get())}}) </span>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a tabindex data-toggle="modal" data-target="#categoryModal" class="btn btn-success font-weight-bold btn-sm px-4 font-size-base ml-2">Kategori Ekle</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <div class="card card-custom">
                <div class="card-body customList">
                    <ul class="pl-0">
                        @include("back.category.subLists.subCategoryList",["data" => $data])
                    </ul>

                    <form action="" class="d-none js_delete_form" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- create Modal-->
    <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" action="{{route("admin.category.store")}}" class="form modal-content">
                @csrf
                @method("POST")
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
                            @include("back.category.subLists.subOptionList",["data" => $data])
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori tipi:</label>
                        <div class="radio-list d-flex flex-row align-items-center">
                            <label class="radio mb-0 mr-3">
                                <input type="radio" value="1" name="type_id"/>
                                <span></span>
                                Tip 1
                            </label>
                            <label class="radio mb-0 mr-3">
                                <input type="radio" value="2" name="type_id"/>
                                <span></span>
                                Tip 2
                            </label>
                            <label class="radio mb-0 mr-3">
                                <input type="radio" value="3" name="type_id"/>
                                <span></span>
                                Tip 3
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
            <form method="post" action="{{url("admin/category")}}" class="form modal-content">
                @csrf
                @method("PUT")
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
                            @include("back.category.subLists.subOptionList",["data" => $data])
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori tipi:</label>
                        <div class="radio-list d-flex flex-row align-items-center">
                            <label class="radio mb-0 mr-3">
                                <input type="radio" value="1" name="type_id"/>
                                <span></span>
                                Tip 1
                            </label>
                            <label class="radio mb-0 mr-3">
                                <input type="radio" value="2" name="type_id"/>
                                <span></span>
                                Tip 2
                            </label>
                            <label class="radio mb-0 mr-3">
                                <input type="radio" value="3" name="type_id"/>
                                <span></span>
                                Tip 3
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


    </script>



@endsection
