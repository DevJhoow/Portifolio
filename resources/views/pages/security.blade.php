@extends('template')
@section('title', 'Segurança')

@section('content')
<div class="container py-4">
    <h2 class="mb-3">🔐 OWASP Security Project</h2>

    <h4>O que é</h4>
    <p>
        A OWASP (Open Worldwide Application Security Project) boas práticas para a segurança de aplicações.
        Um dos seus principais projetos é o <strong>OWASP Top 10</strong>, que lista as 10 vulnerabilidades mais críticas em aplicações web.
    </p>

    <h4>Por que usar</h4>
    <p>
        Aplicações vulneráveis podem expor dados de usuários e causar prejuízos. Seguir as diretrizes da OWASP ajuda a <strong>evitar ataques comuns</strong>,
        como SQL Injection, Cross-Site Scripting (XSS), e falhas de autenticação. É um guia confiável para <strong>proteger sistemas desde o desenvolvimento até a produção</strong>.
    </p>

    <h4>Onde usar</h4>
    <p>
        As práticas da OWASP devem ser aplicadas em <strong>qualquer sistema web ou API</strong>, principalmente em ambientes com dados sensíveis, como:
    </p>
    <ul>
        <li>Sistemas de e-commerce</li>
        <li>Portais com autenticação</li>
        <li>Aplicações que lidam com informações financeiras ou pessoais</li>
    </ul>

    <h4>Laravel </h4>
   <p>
      Laravel já vem com muitas proteções baseadas nas recomendações da OWASP, o que torna o desenvolvimento mais seguro. Algumas delas incluem:
   </p>
   <ul>
      <li><strong>Proteção contra CSRF</strong>: Laravel usa tokens CSRF automaticamente em formulários.</li>
      <li><strong>Escapando dados com Blade</strong>: Usar <code>@{{ }}</code> no Blade evita XSS, pois os dados são automaticamente escapados.</li>
      <li><strong>Validação de dados</strong>: O Laravel facilita a validação de entrada de forma robusta com o <code>Request</code> e as classes de validação.</li>
      <li><strong>Autenticação segura</strong>: Laravel tem sistema de autenticação embutido, incluindo hash de senhas e proteção de sessão.</li>
   </ul>
   <p>
      Mesmo com essas proteções, é importante o desenvolvedor conhecer os conceitos do OWASP para não cometer erros de segurança em código personalizado.
   </p>


    <h4>Como usar</h4>
    <p>
        Você pode começar com o <a href="https://owasp.org/www-project-top-ten/" target="_blank">OWASP Top 10</a> e implementar práticas como:
    </p>
    <ul>
        <li>Validação e sanitização de dados de entrada</li>
        <li>Uso de autenticação forte (JWT, OAuth)</li>
        <li>Proteção contra CSRF e XSS</li>
        <li>Utilização de ferramentas como o <strong>OWASP ZAP</strong> para escanear vulnerabilidades</li>
    </ul>
</div>
@endsection
