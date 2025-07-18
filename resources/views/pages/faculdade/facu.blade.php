@extends('welcome')

@section('content')

<section class="container my-5">
    <h2 class="text-center mb-4">🎓 Matriz Curricular - Análise e Desenvolvimento de Sistemas</h2>

    @php
        $semestres = [
            '1º Semestre' => [
                'Algoritmos e Programação Estruturada' => 'Aprovado',
                'Análise e Modelagem de Sistemas' => 'Aprovado',
                'Engenharia de Software' => 'Aprovado',
                'Linguagem de Programação' => 'Aprovado',
                'Lógica e Matemática Computacional' => 'Aprovado',
            ],
            '2º Semestre' => [
                'Análise Orientada a Objetos' => 'Aprovado',
                'Linguagem Orientada a Objetos' => 'Aprovado',
                'Modelagem de Dados' => 'Aprovado',
                'Projeto de Extensão I' => 'Aprovado',
                'Qualidade e Automação de Testes' => 'Aprovado',
                'Sistemas Operacionais' => 'Aprovado',
            ],
            '3º Semestre' => [
                'Computação em Nuvem' => 'Aprovado',
                'Governança de Tecnologia' => 'Aprovado',
                'Green IT' => 'Aprovado',
                'Programação e Desenvolvimento de Banco de Dados' => 'Aprovado',
                'Programação Web' => 'Aprovado',
            ],
            '4º Semestre' => [
                'Desenvolvimento em JavaScript' => 'Aprovado',
                'Desenvolvimento Mobile' => 'Aprovado',
                'Desenvolvimento Responsivo' => 'Aprovado',
                'Frameworks para Desenvolvimento de Software' => 'Aprovado',
                'Projeto de Extensão II' => 'Aprovado',
                'Sistemas Distribuídos' => 'Aprovado',
            ],
            '5º Semestre' => [
                'Arquitetura e Organização de Computadores' => 'Falta Cursar',
                'Interface e Usabilidade' => 'Falta Cursar',
                'Projeto de Software' => 'Falta Cursar',
                'Redes de Computadores' => 'Falta Cursar',
                'Segurança e Auditoria de Sistemas' => 'Falta Cursar',
                'Sociedade Brasileira e Cidadania' => 'Falta Cursar',
            ],
        ];
    @endphp

    @foreach ($semestres as $titulo => $disciplinas)
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">{{ $titulo }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($disciplinas as $disciplina => $status)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $disciplina }}
                        <span class="badge bg-{{ $status == 'Aprovado' ? 'success' : 'secondary' }}">
                            {{ $status }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</section>


@endsection