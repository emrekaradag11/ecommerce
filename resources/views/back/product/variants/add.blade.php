@extends('back.layout')
@section('content')
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün'e Varyant Ekle | <a href="" class="text-underline">{{$product->title}}</a></h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="card mb-4">
        <div class="card-body">
            <form method="post" id="setProductVariant" class="col-lg-8 form-group">
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
                                            <option value="{{$sb->id}}">{{$sb->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <div class="col-12 text-right px-0">
                    <button class="btn btn-primary">Varyantları Oluştur</button>
                </div>
            </form>

            <div id="responseData" class="col-12">

            </div>
        </div>
    </div>

    <script>

        $('#setProductVariant').on('submit',function (e){
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: '{{route('admin.product.setProductVariant')}}',
                data: $('#setProductVariant').serialize(),
                success: function (response) {
                    console.log(response)
                }
            });
        })

    </script>
@endsection
