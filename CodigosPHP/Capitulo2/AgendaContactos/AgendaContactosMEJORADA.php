<?php session_start();?>
<!DOCTYPE html>
<!-- Cookies - session_start() antes de HTML  -->
<!-- http://idesweb.es/proyecto/proyecto-prac09-php-cookies-sesiones -->
<!--  https://www.w3schools.com/php/php_cookies.asp -->
<head></head>
<body>
    <?php
    echo ini_get("session.session_save_path");
    ?>
</body>
</html>