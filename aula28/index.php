<?php

    $url = $_SERVER['REQUEST_URI'];

    echo match($url){
        '/' => '<h1>Pagina Inicial</h1>',
        '/login' => '<h1>Página de Login</h1>',
        '/cadastro' => '<h1>Pagina de Cadastro</h1>',
        default => '<img src="./img/erro404.svg"/><br>
                    <h1>Página não encontrada!</h1>'
    }
?>