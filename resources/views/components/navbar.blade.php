<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <a class="navbar-brand" href="#">MyWebsite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @can('admin')
                <li class="nav-item">
                    <a class="nav-link" href="/pengguna">Pengguna</a>
                </li>
                @endcan
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="/barang">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pemasok">Pemasok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Barang Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/barang">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/barang">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/barang">Barang</a>
                </li>
                @can('pengguna')
                <li class="nav-item">
                    <a class="nav-link" href="/transaksi">Tarnsaksi</a>
                </li>
                @endcan
                    <li class="nav-item">
                <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-danger nav-link">Log Out</button>
               </form>
               </li>
            @else
            <li class="nav-item">
            <a class="nav-link" href="/login">
            <i class="bi bi-box-arrow-in-right me-1"></i>Login
          </a>
            </li>
            @endauth
            </ul>
        </div>
    </nav>