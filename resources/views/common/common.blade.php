<html>

<head>
    @yield('head')
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src='assets/js/bootstrap.js'></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">CUapp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="{{ Request::is('/') ? 'nav-link active' : 'nav-link'}}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Request::is('about') ? 'nav-link active' : 'nav-link' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Request::is('services') ? 'nav-link active' : 'nav-link' }}" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Request::is('blog') ? 'nav-link active' : 'nav-link' }}" href="/blog">Blog</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="{{ Request::is('login') ? 'nav-link active' : 'nav-link' }}" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('register') ? 'nav-link active' : 'nav-link' }}" href="/register">Register</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>

    @yield('content')

</body>

</html>