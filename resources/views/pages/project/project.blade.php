@extends('welcome')

@section('content')
    <div class="container">
        <h2 class="mb-4">Meus Projetos</h2>
        <div class="row">

            <div class="col-md-6">
                <div class="card mb-3 bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Gerenciamento de vendas</h5>
                        <p class="card-text">Projeto criado ultilizando Laravel, ambiente Docker</p>
                        <a href="" target="_blank" rel="noopener noreferrer" class="btn btn-light">
                            sem deploy
                        </a>
                        <a href="https://github.com/DevJhoow/Gerenciamento-de-venda" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light ms-2" title="Ver no GitHub">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3 bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">e-Commerce Gamer</h5>
                        <p class="card-text">
                            <i class="fab fa-html5 fa-2x me-2" title="HTML5"></i>
                            <i class="fab fa-css3-alt fa-2x me-2" title="CSS3"></i>
                            <i class="fab fa-laravel fa-2x" title="Laravel"></i>
                        </p>
                        <a href="https://e-comerce-gamer.vercel.app/" target="_blank" rel="noopener noreferrer" class="btn btn-light">
                            deploy
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
