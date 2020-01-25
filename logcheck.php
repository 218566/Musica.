<?php

    require_once "connect_mysql.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);  // @ - wyłączenie informacji o błędach

    if($polaczenie->connect_errno!=0) {
        echo "ERROR".$polaczenie->connect_errno." Opis:".$polaczenie->connect_error;
    }
    else {
        $login = $_POST['login'];
        $password = $_POST['password'];

        echo "Działam Panie";

        $polaczenie->close();
    }


    ?>
