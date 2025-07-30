@extends('template') {{-- ou o layout principal do seu site --}}
@section('title', 'cicddevops')

@section('content')  

   <h2 class="mb-3">⚙️ CI/CD e DevOps</h2>

   <h4>O que é DevOps?</h4>
   <p>
      <strong>DevOps</strong> é uma cultura que une desenvolvimento (<em>Dev</em>) e operações (<em>Ops</em>), com foco em automação, integração entre times e entregas contínuas de software com mais qualidade e velocidade.
   </p>

   <h4>O que é CI/CD?</h4>
   <p>
      CI/CD significa:
   </p>
   <ul>
      <li><strong>CI (Integração Contínua)</strong>: todo novo código enviado (push) é testado e integrado automaticamente ao projeto.</li>
      <li><strong>CD (Entrega Contínua ou Deploy Contínuo)</strong>: o código testado é enviado automaticamente para produção ou ambientes de teste.</li>
   </ul>

   <h4>Por que usar?</h4>
   <ul>
      <li>Evita bugs ao rodar testes automáticos a cada mudança</li>
      <li>Acelera entregas (sem precisar subir manualmente)</li>
      <li>Melhora a colaboração entre desenvolvedores e o time de infraestrutura</li>
   </ul>

   <h4>Ferramentas comuns de CI/CD</h4>
   <ul>
      <li><a href="https://github.com/features/actions" target="_blank" rel="noopener noreferrer">GitHub Actions</a></li>
      <li><a href="https://gitlab.com/" target="_blank" rel="noopener noreferrer">GitLab CI</a></li>
      <li><a href="https://circleci.com/" target="_blank" rel="noopener noreferrer">CircleCI</a></li>
      <li><a href="https://render.com/" target="_blank" rel="noopener noreferrer">Render (deploy automatizado)</a></li>
   </ul>

   <h4>Exemplo simples com GitHub Actions (Laravel)</h4>
   <pre><code class="language-yaml">name: Laravel CI

   on: [push]

   jobs:
   laravel-tests:
      runs-on: ubuntu-latest
      steps:
         - uses: actions/checkout@v3
         - name: Setup PHP
         uses: shivammathur/setup-php@v2
         with:
            php-version: '8.2'
         - name: Install dependencies
         run: composer install
         - name: Run tests
         run: php artisan test</code></pre>

   <h4>Dica:</h4>
   <p>
      Mesmo em projetos pessoais, configurar um fluxo CI/CD simples já mostra profissionalismo. Você pode usar o GitHub Actions para rodar testes e fazer deploy automático no Render ou Vercel.
   </p>


@endsection

