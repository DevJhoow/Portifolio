@extends('welcome')

@section('content')
    <div class="container">
        <h2 class="mb-4">Meus Projetos</h2>
        <div class="row">

            <div class="col-md-6">
                <div class="card mb-3 bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Calculadora</h5>
                        <p class="card-text">Projeto simples de calculadora em JavaScript.</p>
                        <a href="https://meuprojeto1.com" target="_blank" rel="noopener noreferrer" class="btn btn-light">
                            Ver Projeto
                        </a>
                        <a href="https://github.com/seuusuario/calculadora" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light ms-2" title="Ver no GitHub">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3 bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">To-do List</h5>
                        <p class="card-text">Lista de tarefas feita com Laravel.</p>
                        <a href="https://meuprojeto2.com" target="_blank" rel="noopener noreferrer" class="btn btn-light">
                            Ver Projeto
                        </a>
                        <a href="https://github.com/seuusuario/todolist" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light ms-2" title="Ver no GitHub">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3 bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Relógio Digital</h5>
                        <p class="card-text">Relógio com JavaScript e CSS.</p>
                        <a href="https://meuprojeto3.com" target="_blank" rel="noopener noreferrer" class="btn btn-dark">
                            Ver Projeto
                        </a>
                        <a href="https://github.com/seuusuario/relogio" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark ms-2" title="Ver no GitHub">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3 bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">e-Commerce Gamer</h5>
                        <p class="card-text">Projeto só com HTML e CSS.</p>
                        <a href="https://e-comerce-gamer.vercel.app/" target="_blank" rel="noopener noreferrer" class="btn btn-light">
                            Ver Projeto
                        </a>
                        <a href="https://github.com/DevJhoow/e-comerceGamer" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light ms-2" title="Ver no GitHub">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
