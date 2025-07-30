@extends('template') {{-- ou o layout principal do seu site --}}
@section('title', 'PHPUnit')

@section('content')

   <h2 class="mb-3">✅ Testes com PHP Unit no Laravel</h2>

   <h4>O que é PHP Unit?</h4>
   <p>
      O <strong>PHPUnit</strong> é o framework oficial para testes automatizados em aplicações PHP. No Laravel, ele já vem configurado por padrão e é usado para garantir que o código funcione como esperado, mesmo após mudanças.
   </p>

   <h4>Por que usar?</h4>
   <ul>
      <li>Evita bugs e retrabalho em projetos</li>
      <li>Permite refatorar o código com segurança</li>
      <li>Ajuda a documentar o comportamento esperado da aplicação</li>
      <li>É valorizado por empresas que adotam metodologias ágeis (TDD)</li>
   </ul>

   <h4>Exemplo básico no Laravel</h4>
   <pre><code class="language-php">namespace Tests\Unit;

   use PHPUnit\Framework\TestCase;

   class ExemploTest extends TestCase
   {
      public function test_soma_basica()
      {
         $this->assertEquals(4, 2 + 2);
      }
   }</code></pre>

   <h4>Testes com Laravel (Feature Tests)</h4>
   <p>Laravel também permite criar testes que simulam uma requisição HTTP:</p>
   <pre><code class="language-php">namespace Tests\Feature;

   use Tests\TestCase;

   class RotaTest extends TestCase
   {
      public function test_rota_principal_retorna_200()
      {
         $response = $this->get('/');
         $response->assertStatus(200);
      }
   }</code></pre>

   <h4>Como rodar os testes</h4>
   <pre><code class="language-bash">php artisan test</code></pre>

   <h4>Documentação oficial</h4>
   <p>
      Estudar mais: <a href="https://laravel.com/docs/10.x/testing" target="_blank" rel="noopener noreferrer">Laravel Testing</a>
   </p>


@endsection

