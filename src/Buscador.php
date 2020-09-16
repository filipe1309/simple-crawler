<?php

namespace Alura\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;

class Buscador
{
    private ClientInterface $httpClient;
    private $crawler;

    public function __construct(ClientInterface $httpClient, $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url): array
    {
        $resposta = $this->httpClient->request('GET', $url);

        $html = $resposta->getBody();
        $this->crawler->addHtmlContent($html);
        
        $elementosCursos = $this->crawler->filter('span.card-curso__nome');
        $cursos = [];
        foreach ($elementosCursos as $elemento) {
            $cursos[] = $elemento->textContent;
        }

        return $cursos;
    }
}
