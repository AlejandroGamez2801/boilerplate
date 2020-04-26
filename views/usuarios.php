<select name="usuarios" id="usuario">
    <?php
        foreach ($usuarios as $usuario) {
            echo "<option value='$usuario->id'>$usuario->nombre_completo</option>";
        }
    ?>
</select>