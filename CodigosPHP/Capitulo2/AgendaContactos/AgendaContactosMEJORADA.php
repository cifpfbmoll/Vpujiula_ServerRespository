<?php session_start();?>
<!DOCTYPE html>
<!-- Cookies - session_start() antes de HTML  -->
<!-- http://idesweb.es/proyecto/proyecto-prac09-php-cookies-sesiones -->
<!--  https://www.w3schools.com/php/php_cookies.asp -->
<head></head>
<body>
    <?php
    $cookie_name = "ValentineCookie";
    setcookie("$cookie_name" , "test", time() + 3600, '/');
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
      } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
      }
    
    echo ini_get("session.session_save_path");
    ?>
</body>
</html>