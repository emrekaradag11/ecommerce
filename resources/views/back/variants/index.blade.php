@extends("back.layout")
@section("content")
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Varyant Listesi</h1>
        <button tabindex data-toggle="modal" data-target="#variantsModal" class="btn btn-primary btn-rounded">Varyant Ekle</button>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="card text-left">
        <div class="card-body">
            <ul class="list-group customLists">
                @foreach($data as $d)
                    @php
                        $d->route = route("admin.variants.update",$d->id);
                        $d->deleteRoute = route("admin.variants.destroy",$d->id);
                    @endphp
                    <li class="list-group-item list-group-item-action" id="item-{{$d->id}}" data-content="{{$d->id}}">
                        <div class="d-flex align-items-center justify-content-between customListElement">
                            <strong>{{$d->title}}</strong>
                            <div>
                                <a tabindex data-info="{{$d}}" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit"><i class="nav-icon i-Pen-2"></i></a>
                                <a tabindex data-info="{{$d}}" class="btn btn-xs btn-xxs px-3 py-2 btn-danger js_delete"><i class="nav-icon i-Close-Window"></i></a>
                                <a tabindex="" class="btn btn-xs btn-xxs px-3 py-2 btn-info list_item"><i class="nav-icon i-Arrow-Cross"></i></a>
                            </div>
                        </div>
                    </li>
                    @if(count($d->getSubVariants)>0)
                        <ul class="list-group customLists">
                            @foreach($d->getSubVariants as $d)
                                @php
                                    $d->route = route("admin.variants.update",$d->id);
                                    $d->deleteRoute = route("admin.variants.destroy",$d->id);
                                @endphp
                                <li class="list-group-item list-group-item-action" id="item-{{$d->id}}" data-content="{{$d->id}}">
                                    <div class="d-flex align-items-center justify-content-between customListElement">
                                        <strong>{{$d->title}}</strong>
                                        <div>
                                            <a tabindex data-info="{{$d}}" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit"><i class="nav-icon i-Pen-2"></i></a>
                                            <a tabindex data-info="{{$d}}" class="btn btn-xs btn-xxs px-3 py-2 btn-danger js_delete"><i class="nav-icon i-Close-Window"></i></a>
                                            <a tabindex="" class="btn btn-xs btn-xxs px-3 py-2 btn-info list_item"><i class="nav-icon i-Arrow-Cross"></i></a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>


    <form action="" class="d-none js_delete_form" method="POST">
        @csrf
        @method('DELETE')
    </form>



    <!-- create Modal-->
    <div class="modal fade" id="variantsModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" action="{{route("admin.variants.store")}}" class="form modal-content">
                @csrf
                @method("POST")
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Varyant Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Varyant Adı:</label>
                        <input type="text" name="title" id="title" class="form-control form-control-solid"/>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Üst Varyant</label>
                        <select name="parent_id" id="parent_id" class="form-control form-control-solid">
                            <option value="0">Üst Varyant</option>
                            @foreach($data as $d)
                                <option value="{{$d->id}}">{{$d->title}}</option>
                            @endforeach
                        </select>
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
    <div class="modal fade" id="variantsEditModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" action="{{url("admin/variants")}}" class="form modal-content">
                @csrf
                @method("PUT")
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Varyant Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Varyant Adı:</label>
                        <input type="text" name="title" id="title" class="form-control form-control-solid"/>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Üst Varyant</label>
                        <select name="parent_id" id="parent_id" class="form-control form-control-solid">
                            <option value="0">Üst Varyant</option>
                            @foreach($data as $d)
                                <option value="{{$d->id}}">{{$d->title}}</option>
                            @endforeach
                        </select>
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
            let data;
            data = $(this).data("info");
            $("#variantsEditModal form")[0].reset();
            $("#variantsEditModal form").attr("action" , data.route);
            $("#variantsEditModal [name='title']").val(data.title)
            $("#variantsEditModal [name='parent_id']").val(data.parent_id)
            $("#variantsEditModal [name='status_id']").val(data.status_id)
            $("#variantsEditModal").modal("show")
        })

    </script>

@endsection
