<?php

    session_start();
    require_once "connect_mysql.php";

    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);  // @ - wyłączenie informacji o błędach

    if($polaczenie->connect_errno!=0) {
        echo "ERROR".$polaczenie->connect_errno." Opis:".$polaczenie->connect_error;
    }
    else {
        $login = $_POST['login'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";

        if($request = $polaczenie->query($sql)) {

            $ilu_userow = $request->num_rows;
            if($ilu_userow>0) {
                $wiersz = $request->fetch_assoc();
                $_SESSION['user'] = $wiersz['login'];

                unset($_SESSION['wrong_pass']);
                $request->free();

                header('Location: track.php');
            }
            else {
                $_SESSION['wrong_pass'] = 'błędny login lub hasło';
                header('Location: log.php');
            }
        }

        $polaczenie->close();
    }


    ?>
