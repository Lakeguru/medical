<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Lake Hospital :: Home</title>
    <link rel="icon" href="favicon.ico">
    <!-- start linking -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/aos/aos.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/gallery.css') }}" rel="stylesheet">


</head>
<body>

<div id="loading" class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>

<div class="wrapper">
    <!-- start loading -->
    @yield('content')
</div>
<!-- start screpting -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>


<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/countTo.js') }}"></script>
<script src="assets/js/lightbox.js"></script>

</body>

</html>
