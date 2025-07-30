@extends('template') 
@section('title', 'IA')

@section('content')
  
   <h2 class="mb-3">🤖 Inteligência Artificial (IA)</h2>

   <h4>O que é?</h4>
   <p>
      A <strong>Inteligência Artificial</strong> é uma área da computação que cria sistemas capazes de simular comportamentos humanos, como aprender, raciocinar, entender linguagem natural, reconhecer imagens e tomar decisões.
   </p>

   <h4>Por que aprender?</h4>
   <ul>
      <li>É uma das áreas mais promissoras da tecnologia</li>
      <li>Está presente em praticamente tudo: carros, saúde, segurança, automação, redes sociais e muito mais</li>
      <li>Abre portas para novas oportunidades como Machine Learning, Data Science, automação e desenvolvimento de produtos inteligentes</li>
   </ul>

   <h4>Como usar com PHP e Laravel?</h4>
   <p>
      Embora PHP não seja a principal linguagem de IA, você pode usar IA em projetos Laravel através de APIs como:
   </p>
   <ul>
      <li><strong>OpenAI (ChatGPT)</strong>: gerar texto, respostas automáticas, análise de sentimentos</li>
      <li><strong>Google Vision</strong>: reconhecimento de imagem e OCR</li>
      <li><strong>IBM Watson</strong>: chatbot, análise de linguagem natural</li>
   </ul>
   <p>Com essas APIs, você envia os dados e recebe a inteligência como resposta.</p>

   <h4>Exemplo de uso com OpenAI em Laravel</h4>
   <pre><code class="language-php">// Exemplo simples usando Guzzle para enviar uma pergunta à API da OpenAI
   $client = new \GuzzleHttp\Client();
   $response = $client->post('https://api.openai.com/v1/completions', [
      'headers' => [
         'Authorization' => 'Bearer SEU_TOKEN',
      ],
      'json' => [
         'model' => 'text-davinci-003',
         'prompt' => 'Explique o que é inteligência artificial',
         'max_tokens' => 100
      ]
   ]);

   $data = json_decode($response->getBody(), true);
   echo $data['choices'][0]['text'];</code></pre>

   <h4>Onde estudar IA?</h4>
   <ul>
      <li><a href="https://www.coursera.org/learn/machine-learning" target="_blank" rel="noopener noreferrer">Curso de Machine Learning (Andrew Ng - Coursera)</a></li>
      <li><a href="https://developers.google.com/machine-learning/crash-course" target="_blank" rel="noopener noreferrer">Google Machine Learning Crash Course</a></li>
      <li><a href="https://openai.com/blog" target="_blank" rel="noopener noreferrer">Blog da OpenAI</a></li>
      <li><a href="https://huggingface.co/" target="_blank" rel="noopener noreferrer">Hugging Face (Modelos de IA)</a></li>
   </ul>

   <h4>Dica</h4>
   <p>
      Mesmo não sendo especialista em IA, você pode integrar soluções inteligentes nos seus sistemas Laravel usando APIs prontas. Isso já é suficiente para se destacar!
   </p>

@endsection

