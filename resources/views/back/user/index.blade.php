@extends("back/layout")
@section("content")
    <div class="main-content">
        <div class="breadcrumb d-flex align-items-center justify-content-between">
            <h1>Kullanıcılar</h1>
            <a href="{{route("admin.user.create")}}" class="btn btn-primary btn-rounded">Kullanıcı Ekle</a>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <section class="ul-contact-page">
            <div class="row">
                <div class="col-lg-4 col-xl-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="ul-contact-page__profile">
                                <div class="user-profile"><img class="profile-picture mb-2" src="{{asset("back/img/3.jpg")}}" alt="alt"></div>
                                <div class="ul-contact-page__info">
                                    <p class="m-0 text-24">Timothy Carlson</p>
                                    <p class="text-muted m-0">Digital Marketer</p>
                                    <p class="text-muted mt-3">DieSachbearbeiter Choriner Straße 49 10435 Berlin</p>
                                    <p class="text-muted mt-3">NO: 234-987-665-340</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="ul-contact-page__profile">
                                <div class="user-profile"><img class="profile-picture mb-2" src="{{asset("back/img/3.jpg")}}" alt="alt"></div>
                                <div class="ul-contact-page__info">
                                    <p class="m-0 text-24">Timothy Carlson</p>
                                    <p class="text-muted m-0">Digital Marketer</p>
                                    <p class="text-muted mt-3">DieSachbearbeiter Choriner Straße 49 10435 Berlin</p>
                                    <p class="text-muted mt-3">NO: 234-987-665-340</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  content goes here -->
        <!-- end of main-content -->
    </div>
@endsection
