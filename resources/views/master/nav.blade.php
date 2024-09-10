    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @yield('home')" href="/"><i class="bi bi-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('category')" href="/category"><i class="bi bi-grid"></i> Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-grid"></i> Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person"></i> Customer</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-question-circle"></i> FAQs</a>
                </li> -->

                <li>
                    <a class="nav-link text-light" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-info-circle"></i> About</a>
                </li>
            </ul>
            <form class="d-flex me-3">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
            <button class="btn btn-login btn-custom me-2" type="button">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </button>
            <button class="btn btn-signup btn-custom" type="button">
                <i class="bi bi-person-plus"></i> Sign-up
            </button>
        </div>
    </div>

