<?php

    require 'vendor/autoload.php';
    require 'src/Buscador.php';

    use Alura\BuscadorDeCursos\Buscador;
    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler;

    // instancia um novo objeto
    $client = new Client(['verify' => false, 'base_uri' => 'https://www.alura.com.br/']);
    
    $crawler = new Crawler();

    $buscador = new Buscador($client, $crawler);
    $cursos = $buscador->buscar('cursos-online-programacao/php');
    // percorrendo e imprimindo os cursos dentro da página da alura
    foreach($cursos as $curso) {
        echo $curso . PHP_EOL;
    }