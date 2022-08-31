<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/home">Track Pack</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="sidebarMenu"></div>
    <div class="navbar-nav me-auto mb-2 mb-lg-0">
        <div class="nav-item">
            <form action="/logout" method="post">
                @csrf

                <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <span data-feather="log-out"
                        class="align-text-bottom"></span></button>
            </form>
        </div>
    </div>
</header>
