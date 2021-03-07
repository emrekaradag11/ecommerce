@extends("back.layout")
@section("content")
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
                    @foreach($data as $d)
                        @php
                            $d->route = route("admin.currency.update",$d->id);
                            $d->deleteRoute = route("admin.currency.destroy",$d->id);
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
    <div class="modal fade" id="addCurrency" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{route("admin.currency.store")}}" method="post" class="modal-content">
                @csrf
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
                @csrf
                @method("PUT")
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

@endsection
