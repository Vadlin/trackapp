<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 20px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">TrackPack</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/orders">Orders</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link " href="/dashboard/daftar">Dashboard</a>
                    </li>
                @endauth
            </ul>

            <ul class="navbar-nav ms-auto">

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hello! {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile"><i class="bi bi-person-circle"></i> Profil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endauth
            </ul>


        </div>
    </div>
</nav>
