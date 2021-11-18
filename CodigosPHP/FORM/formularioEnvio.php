<html>
    <body>
    <form enctype="multipart/form-data" action="Engine.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />

    <label>Enviar este fichero:</label> 
    <input name="fichero_usuario" type="file" />
    <input type="submit" value="Enviar fichero" />
</form>
        <?php

        ?>
    </body>
</html>