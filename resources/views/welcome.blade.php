<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portifolio-Dev_Jonathan')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

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
        <main class="flex-grow-1 p-4 container">
            @yield('content')
        </main>
    </div>

    <!-- Rodapé -->
    <footer class="bg-dark text-white py-3">
        @include('modulo.rodape')
    </footer>

</body>
</html>
