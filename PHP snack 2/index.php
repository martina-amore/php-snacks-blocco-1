<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    if (strlen($name) > 3 && strstr($mail, '.') && strstr($mail, '@') && is_numeric($age)) {
        echo "Accesso riuscito";
    }
    else {
        echo "Accesso negato";
    }

 ?>
