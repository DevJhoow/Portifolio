<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portifolio-Dev_Jonathan')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="vh-100 d-flex flex-column">

    <!-- Cabeçalho -->
    <header class="bg-light py-3 text-center border-bottom">
        @include('modulo.cabecalho')
    </header>

    <!-- Conteúdo -->
    <div class="flex-grow-1 d-flex">

        <!-- Sidebar -->
        @include('modulo.navSidebar')

        <!-- Conteúdo principal -->
        <div class="container">
            <main class="flex-grow-1 p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="bg-dark text-white py-3">
        @include('modulo.rodape')
    </footer>

</body>
</html>
