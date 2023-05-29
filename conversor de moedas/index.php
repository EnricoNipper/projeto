<?php require_once 'code.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>moedas</title>
        
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        

<div class="container">
    <h1 class="page-title">
      Conversor de moedas
      <?php echo($calculo); ?>
    </h1>
    <img src="https://www.alura.com.br/assets/img/imersoes/dev-2021/logo-imersao-aluraflix.svg" class="page-logo" alt="">
  </div>
  <a href="https://alura.com.br/" target="_blank">
    <img src="https://www.alura.com.br/assets/img/home/alura-logo.svg" alt="" class="alura-logo">
    <img src="https://caelum-online-public.s3.amazonaws.com/assets-imersaodev/Convers%C3%A3o+1.png">
  </a>
  <select id="moeda">
  <option value="USD">Dólar Americano (USD)</option>
  <option value="EUR">Euro (EUR)</option>
  <option value="GBP">Libra Esterlina (GBP)</option>
  <option value="JPY">Iene Japonês (JPY)</option>
  <option value="CAD">Dólar Canadense (CAD)</option>
  <option value="AUD">Dólar Australiano (AUD)</option>
  <!-- adicione outras opções de moeda aqui -->
</select>
<input type="number" id="valor" placeholder="Digite o valor">
<button onclick="converteMoeda()">Converter</button>
<script>
function converteMoeda() {
  const moeda = document.getElementById("moeda").value;
  const valor = document.getElementById("valor").value;

  fetch(`https://openexchangerates.org/api/latest.json?app_id=SUA_APP_ID&base=USD&symbols=${moeda}`)
    .then(response => response.json())
    .then(data => {
      const taxa = data.rates[moeda];
      const resultado = valor * taxa;
      alert(`${valor} USD equivale a ${resultado} ${moeda}`);
    })
    .catch(error => {
      console.error(error);
      alert("Ocorreu um erro ao converter a moeda. Por favor, tente novamente mais tarde.");
    });
}
</script>



 

    