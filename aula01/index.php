<!--Resolução do problema proposto na aula 01-->

<form action="" method="post">
    <input name="number1" placeholder="Numero 1">
    <input name="number2" placeholder="Numero 2">
    <br><br>
    
    <button name="soma">Somar</button>
    <button name="subtracao">Subtrair</button>
    <button name="multiplicacao">Multiplicar</button>
    <button name="divisao">Dividir</button>
</form>

<?php
    if($_POST){
        if (isset($_POST['soma'])){
            echo "Resultado = " .$_POST['number1'] + $_POST['number2'];
        }
        if (isset($_POST['subtracao'])){
            echo "Resultado = " .$_POST['number1'] - $_POST['number2'];
        }
        if (isset($_POST['multiplicacao'])){
            echo "Resultado = " .$_POST['number1'] * $_POST['number2'];
        }
        if (isset($_POST['divisao'])){
            echo "Resultado = " .$_POST['number1'] / $_POST['number2'];
        }
    }
?>