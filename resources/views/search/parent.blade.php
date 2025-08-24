<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('cms/dist/img/logo.jpg') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CMS ADMIN | @yield('title')</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('cms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('cms/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/summernote/summernote-bs4.min.css') }}">

    @yield('styles')
</head>
{{-- class="hold-transition sidebar-mini layout-fixed" --}}

<body class="hold-transition sidebar-mini layout-fixed ">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    {{-- {{ route('view.index') }} --}}
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    {{-- {{ route('view.contact') }} --}}
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="query" placeholder="Search..." required>
    <button type="submit">Search</button>
</form>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light text-red elevation-4" style="font-size: larger;">

            <!-- Brand Logo -->
            <a href="{{ route('view.index') }}" class="brand-link">

                <img src="{{ asset('cms/dist/img/logo.jpg') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="fas fa-th-large" class="brand-text font-weight-light">NEWS</span>
            </a>

            @php
                if (Auth::guard('admin')->check()) {
                    $guardName = 'admin';
                }
                if (Auth::guard('author')->check()) {
                    $guardName = 'author';
                }
            @endphp
            <!-- Sidebar -->
            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <a href="{{ route('user.profile', $guardName) }}">
                            <img src="{{ asset('storage/images/' . $guardName . '/' . Auth::guard($guardName)->user()->user->image) }}"
                                width="70" height="70" class="img-circle " alt="User Image"></a>
                    </div>
                    <div class="info">
                        <a style="color: rgb(27, 39, 3)" href="{{ route('user.profile', $guardName) }}"
                            class="d-block">{{ Auth::guard($guardName)->user()->user->first_name . ' ' . Auth::guard($guardName)->user()->user->last_name }}
                        </a>
                    </div>

                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    TRUTH
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('mainPage') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon fas fa-home"
                                            style="color:rgb(255, 255, 255);"></i>
                                        <p>MAIN PAGE</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        @canany(['Index Role', 'Create Role', 'Index Permission', 'Create Permission'])
                            <li class="nav-header">Roles & Permissions</li>
                            @canany(['Index Role', 'Create Role'])
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-ruler" style="color:blue;"></i>
                                        <p style="color: rgb(0, 0, 2)">
                                            Role
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('Index Role')
                                            <li class="nav-item">
                                                <a href="{{ route('roles.index') }}" class="nav-link">
                                                    <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                                    <p style="color: rgb(0, 0, 2)">All</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('Create Role')
                                            <li class="nav-item">
                                                <a href="{{ route('roles.create') }}" class="nav-link">
                                                    <i class="fas fa-plus-circle nav-icon" style="color:blue;"></i>
                                                    <p style="color: rgb(0, 0, 2)">Create</p>
                                                </a>
                                            </li>
                                        @endcan
                                    @endcanany

                                </ul>
                            </li>
                            @canany(['Index Permission', 'Create Permission'])
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-drum-steelpan" style="color:blue;"></i>

                                        <p style="color: rgb(0, 0, 2)">
                                            Permission
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('Index Permission')
                                            <li class="nav-item">
                                                <a href="{{ route('permissions.index') }}" class="nav-link">
                                                    <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                                    <p style="color: rgb(0, 0, 2)">All</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('Create Permission')
                                            <li class="nav-item">
                                                <a href="{{ route('permissions.create') }}" class="nav-link">
                                                    <i class="fas fa-plus-circle nav-icon" style="color:blue;"></i>
                                                    <p style="color: rgb(0, 0, 2)">Create</p>
                                                </a>
                                            </li>
                                        @endcan
                                    @endcanany
                                </ul>
                            </li>
                        @endcanany

                        @canany(['Index Admin', 'Create Admin', 'Index Author', 'Create Author'])
                            <li class="nav-header">USER MANGMENT</li>
                            @canany(['Index Admin', 'Create Admin'])
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-user-shield" style="color:blue;"></i>
                                        <p style="color: rgb(0, 0, 2)">
                                            Admin
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('Index Admin')
                                            <li class="nav-item">
                                                <a href="{{ route('admins.index') }}" class="nav-link">
                                                    <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                                    <p style="color: rgb(0, 0, 2)">All-Admins</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('Create Admin')
                                            <li class="nav-item">
                                                <a href="{{ route('admins.create') }}" class="nav-link">
                                                    <i class="fas fa-plus-circle nav-icon" style="color:blue;"></i>
                                                    <p style="color: rgb(0, 0, 2)">Create</p>
                                                </a>
                                            </li>
                                        @endcan

                                    </ul>
                                </li>
                            @endcanany


                            @canany(['Index Author', 'Create Author'])
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-feather-alt" style="color:blue;"></i>
                                        <p style="color: rgb(0, 0, 2)">
                                            Author
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('Index Author')
                                            <li class="nav-item">
                                                <a href="{{ route('authors.index') }}" class="nav-link">
                                                    <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                                    <p style="color: rgb(0, 0, 2)">All-Authors</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('Create Author')
                                            <li class="nav-item">
                                                <a href="{{ route('authors.create') }}" class="nav-link">
                                                    <i class="fas fa-plus-circle nav-icon" style="color:blue;"></i>
                                                    <p style="color: rgb(0, 0, 2)">Create</p>
                                                </a>
                                            </li>
                                        @endcan

                                    </ul>
                                </li>
                            @endcanany
                        @endcanany

                        <li class="nav-header">CONTENT MANGMENT</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-globe-asia" style="color:blue;"></i>

                                <p style="color: rgb(0, 0, 2)">
                                    Country
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('countries.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                        <p style="color: rgb(0, 0, 2)">All-Countries</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-city" style="color:blue;"></i>
                                <p style="color: rgb(0, 0, 2)">
                                    City
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('cities.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                        <p style="color: rgb(0, 0, 2)">All-Cities</p>
                                    </a>
                                </li>


                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-slideshare" style="color:blue;"></i>
                                <p style="color: rgb(0, 0, 2)">
                                    Category
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('categories.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                        <p style="color: rgb(0, 0, 2)">All-Categories</p>
                                    </a>
                                </li>


                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-newspaper" style="color:blue;"></i>

                                <p style="color: rgb(0, 0, 2)">
                                    Article
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('articles.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                        <p style="color: rgb(0, 0, 2)">All Articles</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-header">Mangment Website</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sliders-h" style="color: blue"></i>
                                <p style="color: rgb(0, 0, 2)">
                                    Slider
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">

                                    <a href="{{ route('sliders.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon" style="color: blue"></i>
                                        <p style="color: rgb(0, 0, 2)">All-Sliders</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-signature" style="color:blue;"></i>

                                <p style="color: rgb(0, 0, 2)">
                                    Contact
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">

                                    <a href="{{ route('contacts.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                        <p style="color: rgb(0, 0, 2)">Index</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-comment" style="color:blue;"></i>

                                <p style="color: rgb(0, 0, 2)">
                                    Comment
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">

                                    <a href="{{ route('comments.index') }} " class="nav-link">
                                        <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                        <p style="color: rgb(0, 0, 2)">All-Comments</p>
                                    </a>
                                </li>


                            </ul>
                        </li>



                        <li class="nav-header">Setting</li>
                        <li class="nav-item">
                            <a href="{{ route('user.profile', $guardName) }}" class="nav-link">
                                <i class="nav-icon fas fa-eye" style="color: blue"></i>
                                <p style="color: rgb(0, 0, 2)">My profile</p>
                            </a>
                        </li>
                        @if (Auth::guard('admin')->id())
                            <li class="nav-item">

                                <a href=" {{ route('edit-profile-admin') }}" class="nav-link">
                                    <i class="nav-icon fas fa-user-edit" style="color: blue"></i>
                                    <p style="color: rgb(0, 0, 2)">Edit Profile</p>
                                </a>
                            </li>
                        @elseif (Auth::guard('author')->id())
                            <li class="nav-item">

                                <a href="{{ route('edit-profile-author') }}" class="nav-link">
                                    <i class="nav-icon fas fa-user-edit" style="color: blue"></i>
                                    <p style="color: rgb(0, 0, 2)">Edit Profile</p>
                                </a>
                            </li>
                        @endif


                        <li class="nav-item">
                            <a href="{{ route('changePassword') }}" class="nav-link">
                                <i class="nav-icon fas fa-unlock-alt" style="color: blue"></i>
                                <p style="color: rgb(0, 0, 2)">Change Password</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('view.logout') }}" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt" style="color: blue"></i>
                                <p style="color: rgb(0, 0, 2)">Logout</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('main-title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('sub-title')</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


            @yield('content')


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{ now()->year }} - {{ now()->year + 1 }}<a {{-- {{ route('view.index') }}   --}}
                    href="#">{{ env('APP_NAME') }}</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> {{ env('APP_VERTION') }} -rc
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('cms/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('cms/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('cms/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('cms/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('cms/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('cms/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('cms/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('cms/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('cms/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('cms/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('cms/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('cms/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('cms/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('cms/dist/js/pages/dashboard.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/crud.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @yield('scripts')

</body>

</html>
