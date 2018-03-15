<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo Hospital Admin ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assetss/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetss/css/main.css">
    <link rel="stylesheet" href="assetss/css/authentication.css">
    <link rel="stylesheet" href="assetss/css/color_skins.css">
</head>

<body class="theme-cyan authentication sidebar-collapse">
    @yield('content')
<!-- Jquery Core Js -->
<script src="assetss/bundles/libscripts.bundle.js"></script>
<script src="assetss/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script>
    $(".navbar-toggler").on('click',function() {
        $("html").toggleClass("nav-open");
    });
    $('.form-control').on("focus", function() {
        $(this).parent('.input-group').addClass("input-group-focus");
    }).on("blur", function() {
        $(this).parent(".input-group").removeClass("input-group-focus");
    });
</script>
</body>

</html>