<?php

    require '../vendor/autoload.php';
    // importa a lib  do GuzzleHttp
    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler;

    // instancia um novo objeto
    $client = new Client(['verify' => false]);
    // faz aa requisição para a página 
    $response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');
    // retorna o corpo da requisição
    $html = $response->getBody();

    // Instaciando o crawler
    $crawler = new Crawler();
    // carregando o html
    $crawler->addHtmlContent($html);
    // filtrando por um seletor
    $cursos = $crawler->filter('span.card-curso__nome');
    // percorrendo e imprimindo os cursos dentro da página da alura
    foreach($cursos as $curso) {
        echo $curso->textContent . PHP_EOL;
    }