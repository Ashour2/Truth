<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('cms/dist/img/logo0.jpeg') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRUTH | @yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="{{ asset('cms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/summernote/summernote-bs4.min.css') }}">

<style>
    /* Light sidebar styles */
    .main-sidebar.sidebar-dark-primary {
        background-color: #f9fafb !important; /* أفتح */
        border-right: 1px solid #dee2e6;
        color: #212529;
    }
    .main-sidebar .nav-header {
        color: #6c757d !important;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }
    .main-sidebar .nav-link {
        color: #495057 !important;
        transition: all 0.3s ease;
        border-radius: 8px;
        margin: 2px 6px;
    }
    .main-sidebar .nav-link.active {
        background-color: #e3f2fd !important; /* أزرق فاتح */
        color: #0d6efd !important;
        font-weight: 600;
    }
    .main-sidebar .nav-link:hover:not(.active) {
        background-color: #f1f3f5 !important;
        color: #0d6efd !important;
    }
    .main-sidebar .nav-icon {
        color: #6c757d !important;
    }
    .main-sidebar .nav-link.active .nav-icon,
    .main-sidebar .nav-link:hover .nav-icon {
        color: #0d6efd !important;
    }
    .brand-link {
        border-bottom: 1px solid #dee2e6;
        background: #ffffff;
    }
    .brand-text {
        color: #0d6efd !important;
        font-weight: bold;
        font-size: 1.1rem;
    }
    .user-panel .info a {
        color: #212529;
        font-weight: 600;
    }

    /* تحسين الهيدر */
    .main-header.navbar {
        border-bottom: 1px solid #dee2e6;
        background-color: #ffffff !important;
    }
    .main-header .nav-link {
        color: #495057 !important;
    }
    .main-header .nav-link:hover {
        color: #0d6efd !important;
    }

    /* البريـد كرومب */
    .breadcrumb-item a {
        color: #0d6efd !important;
    }
    .breadcrumb-item.active {
        color: #6c757d !important;
    }

    /* الفوتر */
    .main-footer {
        background: #f8f9fa !important;
        border-top: 1px solid #dee2e6;
        color: #495057;
        font-size: 0.9rem;
    }
</style>

    @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
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
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
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
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
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
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
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
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="{{ asset('cms/dist/img/logo.jpg') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">TRUTH</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
                    <div class="image">
                        <img src="{{ asset('cms/dist/img/logo.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">User Name</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    TRUTH
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-home nav-icon"></i>
                                        <p>الصفحة الرئيسية</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">ادارة المستخدمين</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>
                                    مشرفين
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    {{-- admins.index --}}
                                    <a href="{{ route('admins.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>جميع المشرفين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    {{-- admins.create --}}
                                    <a href="{{ route('admins.create') }}" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>انشاء مشرف جديد</p>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-feather-alt" style="color:blue;"></i>
                                    {{-- <i class="fas fa-feather-alt"></i> --}}
                                    {{--  <i class="far fa-user"></i>  --}}
                                    <p style="color: rgb(0, 0, 2)">
                                        Author
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- @can('Index Author') --}}
                                    <li class="nav-item">
                                        <a href="{{ route('authors.index') }}" class="nav-link">
                                            <i class="fas fa-list-ul nav-icon" style="color:blue;"></i>
                                            {{--  <i class="fas fa-list-ul"></i>  --}}
                                            <p style="color: rgb(0, 0, 2)">All-Authors</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('authors.create') }}" class="nav-link">
                                            <i class="fas fa-plus-circle nav-icon" style="color:blue;"></i>
                                            {{--  <i class="fas fa-list-ul"></i>  --}}
                                            <p style="color: rgb(0, 0, 2)">All-Authors</p>
                                        </a>
                                    </li>
                                    {{-- @endcan --}}
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    المستخدمين
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    {{-- normalUsers.index --}}
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>جميع المستخدمين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    {{-- normalUsers.create --}}
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>انشاء مستخدم جديد</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">ادارة المحتوى</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-globe-americas nav-icon"></i>
                                <p>
                                    Country
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('countries.create') }}" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Create Country</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('countries.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>Index Country</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-city nav-icon"></i>
                                <p>
                                    City
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('cities.create') }}" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Create New City</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cities.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>All Cities</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cubes nav-icon"></i>
                                <p>
                                    Category
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('categories.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>All Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('categories.create') }}" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Articles
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('articles.index') }}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>All Articles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('articles.create') }}" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">ادارة الموقع</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-signature"></i>
                                <p>جميع الرسائل</p>
                            </a>
                        </li>

                        <li class="nav-header">الاعدادات</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>الصفحة الشخصية</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-edit"></i>
                                <p>تعديل الملف الشخصي</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-unlock-alt"></i>
                                <p>تغيير كلمة المرور</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>تسجيل الخروج</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('main-title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('sub-title')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
            </div>
        <footer class="main-footer">
            <strong>Copyright &copy; {{ now()->year }} - {{ now()->year + 1 }} <a
                    href="#">{{ env('APP_NAME') }}</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> {{ env('APP_VERTION') }} -rc
            </div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </div>
    <script src="{{ asset('cms/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('cms/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ asset('cms/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('cms/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('cms/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('cms/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('cms/dist/js/demo.js') }}"></script>
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
