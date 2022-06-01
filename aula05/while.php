<select>
    <option selected> -- Selecione o Ano -- </option>
    <?php
        $ano = 2022; // Para iniciar em 2022 e terminar em 1900 utilizando decremento

        while($ano >= 1900){
            echo "<option>{$ano}</option>";
            $ano--;
        }
    ?>
</select>