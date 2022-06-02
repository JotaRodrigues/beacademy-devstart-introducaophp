<?php

$url = $_SERVER['REQUEST_URI'];

if ($url === '/'){
    echo '<h1>Pagina de Login</h1>';
} elseif($url === '/inicial'){
    echo '<h1>Pagina inicial</h1>';
} elseif($url === '/cadastro'){
    echo '<h1>Pagina de cadastro</h1>';
} else {
    echo '<h1>404 Page not found!</h1>';
}

?>
