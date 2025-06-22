<nav class="bg-dark text-white p-3 d-flex flex-column justify-content-between align-items-center" style="width: 220px; min-height: 100vh;">
    
    {{-- Topo da sidebar --}}
    <div class="w-100 text-center">
        {{-- Avatar GitHub --}}
        @if ($githubAvatar)
            <div class="mb-4">
                <img src="{{ $githubAvatar }}" alt="Avatar GitHub"
                     class="img-fluid rounded"
                     style="width: 100px; height: 100px; object-fit: cover; border: 2px solid white;">
            </div>
        @endif

        {{-- Links principais --}}
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

    {{-- Rodapé --}}
    <div class="w-100 text-center">
        <a href="{{ route('index.config') }}" class="d-flex justify-content-center align-items-center text-white text-decoration-none">
            <i class="bi bi-gear-fill me-2"></i> Configurações
        </a>
    </div>

</nav>
