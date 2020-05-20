<?php

    require 'vendor/autoload.php';

    //Teste::metodo();
    //exit();

    use Alura\BuscadorDeCursos\Buscador;
    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler;

    $client = new Client(['base_uri' => 'https://www.alura.com.br/']);

    $crawler = new Crawler();

    $buscador = new Buscador($client, $crawler);
    $cursos = $buscador->buscar('/cursos-online-programacao/php');

    $i = 1;

    foreach ($cursos as $curso){
        //echo $curso->textContent . PHP_EOL;
        //echo $i++ . PHP_EOL;
        //var_dump($curso);
        //echo $curso . PHP_EOL;
        echo exibeMensagem($curso);
    }
