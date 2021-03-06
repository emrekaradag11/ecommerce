@extends("back.layout")
@section("content")
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
                    @foreach($data as $d)
                        @php
                            $d->route = route("admin.discount.update",$d->id);
                            $d->deleteRoute = route("admin.discount.destroy",$d->id);
                        @endphp
                        <li class="list-group-item list-group-item-action" id="item-{{$d->id}}" data-content="{{$d->id}}">
                            <div class="d-flex align-items-center justify-content-between customListElement">
                                <div class="col-auto">
                                    <span class="customListNumber">{{$d->id}}</span>
                                    <strong>{{$d->title}}</strong>
                                </div>
                                <div class="col-auto">
                                    <a tabindex data-info="{{$d}}" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit"><i class="nav-icon i-Pen-2"></i></a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


    <!-- create Modal-->
    <div class="modal fade" id="addDiscountType" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{route("admin.discount.store")}}" method="post" class="modal-content">
                @csrf
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
                @csrf
                @method("PUT")
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

@endsection
