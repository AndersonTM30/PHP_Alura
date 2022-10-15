<?php
    // importa a lib  do GuzzleHttp
    use GuzzleHttp\Client;
    // instancia um novo objeto
    $client = new Client();
    // faz aa requisição para a página 
    $response = $client->request(GET, 'https://cursos.alura.com.br/course/php-exceptions-tratamento-erros');
    // retorna o corpo da requisição
    $response->getBody();