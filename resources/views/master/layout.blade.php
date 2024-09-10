<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>

    @include('master.head')

    <style>
        /* Navbar styles */
        .navbar-custom {
            background: linear-gradient(90deg, #000 0%, rgba(33,37,41,1) 100%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #f8f9fa !important;
            font-weight: 600;
            transition: color 0.3s ease-in-out;
        }

        .navbar-brand:hover {
            color: #ffc107 !important;
        }

        .nav-item .nav-link {
            color: #f8f9fa !important;
            font-weight: 500;
            padding: 12px 20px;
        }

        .nav-item .nav-link:hover {
            color: #ffc107 !important;
            transition: color 0.3s ease-in-out;
        }

        .form-control {
            border-radius: 30px;
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(255, 193, 7, 0.5);
        }

        .btn-custom {
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-login {
            border: 2px solid #ffffff;
            color: #ffffff;
            background: transparent;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-login:hover {
            background-color: #ffffff;
            color: #333;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-signup {
            background-color: #ffc107;
            color: #333;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-signup:hover {
            background-color: #e0a800;
            color: #fff;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .pos-logo {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .navbar-toggler {
            background-color: #fff;
        }

        header > div.fixed-top{
            background: #fff !important;
            padding: 0 30px;
        }
        /* Show it is fixed to the top */
        /* body {
            padding-top: 4rem;
        } */
        main{
            background: #fff !important;
            height: calc(100vh - 5rem) !important;
        }

    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="pos-logo" src="images/Logo.png" alt="logo"/>
            </a>
            @include('master.nav')
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-house"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-grid"></i> Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person"></i> Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-question-circle"></i> FAQs</a>
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
                </button> -->

            </div>
        </div>
    </nav>
</header>

<main class="container rounded">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
