@extends("back.layout")
@section("content")
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün Düzenle</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="col-12 px-0">
        <div class="card text-left">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-8">
                        <h4 class="card-title mb-2">Genel Bilgiler</h4>
                        <form method="post" action="{{route("admin.product.update",$product->id)}}" class="row">
                            @csrf
                            @method("put")
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-3 form-group">
                                        <label>Kategori:</label>
                                        <select name="category_id" required class="form-control" id="">
                                            <option value="">Seçiniz</option>
                                            @foreach($categories as $c)
                                                <option {{$product->category_id == $c->id ? " selected" : null}} value="{{$c->id}}">{{$c->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 form-group">
                                        <label>Marka:</label>
                                        <select name="brand_id" required class="form-control" id="">
                                            <option value="">Seçiniz</option>
                                            @foreach($brands as $b)
                                                <option {{$product->brand_id == $b->id ? " selected" : null}} value="{{$b->id}}">{{$b->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 form-group">
                                        <label>Birim:</label>
                                        <select name="product_unit_id" required class="form-control" id="">
                                            <option value="">Seçiniz</option>
                                            @foreach($product_units as $p)
                                                <option {{$product->product_unit_id == $p->id ? " selected" : null}} value="{{$p->id}}">{{$p->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 form-group">
                                        <label>Para Birimi:</label>
                                        <select name="currency_id" required class="form-control" id="">
                                            <option value="">Seçiniz</option>
                                            @foreach($currency as $c)
                                                <option {{$product->getProductDetail->currency_id == $c->id ? " selected" : null}} value="{{$c->id}}">{{$c->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 form-group">
                                        <label>Varyant Durumu:</label>
                                        <select name="variant_status_id" required class="form-control" id="">
                                            <option {{$product->variant_status_id == '0' ? 'selected' : null}} value="0" selected>Varyantsız</option>
                                            <option {{$product->variant_status_id == '1' ? 'selected' : null}} value="1">Varyantlı</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Ürün Adı:</label>
                                        <input type="text" value="{{$product->title}}" name="title" required class="form-control">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Fiyat:</label>
                                        <input type="text" value="{{priceFormat($product->getProductDetail->price)}}" name="price" maxlength="18" required class="form-control price_format">
                                    </div>
                                    @foreach($discounts as $d)
                                        <div class="col-lg-6 form-group">
                                            <label>{{$d->title}} (%)</label>
                                            <input type="number" value="{{isset($d->rate) ? $d->rate : null}}" maxlength="2" name="product_discount[{{$d->id}}]" class="form-control">
                                        </div>
                                    @endforeach
                                    <div class="col-lg-6 form-group">
                                        <label>Stoksuz Satış:</label>
                                        <div class="d-block">
                                            <label class="switch pr-5 switch-success mr-3"><span>Aktif</span>
                                                <input
                                                    {{$product->getProductDetail->stock_status_id == '1' ? 'checked' : null }}
                                                    type="radio"
                                                    class="js-stock_status"
                                                    name="stock_status_id"
                                                    value="1"><span class="slider"></span>
                                            </label>
                                            <label class="switch pr-5 switch-danger mr-3"><span>Pasif</span>
                                                <input
                                                    {{$product->getProductDetail->stock_status_id == '0' ? 'checked' : null }}
                                                    type="radio"
                                                    class="js-stock_status"
                                                    name="stock_status_id"
                                                    value="0"><span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Stok:</label>
                                        <input type="number"  {{$product->getProductDetail->stock_status_id == '1' ? 'readonly' : null}}  value="{{$product->getProductDetail->stock}}" name="stock" class="form-control js-stock_input">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Ürün Kodu:</label>
                                        <input type="text" value="{{$product->getProductDetail->product_code}}" required name="product_code" class="form-control">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Barkod:</label>
                                        <input type="number" value="{{$product->barcode}}" name="barcode" class="form-control">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Teslimat Süresi (Gün):</label>
                                        <input type="number" value="{{$product->getProductDetail->shipping_day}}" required name="shipping_day" class="form-control">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Kargo Fiyatı :</label>
                                        <input type="text" value="{{$product->getProductDetail->shipping_price}}" maxlength="18" required name="shipping_price" class="form-control price_format">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>KDV:</label>
                                        <input type="number" value="{{$product->getProductDetail->kdv}}" required name="kdv" class="form-control">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Ürün Durumu:</label>
                                        <select name="status_id" required class="form-control" id="">
                                            <option value="">Seçiniz</option>
                                            <option value="1" {{$product->status_id == "1" ? "selected" : null}}>Aktif</option>
                                            <option value="2" {{$product->status_id == "2" ? "selected" : null}}>Pasif</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Etiketler :</label>
                                        <input type="text" value="{{$product->tags}}" name="tags" class="form-control">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Descriptions :</label>
                                        <input type="text" value="{{$product->description}}" name="description" class="form-control">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Keywords :</label>
                                        <input type="text" value="{{$product->keywords}}" name="keywords" class="form-control">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Açıklama :</label>
                                        <textarea class="form-control" name="text" id="" cols="30" rows="10">{{$product->text}}</textarea>
                                    </div>
                                    <div class="col-12 form-group text-right">
                                        <input type="hidden" name="type_id" value="{{$product->getProductDetail->type_id}}">
                                        <button type="submit" class="btn btn-success">Kaydet</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <form class="dropzone dropzone-area form-group" enctype="multipart/form-data" method="post" id="multple-file-upload" action="{{route("admin.product.uploadPictures")}}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->getProductDetail->id}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("js")
    <script>
        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone(".dropzone", {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 5, // MB
            clickable: true,
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            removedfile: function(file)
            {

                $.ajax({
                    type: 'POST',
                    url: '{{Route("admin.deleteImages")}}',
                    data: {
                        id: file.id,
                    },
                    success: function (data){
                        //console.log(data);
                    },
                    error: function(e) {
                        //console.log(e);
                    }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            @if(isset($pictures) && !empty($pictures))
            init: function() {
                var thisDropzone = this;

                @foreach($pictures as $p)
                    var mockFile = {
                        id: '{{$p->id}}',
                        name: '{{$p->img}}',
                        size: {{filesize(public_path("uploads/" . $p->img))}},
                        type: '{{image_type_to_mime_type(exif_imagetype("uploads/" . $p->img))}}'
                    };
                    thisDropzone.emit("addedfile", mockFile);
                    thisDropzone.emit("success", mockFile);
                    thisDropzone.emit("complete",mockFile);
                    thisDropzone.emit("thumbnail", mockFile, "{{url("uploads/" . $p->img)}}");
                @endforeach

                $(".dz-preview").each(function (){
                    $(this).attr("data-content",$(this).find("[data-dz-id]").html());
                })

                this.on("maxfilesexceeded", function(file){
                    this.removeFile(file);
                    alert("No more files please!");
                });

            }
            @endif
        });


        $( ".dropzone" ).sortable({
            revert: true,
            items:'.dz-preview',
            cursor: 'move',
            opacity: 0.5,
            containment: '.dropzone',
            distance: 20,
            tolerance: 'pointer',
            stop: function (event, ui) {
                let data = $(this).sortable('toArray', {attribute: 'data-content'});
                $.ajax({
                    type:"post",
                    method:"post",
                    data: {
                        data : data,
                    },
                    url: "{!!route('admin.img.sortable')!!}",
                    success: function (res) {
                        console.log(res)
                    }
                });
            }
        });
    </script>
@endsection










