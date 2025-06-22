@extends('welcome')

@section('content')
    <style>
        .shadow-blue {
            box-shadow: 0 0 12px rgba(0, 123, 255, 0.6);
            transition: transform 0.2s ease-in-out;
        }

        .shadow-blue:hover {
            transform: scale(1.02);
            box-shadow: 0 0 20px rgba(0, 123, 255, 0.8);
        }
    </style>

    <div class="container">
        <h2 class="mb-4">Meus Projetos do GitHub</h2>
        <div class="row">
            @forelse($repositorios as $repo)
                <div class="col-md-6">
                    <div class="card mb-3 bg-dark text-white shadow-blue">
                        <div class="card-body">
                            <h5 class="card-title">{{ $repo['name'] }}</h5>
                            <p class="card-text">
                                {{ $repo['description'] ?? 'Sem descrição' }}
                            </p>
                            <a href="{{ $repo['html_url'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-light">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Nenhum repositório encontrado.</p>
            @endforelse
        </div>
    </div>
@endsection
