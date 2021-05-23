<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta property="og:url" content="index.html"/>
    <meta property="og:image" content="assets/images/og-image-01.png"/>
    <meta property="og:image:alt" content="Og Image Alt"/>
    <meta property="og:image:width" content="800"/>
    <meta property="og:image:height" content="600"/>
    <meta property="og:image" content="assets/images/og-image-02.png"/>
    <meta property="og:image:alt" content="Og Image Alt Second"/>
    <meta property="og:image:width" content="900"/>
    <meta property="og:image:height" content="800"/>
    <link rel="canonical" href="index.html"/>
    <title>ChawkBazar</title>
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="index,follow"/>
    <meta name="description" content="Fastest E-commerce template built with React, NextJS, TypeScript, React-Query and Tailwind CSS."/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@site"/>
    <meta name="twitter:creator" content="@handle"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="ChawkBazar"/>
    <meta property="og:description" content="Fastest E-commerce template built with React, NextJS, TypeScript, React-Query and Tailwind CSS."/>
    <meta property="og:locale" content="en_IE"/>
    <meta property="og:site_name" content="ChawkBazar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1"/>
    <meta name="next-head-count" content="24"/>
    <link rel="preload" href="{{asset('front/css/theme.css')}}" as="style"/>
    <link rel="stylesheet" href="{{asset('front/css/theme.css')}}" />
    <link rel="preload" href="{{asset('front/css/swiper.css')}}" as="style"/>
    <link rel="stylesheet" href="{{asset('front/css/swiper.css')}}" />
    <script src="{{asset('front/js/jquery.js')}}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>
