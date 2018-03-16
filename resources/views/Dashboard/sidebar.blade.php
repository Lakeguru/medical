<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>Oreo</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Doctor</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile.html"><img src="http://via.placeholder.com/80x80" alt="User"></a></div>
                            <div class="detail">
                                <h4>Dr. {{Auth::user()->name}}  </h4>
                                <small>Neurologist</small>
                            </div>
                        </div>
                    </li>
                    <li class="header">MAIN</li>
                    <li class="active open"><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('all_doctor') }}">All Doctors</a></li>
                            <li><a href="{{ route('add_doctor') }}">Add Doctor</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('add_patient') }}">All Patients</a></li>
                            <li><a href="{{ route('postadd_patient') }}">Add Patient</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('add_payment') }}">Payments</a></li>
                            <li><a href="{{ route('postadd_payment') }}">Add Payment</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-label-alt"></i><span>Departments</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('add_department') }}">Add</a></li>
                            <li><a href="{{ route('postadd_department') }}">All Departments</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('post') }}">New Post</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                        <ul class="ml-menu">
                            <li><a href="mail-inbox.html">Inbox</a></li>
                        </ul>
                    </li>
                    <li class="header">Extra</li>
                </ul>
            </div>
        </div>
    </div>
</aside>
