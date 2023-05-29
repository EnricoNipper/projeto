
<?php require_once 'sorteio.php'; ?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jogo de Cara ou Coroa</title>
        
        <link rel = "stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        
        <script>
        function jogarCaraOuCoroa() {
            // Faz uma requisição assíncrona para um arquivo PHP
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "sorteio.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    // Exibe o resultado na página
                    document.getElementById('resultado').innerText = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
    </head>
    <body>
        <header>
            <div class="box">
            <a href="'/../../index.php"><img src="'/../../logo_nr_white.png" ></a><img src="'/../../moeda.png"> </h1>
            <nav>
                <ul>
                    <li><a href="index.html">NIPPER</a></li>
                    <li><a href=".html">projetos</a></li>
                    <li><a href="Certificado_Alura.html">estudos</a></li>
        
                </ul>
            </nav>

            </div>
        </header>


        <main> 
        
        <h1>Jogo de Cara ou Coroa</h1>
        <h2>Resultado: <?php echo $resultado; ?></h2>

        </main>
    </body>
</html>
