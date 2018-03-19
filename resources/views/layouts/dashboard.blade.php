<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: Lake Admin Dashboard ::</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="assetss/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetss/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
    <link rel="stylesheet" href="assetss/plugins/morrisjs/morris.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="assetss/plugins/bootstrap-select/css/bootstrap-select.css"/>
    <link rel="stylesheet" href="assetss/plugins/dropzone/dropzone.css">

    <link rel="stylesheet" href="assetss/css/main.css">
    <link rel="stylesheet" href="assetss/css/rtl.css">
    <link rel="stylesheet" href="assetss/css/blog.css">
    <link rel="stylesheet" href="assetss/css/color_skins.css">
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assetss/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
@include('Dashboard.navbar')
<!-- Left Sidebar -->
@include('Dashboard.sidebar')
<!-- Right Sidebar -->

<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Doctor Team</h2></li>
                <li>
                    <img src="assetss/images/xs/avatar2.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assetss/images/xs/avatar3.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assetss/images/xs/avatar4.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assetss/images/xs/avatar6.jpg" alt="Avatar">
                </li>
                <li>
                    <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                </li>
            </ul>
        </div>
        <div class="body">
            <div class="chat-widget">
                <ul class="chat-scroll-list clearfix">
                    <li class="left float-left">
                        <img src="assetss/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                        <div class="chat-info">
                            <a class="name" href="#">Alexander</a>
                            <span class="datetime">6:12</span>
                            <span class="message">Hello, John </span>
                        </div>
                    </li>
                    <li class="right">
                        <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                    </li>
                    <li class="right">
                        <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                    </li>
                    <li class="left float-left"> <img src="assetss/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                        <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                    </li>
                    <li class="left float-left"> <img src="assetss/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                        <div class="chat-info"> <a class="name" href="#">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                    </li>
                    <li class="right">
                        <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                    </li>
                </ul>
            </div>
            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->

@yield('content')

<!-- Jquery Core Js -->
<script src="assetss/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="assetss/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assetss/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assetss/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assetss/bundles/knob.bundle.js"></script> <!-- Jquery Knob, Count To, Sparkline Js -->

<script src="assetss/bundles/mainscripts.bundle.js"></script>
<script src="assetss/js/pages/index.js"></script>



<script src="assetss/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<script src="assetss/js/pages/rtl.js"></script>
<script src="assetss/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js -->
<script src="assetss/js/pages/blog/blog.js"></script>



</body>

</html>