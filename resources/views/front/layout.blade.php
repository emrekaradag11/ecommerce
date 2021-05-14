<!doctype html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E-Ticaret</title>
        <link rel="stylesheet" href="{{asset("front/plugins/bootstrap_5.0.0/css/bootstrap.min.css")}}">
    </head>
    <body>
        <header id="header">
            <div class="row">
                <div id="logo" class="col-auto">

                </div>
                <div class="col">

                </div>
                <div class="col-auto">

                </div>
            </div>
        </header>
        <main id="main">
            @yield("section")
        </main>
        <footer id="footer">

        </footer>
        <script src="{{asset("front/plugins/bootstrap_5.0.0/js/bootstrap.bundle.js")}}"></script>
        <script src="{{asset("front/plugins/bootstrap_5.0.0/js/bootstrap.min.js")}}"></script>
    </body>
</html>
