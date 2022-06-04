<?php

    $frutas[0] = 'Morango';
    $frutas[1] = 'Abacaxi';
    $frutas[] = 'Tangerina';
    $frutas[3] = 'Maçã';
    $frutas[] = 'Goiaba';
    $frutas[9] = 'Kiwi';
    $frutas[] = 'Manga';

?>

<ul>
    <li> -- Frutas do array -- </li>
    <br>
    <?php
        $i = 0;
        while($i <= 10){
            if(@$frutas[$i] == NULL){
                $i++;
            } else{
                echo "<li>$frutas[$i]</li>";
                echo '<br>';
                $i++;
            }
        }
    ?>
</ul>