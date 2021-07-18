<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Ample admin Template - The Ultimate Multipurpose admin template</title>
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link href="{{ asset('css/custon-style.css') }}" rel="stylesheet">
</head>

<body>
<div id="app-login" class="main-wrapper">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    @if (\Illuminate\Support\Facades\Auth::check())
        <script>
            window.Laravel = {!!json_encode([
                   'isLoggedin' => true,
                   'user' => Auth::user()
               ])!!}
        </script>
    @else
        <script>
            window.Laravel = {!!json_encode([
                    'isLoggedin' => false,
                    'redirectUrl' => url()->previous()
                ])!!}
        </script>
    @endif

    <app></app>

</div>
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="{{asset('js/site-index.js')}}"></script>

<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>
</body>

</html>
