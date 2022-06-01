<?php

$idade = 17;

echo $idade >= 18 ? "de maior" : "de menor";

echo "<br>";

echo isset($nome) ? $nome : 'nome não definido';

echo $nome ?? 'nome não definido';
// Ternario que compara se o nome a esquerda possui definição se não 
// tiver nenhuma informação ele printa o que ta a esquerda.