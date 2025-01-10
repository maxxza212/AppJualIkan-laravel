<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #ffffff">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Toko Ikan.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'shop' ? 'active' : '' }}" href="{{ route('Shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'contact' ? 'active' : '' }}" href="{{ route('Contact') }}">Contact
                        Us</a>
                </li>
                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('storage/user/' . Auth::user()->foto) }}" class="rounded-circle me-2" style="width: 40px;" alt="">
                            <span class="text-white">{{ Auth::user()->name }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-custom">Login | Register</a>
                    </li>
                @endauth
                <li class="nav-item">
                    <div class="notif">
                        <a href="{{ route('cart.index') }}" class="fs-5 nav-link {{ Request::path() == 'keranjang' ? 'active' : '' }}">
                            <i class="fa fa-bag-shopping"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>