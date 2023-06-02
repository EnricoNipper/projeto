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
