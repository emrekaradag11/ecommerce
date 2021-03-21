<!DOCTYPE html>
<html lang="tr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>E-Commerce</title>
    <link rel="icon" type="image/png" href="{{asset("back/img/favicon.jpg")}}"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{asset("back/css/lite-purple.min.css")}}" rel="stylesheet" />
    <link href="{{asset("back/css/toastr.css")}}" rel="stylesheet" />
    <link href="{{asset("back/css/perfect-scrollbar.min.css")}}" rel="stylesheet" />
    <link href="{{asset("back/css/custom.css")}}" rel="stylesheet" />
    <link href="{{asset("back/css/dropify.min.css")}}" rel="stylesheet" />
    @yield("css")
    <script src="{{asset("back/js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("back/js/jquery-ui.min.js")}}"></script>
</head>

<body class="text-left">
<div class="app-admin-wrap layout-sidebar-large">
    <div class="main-header">
        <div class="logo">
            <img src="{{asset("back/img/logo.svg")}}" alt="">
        </div>
        <div class="menu-toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="d-flex align-items-center">
            <div class="dropdown mega-menu d-none d-md-block">
                <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a>
                <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                    <div class="row m-0">
                        <div class="col-md-4 p-4 bg-img">
                            <h2 class="title">Mega Menu <br> Sidebar</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                            </p>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                            <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                        </div>
                        <div class="col-md-4 p-4">
                            <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                            <div class="menu-icon-grid w-auto p-0">
                                <a href="#"><i class="i-Shop-4"></i> Home</a>
                                <a href="#"><i class="i-Library"></i> UI Kits</a>
                                <a href="#"><i class="i-Drop"></i> Apps</a>
                                <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                <a href="#"><i class="i-Ambulance"></i> Support</a>
                            </div>
                        </div>
                        <div class="col-md-4 p-4">
                            <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                            <ul class="links">
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="badges.html">Badges</a></li>
                                <li><a href="carousel.html">Carousels</a></li>
                                <li><a href="lists.html">Lists</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="tables.html">Tables</a></li>
                                <li><a href="datatables.html">Datatables</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="nouislider.html">Sliders</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Mega menu -->
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <i class="search-icon text-muted i-Magnifi-Glass1"></i>
            </div>
        </div>
        <div style="margin: auto"></div>
        <div class="header-part-right">
            <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
            <div class="dropdown">
                <i class="i-Safe-Box text-muted header-icon" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="menu-icon-grid">
                        <a href="{{route("admin.statusIndex")}}"><i class="i-Shop-4"></i> Durumlar</a>
                        <a href="#"><i class="i-Library"></i> UI Kits</a>
                        <a href="#"><i class="i-Drop"></i> Apps</a>
                        <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                        <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                        <a href="#"><i class="i-Ambulance"></i> Support</a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="badge badge-primary">3</span>
                    <i class="i-Bell text-muted header-icon"></i>
                </div>
                <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                    <div class="dropdown-item d-flex">
                        <div class="notification-icon">
                            <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                        </div>
                        <div class="notification-details flex-grow-1">
                            <p class="m-0 d-flex align-items-center">
                                <span>New message</span>
                                <span class="badge badge-pill badge-primary ml-1 mr-1">new</span>
                                <span class="flex-grow-1"></span>
                                <span class="text-small text-muted ml-auto">10 sec ago</span>
                            </p>
                            <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                        </div>
                    </div>
                    <div class="dropdown-item d-flex">
                        <div class="notification-icon">
                            <i class="i-Receipt-3 text-success mr-1"></i>
                        </div>
                        <div class="notification-details flex-grow-1">
                            <p class="m-0 d-flex align-items-center">
                                <span>New order received</span>
                                <span class="badge badge-pill badge-success ml-1 mr-1">new</span>
                                <span class="flex-grow-1"></span>
                                <span class="text-small text-muted ml-auto">2 hours ago</span>
                            </p>
                            <p class="text-small text-muted m-0">1 Headphone, 3 iPhone x</p>
                        </div>
                    </div>
                    <div class="dropdown-item d-flex">
                        <div class="notification-icon">
                            <i class="i-Empty-Box text-danger mr-1"></i>
                        </div>
                        <div class="notification-details flex-grow-1">
                            <p class="m-0 d-flex align-items-center">
                                <span>Product out of stock</span>
                                <span class="badge badge-pill badge-danger ml-1 mr-1">3</span>
                                <span class="flex-grow-1"></span>
                                <span class="text-small text-muted ml-auto">10 hours ago</span>
                            </p>
                            <p class="text-small text-muted m-0">Headphone E67, R98, XL90, Q77</p>
                        </div>
                    </div>
                    <div class="dropdown-item d-flex">
                        <div class="notification-icon">
                            <i class="i-Data-Power text-success mr-1"></i>
                        </div>
                        <div class="notification-details flex-grow-1">
                            <p class="m-0 d-flex align-items-center">
                                <span>Server Up!</span>
                                <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                <span class="flex-grow-1"></span>
                                <span class="text-small text-muted ml-auto">14 hours ago</span>
                            </p>
                            <p class="text-small text-muted m-0">Server rebooted successfully</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="user col align-self-end">
                    <img src="{{asset("back/img/1.jpg")}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-header">
                            <i class="i-Lock-User mr-1"></i> Timothy Carlson
                        </div>
                        <a href="{{route("admin.users.index")}}" class="dropdown-item">Account settings</a>
                        <a class="dropdown-item">Billing history</a>
                        <a class="dropdown-item" href="signin.html">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-content-wrap">
        <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
            <ul class="navigation-left">
                <li class="nav-item" data-item="product-options"><a class="nav-item-hold" href="#"><i class="nav-icon i-Safe-Box1"></i><span class="nav-text">Ürün Ayarları</span></a>
                    <div class="triangle"></div>
                </li>

            </ul>
        </div>
        <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
            <ul class="childNav" data-parent="product-options">
                <li class="nav-item"><a href="{{route("admin.category.index")}}"><i class="nav-icon i-Align-Justify-Right"></i><span class="item-name">Kategoriler</span></a></li>
                <li class="nav-item"><a href="{{route("admin.brand.index")}}"><i class="nav-icon i-Atom"></i><span class="item-name">Markalar</span></a></li>
                <li class="nav-item"><a href="{{route("admin.product.index")}}"><i class="nav-icon i-Structure"></i><span class="item-name">Ürünler</span></a></li>
                <li class="nav-item"><a href="{{route("admin.discount.index")}}"><i class="nav-icon i-Arrow-Inside-Gap-45"></i><span class="item-name">İndirimler</span></a></li>
                <li class="nav-item"><a href="#"><i class="nav-icon i-Align-Right"></i><span class="item-name">Varyantlar</span></a></li>
                <li class="nav-item"><a href="{{route("admin.unit.index")}}"><i class="nav-icon i-Arrow-Around"></i><span class="item-name">Ürün Birimleri</span></a></li>
                <li class="nav-item"><a href="{{route("admin.currency.index")}}"><i class="nav-icon i-Money-2"></i><span class="item-name">Para Birimleri</span></a></li>
            </ul>

        </div>
        <div class="sidebar-overlay"></div>
    </div>
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
            @yield("content")
        </div>
        <div class="flex-grow-1"></div>
        <div class="app-footer">
            <div class="footer-bottom ">
                <div class="d-flex align-items-center justify-content-between">
                    <img class="logo" src="{{asset("back/img/logo.svg")}}" alt="">
                    <div class="text-right">
                        <p class="m-0">&copy; {{Date("Y")}} designed by EXIT.</p>
                        <p class="m-0">All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="search-ui">
    <div class="search-header">
        <img src="{{asset("back/img/logo.svg")}}" alt="" class="logo">
        <button class="search-close btn btn-icon bg-transparent float-right mt-2">
            <i class="i-Close-Window text-22 text-muted"></i>
        </button>
    </div>
    <input type="text" placeholder="Type here" class="search-input" autofocus>
    <div class="search-title">
        <span class="text-muted">Search results</span>
    </div>
    <div class="search-results list-horizontal">
        <div class="list-item col-md-12 p-0">
            <div class="card o-hidden flex-row mb-4 d-flex">
                <div class="list-thumb d-flex">
                    <img src="{{asset("back/img/headphone-1.jpg")}}" alt="">
                </div>
                <div class="flex-grow-1 pl-2 d-flex">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                        <a href="#" class="w-40 w-sm-100">
                            <div class="item-title">Headphone 1</div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                            <del class="text-secondary">$400</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-danger">Sale</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item col-md-12 p-0">
            <div class="card o-hidden flex-row mb-4 d-flex">
                <div class="list-thumb d-flex">
                    <img src="{{asset("back/img/headphone-2.jpg")}}" alt="">
                </div>
                <div class="flex-grow-1 pl-2 d-flex">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                        <a href="#" class="w-40 w-sm-100">
                            <div class="item-title">Headphone 1</div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                            <del class="text-secondary">$400</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-primary">New</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item col-md-12 p-0">
            <div class="card o-hidden flex-row mb-4 d-flex">
                <div class="list-thumb d-flex">
                    <img src="{{asset("back/img/headphone-3.jpg")}}" alt="">
                </div>
                <div class="flex-grow-1 pl-2 d-flex">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                        <a href="#" class="w-40 w-sm-100">
                            <div class="item-title">Headphone 1</div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                            <del class="text-secondary">$400</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-primary">New</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item col-md-12 p-0">
            <div class="card o-hidden flex-row mb-4 d-flex">
                <div class="list-thumb d-flex">
                    <img src="{{asset("back/img/headphone-4.jpg")}}" alt="">
                </div>
                <div class="flex-grow-1 pl-2 d-flex">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                        <a href="#" class="w-40 w-sm-100">
                            <div class="item-title">Headphone 1</div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                            <del class="text-secondary">$400</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-primary">New</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-5 text-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination d-inline-flex">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<script src="{{asset("back/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("back/js/perfect-scrollbar.min.js")}}"></script>
<script src="{{asset("back/js/script.min.js")}}"></script>
<script src="{{asset("back/js/sidebar.large.script.min.js")}}"></script>
<script src="{{asset("back/js/echarts.min.js")}}"></script>
<script src="{{asset("back/js/echart.options.min.js")}}"></script>
<script src="{{asset("back/js/dashboard.v1.script.min.js")}}"></script>
<script src="{{asset("back/js/toastr.min.js")}}"></script>
<script src="{{asset("back/js/dropify.min.js")}}"></script>
@yield("js")

@if(Session::has("message"))
    <script>
        $(document).ready(function () {
            toastr.{{Session::get('type','info')}}(
                "{{ Session::get('message') }}",
                "{{Session::get('head','İşlem Başarılı')}}",
                {
                    "progressBar":!0,
                    "timeOut": "2000",
                },

            )
        })
    </script>
@endif
@isset($errors)
    @foreach($errors->all() as $e)
        {{$e}}
        <script>
            $(document).ready(function () {
                toastr.error(
                    "{{ $e }}",
                    "Hata",
                    {
                        "progressBar":!0,
                        "timeOut": "2000",
                    },

                )
            })
        </script>
    @endforeach
@endisset
</body>
</html>
