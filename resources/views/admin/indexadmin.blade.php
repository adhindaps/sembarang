<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="mpls/10.png">
    <title>ADMIN-SMK N 1 DLANGGU</title>
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="foto/smk.jpeg" height="100" width="230" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="foto/smk.jpeg" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            {{-- <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{ asset('admin/assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="{{ asset('admin/assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                            </span> --}}
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                      
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="mpls/10.png" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hallo,</span> <span
                                        class="text-dark">{{ Auth::user()->name }}</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="profileadmin"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                               
                                <a class="dropdown-item" href="/logout"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                               
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/dashboard"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Beranda</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Tentang Sekolah</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                class="hide-menu"> Profile Sekolah </span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="identitas" class="sidebar-link"><span
                                        class="hide-menu"> Identitas Sekolah  </span></a>
                            <li class="sidebar-item"><a href="sejarahindex" class="sidebar-link"><span
                                        class="hide-menu"> Sejarah Sekolah</span></a>
                            <li class="sidebar-item"><a href="visiindex" class="sidebar-link"><span
                                            class="hide-menu"> Visi & Misi</span></a>
                            <li class="sidebar-item"><a href="videoindex" class="sidebar-link"><span
                                                class="hide-menu"> Video Profile</span></a>
                            <li class="sidebar-item"><a href="aboutindex" class="sidebar-link"><span
                                                    class="hide-menu"> Keunggulan</span></a>
                        </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="smbtnindex"
                            aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                            class="hide-menu">Sambutan </span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Data Sekolah</span></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                class="hide-menu">Data Guru</span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="smbtnguruindex" class="sidebar-link"><span
                                        class="hide-menu"> Sambutan Guru </span></a>
                            <li class="sidebar-item"><a href="guruindex" class="sidebar-link"><span
                                        class="hide-menu"> Guru </span></a>
                        </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                                class="hide-menu">Program</span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="jurusanindex" class="sidebar-link"><span
                                        class="hide-menu"> Keahlian </span></a>
                            <li class="sidebar-item"><a href="kajurindex" class="sidebar-link"><span
                                        class="hide-menu"> Kajur </span></a>
                            <li class="sidebar-item"><a href="extraindex" class="sidebar-link"><span
                                            class="hide-menu"> Extrakulikuler </span></a>
                        </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/bkkindex"
                            aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">BKK</span></a></li>
                        
                        
                        <li class="nav-small-cap"><span class="hide-menu">Fasilitas Sekolah</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Fasilitas </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="beasiswaindex" class="sidebar-link"><span
                                            class="hide-menu"> Beasiswa
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="axioindex" class="sidebar-link"><span
                                            class="hide-menu"> Axio
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="galeriaxioindex" class="sidebar-link"><span
                                    class="hide-menu"> Galeri Axio
                                </span></a>
                                </li>
                                <li class="sidebar-item"><a href="silarasindex" class="sidebar-link"><span
                                            class="hide-menu"> SILARAS
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="echoindex" class="sidebar-link"><span
                                    class="hide-menu"> Echo
                                </span></a> </li>
                                <li class="sidebar-item"><a href="galeriechoindex" class="sidebar-link"><span
                                    class="hide-menu"> Galeri Echo
                                </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                                class="hide-menu">Halaman </span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="blogindex" class="sidebar-link"><span
                                        class="hide-menu"> Blog
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="kategoriindex" class="sidebar-link"><span
                                class="hide-menu">  Kategori Blog
                            </span></a></li>
                            <li class="sidebar-item"><a href="eventindex" class="sidebar-link"><span
                                        class="hide-menu"> Event </span></a>
                            </li>
                            <li class="sidebar-item"><a href="galeryindex" class="sidebar-link"><span
                                        class="hide-menu"> Galerry </span></a></li>
                            <li class="sidebar-item"><a href="patnerindex" class="sidebar-link"><span
                                            class="hide-menu"> Kerjasama </span></a>
                                </li>
                           
                        </ul>
                    </li>
                    <li class="nav-small-cap"><span class="hide-menu">Fitur</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Slider</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="beasiswaindex" class="sidebar-link"><span
                                            class="hide-menu"> Beasiswa
                                        </span></a>
                                </li>
                               
                                <li class="sidebar-item"><a href="galeriechoindex" class="sidebar-link"><span
                                    class="hide-menu"> Galeri Echo
                                </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                                class="hide-menu">Footer</span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="blogindex" class="sidebar-link"><span
                                        class="hide-menu"> Footer
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="kategoriindex" class="sidebar-link"><span
                                class="hide-menu">  Footer Link
                            </span></a></li>
                           
                           
                        </ul>
                    </li>
                        {{-- <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Fasilitas</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="Fasilitas-login1.html"
                                aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                    class="hide-menu">SILARAS
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="authentication-register1.html" aria-expanded="false"><i data-feather="lock"
                                    class="feather-icon"></i><span class="hide-menu">Register
                                </span></a>
                        </li> --}}

                        <li class="list-divider"></li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           
{{-- ck-editor --}}
@yield('ck-editor')

</body>

</html>