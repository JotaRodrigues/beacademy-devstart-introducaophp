<select>
    <option selected> -- Selecione o Ano -- </option>
    <?php
        $ano = 2022; // Para iniciar em 2022 e terminar em 1900 utilizando decremento

        for($ano = 2022; $ano >= 1900; $ano--){
            echo "<option>{$ano}</option>";
        }
    ?>
</select>