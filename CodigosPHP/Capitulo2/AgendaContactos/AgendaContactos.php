<!-- Mirar https://blog.aulaformativa.com/capturar-informacion-de-un-formulario-con-php/ 
https://www.aprenderaprogramar.com/index.php?option=com_content&view=article&id=577:get-php-recuperar-datos-de-formularios-html-pedir-datos-ejemplos-y-ejercicios-resueltos-cu00833b&catid=70&Itemid=193*/
https://developer.mozilla.org/es/docs/Web/HTML/Element/input/hidden 
https://es.stackoverflow.com/questions/279718/dar-nombre-a-las-claves-keys-de-un-array?rq=1-->
<!DOCTYPE html>
<html>

<head>
    <title>Valentín Pujiula Torres </title>
</head>


<body>
    <h3>Agenda de Contactos </h3>
    <?php
    //REQUIREMENTS:
    //Si el nombre está vacío, se mostrará una advertencia.
    //Si el nombre que se introdujo no existe en la agenda, y el número de teléfono no está vacío, se añadirá a la agenda.
    //Si el nombre que se introdujo ya existe en la agenda y se indica un número de teléfono, se sustituirá el número de teléfono anterior.
    //Si el nombre que se introdujo ya existe en la agenda y no se indica número de teléfono, se eliminará de la agenda la entrada correspondiente a ese nombre.
    //Control de Creación de Parámetros:
    if (isset($_GET['lista'])) {
        $lista = $_GET['lista'];
    } else {$lista = [];
    }
    //Cojemos Los datos del envio "GET"
    if (isset($_GET['submit'])) {
        //$array["nombre del primero"] = $array[1];
        //unset($array[1]);
        if (trim($_GET['name']) != "" && $_GET['tel'] != "") {
            $lista[$_GET['name']] = $_GET['tel']; //Asignamos el telefono al Nombre , asi podremos llamar a la posición sin depender de *N*
        } else {
            //Control de parámetros : Comprobación | Eliminación
            if (empty($_GET['name'])) {
                echo "El Campo Nombre debe rellenarse ";
            } else if (isset($lista[$_GET['name']]) !== true) {
                echo "No exixte en la Lista Telefónica , Introduzca primero el Valor";
            } else {
                echo "El contacto -->" . $_GET['name'] . "Fue Eliminado";
                unset($lista[$_GET['name']]);
            }
        }
    }
    ?>
    <div style="justify-content: center;" style="margin-left: 30%;">
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
        echo "<ol>";
        foreach ($lista as $name => $tel) {
            echo "<li ><p>$name --> $tel</p></li>";
        }
        echo '</ol>';
        ?>
    </div>
</body>

</html>