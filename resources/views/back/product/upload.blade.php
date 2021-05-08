@extends("back.layout")
@section("content")
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">{{$product->title}} | Görsel Ekle</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="col-12 px-0">
        <div class="card text-left">
            <div class="card-body">
                <form class="dropzone form-group" id="multple-file-upload" action="{{route("admin.product.uploadPictures")}}">
                    @csrf
                    <div class="fallback">
                        <input name="img" type="file" multiple="multiple" />
                    </div>
                    <input type="hidden" name="product_id" value="{{$product->getProductDetail->id}}">
                </form>
                <div class="form-group text-right">
                    <a href="{{route("admin.product.create")}}" class="btn btn-success">Tamamla</a>
                </div>
            </div>
        </div>
    </div>

@endsection
