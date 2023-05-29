<?php
function caraOuCoroa()
{
    $resultado = rand(0, 1); // Gera um número aleatório 0 ou 1
    return $resultado == 0 ? 
      '<a> cara <br /></a><img src="cara.png" alt="Cara" width="480" height="480">'
    : '<a> coroa <br /></a><img src="coroa.png" alt="Coroa" width="480" height="480">'; 
    
    
    // Retorna 'cara' se resultado for 0, senão retorna 'coroa'
}

$resultado = caraOuCoroa();
?>