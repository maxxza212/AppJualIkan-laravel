<aside class="sidebar navbar navbar-expand-lg d-flex flex-column gap-4 align-content-lg-center mx-2 my-2 rounded">
    <h5 class="navbar-brand2">Toko Ikan</h5>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
        <ul class="navbar-nav flex-column gap-3 px-2">
            <li class="navbar-item rounded {{ Request::path() === 'admin/dashboard' ? 'bg-info' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="text-white">
                    <div class="d-flex ">
                        <span class="material-icons">dashboard</span>
                        <p class="m-0 p-0">Dashboard</p>
                    </div>
                </a>
            </li>
            <li class="navbar-item rounded {{ Request::path() === 'admin/product' ? 'bg-info' : '' }}">
                <a href="product" class="d-flex align-items-center">
                    <span class="material-icons">inventory_2</span> <!-- Ikon modern -->
                    <p class="m-0 p-0">Product</p>
                </a>
            </li>
            <li class="navbar-item rounded {{ Request::path() === 'admin/transaksi' ? 'bg-info' : '' }}">
                <a href="transaksi" class="d-flex align-items-center">
                    <span class="material-icons">receipt_long</span>
                    <p class="m-0 p-0">Transaksi</p>
                </a>
            </li>
            <li class="navbar-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" class="text-white d-flex align-items-center p-2 rounded" onclick="event.preventDefault(); document.getElementById('logout-form').submit ();">
                    <span class="material-icons">logout</span>
                    <p class="m-0 ms-2">Logout</p>
                </a>
            </li>
        </ul>
    </div>
</aside>
