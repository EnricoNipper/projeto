<?php
require_once 'app.php'; ?>


<!DOCTYPE html>
<html lang="ptbr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>

<body>
    <!--   <form action="" method="post">
        primeiro numero :<input name="num1" type="text"><br>
        segundo numero : <input name="num2" type="text"><br>
        <input type="submit" name="operacao" value="+" onclick="calcular()">
        <input type="submit" name="operacao" value="-" onclick="calcular()">
        <input type="submit" name="operacao" value="*" onclick="calcular()">
        <input type="submit" name="operacao" value="/" onclick="calcular()">
        <?PHP echo calcular() ?>
    </form> 
    <form action="" method="post">
        <div class="calculator">
            <div class="input" id="input"></div>
            <div class="buttons">
                <div class="operators">
                    <input name="operator" type="submit" value="+">
                    <input name="operator" type="submit" value="-">
                    <input name="operator" type="submit" value=&times;>
                    <input name="opera" type="submit" value=&divide;>
                </div>
                <div class="leftPanel">
                    <div class="numbers">
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                    </div>
                    <div class="numbers">
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                    </div>
                    <div class="numbers">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                    </div>
                    <div class="numbers">
                        <div>0</div>
                        <div>.</div>
                        <div id="clear">C</div>
                    </div>
                </div>
                <div class="equal" id="result">=</div>
            </div>
        </div>
    </form>
</body>..>