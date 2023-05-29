<?php
function real(){
$ValorEmDolar = 20;
$CotacaoDoReal = 4.99;
$ValorEmReal = $ValorEmDolar * $CotacaoDoReal ;
$ValorEmReal = number_format($ValorEmReal,2, '.', '');
echo $ValorEmReal;
}
$calculo = real();