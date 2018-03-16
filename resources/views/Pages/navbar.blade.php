<div class="main_header">
        <header id="header">
            <div class="container">
                <div class="head">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="left"><a href="index.html" class="navbar-brand"><img src="assets/images/logo.svg" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="text-right hidden-md-down">
                                <p class="col-white m-b-0 p-t-5"><i class="zmdi zmdi-time"></i> Mon - Sat: 9:00 - 18:00
                                    Sunday CLOSED </p>
                                <p class="col-white m-b-0"><i class="zmdi zmdi-pin"></i> 1422 1st St. Santa Rosa CA
                                    94559. United States </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="navbar" data-aos="fade-down">
            <div class="container">
                <nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                            data-target="#navbarMenu" aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('department') }}">Departments</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('doctor') }}">Doctors</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pageMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Blog</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>
                                    {{--  <a class="dropdown-item" href="{{ route('blogdetails') }}">Blog Detail</a>  --}}
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pageMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Pages</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('about') }}">About Us</a>
                                    <a class="dropdown-item" href="{{ route('faqs') }}">FAQs</a>
                                    <a class="dropdown-item" href="{{ route('galary') }}">Galary</a>
                                    <a class="dropdown-item" href="{{ route('pricelist') }}">Price list</a>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                        <form class="form-inline input-group hidden-md-down m-b-0">
                            <div class="input-group m-b-0"><span class="input-group-addon"> <i
                                            class="zmdi zmdi-search"></i> </span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    