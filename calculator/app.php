<html>

<head>
    <title>Calculator On-Line - final operation</title>
</head>

<body>
    <?php
    // Dichiaro le variabili
    $texta = (int)$_POST["txta"];
    $textb = (int)$_POST["txtb"];
    $operator = (string)$_POST["operator"];

    // Mostro il contenuto delle variabili
    echo "<h1>Hai inserito: " . $texta . " e " . $textb . ".</h1>";

    // Controllo e faccio l'operazione
    if ($operator == "+") {
        echo "<h1>Il risultato è: " . ($texta + $textb) . "</h1>";
    } elseif ($operator == "-") {
        echo "<h1>Il risultato è: " . ($texta - $textb) . "</h1>";
    } elseif ($operator == "*") {
        echo "<h1>Il risultato è: " . ($texta * $textb) . "</h1>";
    } elseif ($operator == "/") {
        echo "<h1>Il risultato è: " . ($texta / $textb) . "</h1>";
    }

    ?>
</body>

</html>

<?php


function calcular()
{
    if ($_POST['num1'] != null) {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $op = $_POST['operacao'];

        if (!empty($op)) {
            if ($op == '+') {
                $c = $a + $b;
            } else if ($op == '-') {
                $c = $a - $b;
            } else if ($op == '*') {
                $c = $a * $b;
            } else if ($op == '/') {
                $c = $a / $b;
            } else
                echo "realize o calculo ";


            echo "o resultado da operacao: $c ";
        }
    } else echo $_POST;
}
$number = $_GET[0];
