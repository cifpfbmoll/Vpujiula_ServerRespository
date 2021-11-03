<?php session_start(); ?>
<!DOCTYPE html>
<!-- Cookies - session_start() antes de HTML  -->
<!-- http://idesweb.es/proyecto/proyecto-prac09-php-cookies-sesiones -->
<!--  https://www.w3schools.com/php/php_cookies.asp -->

<head>
    <title>Agenda de Contactos::</title>
    <style>
        .CenterContent{
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
       


        </div>
</body>

</html>