<nav class="bg-dark text-white p-3 d-flex flex-column justify-content-between" style="width: 220px;">
    <div>
        <a href="{{ route('index.home') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
            <i class="bi bi-house-door-fill me-2"></i> Home
        </a>

        <a href="{{ route('index.project') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
            <i class="bi bi-kanban-fill me-2"></i> Projeto
        </a>

        <a href="{{ route('index.sobre') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
            <i class="bi bi-info-circle-fill me-2"></i> Sobre
        </a>

        <a href="{{ route('index.facu') }}" class="d-flex align-items-center text-white mb-3 text-decoration-none">
            <i class="bi bi-mortarboard-fill me-2"></i> Faculdade
        </a>
    </div>

    <a href="{{ route('index.config') }}" class="d-flex align-items-center text-white text-decoration-none">
        <i class="bi bi-gear-fill me-2"></i> Configurações
    </a>
</nav>
