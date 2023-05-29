<?php
// Inclua a biblioteca do Simple HTML DOM Parser
require 'simple_html_dom.php';

// URL do site com os memes
$url = 'https://br.pinterest.com/samarahellen221/memes/';

// Faça o download do conteúdo da página
$html = new simple_html_dom();
$html->load_file($url);

// Encontre as imagens dos memes na página
$memes = array();
foreach ($html->find('.classe-da-imagem') as $imagem) {
    // Obtenha a URL da imagem
    $urlImagem = $imagem->src;
    
    // Adicione a URL da imagem ao array de memes
    $memes[] = $urlImagem;
}

// Salve os URLs dos memes em um arquivo JSON
file_put_contents('memes.json', json_encode($memes));
?>
