@extends("back/layout")
@section("content")
    <div class="main-content">
        <div class="breadcrumb d-flex align-items-center justify-content-between">
            <h1>Kullanıcı Ekle</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="col-lg-7 px-0">
                    <form action="{{route("admin.users.store")}}" enctype="multipart/form-data" class="row" method="post">
                        @csrf
                        @method("post")
                        <div class="form-group col-lg-6">
                            <label for="name">@lang("variable.adi"):</label>
                            <input type="text" name="name" id="name" class="form-control form-control-solid"/>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="surname">@lang("variable.soyadi"):</label>
                            <input type="text" name="surname" id="surname" class="form-control form-control-solid"/>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="email">@lang("variable.email"):</label>
                            <input type="email" name="email" id="email" class="form-control form-control-solid"/>
                        </div>
                        {{--<div class="form-group col-lg-6">
                            <label for="permissions">İzinler:</label>
                            <input type="text" name="permissions" id="permissions" class="form-control form-control-solid"/>
                        </div>--}}
                        <div class="form-group col-lg-6">
                            <label for="type">Kullanıcı Tipi:</label>
                            <select name="type" id="type" required class="form-control form-control-solid">
                                <option value="">Kullanıcı Tipi Seçiniz</option>
                                @foreach($user_types as $u)
                                    <option value="{{$u->id}}">{{$u->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="password">Şifre:</label>
                            <input type="text" name="password" id="password" class="form-control form-control-solid"/>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="repeat-password">Şifre Tekrarı:</label>
                            <input type="text" name="repeat-password" id="repeat-password" class="form-control form-control-solid"/>
                        </div>
                        <div class="form-group col-12">
                            <label for="img">Görsel:</label>
                            <input type="file" name="img" id="img" class="form-control form-control-solid dropify"/>
                        </div>
                        <div class="col-lg-12 text-right">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
