@extends("back.layout")
@section("content")
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün Ekle</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="col-12 px-0">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-2">Genel Bilgiler</h4>
                <form method="post" action="{{route("admin.product.store")}}" class="row">
                    @csrf
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-3 form-group">
                                <label>Kategori:</label>
                                <select name="category_id" required class="form-control" id="">
                                    <option value="">Seçiniz</option>
                                    @foreach($categories as $c)
                                        <option value="{{$c->id}}">{{$c->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Marka:</label>
                                <select name="brand_id" required class="form-control" id="">
                                    <option value="">Seçiniz</option>
                                    @foreach($brands as $b)
                                        <option value="{{$b->id}}">{{$b->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Birim:</label>
                                <select name="product_unit_id" required class="form-control" id="">
                                    <option value="">Seçiniz</option>
                                    @foreach($product_units as $p)
                                        <option value="{{$p->id}}">{{$p->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Para Birimi:</label>
                                <select name="currency_id" required class="form-control" id="">
                                    <option value="">Seçiniz</option>
                                    @foreach($currency as $c)
                                        <option value="{{$c->id}}">{{$c->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label>Ürün Adı:</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Stok:</label>
                                <input type="text" name="stock" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Ürün Kodu:</label>
                                <input type="text" name="product_code" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Barkod:</label>
                                <input type="text" name="product_code" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Kargo Süresi (Gün):</label>
                                <input type="text" name="shipping_day" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Kargo Fiyatı :</label>
                                <input type="text" name="shipping_price" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Etiketler :</label>
                                <input type="text" name="tags" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Descriptions :</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Keywords :</label>
                                <input type="text" name="keywords" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Açıklama :</label>
                                <textarea class="form-control" name="text" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset("back/css/smart.wizard/smart_wizard.min.css")}}" />
    <link rel="stylesheet" href="{{asset("back/css/smart.wizard/smart_wizard_theme_arrows.min.css")}}" />
    <link rel="stylesheet" href="{{asset("back/css/smart.wizard/smart_wizard_theme_circles.min.css")}}" />
    <link rel="stylesheet" href="{{asset("back/css/smart.wizard/smart_wizard_theme_dots.min.css")}}" />
@endsection

@section("js")
    <script src="{{asset("back/js/jquery.smartWizard.min.js")}}"></script>
    <script src="{{asset("back/js/smart.wizard.script.min.js")}}"></script>
@endsection
