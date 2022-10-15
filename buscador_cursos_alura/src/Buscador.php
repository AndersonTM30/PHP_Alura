<?php
    namespace Alura\BuscadorDeCursos;

    use GuzzleHttp\ClientInterface;
    use Symfony\Component\DomCrawler\Crawler;

    class Buscador {
        private $httpClient;

        private $crawler;

        public function __construct(ClientInterface $httpClient, Crawler $crawler)
        {
            $this->httpClient = $httpClient;
            $this->crawler = $crawler;
        }

        public function buscar(string $url): array {
            // faz a requisição para a página 
            $response = $this->httpClient->request('GEt', $url);
            // retorna o corpo da requisição
            $html = $response->getBody();
            // carregando o html
            $this->crawler->addHtmlContent($html);
            // filtrando por um seletor
            $elementosCursos = $this->crawler->filter('span.card-curso__nome');
            // inicializa o array par armazenar os dados
            $cursos = [];

            // percorrer os elementos da página e filtra os curos
            foreach($elementosCursos as $elemento) {
                // adiciona os cursos no array
                $cursos[] = $elemento->textContent;
            }
            // retorna os cursos
            return $cursos;

        }
    }