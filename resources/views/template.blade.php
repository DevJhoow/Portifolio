<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portifolio-Dev_Jonathan')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Cabeçalho -->
    <header class="bg-light border-bottom">
        <div class="d-flex justify-content-between align-items-center bg-dark text-white px-4 py-2">
           
            <div class="scrolling-text text-center w-100 mx-3">
           <p class="text-white text-center d-flex justify-content-center align-items-center flex-wrap gap-2">
                <a href="https://www.linkedin.com/in/jonathanluis/" class="text-white text-decoration-none mx-3">
                    <i class="bi bi-linkedin fs-4"></i> 
                </a>

                <span>
                    Desenvolvedor de Software ⚙️ | PHP + Laravel + JS 💻 | OWASP Security Project 🔐 
                </span>

                <a href="https://github.com/DevJhoow" class="text-white text-decoration-none mx-3">
                    <i class="bi bi-github fs-4"></i> 
                </a>
            </p>

    </header>


    <!-- Conteúdo (Sidebar + Conteúdo Principal) -->
    <div class="flex-grow-1 d-flex overflow-hidden">

        <!-- Sidebar -->
        <nav class="bg-dark text-white p-3 d-flex flex-column justify-content-between align-items-center position-relative" style="width: 200px;">

            <!-- Avatar e links -->
            <div class="w-90 text-center" style="margin-left: 20px;">
                <div class="mb-4">
                    <img src="{{ asset('image/j.jpg') }}" alt="Avatar"
                         class="img-fluid rounded"
                         style="width: 100px; height: 100px; object-fit: cover; border: 2px solid white;">
                </div>

                <div class="d-flex flex-column align-items-center">
                    <a href="{{ route('index.home') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
                        <i class="bi bi-house-door-fill me-2"></i> Home
                    </a>

                    <a href="{{ route('index.project') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
                        <i class="bi bi-kanban-fill me-2"></i> Projeto
                    </a>

                    <a href="{{ route('index.facu') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
                        <i class="bi bi-mortarboard-fill me-2"></i> Faculdade
                    </a>

                     <a href="{{ route('index.curso') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
                        <i class="bi bi-book me-2"></i> Cursos
                    </a>

                    <a href="{{ route('index.security') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
                        <i class="bi bi-shield-lock-fill me-2"></i> Security/Project
                    </a>

                     <a href="{{ route('index.postman') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
                        <i class="bi bi-terminal-fill me-2"></i> Postman & API
                    </a>

                    <a href="{{ route('index.phpunit') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
                        <i class="bi bi-bug-fill me-2"></i> Testes PHPUnit
                    </a>

                     <a href="{{ route('index.scrum') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none"> 
                        <i class="bi bi-diagram-3-fill me-2"></i> Scrum & Kanban
                    </a>
                    
                    <a href="{{ route('index.cicd') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
                        <i class="bi bi-gear-wide-connected me-2"></i> CI/CD & DevOps
                    </a> 

                    <a href="{{ route('index.ia') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
                       <i class="bi bi-cpu-fill me-2"></i> IA 
                    </a>
                </div>
            </div>
        </nav>

        <!-- Conteúdo principal -->
        <main class="flex-grow-1 p-4 container overflow-auto">
            @yield('content')
        </main>
    </div>

    <!-- Rodapé -->
    <footer class="bg-dark text-white py-1 mt-auto">
        <div class="container text-center">
            <span>© {{ date('Y') }} Dev Jonathan. Todos os direitos reservados.</span>
        </div>
    </footer>
</body>
</html>
