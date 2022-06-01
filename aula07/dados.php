<?php

// array associativo
$dados = [
    'nome' => 'Chiquim',
    'sobrenome' => 'Silva',
    'cidade' => 'Fortaleza',
    'idade' => 32,
    'ano_formacao' => 2001,
    'cor_favorita' => 'Azul'
];

// Ao invés de usar o indice, usa-se o nome associado
echo "Nome: " . $dados['nome'] . "<br>";
echo "Sobrenome: " . $dados['sobrenome'] . "<br>";
echo "Cidade: " . $dados['cidade'] . "<br>";
echo "Idade: " . $dados['idade'] . "<br>";
echo "Ano de Formação: " . $dados['ano_formacao'] . "<br>";
echo "Cor favorita: " . $dados['cor_favorita'] . "<br>";

var_dump($dados);