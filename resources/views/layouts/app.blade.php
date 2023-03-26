<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
      <title>!از من بخر</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>!از من بخر</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Arial" rel="stylesheet">

    <!-- Styles -->
<link href="{{ asset('css/app.scss') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="col-md-8 col-lg-8" id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                       @include('inc.navbar')
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('ورود') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a id="navbar" class="nav-link" href="#" role="button" data-toggle="#" aria-haspopup="true" aria-expanded="false" v-pre>
                                        شارژ حساب: {{ Auth::user()->paid }}
                                    </a>
                                    <a id="navbar" class="nav-link" href="http://localhost/basicwebsite/public/admin/admintab" role="button" data-toggle="#" aria-haspopup="true" aria-expanded="false" v-pre>
                                        پنل مدیریت
                                    </a>
                                    <a id="navbar" class="nav-link" href="http://localhost/basicwebsite/public/admin/admintab/addproduct" role="button" data-toggle="#" aria-haspopup="true" aria-expanded="false" v-pre>
                                        محصولات
                                    </a>
                                    <a id="navbar" class="nav-link" href="http://localhost/basicwebsite/public/userpanel" role="button" data-toggle="#" aria-haspopup="true" aria-expanded="false" v-pre>
                                        پنل کاربری
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer id="footer" class="text-center">
  <p>Copyright 2021 &copy; Buy from me</p>
</footer>
</body>
</html>
