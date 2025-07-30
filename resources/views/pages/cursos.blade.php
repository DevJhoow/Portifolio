@extends('template') 
@section('title', 'IA')

@section('content')
   <section class="container mt-5">
        <h2 class="mb-4 text-center">
            <i class="bi bi-mortarboard-fill me-2 text-primary"></i>Meus Cursos
        </h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover shadow">
                <thead class="table-primary text-center">
                    <tr>
                        <th><i class="bi bi-journal-code"></i> Curso</th>
                        <th><i class="bi bi-building"></i> Instituição</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="bi bi-laptop me-2 text-success"></i>Análise e Desenvolvimento de Sistemas</td>
                        <td><i class="bi bi-building me-2 text-secondary"></i>Fac Anhanguea(cursando 5ºsemestre)</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-code-slash me-2 text-success"></i>Laravel 10 - Do Básico ao Avançado</td>
                        <td><i class="bi bi-globe me-2 text-secondary"></i>Udemy</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</section>

@endsection

