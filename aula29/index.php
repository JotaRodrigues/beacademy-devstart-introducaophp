<?php

    $url = $_SERVER['REQUEST_URI'];

    include 'pages/menu.html';
   
    echo match($url){
        '/' => include 'pages/home.html',
        '/login' => include 'pages/login.php',
        '/cadastro' => include 'pages/cadastro.php',
        default => include 'pages/erro404.html',
    }
?>