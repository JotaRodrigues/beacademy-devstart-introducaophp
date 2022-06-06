<?php

    $p1 = [
        'nome' => 'Smartphone',
        'preco' => '1000,00',
        'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
        'img' => '<img width="150px" align-itens="center" src="./img/phone.svg">'
    ];
    $p2 = [
        'nome' => 'Notebook',
        'preco' => '4000,00',
        'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
        'img' => '<img width="150px" align-itens="center" src="./img/laptop.svg">'
    ];
    $p3 = [
        'nome' => 'Landing Page',
        'preco' => '1500,00',
        'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
        'img' => '<img width="150px" align-itens="center" src="./img/landing-page.svg">'
    ];

    $produtos = [
        $p1,
        $p2,
        $p3
    ];

    ?>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <div class="container" style="justify-content:center">
        <h1 class="mt-5">Lista de produtos</h1>
        <hr>
        <table class="table table-hover table-striped mt-5">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($produtos as $cadaProduto){
                        echo '<tr>';
                            echo '<td width="15%">' . $cadaProduto['nome'] . '</td>';
                            echo '<td width="10%">' . $cadaProduto['preco'] . '</td>';
                            echo '<td width="60%">' . $cadaProduto['descricao'] . '</td>';
                            echo '<td width="15%">' . $cadaProduto['img'] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>

?>