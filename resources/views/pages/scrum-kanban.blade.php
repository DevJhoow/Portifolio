@extends('template') {{-- ou o layout principal do seu site --}}
@section('title', 'ScrumKanbam')

@section('content')

   <h2 class="mb-3">📌 Scrum e Kanban</h2>

   <h4>O que são?</h4>
   <p>
      <strong>Scrum</strong> e <strong>Kanban</strong> são métodos ágeis usados para organizar tarefas, melhorar a produtividade e promover trabalho em equipe em projetos de software.
   </p>

   <h4>📍 Scrum</h4>
   <p>
      Scrum é baseado em ciclos curtos de trabalho chamados <strong>sprints</strong> (geralmente de 1 a 4 semanas). Nele, há papéis bem definidos:
   </p>
   <ul>
      <li><strong>Product Owner</strong>: define o que precisa ser feito</li>
      <li><strong>Scrum Master</strong>: facilita o processo</li>
      <li><strong>Time de desenvolvimento</strong>: executa as tarefas</li>
   </ul>
   <p>
      A cada sprint, o time entrega um pedaço funcional do projeto. É muito usado em equipes de desenvolvimento de software.
   </p>

   <h4>📍 Kanban</h4>
   <p>
      Kanban é uma forma visual de gerenciar tarefas. As atividades são organizadas em colunas como:
   </p>
   <ul>
      <li><strong>A Fazer</strong></li>
      <li><strong>Em Andamento</strong></li>
      <li><strong>Concluído</strong></li>
   </ul>
   <p>
      O foco do Kanban é no <strong>fluxo contínuo</strong> de trabalho. Você pode usar em times ou até individualmente, com ferramentas como Trello ou Notion.
   </p>

   <h4>Qual usar?</h4>
   <ul>
      <li><strong>Scrum</strong>: ideal para projetos maiores, com equipes e metas definidas por sprint</li>
      <li><strong>Kanban</strong>: ótimo para acompanhar tarefas em tempo real, sem ciclos fixos</li>
   </ul>

   <h4>Ferramentas recomendadas</h4>
   <ul>
      <li><a href="https://trello.com" target="_blank" rel="noopener noreferrer">Trello</a></li>
      <li><a href="https://notion.so" target="_blank" rel="noopener noreferrer">Notion</a></li>
      <li><a href="https://clickup.com" target="_blank" rel="noopener noreferrer">ClickUp</a></li>
   </ul>


@endsection

