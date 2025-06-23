<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonathan Luís - Entrada</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body class="bg-dark">
    <div class="landing-page d-flex flex-column justify-content-center align-items-center text-center text-white vh-100">
        <h1 class="display-3 fw-bold shadow-blue"> 
            <i class="bi bi-person-circle me-2"></i>Jonathan Luís
        </h1>
        <p class="lead">
            <i class="bi bi-code-slash me-2"></i>Desenvolvedor Web | PHP • Laravel • MySQL
        </p>
        <a href="{{ route('index.home') }}" class="btn btn-outline-light btn-lg mt-4 btn-shadow-blue">
            <i class="bi bi-box-arrow-in-right me-2"></i>Entrar no Portfólio
        </a>

    </div>  
</body>
</html>