<div id="__next">
    <div class="flex flex-col min-h-screen">
        <header id="siteHeader" class="w-full h-16 sm:h-20 lg:h-24 relative z-20">
            <div class="innerSticky text-gray-700 body-font fixed bg-white w-full h-16 sm:h-20 lg:h-24 z-20 ps-4 md:ps-0 lg:ps-6 pe-4 lg:pe-6 transition duration-200 ease-in-out">
                <div class="flex items-center justify-center mx-auto max-w-[1920px] h-full w-full">
                    <button aria-label="Menu" class="menuBtn hidden md:flex lg:hidden flex-col items-center justify-center px-5 2xl:px-7 flex-shrink-0 h-full outline-none focus:outline-none">
                        <span class="menuIcon">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </span>
                    </button>
                    <a class="inline-flex focus:outline-none" href="index.html">
                        <div style="overflow:hidden;box-sizing:border-box;display:inline-block;position:relative;width:95px;height:30px">
                            <img alt="ChawkBazar" src="{{url('images/logo.svg')}}" decoding="async" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                        </div>
                    </a>
                    <nav class="headerMenu flex w-full relative hidden lg:flex md:ms-6 xl:ms-10">

                        @foreach(topCategories() as $c)
                            <div class="menuItem group cursor-pointer py-7 relative">
                                <a class="inline-flex items-center text-sm xl:text-base text-heading px-3 xl:px-4 py-2 font-normal relative group-hover:text-black" href="">{{$c->title}}
                                    @if($c->type_id)
                                        <span class="opacity-30 text-xs mt-1 xl:mt-0.5 w-4 flex justify-end">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="transition duration-300 ease-in-out transform group-hover:-rotate-180" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                                        </span>
                                    @endif
                                </a>

                                @if($c->getSubCategories)
                                    @if($c->type_id == 1)
                                        <div class="subMenu shadow-header bg-gray-200 absolute start-0 opacity-0 group-hover:opacity-100">
                                            <ul class="text-body text-sm py-5">
                                                @foreach($c->getSubCategories as $c2)
                                                    <li class="relative">
                                                        <a class="flex items-center justify-between py-2 ps-5 xl:ps-7 pe-3 xl:pe-3.5 hover:text-heading hover:bg-gray-300" href="">{{$c2->title}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @elseif($c->type_id == 2)
                                        <div class="megaMenu shadow-header bg-gray-200 absolute -start-20 xl:start-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                            <div class="grid grid-cols-{{count($c->getSubCategories)}}">

                                                @foreach($c->getSubCategories as $c2)
                                                    <ul class="even:bg-gray-150 pb-7 2xl:pb-8 pt-6 2xl:pt-7">
                                                        <li class="mb-1.5">
                                                            <a class="block text-sm py-1.5 text-heading font-semibold px-5 xl:px-8 2xl:px-10 hover:text-heading hover:bg-gray-300" href="">{{$c2->title}}</a>
                                                        </li>
                                                        @foreach($c2->getSubCategories as $c3)
                                                            <li class="">
                                                                <a class="text-body text-sm block py-1.5 px-5 xl:px-8 2xl:px-10 hover:text-heading hover:bg-gray-300" href="">{{$c3->title}}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        @endforeach
                    </nav>
                    <div class="hidden md:flex justify-end items-center space-s-6 lg:space-s-5 xl:space-s-8 2xl:space-s-10 ms-auto flex-shrink-0">
                        <button class="flex items-center justify-center flex-shrink-0 h-auto relative focus:outline-none transform" aria-label="search-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17px" height="18px" viewBox="0 0 18.942 20" class="md:w-4 xl:w-5 md:h-4 xl:h-5"><path d="M381.768,385.4l3.583,3.576c.186.186.378.366.552.562a.993.993,0,1,1-1.429,1.375c-1.208-1.186-2.422-2.368-3.585-3.6a1.026,1.026,0,0,0-1.473-.246,8.343,8.343,0,1,1-3.671-15.785,8.369,8.369,0,0,1,6.663,13.262C382.229,384.815,382.025,385.063,381.768,385.4Zm-6.152.579a6.342,6.342,0,1,0-6.306-6.355A6.305,6.305,0,0,0,375.615,385.983Z" transform="translate(-367.297 -371.285)" fill="currentColor" fill-rule="evenodd"></path></svg>
                        </button>
                        <div class="-mt-0.5 flex-shrink-0"><button class="text-sm xl:text-base text-heading font-semibold focus:outline-none">Sign In</button></div>
                        <button class="flex items-center justify-center flex-shrink-0 h-auto relative focus:outline-none transform" aria-label="cart-button"><svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 20 20" class="md:w-4 xl:w-5 md:h-4 xl:h-5"><path d="M5,4H19a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4ZM2,5A3,3,0,0,1,5,2H19a3,3,0,0,1,3,3V19a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3Zm10,7C9.239,12,7,9.314,7,6H9c0,2.566,1.669,4,3,4s3-1.434,3-4h2C17,9.314,14.761,12,12,12Z" transform="translate(-2 -2)" fill="currentColor" fill-rule="evenodd"></path></svg><span class="cart-counter-badge flex items-center justify-center bg-heading text-white absolute -top-2.5 xl:-top-3 -end-2.5 xl:-end-3 rounded-full font-bold">0</span></button>
                    </div>
                </div>
            </div>
        </header>
        <main class="relative flex-grow" style="min-height:-webkit-fill-available;-webkit-overflow-scrolling:touch">
            @yield('content')
        </main>
        <footer class="border-b-4 border-heading mt-9 md:mt-11 lg:mt-16 3xl:mt-20 pt-2.5 lg:pt-0 2xl:pt-2">
            <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-5 md:gap-9 xl:gap-5  pb-9 md:pb-14 lg:pb-16 2xl:pb-20 3xl:pb-24 lg:mb-0.5 2xl:mb-0 3xl:-mb-1">
                    <div class="pb-3 md:pb-0">
                        <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold mb-5 2xl:mb-6 3xl:mb-7">Social</h4>
                        <ul class="text-xs lg:text-sm text-body flex flex-col space-y-3 lg:space-y-3.5">
                            <li class="flex items-baseline">
                                <span class="me-3 relative top-0.5 lg:top-1 text-sm lg:text-base">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"></path><path d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"></path></svg>
                                </span>
                                <a class="transition-colors duration-200 hover:text-black" href="https://www.instagram.com/redqinc/">Instagram</a>
                            </li>
                            <li class="flex items-baseline">
                                <span class="me-3 relative top-0.5 lg:top-1 text-sm lg:text-base">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z"></path></svg>
                                </span>
                                <a class="transition-colors duration-200 hover:text-black" href="https://twitter.com/redqinc">Twitter</a>
                            </li>
                            <li class="flex items-baseline">
                                <span class="me-3 relative top-0.5 lg:top-1 text-sm lg:text-base">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"></path></svg>
                                </span>
                                <a class="transition-colors duration-200 hover:text-black" href="https://www.facebook.com/redqinc/">Facebook</a>
                            </li>
                            <li class="flex items-baseline">
                                <span class="me-3 relative top-0.5 lg:top-1 text-sm lg:text-base">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9zM207 353.89v-196.5l145 98.2z"></path></svg>
                                </span>
                                <a class="transition-colors duration-200 hover:text-black" href="https://www.youtube.com/channel/UCjld1tyVHRNy_pe3ROLiLhw">Youtube</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pb-3 md:pb-0">
                        <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold mb-5 2xl:mb-6 3xl:mb-7">Contact</h4>
                        <ul class="text-xs lg:text-sm text-body flex flex-col space-y-3 lg:space-y-3.5">
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="contact-us">Contact Us</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="index.html">yourexample@email.com</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="index.html">example@email.com</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="index.html">Call us: +1 254 568-5479</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pb-3 md:pb-0">
                        <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold mb-5 2xl:mb-6 3xl:mb-7">About</h4>
                        <ul class="text-xs lg:text-sm text-body flex flex-col space-y-3 lg:space-y-3.5">
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="contact-us">Support Center</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="index.html">Customer Support</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="contact-us">About Us</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="index.html">Copyright</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pb-3 md:pb-0">
                        <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold mb-5 2xl:mb-6 3xl:mb-7">Customer Care</h4>
                        <ul class="text-xs lg:text-sm text-body flex flex-col space-y-3 lg:space-y-3.5">
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="faq">FAQ &amp; Helps</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="index.html">Shipping &amp; Delivery</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="index.html">Return &amp; Exchanges</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pb-3 md:pb-0">
                        <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold mb-5 2xl:mb-6 3xl:mb-7">Our Information</h4>
                        <ul class="text-xs lg:text-sm text-body flex flex-col space-y-3 lg:space-y-3.5">
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="privacy">Privacy policy update</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="terms">Terms &amp; conditions</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="privacy">Return Policy</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="index.html">Site Map</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pb-3 md:pb-0">
                        <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold mb-5 2xl:mb-6 3xl:mb-7">Top Categories</h4>
                        <ul class="text-xs lg:text-sm text-body flex flex-col space-y-3 lg:space-y-3.5">
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="search">Men&#x27;s Wear</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="search">Men&#x27;s Wear</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="search">Kid&#x27;s Wear</a>
                            </li>
                            <li class="flex items-baseline">
                                <a class="transition-colors duration-200 hover:text-black" href="search">Sports Wear</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-300 pt-5 pb-16 sm:pb-20 md:pb-5 mb-2 sm:mb-0">
                <div class="flex flex-col-reverse md:flex-row text-center md:justify-between mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
                    <p class="text-body text-xs lg:text-sm leading-6">Copyright
                        <!-- --> ©
                        <!-- -->2021
                        <!-- -->
                        <a class="font-semibold text-gray-700 transition-colors duration-200 ease-in-out hover:text-body" href="https://redq.io/">RedQ, Inc.</a>
                        <!-- -->All rights reserved
                    </p>
                    <ul class="hidden md:flex flex-wrap justify-center items-center space-s-4 xs:space-s-5 lg:space-s-7 mb-1 md:mb-0 mx-auto md:mx-0">
                        <li class="mb-2 md:mb-0 transition hover:opacity-80">
                            <a href="index.html" target="_blank">
                                <img src="assets/images/payment/mastercard.svg" alt="Master Card" height="20" width="34"/>
                            </a>
                        </li>
                        <li class="mb-2 md:mb-0 transition hover:opacity-80">
                            <a href="index.html" target="_blank">
                                <img src="assets/images/payment/visa.svg" alt="Visa" height="20" width="50"/>
                            </a>
                        </li>
                        <li class="mb-2 md:mb-0 transition hover:opacity-80">
                            <a href="index.html" target="_blank">
                                <img src="assets/images/payment/paypal.svg" alt="Paypal" height="20" width="76"/>
                            </a>
                        </li>
                        <li class="mb-2 md:mb-0 transition hover:opacity-80">
                            <a href="index.html" target="_blank">
                                <img src="assets/images/payment/jcb.svg" alt="JCB" height="20" width="26"/>
                            </a>
                        </li>
                        <li class="mb-2 md:mb-0 transition hover:opacity-80">
                            <a href="index.html" target="_blank">
                                <img src="assets/images/payment/skrill.svg" alt="Skrill" height="20" width="39"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="md:hidden fixed z-10 bottom-0 flex items-center justify-between shadow-bottomNavigation text-gray-700 body-font bg-white w-full h-14 sm:h-16 px-4">
            <button aria-label="Menu" class="menuBtn flex flex-col items-center justify-center flex-shrink-0 outline-none focus:outline-none">
                <svg
                    xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 25.567 18">
                    <g transform="translate(-776 -462)">
                        <rect id="Rectangle_941" data-name="Rectangle 941" width="12.749" height="2.499" rx="1.25" transform="translate(776 462)" fill="currentColor"></rect>
                        <rect id="Rectangle_942" data-name="Rectangle 942" width="25.567" height="2.499" rx="1.25" transform="translate(776 469.75)" fill="currentColor"></rect>
                        <rect id="Rectangle_943" data-name="Rectangle 943" width="17.972" height="2.499" rx="1.25" transform="translate(776 477.501)" fill="currentColor"></rect>
                    </g>
                </svg>
            </button>
            <button class="flex items-center justify-center flex-shrink-0 h-auto relative focus:outline-none" aria-label="search-button">
                <svg
                    xmlns="http://www.w3.org/2000/svg" width="17px" height="18px" viewBox="0 0 18.942 20" class="md:w-4 xl:w-5 md:h-4 xl:h-5">
                    <path d="M381.768,385.4l3.583,3.576c.186.186.378.366.552.562a.993.993,0,1,1-1.429,1.375c-1.208-1.186-2.422-2.368-3.585-3.6a1.026,1.026,0,0,0-1.473-.246,8.343,8.343,0,1,1-3.671-15.785,8.369,8.369,0,0,1,6.663,13.262C382.229,384.815,382.025,385.063,381.768,385.4Zm-6.152.579a6.342,6.342,0,1,0-6.306-6.355A6.305,6.305,0,0,0,375.615,385.983Z" transform="translate(-367.297 -371.285)" fill="currentColor" fill-rule="evenodd"></path>
                </svg>
            </button>
            <a class="flex-shrink-0" href="index.html">
                <svg
                    xmlns="http://www.w3.org/2000/svg" width="18px" height="20px" viewBox="0 0 17.996 20.442">
                    <path d="M48.187,7.823,39.851.182A.7.7,0,0,0,38.9.2L31.03,7.841a.7.7,0,0,0-.211.5V19.311a.694.694,0,0,0,.694.694H37.3A.694.694,0,0,0,38,19.311V14.217h3.242v5.095a.694.694,0,0,0,.694.694h5.789a.694.694,0,0,0,.694-.694V8.335a.7.7,0,0,0-.228-.512ZM47.023,18.617h-4.4V13.522a.694.694,0,0,0-.694-.694H37.3a.694.694,0,0,0-.694.694v5.095H32.2V8.63l7.192-6.98L47.02,8.642v9.975Z" transform="translate(-30.619 0.236)" fill="currentColor" stroke="currentColor" stroke-width="0.4"></path>
                </svg>
            </a>
        </div>
        <div>
            <div class="overlay" role="button"></div>
            <div class="drawer-search relative hidden top-0 z-30 opacity-0 invisible transition duration-300 ease-in-out left-1/2 px-4 w-full md:w-[730px] lg:w-[930px]">
                <div class="w-full flex flex-col justify-center">
                    <div class="flex-shrink-0 mt-3.5 lg:mt-4 w-full">
                        <div class="flex flex-col mx-auto mb-1.5 w-full ">
                            <form class="relative pe-12 md:pe-14 bg-white overflow-hidden rounded-md w-full" novalidate="" role="search">
                                <label for="search" class="flex items-center py-0.5">
                                    <span class="w-12 md:w-14 h-full flex flex-shrink-0 justify-center items-center cursor-pointer focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17px" height="18px" viewBox="0 0 18.942 20" class="w-4 h-4"><path d="M381.768,385.4l3.583,3.576c.186.186.378.366.552.562a.993.993,0,1,1-1.429,1.375c-1.208-1.186-2.422-2.368-3.585-3.6a1.026,1.026,0,0,0-1.473-.246,8.343,8.343,0,1,1-3.671-15.785,8.369,8.369,0,0,1,6.663,13.262C382.229,384.815,382.025,385.063,381.768,385.4Zm-6.152.579a6.342,6.342,0,1,0-6.306-6.355A6.305,6.305,0,0,0,375.615,385.983Z" transform="translate(-367.297 -371.285)" fill="text-heading" fill-rule="evenodd"></path></svg>
                                    </span>
                                    <input id="search" class="text-heading outline-none w-full h-12 lg:h-14 placeholder-gray-400 text-sm lg:text-base" placeholder="Search..." aria-label="Search" autoComplete="off" name="search" value=""/>
                                </label>
                                <button type="button" class="outline-none text-2xl md:text-3xl text-gray-400 absolute top-0 end-0 w-12 md:w-14 h-full flex items-center justify-center transition duration-200 ease-in-out hover:text-heading focus:outline-none">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-6 h-6" height="1em" width="1em"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144m224 0L144 368"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span></span>
</div>
<script src="{{asset('front/js/swiper.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script>
</body>
</html>
