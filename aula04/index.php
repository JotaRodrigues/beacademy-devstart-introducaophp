<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 PHP</title>
</head>
<body>
    <form method="post">
        <input name="numero1" placeholder="Primeiro Número">
        <input name="numero2" placeholder="Segundo Número"><br><br>
        <button style="margin-left:30px;" name="soma">Soma</button>
        <button name="subtracao">Subtração</button>
        <button name="divisao">Divisão</button>
        <button name="multiplicacao">Multiplicação</button>
    </form>
</body>
</html>

<?php
    if($_POST){
        if(isset($_POST['soma'])){
            echo $_POST['numero1'] + $_POST['numero2'];
        } elseif(isset($_POST['subtracao'])){
            echo $_POST['numero1'] - $_POST['numero2'];
        } elseif(isset($_POST['divisao'])){
            echo $_POST['numero1'] / $_POST['numero2'];
        } elseif(isset($_POST['multiplicacao'])){
            echo $_POST['numero1'] * $_POST['numero2'];
        }
    }
?>