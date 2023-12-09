    {{-- Navbar --}}
    {{-- <nav id="navbar" class="nav-respon navbar navbar-expand-lg py-3 fixed-top {{Request::segment(1) == '' ? '' : 'nav-else'}}">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#"><img src="{{ asset('assets/icon/logo.png') }}" height="50px" alt="" class="mb-2"> <span class="ms-1">Narau.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{'/'}}">Beranda<span></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ '/.#content' }}">Artikel<span></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ '/.#video' }}">Video<span></span></a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                <form style="margin: 0;" action="/logout" method="POST">
                    <div class="profile" onclick="menuToggle()">
                        <img class="shadow-sm" width="50px" src="{{ asset('assets/icon/profile.jpeg') }}" alt="logout">
                    </div>

                    <div class="logout shadow">
                        <div class="profile-log d-flex">
                            <img class="shadow-sm" width="50px" height="52px" src="{{ asset('assets/icon/profile.jpeg') }}" alt="">
                            <div class="nav-modal text-start">
                                <h1>Derren Amadeo</h1>
                                <h1>@derren9809</h1>
                                <a href="#">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="con-wrap-nav">
                            <a class="text-start" href="{{route('blog.create')}}" href="">
                                <div class="log-li">
                                    <i class="icon-log" data-feather="file-plus"></i>Buat Artikel
                                </div>
                            </a>
                            <a class="text-start" href="{{route('dashboard')}}" href="">
                                <div class="log-li">
                                    <i class="icon-log" data-feather="layout"></i>Dashboard
                                </div>
                            </a>
                            @csrf
                            <button type="submit" class="log-li text-start" style=""><i class="icon-log" data-feather="log-out"></i> Logout</button>
                        </div>
                </form>
                @else
                <a href="{{route('login')}}" class="login py-2 px-3 fw-semibold rounded-pill text-decoration-none">Login</a>
                @endauth
            </div>
        </div>

    </div>
    </nav> --}}

    <nav class="navbar nav-respon navbar-expand-lg fixed-top">
        <div class="container container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand d-flex align-items-center" href="#"><img src="{{ asset('assets/icon/logo.png') }}" height="40px" alt="" class="mb-1"> <span class="ms-1">Narau.</span></a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">Narau</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 " aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#content">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#video">Video</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ms-auto">
                @auth
                <form style="margin: 0;" action="/logout" method="POST">
                    <div class="profile" onclick="menuToggle()">
                        <img class="shadow-sm" width="50px" src="{{ asset('assets/icon/profile.jpeg') }}" alt="logout">
                    </div>

                    <div class="logout shadow">
                        <div class="profile-log d-flex">
                            <img class="shadow-sm" width="50px" height="52px" src="{{ asset('assets/icon/profile.jpeg') }}" alt="">
                            <div class="nav-modal text-start">
                                <h1>Derren Amadeo</h1>
                                <h1>@derren9809</h1>
                                <a href="#">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="con-wrap-nav">
                            <a class="text-start" href="{{route('blog.create')}}" href="">
                                <div class="log-li">
                                    <i class="icon-log" data-feather="file-plus"></i>Buat Artikel
                                </div>
                            </a>
                            <a class="text-start" href="{{route('dashboard')}}" href="">
                                <div class="log-li">
                                    <i class="icon-log" data-feather="layout"></i>Dashboard
                                </div>
                            </a>
                            @csrf
                            <button type="submit" class="log-li text-start" style=""><i class="icon-log" data-feather="log-out"></i> Logout</button>
                        </div>
                </form>
                @else
                <a href="{{route('login')}}" class="login py-2 px-3 fw-semibold rounded-pill text-decoration-none">Login</a>
                @endauth
            </div>
        </div>
    </nav>


    {{-- Navbar --}}
