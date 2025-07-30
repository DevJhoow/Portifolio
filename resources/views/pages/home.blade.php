@extends('template') 
@section('title', 'Home')

@section('content')
    {{-- PROJETO EM DESTAQUE --}}
    <section class="projeto-destaque" style="padding: 1rem; max-height: 70vh; background-color: #f8f9fa;">
    <h2>📌 Projeto atualmente em andamento</h2>
    <p>Um sistema financeiro completo desenvolvido em Laravel.</p>
    
    <img src="{{ asset('img/finanPro.PNG') }}" 
     alt="Imagem do Projeto Financeiro" 
     class="img-fluid rounded shadow-sm my-1 mx-auto d-block" 
     style="width: 700px;">


    <div class="d-flex justify-content-center gap-1 mt-2">
        <a href="https://github.com/DevJhoow/Controlle-Financeiro-" target="_blank" class="btn btn-outline-primary">
            <i class="bi bi-github me-1"></i> detalhes
        </a>
        <a href="https://controlle-financeiro.onrender.com" target="_blank" class="btn btn-success">
            <i class="bi bi-box-arrow-up-right me-1"></i> Acesse ao Site
        </a>
    </div>
</section>

@endsection

