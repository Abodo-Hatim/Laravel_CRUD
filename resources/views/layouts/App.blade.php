<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4 text-dark">Stagiaires</span>
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('stagiaires.index') }}" class="nav-link px-2 btn btn-primary text-white me-2">Les Stagiaire</a></li>
                <li><a href="{{ route('stagiaires.create')}}" class="nav-link px-2 btn btn-success text-white me-2">Ajouter Stagiaire</a></li>
                <li>
                    <form action="{{ route('delete-all-rows') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"class="btn btn-danger"><i class="bi bi-trash"></i> DELETE ALL</button>
                    </form>
                </li>
                <!-- <li><a href="#" class="nav-link px-2">Pricing</a></li>
                <li><a href="#" class="nav-link px-2">FAQs</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li> -->
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>
        @yield('content')
    </div>
</body>
</html>
