<?php
// Carregue o arquivo JSON de memes
$memes = json_decode(file_get_contents('memes.json'), true);

// Obtenha um meme aleatório
$memeAleatorio = $memes[array_rand($memes)];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Memes Aleatórios</title>
</head>
<body>
    <h1>Memes Aleatórios</h1>
    <img src="<?php echo $memeAleatorio; ?>" alt="Meme Aleatório">
    <br>
    <a href="index.php">Ver outro meme</a>
</body>
</html>
