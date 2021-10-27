<html>

<head>
    <title>Autoload Example</title>
</head>

<body>
    <div style="margin:20%  ">
        <h3>Ejemplo de Carga de Clases </h3>
        <p>En esta ocasión cargaremos la clase "Clases"</p>
        <form action="ejemplo.php">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
        <?php
        $clase = "Clases";
        function buscaClass($clase)
        {
            require "$clase.php";
        }

        spl_autoload_register('buscaClass');

            $ejemplo1 = new Clases("KermitFanboy","PHP-Object-Instance");

            echo "Hola $ejemplo1";
        ?>
    </div>
</body>

</html>