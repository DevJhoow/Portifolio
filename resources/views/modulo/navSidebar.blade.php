<nav class="bg-dark text-white p-3 d-flex flex-column justify-content-between align-items-center position-relative" style="width: 220px; min-height: 100vh;">

    {{-- Coluna lateral dos ícones (esquerda da sidebar) --}}
    <div class="position-absolute top-0 start-0 h-100 d-flex flex-column align-items-center pt-4" style="width: 40px;">
        <img src="{{ asset('icons/html.svg') }}" alt="HTML" style="width: 20px; margin-bottom: 16px;">
        <img src="{{ asset('icons/css.svg') }}" alt="CSS" style="width: 20px; margin-bottom: 16px;">
        <img src="{{ asset('icons/bootstrap.svg') }}" alt="Bootstrap" style="width: 20px; margin-bottom: 16px;">
        <img src="{{ asset('icons/php.svg') }}" alt="PHP" style="width: 20px; margin-bottom: 16px;">
        <img src="{{ asset('icons/laravel.svg') }}" alt="Laravel" style="width: 20px; margin-bottom: 16px;">
        <img src="{{ asset('icons/javascript.svg') }}" alt="JavaScript" style="width: 20px; margin-bottom: 16px;">
        <img src="{{ asset('icons/mysql.svg') }}" alt="MySQL" style="width: 20px; margin-bottom: 16px;">
    </div>

    {{-- Topo da sidebar (avatar e links) --}}
    <div class="w-100 text-center" style="margin-left: 20px;"> {{-- pequeno recuo para não colidir com os ícones --}}
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
        </div>
    </div>
</nav>
