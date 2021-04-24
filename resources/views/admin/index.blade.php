<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
        <title>Ample admin Template - The Ultimate Multipurpose admin template</title>
        <link href="../../assets/extra-libs/jvector/jvector.css" rel="stylesheet" />
        <link href="../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="../../assets/libs/morris.js/morris.css" rel="stylesheet">
        <link href="../../dist/css/style.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custon-style.css') }}">
    </head>

    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div id="main-wrapper">
            <app></app>
        </div>
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../dist/js/app.min.js"></script>
        <script src="../../dist/js/app.init.mini-sidebar.js"></script>
        <script src="../../dist/js/app-style-switcher.js"></script>
        <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
        <script src="../../dist/js/sidebarmenu.js"></script>
        <script src="../../dist/js/custom.min.js"></script>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
