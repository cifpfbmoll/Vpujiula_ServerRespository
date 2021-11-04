<?php session_start(); ?>
<!DOCTYPE html>
<!-- Cookies - session_start() antes de HTML  -->
<!-- http://idesweb.es/proyecto/proyecto-prac09-php-cookies-sesiones -->
<!--  https://www.w3schools.com/php/php_cookies.asp -->

<head>
    <title>Agenda de Contactos::</title>
    <style>
        body{background-color: whitesmoke;}
        .CenterContent {
            text-align: center;
            background-color: white;
            margin: 10%;
            
        }
        dt dd {
            color: grey;
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
        $cookie_name = "";
        $cookieValue = "";
        $Pepe = 123;
        //Get request interception
        if (isset($_GET['submit'])) {
            if (trim($_GET['name']) != "" && $_GET['tel'] != "") {
                $cookie_name = $_GET['name'];
                $cookieValue = $_GET['tel'];
                setcookie("$cookie_name" , "$cookieValue", time() + 3600, '/');
            };
                //Control de parámetros : Comprobación | Eliminación
                if ($_COOKIE["$cookie_name"] === "") {
                    $message = "Name must not be empty ";
                    echo "<script type='text/javascript'>alert('$message');</script>";;
                } else if ($_COOKIE["$cookie_name"] === false) {
                    $message2 = "Name does not exist in Database";
                    echo "<script type='text/javascript'>alert('$message2');</script>";
                } else {
                    $message3 =  "El contacto --" . $_COOKIE[$cookie_name] . "Fue Eliminado";
                    echo "<script type='text/javascript'>alert('$message3');</script>";
                    unset($_COOKIE["$cookie_name"]);
                    //setcookie("$_COOKIE[$cookie_name]", null, time() -2, '/'); 
                }
            }
        ?>
         <form>
            <input type="text" name="name" placeholder="Nombre Completo">
            <input type="text" name="tel" placeholder="N-Telefono">
            <input type="submit" name="submit" value="AgregarLST" />
            <?php
            foreach ($_COOKIE as $cookie_name => $cookieValue) {
                echo '<input type="hidden" name="lista[' . $cookie_name . ']" value="' . $cookieValue . '">';
            } ?>
        </form>

        <?php
        //Para acabar Imprimiremos la lista de contactos recorriendo el array
        echo "<dl>";
            foreach ($_COOKIE as $cookie_name => $cookieValue) {
            echo "<dt><b>$cookie_name</b></dt><br><dd>$cookieValue</dd>";
            }
        echo '</dl>';
        ?>



    </div>
</body>

</html>