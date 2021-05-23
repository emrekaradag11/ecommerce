<form method="post" action="{{route('admin.product.setProductVariant')}}" id="setProductVariant" class="col-lg-8 mb-5">
    @csrf
    @foreach($variants as $v)
        @if(count($v->getSubVariants))
            <div class="form-group">
                <div class="input-group">
                    <div class="col-lg-3 px-0">
                        <div class="input-group-prepend w-100 h-100"><span class="input-group-text w-100">{{$v->title}}</span></div>
                    </div>
                    <div class="col-lg px-0">
                        <select name="{{$v->id}}[]" class="form-control select2" multiple="multiple">
                            <option disabled>Alt Varyant Seçiniz</option>
                            @foreach($v->getSubVariants as $sb)
                                <option {{(isset($avaibleVariants) && in_array($sb->id,$avaibleVariants)) ? "selected" : null}} value="{{$sb->id}}">{{$sb->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    <input type="hidden" name="product_id" value="{{$product->id}}">
    <div class="col-12 text-right px-0">
        @if(count($product->getProductVariantDetail))
            <button type="button" onclick="redirectSwal('','#setProductVariant','Dikkat','Bu düzenleme işleminde mevcut varyantlarınız silinecek ve yeni varyantlar oluşturulacaktır. Onaylıyor musunuz ?')" class="btn btn-primary">Varyantları Oluştur</button>
        @else
            <button type="submit" class="btn btn-primary">Varyantları Oluştur</button>
        @endif
    </div>
</form>

<script>

    $('#setProductVariant').on('submit',function (e){
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: '{{route('admin.product.setProductVariant')}}',
            data: $('#setProductVariant').serialize(),
            success: function (response) {
                location.reload();
            }
        });
    })

</script>
