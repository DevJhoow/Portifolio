@extends('template') {{-- ou o layout principal do seu site --}}
@section('title', 'Postman')

@section('content')
   <h2 class="mb-3">🔍 Postman e Consumo de APIs</h2>

   <h4>O que é o Postman?</h4>
   <p>
      O <strong>Postman</strong> é uma ferramenta usada por desenvolvedores para testar e consumir APIs REST de forma prática, sem a necessidade de um front-end.
      Com ele, é possível enviar requisições HTTP (GET, POST, PUT, DELETE etc.) e visualizar as respostas de forma clara e organizada.
   </p>

   <h4>Por que usar?</h4>
   <p>
      Usar o Postman durante o desenvolvimento permite:
   </p>
   <ul>
      <li>Testar endpoints da sua API Laravel sem precisar criar uma interface</li>
      <li>Verificar se os dados estão sendo enviados/recebidos corretamente</li>
      <li>Simular autenticação, envio de tokens, e testar regras de segurança como headers CSRF e JWT</li>
      <li>Documentar suas rotas e criar coleções de testes</li>
   </ul>

   <h4>Como usar no Laravel</h4>
   <p>Exemplo de uso com Laravel:</p>
   <ol>
      <li>Crie uma rota de teste no Laravel:</li>
      <pre><code class="language-php">Route::get('/api/teste', function () {
      return response()->json(['mensagem' => 'API funcionando!']);
   });</code></pre>

      <li>No Postman, crie uma requisição <strong>GET</strong> para <code>http://localhost:8000/api/teste</code></li>
      <li>Você verá a resposta JSON: <code>{"mensagem":"API funcionando!"}</code></li>
   </ol>

   <h4>Dica extra</h4>
   <p>
      Quando estiver usando autenticação com tokens (como Sanctum ou Passport), você pode adicionar o token no Postman em <strong>Authorization > Bearer Token</strong> ou via header:
   </p>
   <pre><code class="language-http">Authorization: Bearer SEU_TOKEN</code></pre>

   <h4>Criando sua própria API com Laravel</h4>
   <p>
      Laravel facilita a criação de APIs RESTful de forma rápida e estruturada, com rotas, controllers e recursos automatizados.
   </p>
   <p>
      Você pode usar comandos como:
   </p>
   <pre><code class="language-bash">php artisan make:controller ProdutoController --api</code></pre>

   <p>
      Isso cria um controller com métodos prontos para API: <code>index</code>, <code>store</code>, <code>show</code>, <code>update</code> e <code>destroy</code>.
   </p>

   <p>Depois, defina suas rotas no arquivo <code>routes/api.php</code>:</p>
   <pre><code class="language-php">Route::apiResource('produtos', ProdutoController::class);</code></pre>

   <p>
      Com isso, sua API estará pronta para receber requisições do Postman, do front-end ou de outras aplicações.
   </p>


   <p>
      Estudar mais: <a href="https://learning.postman.com/" target="_blank">documentação</a>
   </p>

@endsection

