<nav class="mb-3 d-flex justify-content-lg-between navbar3">
    <div class="d-flex flex-column">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active"><a href="#">{{ $name ?? 'Admin' }}</a></li>
        </ol>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="icon-notif">
            <span class="material-icons">notifications</span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <img src="{{ asset('storage/user/'. Auth::user()->foto) }}" class="rounded-circle" style="width: 50px;" alt="">
            <div class="d-flex flex-column user-info">
                <p class="name">{{ Auth::user()->name }}</p>
                <p class="email">{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
</nav>