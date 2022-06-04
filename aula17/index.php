<select>
    <option selected> -- Dia -- </option>
    <?php 
        $dia = 1;
        while($dia <= 31){
            echo "<option>{$dia}</option>";
            $dia++;
        }
    ?>
</select>
<select>
    <option selected> -- Mes -- </option>
    <?php
        $mes = 1;
        while($mes <= 12){
            echo "<option>{$mes}</option>";
            $mes++;
        }
    ?>
</select>
<select>
    <option selected> -- Ano -- </option>
    <?php
        $ano = 2022;
        while($ano >= 1922){
            echo "<option>{$ano}</option>";
            $ano--;
        }
    ?>
</select>