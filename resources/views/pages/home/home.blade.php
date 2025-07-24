@extends('welcome') {{-- ou o layout principal do seu site --}}

@section('content')
    {{-- HERO: Apresentação Rápida --}}
    <section class="hero" style="padding: 2rem; text-align: center;">
        <h1>Olá, eu sou o Jonathan</h1>
        <p>Desenvolvedor PHP | Laravel | MySQL | JavaScript</p>
        <p>Este é meu portfólio, onde compartilho meus projetos, experiências e aprendizados na área de desenvolvimento web.</p>
    </section>

    {{-- PROJETO EM DESTAQUE --}}
    <section class="projeto-destaque" style="padding: 2rem; background-color: #f8f9fa;">
    <h2>📌 Projeto em andamento</h2>
    <p>Um sistema financeiro completo desenvolvido em Laravel.</p>
    
    <img src="{{ asset('img/finanPro.PNG') }}" 
     alt="Imagem do Projeto Financeiro" 
     class="img-fluid rounded shadow-sm my-3 mx-auto d-block" 
     style="width: 700px;">


    <div class="d-flex justify-content-center gap-3 mt-3">
        <a href="https://github.com/DevJhoow/Controlle-Financeiro-" target="_blank" class="btn btn-outline-primary">
            <i class="bi bi-github me-1"></i> Ver detalhes
        </a>
        <a href="https://controlle-financeiro.onrender.com" target="_blank" class="btn btn-success">
            <i class="bi bi-box-arrow-up-right me-1"></i> Ver funcionando
        </a>
    </div>
</section>

@endsection
