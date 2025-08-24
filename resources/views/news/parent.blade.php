<?php
use App\Models\Category;
$categories = Category::where('status', 'active')->take(9)->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NEWS | @yield('Home Page')</title>
    <link rel="icon" type="image/png" href="{{ asset('cms/dist/img/logo.jpg') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('news/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('news/css/modern-business.css') }}" rel="stylesheet">

    <style>
        .social-icons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-icons .nav-icon {
            margin-right: 10px; /* تعيين هامش يميني لإضافة مسافة بين الرمز والروابط */
        }
    </style>
    @yield('styles')

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <div class="social-icons">
            <div><a class="nav-icon fab fa-facebook" style="color: rgb(151, 151, 248)" href="https://www.facebook.com/profile.php?id=100023129466009&mibextid=ZbWKwL"></a></div>
            <div><a class="nav-icon fab fa-instagram" style="color: rgb(151, 151, 248)" href="#"></a></div>
            <div><a class="nav-icon fab fa-twitter-square" style="color: rgb(151, 151, 248)" href="#"></a></div>
        </div>
        <div><a class="navbar-brand" href="{{ route('login.type') }}" style="color: red; background-color: yellow;
        border: 1px solid yellow;
        padding: 3px 6px;
        border-radius: 3px
        ">LOGIN</a>
        </div>
        <a class="navbar-brand" href="{{ route('view.index') }}">news</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view.index') }}"><b>home</b></a>
                </li>

                @foreach ($categories as $category)
                      <li class="nav-item">
                    <a class="nav-link" href="{{ route('view.all' , $category->id)  }}">{{ $category->name }}</a>
                </li>
                @endforeach


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view.contact') }}"><b>Contact us</b></a>
                </li>

            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Momen Sisalem 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('news/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('news/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>





    @yield('scripts')

</body>

</html>
