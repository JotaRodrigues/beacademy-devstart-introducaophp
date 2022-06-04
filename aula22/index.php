<?php

    $bandas = [
        'The Beatles',
        "Guns N' Roses"
    ];

    $theBeatles = [
        "let it Be",
        "Hey Jude",
        "Blackbird",
        "Yesterday"
    ];

    $gunsNRoses = [
        "Sweet Child O' Mine",
        "Don't Cry",
        "Paradise City"
    ];

    echo "<form>";

    foreach($bandas as $cadaBanda){
        echo "<ul>{$cadaBanda}</ul>";
        if($cadaBanda == 'The Beatles'){
            foreach($theBeatles as $cadaMusica){
            echo "<li>{$cadaMusica}</li>";
            }
        } else{
            foreach($gunsNRoses as $cadaMusica){
                echo "<li>{$cadaMusica}</li>";
            }
        }
    }

    echo "</form>"
?>