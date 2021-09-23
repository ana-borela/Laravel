<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <!--Bootstap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/3d5c8bdd35.js" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;600&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <!--NavBar-->
        <nav class="navbar navbar-expand-lg navbar-light rounded" aria-label="Twelfth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10"
                    aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="Logo">
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample10">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('site.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.products') }}">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.contact') }}">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.about') }}">Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <div class="container" id="home">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </main>

    <!--Footer-->
    <div class="footer container-fluid">
        <footer class="row row-cols-5 py-5 border-top">
            <div class="col-md-3">
                <p class="text-center pt-5">&copy; 2021</p>
            </div>

            <div class="col-md-3 text-center">
                <h5>Teste</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Lorem</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Dolor</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Sit</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Amet</a></li>
                </ul>
            </div>

            <div class="col-md-3 text-center">
                <h5>Teste</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Lorem</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Dolor</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Sit</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Amet</a></li>
                </ul>
            </div>

            <div class="col-md-3 text-center">
                <h5>Teste</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Lorem</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Dolor</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Sit</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 link-dark">Amet</a></li>
                </ul>
            </div>
        </footer>
    </div>

</body>

</html>
