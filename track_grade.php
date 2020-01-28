<?php
    session_start();

    require_once "connect_mysql.php";

    $polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
    if($polaczenie->connect_errno!=0) {
        echo "ERROR".$polaczenie->connect_errno." Opis:".$polaczenie->connect_error;
    }
    else {
        if(isset($_POST['grade_1'])) {
            $ocena = 1;
            echo $ocena;

            $sql = "INSERT INTO critic VALUES ('4','1','HUMBLE.','$ocena')";

            if($polaczenie->query($sql)) {

                header("track.php");
            }
            else {
                header("index.php");
            }

            var_dump($_POST['grade_1']);
        }
        elseif(isset($_POST['grade_2'])) {
            $ocena = 2;
            echo $ocena;

            $sql = "INSERT INTO critic VALUES ('4','1','HUMBLE.','$ocena')";

            if($polaczenie->query($sql)) {

                header("track.php");
            }
            else {
                header("index.php");
            }

            var_dump($_POST['grade_2']);
        }
        elseif(isset($_POST['grade_3'])) {
            $ocena = 3;
            echo $ocena;

            $sql = "INSERT INTO critic VALUES ('4','1','HUMBLE.','$ocena')";

            if($polaczenie->query($sql)) {

                header("track.php");
            }
            else {
                header("index.php");
            }

            var_dump($_POST['grade_3']);
        }
        
        $polaczenie->close();
    }
