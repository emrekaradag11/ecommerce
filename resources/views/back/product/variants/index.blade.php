@extends('back.layout')

@section('content')
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün'e Varyant Ekle | <a href="" class="text-underline">{{$product->title}}</a></h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="card mb-4">
        <div class="card-body">
            @include("back.product.variants.add")
            @if(count($product->getProductVariantDetail))
                @include("back.product.variants.list")
            @endif
        </div>
    </div>
@endsection



