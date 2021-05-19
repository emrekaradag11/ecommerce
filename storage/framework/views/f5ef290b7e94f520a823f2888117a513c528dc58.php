<!doctype html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E-Ticaret</title>
        <link rel="stylesheet" href="<?php echo e(asset('front/plugins/bootstrap_5.0.0/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('front/css/custom.css')); ?>">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    </head>
    <body>
        <header id="header">
            <div class="row mx-0 align-items-center">
                <div id="logo" class="col-auto">
                    <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="">
                </div>
                <div class="col">
                    <ul id="siteMenu">
                        <li>
                            <a href="">Anasayfa</a>
                        </li>
                        <li class="basicMenu">
                            <a href="">Men Wear</a>
                            <ul>
                                <li><a href="/">Modern</a></li>
                                <li><a href="/">Standard</a></li>
                                <li><a href="/">Minimal</a></li>
                                <li><a href="/">Vintage</a></li>
                                <li><a href="/">Classic</a></li>
                            </ul>
                        </li>
                        <li class="megaMenu">
                            <a href="">Women Wear</a>
                            <ul class="row">
                                <li class="col-lg px-0">
                                    <ul>
                                        <li class="title"><a>Standard</a></li>
                                        <li><a href="/">Standard</a></li>
                                        <li><a href="/">Minimal</a></li>
                                        <li><a href="/">Vintage</a></li>
                                        <li><a href="/">Classic</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg px-0">
                                    <ul>
                                        <li class="title"><a>Standard</a></li>
                                        <li><a href="/">Standard</a></li>
                                        <li><a href="/">Minimal</a></li>
                                        <li><a href="/">Vintage</a></li>
                                        <li><a href="/">Classic</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg px-0">
                                    <ul>
                                        <li class="title"><a>Standard</a></li>
                                        <li><a href="/">Standard</a></li>
                                        <li><a href="/">Minimal</a></li>
                                        <li><a href="/">Vintage</a></li>
                                        <li><a href="/">Classic</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg px-0">
                                    <ul>
                                        <li class="title"><a>Standard</a></li>
                                        <li><a href="/">Standard</a></li>
                                        <li><a href="/">Minimal</a></li>
                                        <li><a href="/">Vintage</a></li>
                                        <li><a href="/">Classic</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg px-0">
                                    <ul>
                                        <li class="title"><a>Standard</a></li>
                                        <li><a href="/">Standard</a></li>
                                        <li><a href="/">Minimal</a></li>
                                        <li><a href="/">Vintage</a></li>
                                        <li><a href="/">Classic</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Casual Wear</a>
                        </li>
                        <li>
                            <a href="">Pages</a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">

                </div>
            </div>
        </header>
        <main id="main">
            <?php echo $__env->yieldContent("section"); ?>
        </main>
        <footer id="footer">

        </footer>
        <script src="<?php echo e(asset('front/plugins/bootstrap_5.0.0/js/bootstrap.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('front/plugins/bootstrap_5.0.0/js/bootstrap.min.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/front/layout.blade.php ENDPATH**/ ?>