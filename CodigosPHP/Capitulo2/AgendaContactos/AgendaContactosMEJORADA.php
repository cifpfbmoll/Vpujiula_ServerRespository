<?php session_start(); ?>
<!DOCTYPE html>
<!-- Cookies - session_start() antes de HTML  -->
<!-- http://idesweb.es/proyecto/proyecto-prac09-php-cookies-sesiones -->
<!--  https://www.w3schools.com/php/php_cookies.asp -->

<head>
    <title>Agenda de Contactos::</title>
    <style>
        .CenterContent {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

    //COOKIES INITIAL TRY:-----------------------------------------------------------------------
    /* $cookie_name = "ValentineCookie";
    setcookie("$cookie_name" , "Test about when a cookie starts", time() + 3600, '/');
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
      } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
      } 
      ---------------------------------------------------------------------------------------------*/
    ?>

    <div class="CenterContent">
        <h3>Agenda de Contactos (NEW):</h3>
        <?php
        if (isset($_GET['lista'])) {
            $lista = $_GET['lista'];
        } else {
            $lista = [];
        }
        //Get request interception
        if (isset($_GET['submit'])) {
            if (trim($_GET['name']) != "" && $_GET['tel'] != "") {
                $lista[$_GET['name']] = $_GET['tel']; //Asignamos el telefono al Nombre , asi podremos llamar a la posición sin depender de *N*
            } else {
                //Control de parámetros : Comprobación | Eliminación
                if (empty($_GET['name'])) {
                    $message = "Name must not be empty ";
                    echo "<script type='text/javascript'>alert('$message');</script>";;
                } else if (isset($lista[$_GET['name']]) !== true) {
                    $message2 = "Name does not exist in Database";
                    echo "<script type='text/javascript'>alert('$message2');</script>";
                } else {
                    echo "El contacto -->" . $_GET['name'] . "Fue Eliminado";
                    unset($lista[$_GET['name']]);
                }
            }
        }
        ?>
         <form>
            <input type="text" name="name" placeholder="Nombre Completo">
            <input type="text" name="tel" placeholder="N-Telefono">
            <input type="submit" name="submit" value="AgregarLST" />
            <?php
            foreach ($lista as $name => $tel) {
                echo '<input type="hidden" name="lista[' . $name . ']" value="' . $tel . '">';
            } ?>
        </form>

        <?php
        //Para acabar Imprimiremos la lista de contactos recorriendo el array
        echo "<ul>";
            foreach ($lista as $name => $tel) {
            echo "<li ><p>$name :___: $tel</p></li>";
            }
        echo '</ul>';
        ?>



    </div>
</body>

</html>