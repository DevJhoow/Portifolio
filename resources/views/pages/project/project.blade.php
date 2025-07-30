@extends('template')

@section('content')
<style>
    .scroll-container {
        max-height: 70vh; /* Limita a altura da área de projetos */
        overflow-y: auto; /* Scroll só na vertical */
        overflow-x: hidden; /* Impede rolagem lateral */
        padding-right: 3px;
    }

    .project {
        background-size: cover;
        background-position: center;
        height: 250px;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        transition: transform 0.3s;
        display: flex;
        align-items: end;
    }

    .project:hover {
        transform: scale(1.03);
    }

    .project .overlay {
        background-color: rgba(0, 0, 0, 0.6);
        color: #fff;
        padding: 10px;
        width: 100%;
        border-radius: 0 0 15px 15px;
    }

    /* Estilo opcional da barra de rolagem */
    .scroll-container::-webkit-scrollbar {
        width: 6px;
    }

    .scroll-container::-webkit-scrollbar-thumb {
        background-color: rgba(255,255,255,0.3);
        border-radius: 3px;
    }
</style>

<div class="container">
    <h2 class="mb-3 text-white">Meus Projetos</h2>

    <div class="scroll-container" >
        <div class="row g-4">

            <!-- Projeto 1 -->
            <section class="col-md-6 col-lg-4">
                <article class="project" style="background-image: url('{{ asset('img/finanPro.PNG') }}');">
                    <div class="overlay">
                        <h5>Controle Financeiro</h5>
                        <p>Gerencie entradas, saídas e relatórios.</p>
                        <a href="https://github.com/DevJhoow/Controlle-Financeiro-" target="_blank" class="btn btn-sm btn-light">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                         <a href="https://controlle-financeiro.onrender.com" target="_blank" class="btn btn-sm btn-light">
                            <i class="bi bi-box-arrow-up-right me-1"></i> Acesse ao Site
                        </a>
                    </div>
                </article>
            </section>
        </div>
    </div>
</div>
@endsection
