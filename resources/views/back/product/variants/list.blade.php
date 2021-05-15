<form action="{{route('admin.product.editProductVariant')}}" method="post" class="col-12 px-0">
    @csrf

    <table class="display table table-striped table-hover fixedTable">
        <thead>
        <tr>
            <th>Sıra</th>
            <th>Görsel</th>
            <th>Ürün Kodu</th>
            <th>Varyant Kodu</th>
            <th>Varyantlar</th>
            <th>Fiyat</th>
            <th>Satış Fiyatı</th>
            <th>Stok</th>
            <th>Durum</th>
            <th>Detaylar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product_variants as $p)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>
                    <div class="customImg">
                        <img src="{{asset(isset($p->image->first()->img) ? 'uploads/' . $p->image->first()->img : 'images/no_img.jpg')}}" alt="" />
                    </div>
                </td>
                <td>
                    <input type="text" name="{{$p->id}}[product_code]" class="form-control" value="{{$p->product_code}}" readonly disabled placeholder="Ürün Kodu">
                </td>
                <td>
                    <input type="text" name="{{$p->id}}[variant_code]" class="form-control" value="{{$p->variant_code}}" placeholder="Varyant Kodu">
                </td>
                <td>
                    @foreach($p->getVariantNames->getOptions as $variantName)
                        <span class="badge badge-warning text-12 mr-2 my-2">{{$variantName->getName->title}}</span>
                    @endforeach
                </td>
                <td>
                    <input type="text" name="{{$p->id}}[price]" class="form-control price_format" value="{{$p->price ?? priceFormat($p->price)}}" placeholder="Fiyat" name="price" maxlength="18" required >
                </td>
                <td>
                    __xx__
                </td>
                <td>
                    <input type="text" name="{{$p->id}}[stock]" class="form-control" value="{{$p->stock ?? $p->stock}}" placeholder="Stok">
                </td>
                <td>
                    <label class="switch switch-success mr-3 mb-3 d-block">
                        <span>Aktif </span>
                        <input type="radio" name="{{$p->id}}[status_id]" value="1" checked ><span class="slider"></span>
                    </label>
                    <label class="switch switch-danger mr-3 d-block">
                        <span>Pasif </span>
                        <input type="radio" name="{{$p->id}}[status_id]" {{$p->status_id == '3' ? 'checked' : null}} value="3" ><span class="slider"></span>
                    </label>
                    <input type="hidden" name="{{$p->id}}[variant_group_id]" value="{{$p->variant_group_id}}">
                </td>
                <td>
                    <a data-id="{{$p->id}}" tabindex data-toggle="tooltip" data-placement="top" title="Düzenle" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit"><i class="nav-icon i-Pen-2"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-12 form-group text-right">
        <button type="submit" class="btn btn-success">Kaydet</button>
    </div>
</form>

