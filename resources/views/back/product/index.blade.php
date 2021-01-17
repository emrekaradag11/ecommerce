@extends("back.layout")
@section("content")
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün Listesi</h1>
        <a href="{{route("admin.product.create")}}" class="btn btn-primary btn-rounded">Ürün Ekle</a>
    </div>
    <div class="separator-breadcrumb border-top"></div>

@endsection
