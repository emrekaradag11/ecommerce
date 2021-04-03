@extends("back.layout")
@section("content")
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün Listesi</h1>
        <a href="{{route("admin.product.create")}}" class="btn btn-primary btn-rounded">Ürün Ekle</a>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="display table table-striped datatable table-hover customDatatable">
                    <thead>
                    <tr>
                        <th>Sıra</th>
                        <th>Görsel</th>
                        <th>Kategori</th>
                        <th>Marka</th>
                        <th>Fiyat</th>
                        <th>Stok</th>
                        <th class="text-right">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $p)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>
                                <div class="customImg">
                                    <img src="{{asset("back/img/headphone-4.jpg")}}" alt="" />
                                </div>
                            </td>
                            <td>{{$p->getProductCategory->title}}</td>
                            <td>{{$p->getProductBrand->title}}</td>
                            <td>{{priceFormat($p->getProductDetail->price) . " " . $p->getProductDetail->getProductCurrency->short_code}}</td>
                            <td>{{$p->getProductDetail->stock}}</td>
                            <td class="text-right">
                                <a tabindex data-info="{{$p}}" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit"><i class="nav-icon i-Pen-2"></i></a>
                                <a tabindex data-info="{{$p}}" class="btn btn-xs btn-xxs px-3 py-2 btn-danger js_delete"><i class="nav-icon i-Close-Window"></i></a>
                                <a tabindex="" class="btn btn-xs btn-xxs px-3 py-2 btn-info list_item"><i class="nav-icon i-Arrow-Cross"></i></a>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
