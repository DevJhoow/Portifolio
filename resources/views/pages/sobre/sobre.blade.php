@extends('welcome')

@section('content')
    <section class="container my-5">
    <div class="row align-items-center">
        <!-- Foto -->
        <div class="col-md-4 text-center">
            <img src="" alt="Foto brevemente" class="img-fluid rounded-circle shadow" width="200">
        </div>

        <!-- Texto sobre -->
        <div class="col-md-8">
            <h2>Sobre Mim</h2>
            <p>Olá! Sou o desenvolvedor PHP/Laravel apaixonado por tecnologia, sempre buscando aprender e evoluir. Estou estudando Análise e Desenvolvimento de Sistemas e aplicando na prática projetos pessoais.</p>
            <p>Tenho interesse em desenvolvimento backend, banco de dados, e gosto de trabalhar com lógica e desafios!</p>
        </div>
    </div>

    <!-- Skills -->
    <div class="mt-5">
        <h4>Minhas Skills</h4>
        <ul class="list-group list-group-horizontal-sm">
            <li class="list-group-item"><i class="fab fa-html5 text-danger"></i> HTML</li>
            <li class="list-group-item"><i class="fab fa-css3-alt text-primary"></i> CSS</li>
            <li class="list-group-item"><i class="fab fa-js text-warning"></i> JavaScript</li>
            <li class="list-group-item"><i class="fab fa-php text-info"></i> PHP</li>
            <li class="list-group-item"><i class="fas fa-database text-success"></i> MySQL</li>
            <li class="list-group-item"><i class="fab fa-laravel text-danger"></i> Laravel</li>
        </ul>
    </div>
</section>

@endsection