<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Top Reseller | {{ $title }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0 d-flex flex-column">
        <div class="text-center w-100" style="background-color:#B0DAFF">
            <h1>Top Reseller</h1>
        </div>
        <div class="d-flex justify-content-center w-100" style="background-color: #F9D949">
            <div class="d-flex justify-content-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" style="background-color: #F9D949">
                                <li><a class="dropdown-item" style="background-color: #F9D949" href="/category/{{ 1 }}">Shirt</a></li>
                                <li><a class="dropdown-item" style="background-color: #F9D949" href="/category/{{ 2 }}">Bag</a></li>
                                <li><a class="dropdown-item" style="background-color: #F9D949" href="/category/{{ 3 }}">Shoes</a></li>
                                <li><a class="dropdown-item" style="background-color: #F9D949" href="/category/{{ 4 }}">Dress</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/brand">Top 5 Brands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="" style="min-height: 40rem ;padding:5%">
        @yield('container')
    </div>

    <footer style="background-color: #B0DAFF">
        <div class="d-flex justify-content-center">
            <p class="mt-3 mb-3">© Top Reseller 2023</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
