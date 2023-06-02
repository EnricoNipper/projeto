<?php
require_once 'app.php'; ?>


<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>

<body>
    <form action="" method="post">
        primeiro numero :<input name="num1" type="text"><br>
        segundo numero : <input name="num2" type="text"><br>
        <input type="submit" name="operacao" value="+" onclick="calcular()">
        <input type="submit" name="operacao" value="-" onclick="calcular()">
        <input type="submit" name="operacao" value="*" onclick="calcular()">
        <input type="submit" name="operacao" value="/" onclick="calcular()">
        <?PHP echo calcular() ?>
    </form>